import './style/style.scss';
import 'ui.core';
import {Animate} from 'izifir.animate';

export class Slider
{
  constructor (selector, params = {})
  {
    this.selector = selector;
    this.startSlide = params.startSlide || 0; // первый слайд
    this.showArrows = params.showArrows || true; // Показывать стрелки
    this.showDots = params.showDots || true; //Показывать точки
    this.autoplay = params.autoplay || false; // Автопрокрутка


    this.currentSlide = this.startSlide;
    this.animated = false;
    this.timer = null;
    this.root = document.querySelector(this.selector);

    if (this.root) {
      this.init();
    }

    /*const previous = document.querySelector('[data-control="prev"]');
    const next = document.querySelector('[data-control="next"]');
    const slides = document.querySelector('[data-slide]');
    let current = 0;

    // Code that moves to the next slide
    next.addEventListener("click", function () {
      slides[current].removeAttribute("active");
      current ++;
      if (current === slides.length)
        current = 0;
      slides[current].setAttribute("active");
    });

    // Code that moves to the previous slide
    previous.addEventListener("click", function () {
      slides[current].removeAttribute("active");
      current --;
      if (current < 0)
        current = (slides.length - 1);
      slides[current].setAttribute("active");
    });*/
  }

  init ()
  {
    this.slides = this.root.querySelectorAll('[data-slide]');

    if (this.slides.length) {
      this.initSlides();
      this.initArrows();
      this.initTimer();
      this.initDots();
    }
  }

  initSlides ()
  {
    [].forEach.call(this.slides, (slide, key) => {
      if (key === this.startSlide) {
        slide.dataset.slide = 'active';
        slide.style.zIndex = '10';
        this.currentSlide = key;
      }

      slide.dataset.slideIndex = key;
    });
  }

  initArrows()
  {
    if (this.showArrows && this.slides.length > 1) {
      const prev = document.createElement('button');
      prev.dataset.arrow = 'prev';
      prev.innerHTML = 'prev';
      prev.addEventListener('click', this.goPrev.bind(this));

      const next = document.createElement('button');
      next.dataset.arrow = 'next';
      next.innerHTML = "<p>next</p>";
      next.addEventListener('click', this.goNext.bind(this));

      this.root.appendChild(prev);
      this.root.appendChild(next);
    }
  }

  initDots()
  {
    if (this.showDots && this.slides.length > 1) {
      for (let i = 0; i < this.slides.length; i++) {
        const dot = document.createElement('div');
        dot.innerHTML = "<div data-dot-style></div>";
        dot.dataset.dot = '';

        dot.addEventListener('click', () => {
          this.goTo(i);
        });

        this.root.appendChild(dot);
      }
    }
  }

  run()
  {
    this.start = performance.now(); //start animation
    this.requestId = requestAnimationFrame(this.goTo.bind(this));
  }

  goTo(index, direct = '')
  {
    const nextSlide = this.root.querySelector('[data-slide-index="' + index + '"]');
    const currentSlide = this.root.querySelector('[data-slide-index="' + this.currentSlide + '"]');
    if (nextSlide && !this.animated) {
      if (!direct) {
        direct = (index > this.currentSlide) ? 'left' : 'right';
      }

      this.animated = true;
      currentSlide.style.zIndex = '10';
      nextSlide.style.zIndex = '9';
      nextSlide.dataset.slide = 'active';

      /*const easing = new BX.easing({
        duration: 700,
        start: { right: 0 },
        finish: { right: 100 },
        step: state => {
          if (direct === 'left')
            currentSlide.style.clipPath = 'inset(0% ' + state.right + '% 0% 0%)';
          else
            currentSlide.style.clipPath = 'inset(0% 0% 0% ' + state.right + '%)';
        },
        complete: () => {
          currentSlide.dataset.slide = '';
          currentSlide.style.zIndex = '1';
          currentSlide.style.clipPath = 'inset(0% 0% 0% 0%)';
          nextSlide.style.zIndex = '10';
          this.currentSlide = index;
          this.initTimer();
          this.animated = false;
        }
      });
      easing.animate();*/

      const easing = new Animate({
        duration: 500,
        step: function (progress) {
          let step = progress * 100;
          if (direct === 'left') {
            currentSlide.style.clipPath = 'inset(0% ' + step + '% 0% 0%)';
          } else {
            currentSlide.style.clipPath = 'inset(0% 0% 0% ' + step + '%)';
          }
        },
        complete: () => {
          currentSlide.dataset.slide = '';
          currentSlide.style.zIndex = '1';
          currentSlide.style.clipPath = 'inset(0% 0% 0% 0%)';
          nextSlide.style.zIndex = '10';
          this.currentSlide = index;
          this.initTimer();
          this.animated = false;
        }
      });
      easing.run();
    }
  }

  initTimer() {
    if (this.autoplay) {
      if (this.timer) {
        clearTimeout(this.timer);
      }

      this.timer = setTimeout(this.goNext.bind(this), 5000);
    }
  }

  goNext() {
    let next = this.currentSlide + 1;
    if (next >= this.slides.length) {
      next = 0;
    }

    this.goTo(next, 'left');
  }

  goPrev() {
    let prev = this.currentSlide - 1;

    console.log('slide id = ' + this.currentSlide);

    if (prev < 0) {
      prev = this.slides.length - 1;
    }
    console.log('prev = ' + prev)

    this.goTo(prev, 'right');
  }
}