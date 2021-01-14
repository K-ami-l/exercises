<?php
    include_once 'header.php';

?>
<body class="class=’bginfo’">
    <div class=’container-fluid col-md-10 offset-md-1’>

    </div>
    <div class="row">

    </div>

    <div class=’card mt-3 px-2 py-2’>
        <h1>Stationery Application</h1>
        <p>Welcome to this fictional stationery
            application page created for ISAD251 example. To continue please accept our terms and conditions</p>
        <form method="POST" action="agreement.php">
            <input type="radio" name="choice" value="First" checked>I agree<br>
            <input type="radio" name="choice" value="Second">I disagree
            <input type="submit" value="Submit" name="Submit">
        </form>
    </div>
</body>

<?php
    include_once 'footer.php';
?>