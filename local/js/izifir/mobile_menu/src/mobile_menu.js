import './style/style.scss';
import {Animate} from "izifir.animate";

export class MobileMenu
{
  constructor ()
  {
    this.buttons = document.querySelectorAll('[data-toggle-mobile-menu]');
    this.nav = document.querySelector('[data-mobile-nav]');
		this.next = document.querySelectorAll('[data-mn-next]');
		this.back = document.querySelector('[data-mn-back]');
		this.close = document.querySelector('[data-mn-close]');

    if (this.buttons.length) {
      [].forEach.call(this.buttons, button => {
        button.removeEventListener('click', this.buttonClickHandler);
        button.addEventListener('click', this.buttonClickHandler);
      });
    }

		if (this.next.length) {
      [].forEach.call(this.next, button => {
        button.removeEventListener('click', this.nextClickHandler.bind(this));
        button.addEventListener('click', this.nextClickHandler.bind(this));
      });
    }

		if (this.back) {
			this.back.addEventListener('click', this.backClickHandler.bind(this));
		}

		if (this.close) {
			this.close.addEventListener('click', () => {
				console.log(this.nav);
				this.nav.classList.remove('is-open');
			});
		}
  }

	backClickHandler(evt)
	{
		evt.preventDefault();
		const id = this.back.dataset.backId;
		if (id) {
			const currentMenu = document.querySelector('[data-mn-menu].is-active');
			const menu = document.querySelector(`[data-mn-menu="${id}"]`);

			if (currentMenu && menu) {
				this.back.dataset.backId = menu.dataset.mnParent;
				if (menu.dataset.mnMenu > 0) {
					this.back.classList.remove('is-hidden');
				} else {
					this.back.classList.add('is-hidden');
				}
				this.closeMenu(currentMenu, true);
				this.showMenu(menu, true);
			}
		}
	}

  buttonClickHandler (evt = new Event('click'))
  {
    evt.preventDefault();
    const el = evt.target || evt.currentTarget;
    const item = el.closest('[data-toggle-mobile-menu]');
    const nav = document.querySelector('[data-mobile-nav="' + item.dataset.toggleMobileMenu + '"]');

    if (nav.classList.contains('is-open')) {
      nav.classList.remove('is-open');
    } else {
      nav.classList.add('is-open');
    }
  }

	nextClickHandler(evt)
	{
		evt.preventDefault();
		const el = evt.target;
		const menu = document.querySelector(`[data-mn-menu="${el.dataset.mnNext}"]`);
		const currentMenu = document.querySelector('[data-mn-menu].is-active');

		if (currentMenu && menu) {
			this.back.dataset.backId = menu.dataset.mnParent;
			if (menu.dataset.mnMenu > 0) {
				this.back.classList.remove('is-hidden');
			} else {
				this.back.classList.add('is-hidden');
			}
			this.closeMenu(currentMenu);
			this.showMenu(menu);
		}
	}

	showMenu(menu, invert = false)
	{
		menu.classList.add('is-active');
		menu.style.transform = 'translateX(100%)';
		if (invert) {
			menu.style.transform = 'translateX(-100%)';
		}
		const anim = new Animate({
			duration: 300,
			step: function (progress) {
				let step = (1 - progress) * 100;
				if (invert) {
					step = '-' + step;
				}
				menu.style.transform = 'translateX(' + step +'%)';
			},
		});
		anim.run();
	}

	closeMenu(menu, invert = false)
	{
		menu.style.transform = 'translateX(0)';
		const anim = new Animate({
			duration: 300,
			step: function (progress) {
				let step = (progress * 100);
				if (!invert) {
					step = '-' + step;
				}
				menu.style.transform = 'translateX(' + step +'%)';
			},
			complete()
			{
				menu.classList.remove('is-active');
			}
		});
		anim.run();
	}

  /*constructor ()
  {
    this.buttons = document.querySelectorAll('[data-toggle-mobile-menu]')
    this.nav = document.querySelector('[data-mobile-nav]')
    this.parentLinks = document.querySelectorAll('[data-mobile-menu-parent-link]')

    document.addEventListener('click', this.bodyClickHandler.bind(this))

    if (this.buttons.length) {
      [].forEach.call(this.buttons, button => {
        button.removeEventListener('click', this.buttonClickHandler)
        button.addEventListener('click', this.buttonClickHandler)
      })
    }

    if (this.parentLinks.length) {
      [].forEach.call(this.parentLinks, link => {
        link.addEventListener('click', this.parentLinkClickHandler.bind(this))
      })
    }

    var openLevel = document.querySelectorAll('.menu_link');

    openLevel.forEach(function (item) {
      item.addEventListener('click', function (e) {
        e.preventDefault();
        var menuId = this.dataset.id,
          menuParentId = this.dataset.parent,
          menuElem = document.querySelector('.mobile-nav__menu[data-id="'+ menuId + '"]'),
          navigateBut = document.querySelectorAll('.navigate_btn'),
          navigateButId = document.querySelector('.navigate_btn[data-parent="'+ menuParentId + '"]');

        if (menuElem.classList.contains('.show')) {
          menuElem.classList.remove('show')
        } else {
          menuElem.classList.add('show')
        }

        navigateBut.forEach(function (item){
          item.addEventListener('click', function (e) {
            e.preventDefault();
            menuElem.classList.remove('show')
          })
        })
      })
    })
  }

  buttonClickHandler(evt = new Event('click')) {
    evt.preventDefault()
    const el = evt.target || evt.currentTarget
    const item = el.closest('[data-toggle-mobile-menu]')
    const nav = document.querySelector('[data-mobile-nav="' + item.dataset.toggleMobileMenu + '"]')

    if (nav.classList.contains('is-open')) {
      nav.classList.remove('is-open')
    } else {
      nav.classList.add('is-open')
    }
  }

  parentLinkClickHandler(evt = new Event('click')) {
    evt.preventDefault()
    const el = evt.target || evt.currentTarget
    let link = null
    let root = null
    let inner = null

    const openMenuList = document.querySelectorAll('[data-mobile-menu-parent-link].is-open')
    if (openMenuList.length) {
      [].forEach.call(openMenuList, openMenu => {
        const root = openMenu.closest('[data-mobile-menu-item]')
        const inner = root.querySelector('[data-mobile-menu-inner]')

        openMenu.classList.remove('is-open')
        inner.classList.remove('is-open')
      })
    }

    if (el) {
      link = el.closest('[data-mobile-menu-parent-link]')
      root = el.closest('[data-mobile-menu-item]')
    }

    if (root) {
      inner = root.querySelector('[data-mobile-menu-inner]')
    }

    if (inner && link) {
      console.log(inner)
      if (inner.classList.contains('is-open')) {
        link.classList.remove('is-open')
        inner.classList.remove('is-open')
      } else {
        link.classList.add('is-open')
        inner.classList.add('is-open')
      }

    }
  }

  bodyClickHandler(evt = new Event('click')) {
    const el = evt.target || evt.currentTarget
    const navs = document.querySelectorAll('[data-mobile-nav]')

    if (el && navs.length) {
      if (!el.closest('[data-toggle-mobile-menu]') && !el.closest('[data-mobile-nav]')) {
        [].forEach.call(navs, nav => {
          nav.classList.remove('is-open')
        })
      }
    }
  }*/
}