<?php include "component/header.php" ?>

<h2>Information om alle brugere</h2>



<?php


// PDO object creation

$pdo = new PDO($dsn, $user, $passwd, $options);

// QUERY function + view kode

    $res = $pdo->query('SELECT * FROM Users'); // en * vælger alt 
    $data = $res->fetchAll(); // fetch som associative array
    foreach ($data as $row) {
        echo "<div class='users-container'>";
        echo "<div class='users'>";
        echo "<strong>B | </strong>".$row['username']." <strong>E | </strong> ".$row['email']." <strong>P | </strong> ".$row['userPassword'];
        echo "</div>";
        echo "<a class='edit-button' style='margin-left:5px;' href='edit.php?userID=".$row['ID']."'><i class='fas fa-edit' style='font-size:15px; color:white; padding:0; font-weight:100;'></i></a>";
        echo "<a class='delete-button' style='margin-left:5px;' href='delete.php?userID=".$row['ID']."'><i class='fas fa-trash-alt' style='font-size:15px; padding:0; color:white; font-weight:100;'></i></a>";
        echo "</div>";
    }

?>

<a href="create.php"><button class="btn_green">Tilføj ny bruger</button></a>

<?php include "component/footer.php" ?>