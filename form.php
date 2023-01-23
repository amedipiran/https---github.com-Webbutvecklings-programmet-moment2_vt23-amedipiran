<?php include("includes/header.php")?>

<div class="container">
    <h1>Formulär</h1>

    

    <form method="GET" action="form.php">
        <label for="fname" name="fname">Förnamn: </label>
        <input type="text" id='fname' name='fname'>
        <label for="lname" name="lname">Efternamn: </label>
        <input type="text" id='lname' name='lname'>
        <input type="submit" value="Skicka">
    </form>

    <?php 
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        
    if(isset($_GET['submit']) && isset($_GET['fname']) && isset($_GET['lname'])) {
        echo"<p>Hej ". htmlspecialchars($_GET["fname"]) . " ". htmlspecialchars($_GET["lname"]) . "!". "</p>";

        
    } 
    ?>
</div>

<?php include("includes/footer.php") ?>