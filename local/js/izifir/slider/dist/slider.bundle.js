this.BX=this.BX||{},function(t,i,e){"use strict";t.Slider=class{constructor(t,i={}){this.selector=t,this.startSlide=i.startSlide||0,this.showArrows=i.showArrows||!0,this.showDots=i.showDots||!0,this.autoplay=i.autoplay||!1,this.currentSlide=this.startSlide,this.animated=!1,this.timer=null,this.root=document.querySelector(this.selector),this.root&&this.init()}init(){this.slides=this.root.querySelectorAll("[data-slide]"),this.slides.length&&(this.initSlides(),this.initArrows(),this.initTimer(),this.initDots())}initSlides(){[].forEach.call(this.slides,((t,i)=>{i===this.startSlide&&(t.dataset.slide="active",t.style.zIndex="10",this.currentSlide=i),t.dataset.slideIndex=i}))}initArrows(){if(this.showArrows&&this.slides.length>1){const t=document.createElement("button");t.dataset.arrow="prev",t.innerHTML="prev",t.addEventListener("click",this.goPrev.bind(this));const i=document.createElement("button");i.dataset.arrow="next",i.innerHTML="<p>next</p>",i.addEventListener("click",this.goNext.bind(this)),this.root.appendChild(t),this.root.appendChild(i)}}initDots(){if(this.showDots&&this.slides.length>1)for(let t=0;t<this.slides.length;t++){const i=document.createElement("div");i.innerHTML="<div data-dot-style></div>",i.dataset.dot="",i.addEventListener("click",(()=>{this.goTo(t)})),this.root.appendChild(i)}}run(){this.start=performance.now(),this.requestId=requestAnimationFrame(this.goTo.bind(this))}goTo(t,i=""){const s=this.root.querySelector('[data-slide-index="'+t+'"]'),r=this.root.querySelector('[data-slide-index="'+this.currentSlide+'"]');if(s&&!this.animated){i||(i=t>this.currentSlide?"left":"right"),this.animated=!0,r.style.zIndex="10",s.style.zIndex="9",s.dataset.slide="active";new e.Animate({duration:500,step:function(t){let e=100*t;r.style.clipPath="left"===i?"inset(0% "+e+"% 0% 0%)":"inset(0% 0% 0% "+e+"%)"},complete:()=>{r.dataset.slide="",r.style.zIndex="1",r.style.clipPath="inset(0% 0% 0% 0%)",s.style.zIndex="10",this.currentSlide=t,this.initTimer(),this.animated=!1}}).run()}}initTimer(){this.autoplay&&(this.timer&&clearTimeout(this.timer),this.timer=setTimeout(this.goNext.bind(this),5e3))}goNext(){let t=this.currentSlide+1;t>=this.slides.length&&(t=0),this.goTo(t,"left")}goPrev(){let t=this.currentSlide-1;console.log("slide id = "+this.currentSlide),t<0&&(t=this.slides.length-1),console.log("prev = "+t),this.goTo(t,"right")}}}(this.BX.Izifir=this.BX.Izifir||{},BX,BX.Izifir);
//# sourceMappingURL=slider.bundle.js.map