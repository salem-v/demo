import './style/style.scss'

export class FooterMobile
{
	constructor(options = {name: 'FooterMobile'})
	{
		this.name = options.name;
	}

	setName(name)
	{
		if (Type.isString(name))
		{
			this.name = name;
		}
	}

	getName()
	{
		return this.name;
	}
}