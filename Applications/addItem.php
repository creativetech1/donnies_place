<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Item</title>
    <?php
        $document_root = $_SERVER['DOCUMENT_ROOT'];
        require("$document_root/Applications/components/head.php");
    ?>
</head>
<body class="blue-grey darken-3">
    <?php
        require("$document_root/Applications/components/nav.php");
        require("$document_root/DataStore/config.php");
        $db = db_connect();
    ?>

    <div class="row">
        <div class="col s4"></div>
            <div class="col s4">
                <h3 class="white-text">Create Menu Item</h3>
            </div>
        <div class="col s4"></div>
    </div>

    

<div>

    <form action="../Business/itemAdded.php" method="post">
        <div class="row">
            <div class="col s4"></div>
            <div class="col s4">
              <div class="categories">
                <?php
                $sql = "SELECT * FROM categories";
                if($result = $db->query($sql)){
                    if($result->num_rows > 0){
                        echo '<select class="browser-default blue-grey darken-3 white-text" name="category">';
                        echo '<option value="" disabled selected>Choose a category</option>';
                        while($cat = $result->fetch_assoc()){
                        echo '<option value='.$cat['category_id'].'>'.$cat['category'].'</option>';
                        }
                        echo '</select>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="col s4"></div>';
                        echo '</div>';
                        echo '</div>';
                        $result->free();
                    }
                }
                ?>


        <div class="row">
            <div class="col s4"></div>
            <div class="col s4">
                <div class="row">
                    <div class="input-field inline white-text">
                        <input id="item_inline" type="text" class="validate" name="item_name">
                        <label for="item_inline">Item Name</label>
                    </div>
                </div>
            </div>
            <div class="col s4"></div>
        </div>
        
        
        <div class="row">
            <div class="col s4"></div>
            <div class="col s4">
                <div class="row">
                    <div class="input-field inline white-text">
                        <input id="price_inline" type="text" class="validate" name="price">
                        <label for="price_inline">$Price</label>
                    </div>
                </div>
            </div>
            <div class="col s4"></div>
        </div>


        <div class="row">
            <div class="col s4"></div>
            <div class="col s4">
                <div class="row">
                    <div class="input-field col s12 white-text">
                        <textarea id="desc" class="materialize-textarea" name="description"></textarea>
                        <label for="desc">Description</label>
                    </div>
                </div>
            </div>
            <div class="col s4"></div>
        </div>


            <div class="row">
            <div class="col s4"></div>
            <div class="col s4">
              <div class="categories">
                <?php
                $sql = "SELECT * FROM specials";
                if($result = $db->query($sql)){
                    if($result->num_rows > 0){
                        echo '<select class="browser-default blue-grey darken-3 white-text" name="specials">';
                        echo '<option value="" disabled selected>Special</option>';
                        while($spec = $result->fetch_assoc()){
                        echo '<option value='.$spec['special_id'].'>'.$spec['special'].'</option>';
                        }
                        echo '</select>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="col s4"></div>';
                        echo '</div>';
                        echo '</div>';
                        $result->free();
                    }
                }
                ?>



            <div class="row">
            <div class="col s4"></div>
            <div class="col s4">
              <div class="categories">
                <?php
                $sql = "SELECT * FROM days_of_week";
                if($result = $db->query($sql)){
                    if($result->num_rows > 0){
                        echo '<select class="browser-default blue-grey darken-3 white-text" name="day_of_week">';
                        echo '<option value="" disabled selected>Day of Week</option>';
                        while($day = $result->fetch_assoc()){
                        echo '<option value='.$day['day_of_week_id'].'>'.$day['day_of_week'].'</option>';
                        }
                        echo '</select>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="col s4"></div>';
                        echo '</div>';
                        echo '</div>';
                        $result->free();
                    }
                }

                // Close connection
                $db->close();
                ?>
        </section>


        <div class="row">
            <div class="col s4"></div>
            <div class="col s4">
                <div class="row right-align">
                    <button class="btn waves-effect waves-light red darken-1" type="submit" name="action">Submit 
                    <i class="material-icons right">send</i>
                </button>
                </div>
            </div>
            <div class="col s4"></div>
        </div>
    </form>

</div>
</body>
</html>   






