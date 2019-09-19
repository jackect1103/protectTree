// JavaScript Document
//购物中心
var goo = document.getElementById('goo');
var gooli = goo.getElementsByTagName('li');
//获取了解详情的div
var flower = document.getElementById('flower');
var flowerul = flower.getElementsByTagName('ul');

//add to car按钮
var subinput = document.getElementById('subinput');
var totalprice = document.getElementById('totalprice');
var reset = document.getElementById('reset')

//价钱计算
var shop = document.getElementById('shopping-list');
var img = document.getElementById('img');

for(var i = 0;i < gooli.length;i++)
{
	gooli[i].index=i;
	//初始化第一个li样式
	gooli[0].style.backgroundColor='#FE9126';
	gooli[0].style.color='#fff';
	gooli[i].onclick=function()
	{
		for(var j = 0;j < gooli.length;j++)
		{   //对所有的样式进行初始化
			gooli[j].style.backgroundColor='#F5F5F5';
			flowerul[j].style.display='none';
			gooli[j].style.color='#000';
		}
		gooli[this.index].style.backgroundColor='#FE9126';
		flowerul[this.index].style.display='block';
		gooli[this.index].style.cursor='pointer';
		gooli[this.index].style.color='#fff';
	};
}
//购物卡消失
document.body.addEventListener('click', function(event) {
	if (!contains(event.path,document.getElementById('img')) && !contains(event.path,shop) && shop.style.display == 'block') {
		shop.style.display = 'none';	
		}
	}
	)
function contains(arr, obj) {
    var i = arr.length;
    while (i--) {
        if (arr[i] === obj) {
            return true;
        }
    }
    return false;
}
//点击了解弹出框
var flower = document.getElementById('flower').addEventListener('click', function(event) {
	if (event.target.className == 'button') {
		event.stopPropagation();
		shop.style.display='block';
		shop.style.top="150px";
		shop.style.left='50%';
	}
});
//点击购物车
img.onclick=function()
{
	shop.style.display='block';
	shop.style.top='-150px';
	shop.style.left='60%';
}
//计算价钱
var tbody = document.getElementById('tbody');
var print = tbody.getElementsByTagName('b');//讲价钱打印在span里
var flowers = tbody.getElementsByClassName('flowers');//获取input
for(var i = 0 ; i < flowers.length ; i++)
{
	flowers[i].addEventListener("change",function(event){
		print[0].innerHTML = Number(flowers[event].value)*150;
	})
}
subinput.onclick=function()
{
	var num = 0;
	for(var i = 0 ; i < flowers.length ; i++)
	{
		if(flowers[i].value != '')
		{
			num += Number(flowers[i].value)*150;
		}
	}
	totalprice.innerHTML = num;
}
reset.onclick=function()
{
	for(var i = 0 ; i < flowers.length ; i++)
	{
		flowers[i].value = '';
	}
	totalprice.innerHTML = '￥0.00';
}




