var adminname = document.forms['form']['admin'];
var pass_word = document.forms['form']['pass_word'];
var name_error = document.getElementById('name_error');
var password_error = document.getElementById('password_error');

function validated() {
    if (adminname.value.length < 1) {
        adminname.style.border = "1px solid red";
        name_error.style.display = "block";
        x = false;
    } else {
        name_error.style.display = "none";
        x = true;
    }
    if (pass_word.value.length < 1) {
        pass_word.style.border = "1px solid red";
        password_error.style.display = "block";
        x = false;
    } else {
        password_error.style.display = "none";
        x = true;
    }

    return x;
}

// _____________________________________________________________________



var signup_name = document.forms['form']['admin_name'];
var email = document.forms['form']['email'];
var password = document.forms['form']['pass_word'];
var confirm_password = document.forms['form']['confirm_password'];

var admin_name_error = document.getElementById('admin_name_error');
var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('password_error');
var confirm_pass_error = document.getElementById('confirm_password_error');

function signUpValide() {

    var x;

    if (signup_name.value.length < 1) {
        signup_name.style.border = "1px solid red";
        admin_name_error.style.display = "block";
        x = false;
    } else {
        admin_name_error.style.display = "none";
        x = true;
    }

    if (email.value.length < 1) {
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        x = false;
    } else {
        email_error.style.display = "none";
        x = true;
    }

    if (password.value.length < 1) {
        password.style.border = "1px solid red";
        pass_error.style.display = "block";
        x = false;
    } else {
        pass_error.style.display = "none";
        x = true;
    }

    if (confirm_password.value.length < 1) {
        confirm_password.style.border = "1px solid red";
        confirm_pass_error.style.display = "block";
        x = false;
    } else {
        confirm_pass_error.style.display = "none";
        x = true;
    }

    return x;

    
}


// _____________________________________________________________________


var title = document.forms['form']['title'];
var author = document.forms['form']['author'];
var price = document.forms['form']['price'];
var quantity = document.forms['form']['quantity'];

var title_error = document.getElementById('title_error');
var author_error = document.getElementById('author_error');
var price_error = document.getElementById('price_error');
var quantity_error = document.getElementById('quantity_error');



function dashFormValide() {
    var x;
    if (title.value.length < 1) {
        title_error.style.display = "block";
        x = false;
    } else {
        title_error.style.display = "none";
        x = true;
        
    }
    
    if (author.value.length < 1) {
        author_error.style.display = "block";
        x = false;
    } else {
        author_error.style.display = "none";
        x = true;
    }
    
    if (price.value.length < 1) {
        price_error.style.display = "block";
        x = false;
    } else {
        price_error.style.display = "none";
        x = true;
    }
    
    if (quantity.value.length < 1) {
        quantity_error.style.display = "block";
        x = false;
    } else {
        quantity_error.style.display = "none";
        x = true;
    }
    return x;


}


// ___________________________________________________________________________________


var up_title = document.forms['form']['title'];
var up_author = document.forms['form']['author'];
var up_price = document.forms['form']['price'];
var up_quantity = document.forms['form']['quantity'];

var up_title_error = document.getElementById('up_title_error');
var up_author_error = document.getElementById('up_author_error');
var up_price_error = document.getElementById('up_price_error');
var up_quantity_error = document.getElementById('up_quantity_error');

function updateValide(e) {
    
   
    if (up_title.value == "") {
        up_title_error.style.display = "block";
        e.preventDefault();
    } else {
        up_title_error.style.display = "none";
        
    }
    
    if (up_author.value.length < 1) {
        up_author_error.style.display = "block";
        e.preventDefault();
    } else {
        up_author_error.style.display = "none";
        
    }
    
    if (up_price.value.length < 1) {
        up_price_error.style.display = "block";
        e.preventDefault();
    } else {
        up_price_error.style.display = "none";
    }
    
    if (up_quantity.value.length < 1) {
        up_quantity_error.style.display = "block";
        e.preventDefault();
    } else {
        up_quantity_error.style.display = "none";
        
    }
}