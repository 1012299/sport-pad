<?php include 'header.php' ?>
    <div id="bannerlogo">
        <img src="sport-image/logo-sport-pad.png" style="width: 399px; height: 300px;">
    </div>
    <?php
        $output = NULL;

        if(isset($_POST['sumbit'])){
            $con = new PDO("localhost","root",null,"db_sp");

            $search = $con->real_escape_string( $_POST['search']);

            $resultSet = $con->query(" SELECT * FROM bedrijven WHERE postcode = '$search'");

            if($resultSet->num_rows > 0){

            }else{
                echo "geen resultaat";
            }
        }
    ?>
    <div class="searchbox">
        <form action="recent.php" method="POST">
                <input type="text" id="searchBar" placeholder="" name="search" value="zoek...">
                <input type="submit" id="searchBtn" name="submit" value="">
        </form>
    </div>
<?php include 'footer.php' ?>
