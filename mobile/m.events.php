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
                <a href="m.createEvent.php"><img src="img/plus.png" alt="" class="plus"></a>

            </div>


        </header>

        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    
                    <form role="search" id="search">
                        <div class="form-group">
                            <input type="text" class="form-control" id="search" placeholder="Search">
                        </div>
                    </form>
                
                </div>
            </div>

            <a href="">
                <div class="eventbox">
                	<div class="row">
                        <div class="col-xs-4" style="padding-right: 0px;">
                            <img src="img/bike.png" alt="" class="event-picture">
                        </div>

                        <div class="col-xs-8" style="padding-left: 0px;">
                            <h2>Tour of Denmark 2015</h2>
                            <p class="event-text"><img src="img/clock-icon.png" alt="" class="event-icon">wedensday, August 5 2015</p>
                            <p class="event-text"><img src="img/map-icon.png" alt="" class="event-icon"> Place here Place here Place here</p>
                        </div>   
                    </div>
                </div>
            </a>

            <a href="">
                <div class="eventbox">
                    <div class="row">
                        <div class="col-xs-4" style="padding-right: 0px;">
                            <img src="img/bike.png" alt="" class="event-picture">
                        </div>

                        <div class="col-xs-8" style="padding-left: 0px;">
                            <h2>Tour of Denmark 2015</h2>
                            <p class="event-text"><img src="img/clock-icon.png" alt="" class="event-icon">wedensday, November 5 2015</p>
                            <p class="event-text"><img src="img/map-icon.png" alt="" class="event-icon"> Place here Place here Place here</p>
                        </div>   
                    </div>
                </div>
            </a>

            <a href="">
                <div class="eventbox">
                    <div class="row">
                        <div class="col-xs-4" style="padding-right: 0px;">
                            <img src="img/bike.png" alt="" class="event-picture">
                        </div>

                        <div class="col-xs-8" style="padding-left: 0px;">
                            <h2>Tour of Denmark 2015</h2>
                            <p class="event-text"><img src="img/clock-icon.png" alt="" class="event-icon">wedensday, August 5 2015</p>
                            <p class="event-text"><img src="img/map-icon.png" alt="" class="event-icon"> Place here Place here Place here</p>
                        </div>   
                    </div>
                </div>
            </a>
        </div>

    
    <footer>
        <div class="row">
            <div class="col-xs-3">
                <div class="active">
                    <a href="m.events.php">
                        <img src="img/calender.png" alt="" class="menuitem"> <br />Events
                    </a>
                </div>
            </div>
        
            <div class="col-xs-3">
                <a href="m.postcards.php">
                    <img src="img/postcard.png" alt="" class="menuitem" /> <br /> Postcard
                </a>
            </div>

            <div class="col-xs-3">
                <a href="m.diary.php">
                    <img src="img/diary.png" alt="" class="menuitem" /> <br />Your Diary
                </a>
            </div>

            <div class="col-xs-3">
                    <a href="m.yourProfile.php">
                        <img src="img/user.png" alt="" class="menuitem" /> <br />Your Profil
                    </a>
            </div>
        </div>
    
    </footer>

</body>

</html>