// JavaScript Document
//登录和注册
var locon = document.getElementById('locon');
var longin = document.getElementById('longin');

var reg = document.getElementById('reg');
var register = document.getElementById('register');

var container = document.getElementById('container');

var lonconwarp = document.getElementById('loncon-warp');
var images = lonconwarp.getElementsByTagName('img');
longin.onclick=function()
{
	container.style.position="fixed";
	container.style.margin="0 auto";
	locon.style.display='block';
}
register.onclick=function()
{
	container.style.position="fixed";
	reg.style.display='block';
}
function closed()
{
	container.style.position="";
	locon.style.display="none";
	reg.style.display="none";
}
