<?php
session_start();

if(!isset($_SESSION['posts'])){
    $_SESSION['posts'] = array();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    

    $post['nombre'] = $_POST['nombre'];
    $post['email'] = $_POST['email'];
    $post['titulo'] = $_POST['titulo'];
    $post['comentario'] = $_POST['comentario'];
    $post['fechaPublicacion'] = date("d/mY");

    $posts = $_SESSION['posts'];
    array_push($posts, $post);
    $_SESSION['posts'] = $posts;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microbligging</title>
    <h1>Microblogging</h1>
</head>
<body>
<form action="index.php" method="post">
    Nombre: <input type="text" name="nombre"><br>
    Email: <input type="text" name="email"><br>
    Título: <input type="text" name="titulo"><br>
    Comentario: <input type="text" rows="10" name="comentario"><br>
    <input type="submit" value="Enviar">
</form>
<h2>Datos</h2>

<?php
$posts = $_SESSION['posts'];
foreach($posts as $post){
    echo "<div>";
    echo "<p>$post[fechaPublicacion]</p> $post[nombre] $post[email]";
    echo "<br />";
    echo "<p>$post[titulo]</p>";
    echo "<br />";
    echo $post['comentario'];
    echo "</div>";
}
?>
</body>
</html>