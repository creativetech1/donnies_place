<!DOCTYPE html>
<html lang="en">

<head>
    <title>Donnie's Place</title>
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
        <div class="row">
            <div class="col s12">
                <h2 class="header white-text">Today's Special</h2>
                <div class="white-text">
                    <?php
                        date_default_timezone_set('America/Denver');
                        echo date('l M jS, Y')
                    ?>
                </div>
                <div class="card horizontal">
                    <div class="card-image z-depth-5">
                        <?php

                        
                        date_default_timezone_set('America/Denver');

                        $theDate = date('w');

                        $monday = "<center><img src='/img/tacos.jpg' alt='Tacos' style='width:600px; height:300px;'/></center>";
                        $tuesday = "<center><img src='/img/spaghetti.jpeg' alt='Spaghetti' style='width:600px; height:300px;'/></center>";
                        $wednesday = "<center><img src='/img/pizza.jpg' alt='Pizza' style='width:600px; height:300px;'/></center>";
                        $thursday = "<center><img src='/img/chicken.jpg' alt='Chicken' style='width:600px; height:300px;'/></center>";
                        $friday = "<center><img src='/img/mystery.jpg' alt='Mystery' style='width:500px; height:300px;'/></center>";
                        $sat_sun = "<center><img src='/img/closed.png' alt='Closed' style='width:600px; height:300px;'/></center>";

                        switch($theDate) {
                        case "0" :
                        echo "$sat_sun";
                        break;
                        case "1" :
                        echo "$monday";
                        break;
                        case "2" :
                        echo "$tuesday";
                        break;
                        case "3" :
                        echo "$wednesday";
                        break;
                        case "4" :
                        echo "$thursday";
                        break;
                        case "5" :
                        echo "$friday";
                        break;
                        case "6" :
                        echo "$sat_sun";
                        break;
                        }
                        ?>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p class="flow-text">
                                <?php
                                    switch($theDate) {
                                        case "0" :
                                        echo "Sorry We're Closed!";
                                        break;
                                        case "1" :
                                        echo "Tantalizing Tacos!";
                                        break;
                                        case "2" :
                                        echo "Super Spaghetti";
                                        break;
                                        case "3" :
                                        echo "Imperial Pizza";
                                        break;
                                        case "4" :
                                        echo "Cherry Chicken";
                                        break;
                                        case "5" :
                                        echo "Miraculous Mystery";
                                        break;
                                        case "6" :
                                        echo "Sorry We're Closed!";
                                        break;
                                    }
                                ?>
                            </p>

                            <div>
                                <table class="striped">
                                    <thead>
                                        <th>Day</th>
                                        <th>Special</th>
                                        <th>Price</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                    <?php
                                        @$menuFile = file("$document_root/src/specials.txt") or die ("Unable to open file!");
                                        foreach ($menuFile as $line) {
                                          $lineArr = explode(",", $line);
                                          $lastIndex = count($lineArr) - 1;
                                          $lineArr[$lastIndex] = rtrim($lineArr[$lastIndex]);
                                          if (date('l') === $lineArr[0]) {
                                            echo "<td>".$lineArr[0]."</td>";
                                            echo "<td>".$lineArr[1]."</td>";
                                            echo "<td>$".$lineArr[2]."</td>";
                                          }
                                        }
                                        error_reporting(0);
                                        fclose($menuFile);

                                    ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
        require("$document_root/components/footer.php");
        require("$document_root/js/scripts.php");
    ?>
    
</body>

</html>
