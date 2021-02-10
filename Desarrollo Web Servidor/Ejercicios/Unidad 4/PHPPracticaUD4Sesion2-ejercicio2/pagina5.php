<?php
session_start(); //Iniciamos la sesión

?>
<HTML>
<HEAD>
<TITLE>Mostrar nombre</TITLE>
</HEAD>
<BODY>
<h1>Formulario en dos pasos (Resultado)<h1>
    <?php   
    print "<p>La palabra magica es: <Strong>$_SESSION[pal1]</Strong></p>";
    ?>
    <p><a href="pagina1.php">"Volver al principio"</a></p>

</BODY>
</HTML>