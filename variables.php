<?php include("includes/header.php")?>

<div class='container'>
    <h1>Variabler</h1>
    <?php  
    $name = "Roberto Piran Amedi";
    $mail = "roam2200@student.miun.se";
    $age = "30";

   echo "<p>Hej! Jag heter $name, är $age år gammal och nås på följande epost: "."<a href='mailto:$mail'>". $mail. "</a>". "</p>";

?>
</div>


<?php include("includes/footer.php") ?>