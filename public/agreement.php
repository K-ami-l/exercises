<?php
include_once 'header.php';

?>
<body>
<div class=’card mt-3 px-2 py-2’>
    <h1>Stationery Application</h1>
    <p>Welcome to this fictional stationery
        application page created for ISAD251 example. To continue please accept our terms and conditions</p>
    <?php
    // isset makes sure that the submit button was pressed
    if ( isset( $_GET['submit'] ) ) {
        //the get method passes key(name) value pairs through the url e.g localhost/agreement.php?choice=First&submit=Submit
        $choice = $_GET['choice'];
        // display the appropriate message
        echo 'Welcome. You have selected' . $choice . ' for the agreement';
    }
?>



    </div>
</body>

