<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Menu Item</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <div>
       
        <form action="http://mycreativetech.net/php_csci213/Modules/Admin/itemsAdded.php" method="post">
            <fieldset>
                <center><h1 style="margin-bottom: 0em;"> Donnies Diner</h1><br>
                <h2 style="margin-top: 0em;">Admin Page</h2></center>
            </fieldset>
            
            <fieldset>
                <h2>Category:</h2><br>
                <select name="category">
                  <option value="breakfast">Breakfast</option>
                  <option value="lunch">Lunch</option>
                  <option value="dinner">Dinner</option>
                </select> 
            </fieldset>
            
            <fieldset>
                <h2>Title:</h2><br>
                <input type="text" name="title" >
            </fieldset>
            
            <fieldset>
                <h2>Description:</h2><br>
                <textarea name="description" rows="10" cols="50"></textarea>
            </fieldset>
            
            <fieldset>
                <div style="display: block; float: left;">
                    <h2>Price:</h2><br>
                    $<input type="text" name="price">
                </div>
                <div style="display: block; float: right; width: 50%;">
                    <input type="submit" value="Submit" style="padding: 1em; margin-top: 2em;">
                </div>
            </fieldset>
            
        </form>
    
    </div>
</body>
</html>
