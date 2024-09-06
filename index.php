<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet Application Programming</title>
</head>
<body>
    <h1>This is my first page</h1>

    
    <!-- php 
    require_once "load.php";
    print $obj-> user_age("Alex", 2004); 
     -->

    <?php
        require "load.php";
        $ObjLayouts->__heading();
        $ObjMenus->main_menu(); 
        $ObjHeadings->main_banner();
        $ObjLayouts->__footer()
    ?>

</body>
</html