import {Animate} from "izifir.animate";

export class Item
{
  constructor (element, index, options)
  {
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

  prepareBody()
  {
    const cloneBody = this.body.cloneNode(true);
    this.wrapper = this.getWrapper();
    this.wrapper.appendChild(cloneBody);
    this.body.replaceWith(this.wrapper);
    this.body = cloneBody;
  }

  getWrapper()
  {
    const selector = this.options.itemWrapperSelector;
    const wrapper = document.createElement('div');

    if (selector.substring(0, 1) === '.') {
      wrapper.classList.add(selector.substring(1, selector.length));
    } else if (selector.substring(0, 1) === '#') {
      wrapper.id = selector.substring(1, selector.length) + '_' + this.index;
    } else if (selector.substring(0, 1) === '[') {
      wrapper.setAttribute(selector.substring(1, selector.length - 1), '');
    } else {
      console.error(`${selector} is not valid "class", "id" or attribute name`)
    }

    return wrapper;
  }

  openBody()
  {
    return new Promise((resolve) => {
      const duration = this.options.duration || 300;
      const height = this.body.offsetHeight;
      const animation = new Animate({
        duration,
        step: (progress) => {
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

  closeBody()
  {
    return new Promise(resolve => {
      const duration = this.options.duration || 300;
      const height = this.body.offsetHeight;
      const animation = new Animate({
        duration,
        step: (progress) => {
          const step = (1 - progress) * height;
          this.wrapper.style.height = `${step}px`;
        },
        complete: () => {
          this.isOpen = false;
          this.removeActive()
          resolve();
        }
      });
      animation.run();
    })
  }

  setActive()
  {
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

  removeActive()
  {
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