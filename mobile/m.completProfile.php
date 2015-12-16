<?php include 'getUserProfile.php'; ?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="mobile-web-app-capable" content="yes" />

        <link rel="stylesheet" href="bootstrap.min.css" />
        <link rel="stylesheet" href="jquery.alt-checkbox.icon-font.css">
        <link rel="stylesheet" href="jquery.alt-checkbox.css">
        <link rel="stylesheet" href="m.style.css" />
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="jquery.alt-checkbox.js"></script>


        <style>
            html, body{
                background-color: #eee;
            }
        </style>

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
                $traveler = "";
                $local = "";

                if($row["role"] == 'traveler'){
                    $traveler = 'checked = "checked"';
                } else{
                    $local = 'checked = "checked"';
                }
                ?>
                <form method="post" enctype="multipart/form-data" action="updateUser.php">
                	
                    <div class="row">
                        <div class="col-xs-6">
                            <p class="checkboxText">
                                <input type="checkbox" name="role" value="traveler" id="checkbox1" <? echo $traveler; ?>>I'm a traveler
                            </p>
                        </div>

                        <div class="col-xs-6">
                            <p class="checkboxText">
                                <input type="checkbox" name="role" value="local" id="checkbox2" <? echo $local; ?>>I'm a local
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