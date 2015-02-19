var a="a";
var b = 3;
var churchs = [];
document.getElementById("button").onclick = function(){
start();
};

function start(){
	$.get(
	  "ajax.php",
	  {
	    param1: b,
	    param2: 2
	  },
	  onAjaxSuccess
	);
};
 
function onAjaxSuccess(data0,data1,data2,data3)
{
	//church[0] = data0;
	//church[1] = data1;
	//church[2] = data2;
  // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
  a=data0+data2+data1+data3;
  document.getElementById("aj").innerHTML = a
};
//setTimeout('document.getElementById("aj").innerHTML = a', 300);