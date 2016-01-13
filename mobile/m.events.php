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
                    <input type="button" value="Events" class="eventBtn">
                </div>
            </div>
        
            <div class="col-xs-3">
                <input type="button" value="Postcards" class="postcardsBtn">
            </div>

            <div class="col-xs-3">
                <input type="button" value="Diary" class="diaryBtn">
            </div>

            <div class="col-xs-3">
                <input type="button" value="Profile" class="profileBtn">
            </div>
        </div>
    
    </footer>

</body>

</html>