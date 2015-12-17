function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            $('#signup-profile-picture img, #postcard-image img').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}

$("input#user-picture-upload").change(function(){
    readURL(this);
});

// http://jsfiddle.net/LvsYc/ (10/12/2015)