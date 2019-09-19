// JavaScript Document
//购物中心
var goo = document.getElementById('goo');
var gooli = goo.getElementsByTagName('li');
//获取了解详情的div
var flower = document.getElementById('flower');
var flowerul = flower.getElementsByTagName('ul');

//价钱计算
var shop = document.getElementById('shopping-list');
var img = document.getElementById('img');

for(var i = 0;i < gooli.length;i++)
{
	gooli[i].index=i;
	//初始化第一个li样式
	gooli[0].style.backgroundColor='#4BB15B';
	gooli[0].style.color='#fff';
	gooli[i].onclick=function()
	{
		for(var j = 0;j < gooli.length;j++)
		{   //对所有的样式进行初始化
			gooli[j].style.backgroundColor='#F5F5F5';
			flowerul[j].style.display='none';
			gooli[j].style.color='#000';
		}
		gooli[this.index].style.backgroundColor='#4BB15B';
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
		subinput.value='Add to car';
	}
});
//点击购物车
img.onclick=function()
{
	shop.style.display='block';
	shop.style.top='-150px';
	shop.style.left='60%';
	subinput.value='Buy It';
}
//计算价钱
var tbody = document.getElementById('tbody');
var print = tbody.getElementsByTagName('b');//讲价钱打印在span里
var flowers = tbody.getElementsByClassName('flowers');//获取input
for(var i = 0 ; i < flowers.length ; i++)
{
	flowers[i].addEventListener("change",function(event){
		event.target.parentNode.getElementsByTagName('b')[0].innerHTML = '￥'+event.target.value * 150;
	})
}

//提交按钮监听事件
subinput.addEventListener("click",function(){
	var num = 0;
	for(var i = 0 ; i < flowers.length ; i++)
	{
		if(flowers[i].value != '')
		{
			num += Number(flowers[i].value)*150;
		}
	}
	totalprice.innerHTML = '￥'+num;
})
//重置按钮监听事件

reset.addEventListener("click",function(){
	for(var i = 0 ; i < flowers.length ; i++)
	{
		flowers[i].value = '';
		flowers[i].parentNode.getElementsByTagName('b')[0].innerHTML = '￥0.00';
	}
	totalprice.innerHTML = '￥0.00';
})



