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

            <?php include 'getSingelEvents.php'; ?>
    
    <footer>
        <div class="row">
            <div class="col-xs-3">
                <div class="active">
                    <input type="button" value="Events" class="eventBtn" onclick="window.location.assign('m.events.php')">
                </div>
            </div>
        
            <div class="col-xs-3">
                <input type="button" value="Postcards" class="postcardsBtn" onclick="window.location.assign('m.postcards.php')">
            </div>
            
            <div class="col-xs-3">
                <input type="button" value="Diary" class="diaryBtn" onclick="window.location.assign('m.Diary.php')">
            </div>

            <div class="col-xs-3">
                <input type="button" value="Profile" class="profileBtn" onclick="window.location.assign('m.yourProfile.php')">
            </div>
        </div>
    
    </footer>

</body>

</html>