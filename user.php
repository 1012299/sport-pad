<?php include 'header.php'?>
    <script type="text/javascript">
        function active(){
            var searchBar = document.getElementById('searchBar');

            if(searchBar.value == 'zoek...'){
                searchBar.value = ''
                searchBar.placeholder = 'zoek...'
            }
        }
    </script>
    <div class="searchbox">
        <form  action="" method="POST">
                <input type="text" id="searchBar" placeholder="" value="zoek..."
                       maxlength="6" autocomplete="off" onmousedown="" onblur="">
                <button type="submit" id="searchBtn" value="Zoeken"><i>search</i></button>
        </form>
    </div>
<?php include 'footer.php'?>
