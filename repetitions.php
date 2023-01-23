<?php include("includes/header.php")?>

<div class="repetitions">
<h1>Upprepningar</h1>
<ul>
<?php 
$numbers = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1];

for($i=0; $i<count($numbers); $i++) {
    echo "<li>" . $numbers[$i] . "</li>";
}
?>
</ul>

<ul>
    <?php 
    $courses = ["Webbutveckling I", "Introduktion till programmering i JavaScript", "Grafisk teknik för webb", "Webbanvändbarhet", "Databaser", "Webbutveckling II", "Webbdesign för CMS", "Webbutveckling III"];

    for($i = 0; $i<count($courses); $i++) {
        echo "<li>" . $courses[$i] . "</li>";

    }
    ?>
</ul>


<ul>
    <?php 
    $coursessorted = ["Webbutveckling I", "Introduktion till programmering i JavaScript", "Grafisk teknik för webb", "Webbanvändbarhet", "Databaser", "Webbutveckling II", "Webbdesign för CMS", "Webbutveckling III"];
    sort($coursessorted);

    for($i = 0; $i<count($coursessorted); $i++) {
        echo "<li>" . $coursessorted[$i] . "</li>";

    }


    ?>
</ul>
</div>


<?php include("includes/footer.php") ?>