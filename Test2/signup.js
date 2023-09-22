document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form submission for this example
        // You can add your own AJAX or form submission logic here
        alert("Sign up successful!");
    });
});
