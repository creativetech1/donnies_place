   
<?php
    
?>
<div>

    <form action="/pages/the_menu.php" method="post">
        <div class="row">
            <div class="col s4"></div>
            <div class="col s4">
                <div class="categories">
                    <select class="browser-default blue-grey darken-3 white-text" name="category">
                      <option value="" disabled selected>Choose a category</option>
                      <option value="1">Breakfast</option>
                      <option value="2">Lunch</option>
                      <option value="3">Dinner</option>
                    </select>
                </div>
            </div>
            <div class="col s4"></div>
        </div>


        <div class="row">
            <div class="col s4"></div>
            <div class="col s4">
                <div class="row">
                    <div class="input-field inline white-text">
                        <input id="email_inline" type="text" class="validate" name="item_name">
                        <label for="email_inline">Item Name</label>
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
                        <textarea id="textarea1" class="materialize-textarea" name="description"></textarea>
                        <label for="textarea1">Description</label>
                    </div>
                </div>
            </div>
            <div class="col s4"></div>
        </div>


        <section>
            <div class="row">
                <div class="col s4"></div>
                <div class="col s4">
                    <div class="categories">
                        <select class="browser-default blue-grey darken-3 white-text" name="special">
                          <option value="" disabled selected>Special</option>
                          <option value="1">Yes</option>
                          <option value="2">No</option>
                        </select>
                    </div>
                </div>
                <div class="col s4"></div>
            </div>

            <div class="row">
                <div class="col s4"></div>
                <div class="col s4">
                    <div class="categories">
                        <select class="browser-default blue-grey darken-3 white-text" name="day_of_week">
                          <option value="" disabled selected>Day of Week</option>
                          <option value="1">Monday</option>
                          <option value="2">Tuesday</option>
                          <option value="3">Wednesday</option>
                          <option value="4">Thursday</option>
                          <option value="5">Friday</option>
                        </select>
                    </div>
                </div>
                <div class="col s4"></div>
            </div>
        </section>


        <div class="row">
            <div class="col s4"></div>
            <div class="col s4">
                <div class="row right-align">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit 
                    <i class="material-icons right">send</i>
                </button>
                </div>
            </div>
            <div class="col s4"></div>
        </div>
    </form>

</div>


