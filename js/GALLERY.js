//tab选项框
var select = document.getElementById('select');
var seli = select.getElementsByTagName('li');
var tab = document.getElementById('tab');
var picture = tab.getElementsByClassName('picture')[0];
var piul = picture.getElementsByTagName('ul');

	for(var i=0;i<seli.length;i++)
	{
		seli[i].index=i;//index是自定义属性，用来保存编号
		seli[i].onclick=function ()
		{	
			//初始化
			for (var i=0;i<seli.length;i++) 
			{     
               seli[i].style.color='black';
               seli[i].style.backgroundColor='white';
               piul[i].style.display='none'; 
            }
            //当前点击
			  seli[this.index].style.color='white';
			  seli[this.index].style.backgroundColor='#61A93E';
			  piul[this.index].style.display='block';
		};
	}