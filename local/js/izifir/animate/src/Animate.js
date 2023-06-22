export class Animate
{
	constructor(params = {})
	{
		this.duration = params.duration || 100; // Продолжительность анимации
		this.step = params.step || function(progress) {};
		this.complete = params.complete || function () {};

		this.requestId = null;
	}

	run()
	{
		this.start = performance.now();
		this.requestId = requestAnimationFrame(this.animate.bind(this));
	}

	animate(time)
	{
		let timeFraction = (time - this.start) / this.duration;
		if (timeFraction < 0) {
			timeFraction = 0;
		}

		if (timeFraction > 1) {
			timeFraction = 1;
		}

		let progress = this.timing(timeFraction);
		this.step(progress);

		if (timeFraction < 1) {
			this.requestId = requestAnimationFrame(this.animate.bind(this));
		} else {
			this.complete();
		}
	}

	timing(timeFraction)
	{
		return timeFraction;
	}
}