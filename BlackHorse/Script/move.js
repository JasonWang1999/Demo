// JavaScript Document
function getStyle(obj,name){
	if(obj.currentstyle){
		return obj.currentstyle[name];
	}
	else{
		return getComputedStyle(obj,false)[name];
	}
};
	
function move(obj,attr,iTarget){
	clearInterval(obj.timer);
	obj.timer=setInterval(function(){
		var cur=0
		if(attr=='opacity')
			{
				cur=Math.round(parseFloat(getStyle(obj,attr))*100)
			}
		else{
			cur=parseInt(getStyle(obj,attr))
		}
		var speed=(iTarget-cur)/10;
		if(speed>0)
			{
				speed=Math.ceil(speed);
			}
		else{
			speed=Math.floor(speed);
		}
		if(iTarget==cur)
			{
				clearInterval(obj.timer)
			}
		else{
			if(attr=='opacity')
				{
					obj.style.filter='alpha(opacity'+(cur+speed)+')'
					obj.style.opacity=(cur+speed)/100;
				}
			else{
			obj.style[attr]=cur+speed+"px"
			}
		}
	},30)
}