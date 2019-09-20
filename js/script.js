var inputs = document.querySelectorAll('.signup input');
inputs.forEach(function (input) {
    input.addEventListener('click', function () {
        input.nextElementSibling.classList.add('active')
    })
});
var signinInputs = document.querySelectorAll('.signin input');
signinInputs.forEach(function (input) {
    input.addEventListener('click', function () {
        input.nextElementSibling.classList.add('active')
    })
});