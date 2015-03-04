var leftText = '';
var dangerlable = '';
var ca = [];
var selectchurch = 0;

showchurchlist("");
document.getElementById("leftPan").innerHTML = leftText;
setlistner();

document.getElementById("close").onclick = function (){this.parentNode.style.display = 'none';};
document.getElementById("search").oninput = function (){
	leftText='';
	showchurchlist(document.getElementById("search").value);
	document.getElementById("leftPan").innerHTML = leftText;
	setlistner();
};
document.getElementById("linkchurchpic").oninput = function(){
	document.getElementById("addpicbox").innerHTML = "<img src='" + this.value + "' width = '100'>";
}

showrighttext();
churchlistselect();

function showchurchlist(searchtext){
	for (var i = 0; i < churchs.length; i++) {
		if (churchs[i].name.search(searchtext)>-1){
			if (churchs[i].status<3&&churchs[i].status>0){dangerlable='&nbsp;&nbsp;<span class="label label-warning">Danger</span>';}; 
			if (churchs[i].status==0){dangerlable='&nbsp;&nbsp;<span class="label label-danger">-</span>';};
			leftText += '<div class="btn btn-default" style="width:100%" id = "church' + i + '">';
			leftText += churchs[i].name + dangerlable;
			leftText += '</div>';
			dangerlable = '';
		};		
	};
	if (leftText == ""){leftText = 'нет объектов';};		
};

function setlistner(){
	for (var i = 0; i < churchs.length; i++) {
	 	if (document.getElementById("church"+i)!=null){	
			ca[i] = document.getElementById("church"+i);
			ca[i].onmouseover = function (){this.style.background = "rgb(72, 85, 99)";};
			ca[i].onmouseout = function (){if(this.id.replace("church","")!=selectchurch){this.style.background = "rgb(78, 93, 108)"};};
			ca[i].onclick = showrighttext;
		};
	};
};

function showrighttext(){
	var ch = window[this.id];
	if (typeof ch === 'undefined'){ch=churchs[0];};
	document.getElementById("church"+selectchurch).style.background = "rgb(78, 93, 108)";
	selectchurch = ch.id; 
	var churchtext = '';
	var pictext = '';
	churchtext += '<h2>' + ch.name +'</h2>' ;
	churchtext += '</br>Id: ' + ch.id;
	churchtext += '</br>Адрес: ' + ch.adress;
	churchtext += '</br>Основание: ' + ch.est;
	churchtext += '</br>Статус: ' + ch.status;
	document.getElementById("rightPan").innerHTML = churchtext;
	pictext += '<img src="img/'+ch.photo+'" alt="'+ch.name+'" height = 200px></img>';
	document.getElementById("rightPan2").innerHTML = pictext;
	showpictures(ch.id);
	document.getElementById("church"+ch.id).style.background = "rgb(72, 85, 99)";
};

function showpictures(id){
	var picstext = '';
	var pic_onclk = [];
	for (var i = 0; i < pictures.length; i++) {
		if (pictures[i].object_id == id){
			picstext += '<div class="col-md-3" id="pic' + pictures[i].id + '"><img src="' + pictures[i].link+ '" width=100%"></img><br>'+pictures[i].year+'</div>';
			pic_onclk.push("pic"+pictures[i].id);
		};
	};
	document.getElementById('bottomPan').innerHTML = picstext;	
	for (var i = 0; i < pic_onclk.length; i++) {
		document.getElementById(pic_onclk[i]).onclick = bigpic;
	};
};

function bigpic(pic_id){
document.getElementById("myModal").style.display= "block";
var a = this.id.replace("pic", "");
document.getElementById("modalbody").innerHTML = '<img src="' + pictures[a].link+'" width=100%></img>Автор фото:'+pictures[a].author_id+'<br>Описание: '+pictures[a].description;
};

function displayblock(){
document.getElementById("myModal").style.display= "block";
document.getElementById("myModal").innerHTML = "";
};

function closeblock(){
document.getElementById("myModal").style.display= "none";
}

function churchlistselect(){
	var churchlist = "<select name='object_id'>";
	for (var i = 0; i <churchs.length; i++) {
       churchlist += "<option value='" + churchs[i].id + "'>" + churchs[i].id + ". " + churchs[i].name + "</option>";
	};
	churchlist += "</select>";
	document.getElementById("selectchurch").innerHTML = churchlist;
}



