<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL); 

    include("php/util.php");
    $conn = conecta();

    $id_sorteio = $_GET['id'];
    $sql="SELECT * FROM SORTEIO where id_sorteio = :id_sorteio";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id_sorteio", $id_sorteio);
    $stmt->execute();
    $itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table role="table">
        <thead>
            <th>Usuario</th>


            <th>OLHIN</th>
        </thead>
        <tbody>
            <?php
                foreach($itens as $item)
                {
                    echo "<tr>";
                        echo"<td>".$item['usuario']."</td>";

                        echo"<td>"."<a href=verAmigo.php?pcd="."pcd".">"."VER"."</a>"."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <?php
        echo '<a href="php/participarSorteio.php?id='.$id_sorteio.'"> Participar </a>';
    ?>
</body>
</html>