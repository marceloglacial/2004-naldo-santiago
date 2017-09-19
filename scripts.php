<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<?php 
function galeria($pasta,$filtertypes) {
$filtertypes = $filtertypes; //link para arquivos = FALSE imagens = TRUE
$filetypes = array("jpg", "jpeg", "bmp", "gif"); //extensoes de imagens permitidas
$dir = opendir($pasta);
while( $file = readdir($dir) )
{
//$DirOrFile = filetype($file);
if( $filtertypes == TRUE )
{
if ($file != "mini" ) {
$path_parts = pathinfo($file);
$ext = $path_parts["extension"];
}
for($x = 0; $x < count($filetypes); $x++)
{ 
if( strtolower($ext) == strtolower($filetypes[$x]) )
{
if ($file != "mini" ) {
print "<a href=javascript:; onClick=MM_openBrWindow('ampliar.php?arquivo=$pasta$file','','status=yes,scrollbars=yes,width=440,height=255')><img src=$pasta/mini/$file border=0></a>
";
}
}
}
}
else
{
if($DirOrFile != "dir")
if ($file != "mini" ) {
{
print " <a href=$pasta$file>$file</a><br>
";
}
}
}
}
closedir($dir);
}

//Exemplo
//galeria("fotos/"/*pasta*/,TRUE/*link para arquivos = FALSE imagens = TRUE*/);
?>