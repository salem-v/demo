this.BX = this.BX || {};
(function (exports,main_core,izifir_animate) {
  'use strict';

  class Options {
    constructor(options = {}) {
      this.itemSelector = options.itemSelector || '[data-accordion-item]';
      this.itemHeaderSelector = options.itemHeaderSelector || '[data-accordion-header]';
      this.itemBodySelector = options.itemBodySelector || '[data-accordion-body]';
      this.itemWrapperSelector = options.itemBodySelector || '[data-accordion-wrapper]';
      this.duration = options.duration || 300;
    }
  }

  class Item {
    constructor(element, index, options) {
      this.index = index;
      this.el = element;
      this.options = options;
      this.body = this.el.querySelector(options.itemBodySelector);
      this.header = this.el.querySelector(options.itemHeaderSelector);
      this.isOpen = false;
      this.el.dataset.index = index;
      if (this.body) {
        this.prepareBody();
      }
    }
    prepareBody() {
      const cloneBody = this.body.cloneNode(true);
      this.wrapper = this.getWrapper();
      this.wrapper.appendChild(cloneBody);
      this.body.replaceWith(this.wrapper);
      this.body = cloneBody;
    }
    getWrapper() {
      const selector = this.options.itemWrapperSelector;
      const wrapper = document.createElement('div');
      if (selector.substring(0, 1) === '.') {
        wrapper.classList.add(selector.substring(1, selector.length));
      } else if (selector.substring(0, 1) === '#') {
        wrapper.id = selector.substring(1, selector.length) + '_' + this.index;
      } else if (selector.substring(0, 1) === '[') {
        wrapper.setAttribute(selector.substring(1, selector.length - 1), '');
      } else {
        console.error(`${selector} is not valid "class", "id" or attribute name`);
      }
      return wrapper;
    }
    openBody() {
      return new Promise(resolve => {
        const duration = this.options.duration || 300;
        const height = this.body.offsetHeight;
        const animation = new izifir_animate.Animate({
          duration,
          step: progress => {
            const step = progress * height;
            this.wrapper.style.height = `${step}px`;
          },
          complete: () => {
            this.isOpen = true;
            this.setActive();
            resolve();
          }
        });
        animation.run();
      });
    }
    closeBody() {
      return new Promise(resolve => {
        const duration = this.options.duration || 300;
        const height = this.body.offsetHeight;
        const animation = new izifir_animate.Animate({
          duration,
          step: progress => {
            const step = (1 - progress) * height;
            this.wrapper.style.height = `${step}px`;
          },
          complete: () => {
            this.isOpen = false;
            this.removeActive();
            resolve();
          }
        });
        animation.run();
      });
    }
    setActive() {
      const headerSelector = this.options.itemHeaderSelector;
      const bodySelector = this.options.itemBodySelector;
      if (headerSelector.substring(0, 1) === '.' || headerSelector.substring(0, 1) === '#') {
        this.header.classList.add('is-open');
      } else if (headerSelector.substring(0, 1) === '[') {
        const attr = headerSelector.substring(1, headerSelector.length - 1);
        this.header.setAttribute(attr, 'is-open');
      }
      if (bodySelector.substring(0, 1) === '.' || bodySelector.substring(0, 1) === '#') {
        this.body.classList.add('is-open');
      } else if (bodySelector.substring(0, 1) === '[') {
        const attr = bodySelector.substring(1, bodySelector.length - 1);
        this.body.setAttribute(attr, 'is-open');
      }
    }
    removeActive() {
      const headerSelector = this.options.itemHeaderSelector;
      const bodySelector = this.options.itemBodySelector;
      if (headerSelector.substring(0, 1) === '.' || headerSelector.substring(0, 1) === '#') {
        this.header.classList.remove('is-open');
      } else if (headerSelector.substring(0, 1) === '[') {
        const attr = headerSelector.substring(1, headerSelector.length - 1);
        this.header.setAttribute(attr, '');
      }
      if (bodySelector.substring(0, 1) === '.' || bodySelector.substring(0, 1) === '#') {
        this.body.classList.remove('is-open');
      } else if (bodySelector.substring(0, 1) === '[') {
        const attr = bodySelector.substring(1, bodySelector.length - 1);
        this.body.setAttribute(attr, '');
      }
    }
  }

  class Accordion {
    static init(selector, options = {}) {
      let result = null;
      if (main_core.Type.isArray(selector)) {
        result = [];
        selector.forEach(item => {
          result.push(new this(item, options));
        });
      } else {
        result = new this(selector, options);
      }
      return result;
    }
    constructor(selector, options = {}) {
      if (main_core.Type.isString(selector)) {
        this.root = document.querySelector(selector);
      } else if (main_core.Type.isElementNode(selector)) {
        this.root = selector;
      }
      this.options = new Options(options);
      this.isAnimate = false;
      if (this.root) {
        this.initItems();
      }
    }
    initItems() {
      this.items = [];
      const items = this.root.querySelectorAll(this.options.itemSelector);
      if (items.length) {
        [].forEach.call(items, (item, index) => {
          const accordionItem = new Item(item, index, this.options);
          this.items[index] = accordionItem;
          accordionItem.header.addEventListener('click', this.clickHandler.bind(this));
        });
      }
    }
    clickHandler(evt) {
      if (this.isAnimate) {
        return false;
      }
      evt.preventDefault();
      const target = evt.target;
      let root = null;
      let item = null;
      this.isAnimate = true;
      if (target) {
        root = target.closest(this.options.itemSelector);
      }
      if (root) {
        const index = root.dataset.index;
        item = this.items[index];
      }
      if (item) {
        const needOpen = !item.isOpen;
        const queue = [];
        this.items.forEach(i => {
          if (i.isOpen) {
            queue.push(i.closeBody({
              duration: this.options.duration
            }));
          }
        });
        if (needOpen) {
          queue.push(item.openBody({
            duration: this.options.duration
          }));
        }
        Promise.all(queue).then(() => {
          this.isAnimate = false;
        });
      }
    }
  }

  exports.Accordion = Accordion;

}((this.BX.Izifir = this.BX.Izifir || {}),BX,BX.Izifir));
