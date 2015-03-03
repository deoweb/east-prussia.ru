
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<title>Кирхи и замки</title>
  <style type="text/css">
      #leftPan{
        width: 100%;
        height: 600px;
        overflow: scroll;
      }
  </style>
</head>

<body>

<?php include 'startlogin.php'; ?>

<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand">Кирхи и замки</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Objects <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a href="../default/">Default</a></li>
                <li class="divider"></li>
                <li><a href="../cerulean/">Cerulean</a></li>
                <li><a href="../cosmo/">Cosmo</a></li>
                <li><a href="../cyborg/">Cyborg</a></li>
              </ul>
            </li>
            <li>
              <a href="../help/">About project</a>
            </li>
            <li>
              <a href="http://east-prussia.ru/contact-us.php">Contact us</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Add object <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a href="./bootstrap.min.css">bootstrap.min.css</a></li>
                <li><a href="./bootstrap.css">bootstrap.css</a></li>
                <li class="divider"></li>
                <li><a href="./variables.less">variables.less</a></li>
                <li><a href="./bootswatch.less">bootswatch.less</a></li>
                <li class="divider"></li>
                <li><a href="./_variables.scss">_variables.scss</a></li>
                <li><a href="./_bootswatch.scss">_bootswatch.scss</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/index.php?reg" target="_blank">Reg</a></li>
            <li><a href="/index.php?login">Log In</a></li>
          </ul>
        </div>
      </div>
    </div>
<div class="page-header"></div>
    <div class="container">
      <div class="alert alert-dismissable alert-success">
        <button type="button" id="close" class="close" data-dismiss="alert">x</button>
        <strong>Привет друг! </strong>Это маленькое вебприложение собрало в себе ссылки на изображения исторических объектов области по годам<a href="#" class="alert-link"></a>. мы постараемся отслеживать их состояние.
      </div>   	
      <div class="row">
  		<div class="col-md-4">
  			<form >
  				<input type="text" id="search" class="form-control col-lg-8" placeholder="Search">
  			</form>
  			<div id="leftPan"></div>	
  		</div>
  		<div>
		    <div class="col-md-4" id="rightPan">						
				<p></p>					
			   </div>
			<div class="col-md-4" id="rightPan2">
				<div>
					<p id="rp"><p>
				</div>
			</div>
			<div class="panel panel-info col-md-8">
  				<div class="panel-heading">
    				<h3 class="panel-title">Фото</h3>
  				</div>
				<div class="col-md-8 panel-body" id="bottomPan">						
					<p></p>					
				</div>
			</div>
		</div>
	</div> 
  <br>
  <br>
</div>

<script src="screen.js"></script>

<div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" id="closebutton" class="close" data-dismiss="modal" onclick="closeblock()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Объект</h4>
      </div>
      <div class="modal-body" id="modalbody">                       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeblock()">Закрыть</button>
      </div>    
    </div>
  </div>
</div>

</body>
</html>