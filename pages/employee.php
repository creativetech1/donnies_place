<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employee Login</title>
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
        <div class="white-text container">
            <h3>Employee Login<br>Please sign in below to access menu items<br></h3>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <form class="white-text col s12" action="/pages/addMenuItem.php" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Username" id="first_name" type="text" class="validate" name="username">
                            <label for="first_name"></label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="Password" id="password" type="password" class="validate" name="password">
                            <label for="password"></label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row right-align">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit 
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>

        <?php
        require("$document_root/components/footer.php");
        require("$document_root/js/scripts.php");
        ?>
</body>

</html>