import {Type} from 'main.core';
import {Options} from './components/Options';
import {Item} from "./components/Item";
import './style/style.scss';

export class Accordion
{
  static init (selector, options = {})
  {
    let result = null;

    if (Type.isArray(selector)) {
      result = [];
      selector.forEach((item) => {
        result.push(new this(item, options));
      });
    } else {
      result = new this(selector, options)
    }

    return result;
  }

  constructor (selector, options = {})
  {
    if (Type.isString(selector)) {
      this.root = document.querySelector(selector);
    } else if (Type.isElementNode(selector)) {
      this.root = selector;
    }
    this.options = new Options(options);
    this.isAnimate = false;

    if (this.root) {
      this.initItems();
    }
  }

  initItems()
  {
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

  clickHandler(evt)
  {
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

      this.items.forEach((i) => {
        if (i.isOpen) {
          queue.push(i.closeBody({duration: this.options.duration}));
        }
      })

      if (needOpen) {
        queue.push(item.openBody({duration: this.options.duration}));
      }

      Promise.all(queue).then(() => { this.isAnimate = false; })
    }
  }
}