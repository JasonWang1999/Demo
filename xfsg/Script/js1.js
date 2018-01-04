// JavaScript Document

window.onload=function(){
var oDiv=document.getElementById('middle');
var aLi=oDiv.getElementsByTagName('li');
var aDiv=oDiv.getElementsByTagName('div');
aLi[0].style.background='#03ae23'
aDiv[0].style.display='block';
for( var i=0;i<aLi.length;i++)
{
	aLi[i].index=i
	aLi[i].onmouseover=function()
	{
		for(var i=0;i<aLi.length;i++)
		{
		aLi[i].style.background='';
		aDiv[i].style.display='none';
		aLi[i].style.color='black';
		}
		this.style.background='#03ae23'
		aDiv[this.index].style.display='block';
		this.style.color='white';
	}
}
	
}