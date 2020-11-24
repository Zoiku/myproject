var name_check = false;
var username_check = false;
var password_check = false;
var repassword_check = false;

$(document).ready(function(){
    var name = $('#name');
    var usernameinput = $('#username');
    var password = $('#password');
    var repassword = $('#re-password');

    
    $('#name').keyup(function(){
        if(name.val().length > 0){
            if(name.val().length > 7 && name.val().length < 30){
                $('#error-1').css('display', 'none');
                $('#name').css('border-bottom', '1px solid yellowgreen');
                name_check = true;
            } 
            else{
                $('#name').css('border-bottom', '1px solid red');
                $('#error-1').css('display', 'block');
                name_check = false;
            }
        } else{
            $('#name').css('border-bottom', '1px solid black');
            $('#error-1').css('display', 'none');
        }
    });

    $('#username').keyup(function(){
        $.post("usernamevalidation.php", {usernameinput:usernameinput.val()}, function(data){
            if(usernameinput.val().length > 0){
                if(usernameinput.val().length > 5 && usernameinput.val().length < 30){
                    if(usernameinput.val() === data){
                        $('#username').css('border-bottom', '1px solid red');
                        $('#error-2').html('Username taken');
                        $('#error-2').css('display', 'block');
                        username_check = false;
                    } 
                    else {
                        $('#error-2').css('display', 'none');
                        $('#username').css('border-bottom', '1px solid yellowgreen');
                        username_check = true;
                    }
                }
                else{
                    $('#username').css('border-bottom', '1px solid red');
                    $('#error-2').html('Username length must be between 5-30 characters');
                    $('#error-2').css('display', 'block');
                    username_check = false;
                }
            }
            else{
                $('#error-2').css('display', 'none');
                $('#username').css('border-bottom', '1px solid black');
            }
        });
    });

    $('#password').keyup(function(){
        if(password.val().length > 0){
            if(password.val().length > 8 && password.val().length < 30){
                $('#password').css('border-bottom', '1px solid yellowgreen');
                $('#error-3').css('display', 'none');
                password_check = true;
            }
            else{
                $('#password').css('border-bottom', '1px solid red');
                $('#error-3').css('display', 'block');
                password_check = false;
            }
        } 
        else {
            $('#password').css('border-bottom', '1px solid black');
            $('#error-3').css('display', 'none');
        }
    });

    $('#re-password').keyup(function(){
        if(repassword.val().length > 0){
            if(repassword.val() == password.val()){
                $('#re-password').css('border-bottom', '1px solid yellowgreen');
                $('#error-4').css('display', 'none');
                repassword_check = true;
            }
            else{
                $('#re-password').css('border-bottom', '1px solid red');
                $('#error-4').css('display', 'block');
                repassword_check = false;
            }
        } else{
            $('#re-password').css('border-bottom', '1px solid black');
            $('#error-4').css('display', 'none');
        }
    });
});

const validation = () => {
    if(name_check && password_check && repassword_check && username_check){
        return true;
    } else {
        alert("Fill all fields correctly");
        return false;
    }
}