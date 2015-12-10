// http://jsfiddle.net/LvsYc/ (10/12/2015)

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            $('#signup-profile-picture img').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}

$("#user-picture-btn input").change(function(){
    readURL(this);
});