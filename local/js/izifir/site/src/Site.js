import {detectWebpSupport} from 'izifir.core';
import './style/style.scss';

export class Site
{
  constructor()
  {
    this.init().then(() => {
      console.log('start');
    });
  }

  async init()
  {
    if (await detectWebpSupport()) {
      document.querySelector('html').classList.add('webp');
    }
  }
}
