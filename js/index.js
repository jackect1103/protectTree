// JavaScript Document
//选项框
var eco = document.getElementById('eco-des');
var des = document.getElementById('des');
var ecoli = eco.getElementsByTagName('li');
var desli = des.getElementsByTagName('div');
for (var i = 0; i < ecoli.length; i++) {

	ecoli[i].index=i;
	ecoli[i].onclick=function()
	{
		//进行初始化
		for (var j = 0; j < ecoli.length; j++) {
				ecoli[j].ClassName='';
				desli[j].style.display='none';
		}
		ecoli[this.index].ClassName='active';
		desli[this.index].style.display='block';
	}
}

