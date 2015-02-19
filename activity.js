//var ca = [];
//for (var i = 0, k = 0 ; i<churchs.length; i++, k++) {
//	ca[i] = document.getElementById("church"+i);
//	ca[i].onmouseover = function (){this.style.background = "rgb(72, 85, 99)";};
//	ca[i].onmouseout = function (){this.style.background = "rgb(78, 93, 108)";};
//	ca[i].onclick = showtext;
//};




document.getElementById("close").onclick = function close(){this.parentNode.style.display = 'none';};

document.getElementById("search").oninput = function (){
	leftText='';
	showchurchlist(document.getElementById("search").value);
	document.getElementById("leftPan").innerHTML = leftText;
	setlistner();
};