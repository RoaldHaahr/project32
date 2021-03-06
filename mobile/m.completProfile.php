<?php include 'getUserProfile.php'; 
$_SESSION['loggedOn'] = 1;
?>
<!DOCTYPE html>
<html>
    <?php include 'm.head.php'; ?>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/jquery.alt-checkbox.js"></script>
    </head>

    <body>

        <header>
    
            <div class="row">
            
                <a href="m.postcards.php" id="logo-header"><img src="img/logowhite.png" alt="logo" id="logowhite"></a>

            </div>


        </header>

        <div class="container">

            <h1>Complete your profile</h1>

            <div id="completProfile">
            	<?php
                $name = $row['name'];
                $tourist = "";
                $local = "";

                if($row["role"] == 'Tourist'){
                    $tourist = 'checked = "checked"';
                } else{
                    $local = 'checked = "checked"';
                }
                ?>
                <form method="post" enctype="multipart/form-data" action="updateUser.php">
                	
                    <div class="row">
                        <div class="col-xs-2">
                            <p>Name: </p>
                        </div>
                        <div class="col-xs-10">
                            <input type="text" name="name" value="<? echo $row['name']; ?>" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6">
                            <p class="checkboxText">
                                <input type="checkbox" name="role" value="Tourist" id="checkbox1" <? echo $tourist; ?>>I'm a tourist
                            </p>
                        </div>

                        <div class="col-xs-6">
                            <p class="checkboxText">
                                <input type="checkbox" name="role" value="Local" id="checkbox2" <? echo $local; ?>>I'm a local
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">
                            <figure><img src="showImageProfile.php?ID=<? echo $row['ID']; ?>" id="signup-profile-picture"></figure>
                        </div>

                        <div class="col-xs-7">
                            <label for="user-picture">
                                Upload your profile picture
                            </label>

                            <div id="user-picture-btn"><input id="user-picture-upload" type="file" name="user-picture" value="Choose picture"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <select name="country" placeholder="Yor nationality">
                                <?php 
                                include_once('getCountries.php');
                                echo "<option value='" . $row["country"] . "' selected='selected'>" . $row["country"] . "</option>";

                                ?>
                            </select>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-xs-12">    
                            <textarea name="description" placeholder="Write a short description"><?php echo $row['description']; ?></textarea>
                        </div>
                    </div>
                
                    
                    <div class="row">
                        <div class="col-xs-12">  
                    	   <input type="submit" value="SAVE" class="orangeBtn">
                        </div>
                    </div>
                    
                </form>
            </div>
            
        </div>

    <script>
        jQuery("#checkbox1").altCheckbox({
          iconClass: "fa-check"
          /* and some other options if you need */
        });

        jQuery("#checkbox2").altCheckbox({
          iconClass: "fa-check"
          /* and some other options if you need */
        });
    </script>

</body>

</html>