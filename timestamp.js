function startTime()
{
	var date=new Date();
	t="am";
	h=date.getHours();
	h=hour(h);
	m=date.getMinutes();
	m=minutes(m);
	s=date.getSeconds();
	s=seconds(s);
	document.getElementById("txt").innerHTML=h+":"+m+":"+s+" "+t;
	setTimeout(startTime,500);
}
function minutes(m)
{
	if(m<10)
		m='0'+m;
	return m;
}
function seconds(s)
{
	if(s<10)
		s='0'+s;
	return s;
}
function hour(h)
{
	if(h>12)
	{
		h=h-12;
		t="pm"
	}
	if(h<10)
		h ='0'+h;
	return h;
}