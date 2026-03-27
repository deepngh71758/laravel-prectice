import './bootstrap';

// menu button
const btn = document.getElementById('menu-btn');
const menu = document.getElementById('mobile-menu');
if (btn && menu) {
    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
}



// add post modal
const openBtn = document.getElementById('openModal');
const closeBtn = document.getElementById('closeModal');
const modal = document.getElementById('blogModal');
if (openBtn && closeBtn && modal) {
    openBtn.addEventListener('click', () => {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });

    closeBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
}



// login validations
const login_form = document.getElementById('login_form');

if (login_form) {
    login_form.addEventListener("submit", function(e) {

        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const email_error = document.querySelector('.email_error');
        const password_error = document.querySelector('.password_error');

        let valid = true;

        email_error.classList.add('hidden');
        password_error.classList.add('hidden');

        if (!email.value.trim()) {
            email_error.innerHTML = "Email is required";
            email_error.classList.remove('hidden');
            valid = false;
        } else if (!email.value.includes('@')) {
            email_error.innerHTML = "Enter valid email";
            email_error.classList.remove('hidden');
            valid = false;
        }

        if (!password.value.trim()) {
            password_error.innerHTML = "Password is required";
            password_error.classList.remove('hidden');
            valid = false;
        } else if (password.value.length < 6) {
            password_error.innerHTML = "Password must be at least 6 characters";
            password_error.classList.remove('hidden');
            valid = false;
        }

        if (!valid) {
            e.preventDefault();
        }
    });
}


// registration validation 
const registration_form = document.getElementById('registration_form');

if (registration_form) {
    registration_form.addEventListener( "submit" , function(e){
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const email_error = document.querySelector('.email_error');
        const password_error = document.querySelector('.password_error');
        const name = document.getElementById('name');
        const confirm_password = document.getElementById('confirm_password');
        const name_error = document.querySelector('.name_error');
        const confirm_password_error = document.querySelector('.confirm_password_error');

        let valid = true;

        name_error.classList.add('hidden');
        email_error.classList.add('hidden');
        password_error.classList.add('hidden');
        confirm_password_error.classList.add('hidden');

        if (!name.value.trim()) {
            name_error.innerHTML = "name is required";
            name_error.classList.remove('hidden');
            valid = false;
        }

        if (!email.value.trim()) {
            email_error.innerHTML = "Email is required";
            email_error.classList.remove('hidden');
            valid = false;
        }else if (!email.value.includes('@')) {
            email_error.innerHTML = "Enter valid email";
            email_error.classList.remove('hidden');
            valid = false;
        }

        if (!password.value.trim()) {
            password_error.innerHTML = "Password is required";
            password_error.classList.remove('hidden');
            valid = false;
        } else if (password.value.length < 6) {
            password_error.innerHTML = "Password must be at least 6 characters";
            password_error.classList.remove('hidden');
            valid = false;
        }

        if (password.value !== confirm_password.value) {
            confirm_password_error.innerHTML = "Password dose not match";
            confirm_password_error.classList.remove('hidden');
            valid = false;
        }


        if (!valid){
            e.preventDefault();
        } 
    });
}