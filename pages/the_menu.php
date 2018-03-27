<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu</title>
    <?php
        $document_root = $_SERVER['DOCUMENT_ROOT'];
        require("$document_root/components/head.php");
    ?>
</head>

<body class="blue-grey darken-3">

    <?php
        require("$document_root/components/nav.php");
    ?>

        <div>
            <img class="responsive-img" src="/img/main.PNG" alt="" style='width:100%; height:25em;' />
        </div>
        
        <div class="container">
            
        </div>

        <?php
        require("$document_root/components/footer.php");
        require("$document_root/js/scripts.php");
    ?>
</body>

</html>