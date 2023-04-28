const wrapper = document.querySelector('.wrapper');
const loginlink = document.querySelector('.login-link');
const registerlink = document.querySelector('.register-link');

registerlink.addEventListener('click', () => {
    wrapper.classList.add('active');
})

loginlink.addEventListener('click', () => {
    wrapper.classList.add('active');
})


// image nav
var counter = 1;
setInterval(function() {
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if (counter > 4) {
        counter = 1;
    }
}, 5000);