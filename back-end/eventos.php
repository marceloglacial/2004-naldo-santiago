<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?php include("scripts.php"); ?>
<title>Studio Naldo Santiago</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
</head>

<body>
<div id="corpo">
<div id="topo"><?php include("topo.php"); ?></div>
<hr>
<div id="eventos" class="alignright">  
<h1>Eventos</h1>

  <ul>
      <li><a href="?pasta=eventos/aniversarios/">Anivers&aacute;rio infantil </a></li>
      <li><a href="?pasta=eventos/bookstudio/">Book em est&uacute;dio</a></li>
      <li><a href="?pasta=eventos/bookexterno/">book externo </a></li>
      <li><a href="?pasta=eventos/casamentos/">Casamentos</a></li>
      <li><a href="?pasta=eventos/makingoff/">Making of </a></li>
    </ul>
</div>
<div id="fotos">
<div id="grade_fotos">
<?php If (isset($_GET['pasta']) != NULL) { 
	galeria($_GET['pasta'],TRUE); 
} Else {

}	?>

</div>
</div>
<hr>

<div id="rodape"><?php include("rodape.php"); ?></div>
</div>
</body>
</html>
