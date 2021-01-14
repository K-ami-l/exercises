<?php
include_once 'header.php';

?>
<body>
<div class=’card mt-3 px-2 py-2’>
    <h1>Stationery Application</h1>
    <p>Welcome to this fictional stationery
        application page created for ISAD251 example. To continue please accept our terms and conditions</p>
    <?php
    $choice = $_POST["choice"];


if($choice == "First")
{
    echo("Welcome you have selected I agree");
}
else if ($choice == "Second")
{
    echo("Welcome you have selected I disagree");
}?>


</div>
</body>

