export class Options
{
  constructor (options = {})
  {
    this.itemSelector = options.itemSelector || '[data-accordion-item]';
    this.itemHeaderSelector = options.itemHeaderSelector || '[data-accordion-header]';
    this.itemBodySelector = options.itemBodySelector || '[data-accordion-body]';
    this.itemWrapperSelector = options.itemBodySelector || '[data-accordion-wrapper]';

    this.duration = options.duration || 300;
  }
}