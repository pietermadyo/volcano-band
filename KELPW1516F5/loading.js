function waitPreloadPage() 
{ //DOM
	if (document.getElementById)
	{
		document.getElementById('prepage').style.visibility='hidden';
	}
	else
	{
		if (document.layers)
		{ //NS4
			document.prepage.visibility = 'hidden';
		}
		else 
		{ //IE4
			document.all.prepage.style.visibility = 'hidden';
		}
	}
}