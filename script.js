var adminname = document.forms['form']['admin'];
var pass_word = document.forms['form']['pass_word'];

var name_error = document.getElementById('name_error');
var password_error = document.getElementById('password_error');

function validated() {
    if (adminname.value.length < 1) {
        adminname.style.border = "1px solid red";
        name_error.style.display = "block";
        return false;
    } else {
        name_error.style.display = "none";
    }
    if (pass_word.value.length < 1) {
        pass_word.style.border = "1px solid red";
        password_error.style.display = "block";
        return false;
    } else {
        password_error.style.display = "none";
    }
}