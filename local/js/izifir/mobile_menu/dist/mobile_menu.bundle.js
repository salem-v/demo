this.BX=this.BX||{},function(t,e){"use strict";t.MobileMenu=class{constructor(){this.buttons=document.querySelectorAll("[data-toggle-mobile-menu]"),this.nav=document.querySelector("[data-mobile-nav]"),this.next=document.querySelectorAll("[data-mn-next]"),this.back=document.querySelector("[data-mn-back]"),this.close=document.querySelector("[data-mn-close]"),this.buttons.length&&[].forEach.call(this.buttons,(t=>{t.removeEventListener("click",this.buttonClickHandler),t.addEventListener("click",this.buttonClickHandler)})),this.next.length&&[].forEach.call(this.next,(t=>{t.removeEventListener("click",this.nextClickHandler.bind(this)),t.addEventListener("click",this.nextClickHandler.bind(this))})),this.back&&this.back.addEventListener("click",this.backClickHandler.bind(this)),this.close&&this.close.addEventListener("click",(()=>{console.log(this.nav),this.nav.classList.remove("is-open")}))}backClickHandler(t){t.preventDefault();const e=this.back.dataset.backId;if(e){const t=document.querySelector("[data-mn-menu].is-active"),s=document.querySelector(`[data-mn-menu="${e}"]`);t&&s&&(this.back.dataset.backId=s.dataset.mnParent,s.dataset.mnMenu>0?this.back.classList.remove("is-hidden"):this.back.classList.add("is-hidden"),this.closeMenu(t,!0),this.showMenu(s,!0))}}buttonClickHandler(t=new Event("click")){t.preventDefault();const e=(t.target||t.currentTarget).closest("[data-toggle-mobile-menu]"),s=document.querySelector('[data-mobile-nav="'+e.dataset.toggleMobileMenu+'"]');s.classList.contains("is-open")?s.classList.remove("is-open"):s.classList.add("is-open")}nextClickHandler(t){t.preventDefault();const e=t.target,s=document.querySelector(`[data-mn-menu="${e.dataset.mnNext}"]`),n=document.querySelector("[data-mn-menu].is-active");n&&s&&(this.back.dataset.backId=s.dataset.mnParent,s.dataset.mnMenu>0?this.back.classList.remove("is-hidden"):this.back.classList.add("is-hidden"),this.closeMenu(n),this.showMenu(s))}showMenu(t,s=!1){t.classList.add("is-active"),t.style.transform="translateX(100%)",s&&(t.style.transform="translateX(-100%)");new e.Animate({duration:300,step:function(e){let n=100*(1-e);s&&(n="-"+n),t.style.transform="translateX("+n+"%)"}}).run()}closeMenu(t,s=!1){t.style.transform="translateX(0)";new e.Animate({duration:300,step:function(e){let n=100*e;s||(n="-"+n),t.style.transform="translateX("+n+"%)"},complete(){t.classList.remove("is-active")}}).run()}}}(this.BX.Izifir=this.BX.Izifir||{},BX.Izifir);
//# sourceMappingURL=mobile_menu.bundle.js.map