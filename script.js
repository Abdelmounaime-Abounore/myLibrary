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

// _____________________________________________________________________

var title = document.forms['dash_form']['title'];
var author = document.forms['dash_form']['author'];
var price = document.forms['dash_form']['price'];
var quantity = document.forms['dash_form']['quantity'];

var title_error = document.getElementById('title_error');
var author_error = document.getElementById('author_error');
var price_error = document.getElementById('price_error');
var quantity_error = document.getElementById('quantity_error');

function validated2() {
    if (title.value.length < 1) {
        title.style.border = "1px solid red";
        title_error.style.display = "block";
        return false;
    } else {
        title_error.style.display = "none";
    }
}