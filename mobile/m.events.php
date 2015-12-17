<!DOCTYPE html>
<html>
    <?php include 'm.head.php'; ?>

    <body>

        <header>
    
            <div class="row">
            
                <a href="m.postcards.php" id="logo-header"><img src="img/logowhite.png" alt="logo" id="logowhite"></a>

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

            <?php include 'getEvents.php'; ?>
    
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