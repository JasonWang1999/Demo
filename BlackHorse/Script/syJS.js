window.onload=function(){
	var aDivqg=document.getElementsByClassName('qianggou');
	for(var i=0;i<aDivqg.length;i++)
		{
			aDivqg[i].onmouseover=function(){
				move(this,'opacity',30);
			}
			aDivqg[i].onmouseout=function(){
				move(this,'opacity',100)
			}
		}
	
	var oDivljgm1=document.getElementById('lijigoumai');
	var oDivljgm2=document.getElementById('lijigoumai1');
	
	oDivljgm1.onmouseover=oDivljgm2.onmouseover=function(){
		move(oDivljgm1,'opacity',50);
		move(oDivljgm2,'opacity',100);
	}
	oDivljgm1.onmouseout=oDivljgm2.onmouseout=function(){
		move(oDivljgm2,'opacity',0);
		move(oDivljgm1,'opacity',100);
	}
		var oImg1=document.getElementById('Img1');
	var oImg2=document.getElementById('Img2');
	var oImg3=document.getElementById('Img3');
	var timer=null;
	
	oImg1.onmouseover=function(){
		oImg1.src='images/W-WeChat.png';
		oImg3.style.display='block';
	}
	oImg2.onmouseover=function(){
		oImg2.src='images/W-Sina.png';
	}
	oImg1.onmouseout=function(){
		oImg1.src='images/B-WeChat.png';
		timer=setTimeout(function(){
			oImg3.style.display='none';
		},500)
	}
	oImg2.onmouseout=function(){
		oImg2.src='images/B-Sina.png';
	}
	oImg3.onmouseover=function(){
		clearTimeout(timer);
		oImg3.style.display='block';
	}
	oImg3.onmouseout=function(){
		timer=setTimeout(function(){
			oImg3.style.display='none';
		},500)
	}
}