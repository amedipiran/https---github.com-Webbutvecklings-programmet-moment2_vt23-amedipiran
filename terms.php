<?php include("includes/header.php")?>

<div class="container">
    <h1>Villkor</h1>
    <?php

    $date = date("Y-m-d");
    $time = date("H.i");
    echo "<p> Datum/klockslag: ". $date. ":". $time. "</p>";

    ?>

    <?php
    $weekday = date("N");
    if($weekday === "7") {
        echo "<p>Idag är det söndag.</p>";
    } else  {
        echo "<p>Idag är inte söndag.</p>";
    }

    ?>


    <?php 
    $hours = date('H:i');

    if($hours <= 9 && $hours >= 6) {
        echo"<p>Det är morgon</p>";
    } else if ($hours >= 9 && $hours <= 12) {
        echo "Det är förmiddag.";
    } else if ($hours >= 12 && $hours <= 18) {
        echo "Det är eftermiddag.";
    } else if ($hours >= 18 && $hours <= 6) {
        echo "Det är kväll/natt.";
    }

    ?>

<?php 
$switchWeekday = date('N');

switch ($switchWeekday) {
    case "1":
        echo "Idag är det måndag.";
        break;
        case "2":
            echo "Idag är det tisdag.";
            break;
            case "3":
                echo "Idag är det onsdag.";
                break;
                case "4":
                    echo "Idag är det torsdag.";
                    break;
                    case "5":
                        echo "Idag är det fredag.";
                        break;
                        case "6":
                            echo "Idag är det lördag.";
                            break;
                            case "7":
                                echo "Idag är det söndag.";
                                break;
}

?>     
</div>



<?php include("includes/footer.php") ?>