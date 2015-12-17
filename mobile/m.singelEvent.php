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

            <?php include 'getSingelEvents.php'; ?>
    
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