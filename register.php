<?php
include('app/controllers/userAuth.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/authForm.css" />
    <title>Register</title>
</head>

<body class="text-blueGray-700 antialiased absolute top-0 w-full h-full bg-blueGray-800 bg-full bg-no-repeat"
    style="background-image: url(assets/img/register_bg_2.png)">
    <header class="text-gray-600 body-font bg-transparent" style="background-color: transparent;">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">

            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="index.php">
                <img src="assets/img/logo.png" style="height: 100px; width: 200px">
            </a>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center text-white">
                <a class="mr-5 hover:text-yellow-400 cursor-pointer" style="color: inherit;"
                    href="index.php#hero">Home</a>
                <a class="mr-5 hover:text-yellow-400 cursor-pointer" style="color: inherit;"
                    href="index.php#rates">Rates</a>
                <a class="mr-5 hover:text-yellow-400 cursor-pointer" style="color: inherit;"
                    href="index.php#calculator">Coin Calculator</a>
                <a class="mr-5 hover:text-yellow-400 cursor-pointer" style="color: inherit;"
                    href="index.php#team">Team</a>
            </nav>
            <a href="login.php" style="text-decoration: none; color: inherit;">
                <button
                    class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"
                    id="login">Sign In
            </a>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
            </button>
        </div>
    </header>
    <main>
        <section class="relative w-full h-full py-40 min-h-screen">
            <div class="container mx-auto px-4 h-full">
                <div class="flex content-center items-center justify-center h-full">
                    <div class="w-full lg:w-6/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
                            <div class="rounded-t mb-0 px-6 py-6">
                                <div class="text-center mb-3">
                                    <h6 class="text-blueGray-500 text-sm font-bold">
                                        Sign up with
                                    </h6>
                                </div>
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <form id="registerForm" action="" method="POST">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Name
                                        </label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Name" required name="username" id="username" minlength="5" />
                                    </div>

                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Email
                                        </label>
                                        <input type="email"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Email" required name="email" id="email" />
                                    </div>

                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Password
                                        </label>
                                        <input type="password"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Password" required name="password" id="password"
                                            minlength="7" />
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Confirm Password
                                        </label>
                                        <input type="password"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Confirm Password" required name="passwordConf"
                                            id="passwordConf" minlength="7" />
                                    </div>
                                    <div class="text-center mt-6">
                                        <button
                                            class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                            name="submitRegister" id="submitRegister" type="submit">
                                            Create Account
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<script>
$(document).ready(function() {
    $("#registerForm").validate({
        errorClass: "error fail-alert",
        validClass: "valid success-alert",
        rules: {
            username: {
                required: true,
                minlength: 5
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 7,
                equalTo: '#passwordConf'
            },
            passwordConf: {
                required: true,
                minlength: 7,
                equalTo: '#password'
            }
        },
        messages: {
            username: {
                minlength: "Username should be at least 5 characters"
            },
            email: {
                email: "Please enter a valid email address in the format: abc@domain.com"
            },
            password: {
                minlength: "Username should be at least 7 characters",
                equalTo: "Passwords do not match"
            },
            passwordConf: {
                minlength: "Username should be at least 7 characters",
                equalTo: "Passwords not match"
            }
        }
    });
});
</script>

<script>
/* Make dynamic date appear */
(function() {
    if (document.getElementById("get-current-year")) {
        document.getElementById(
            "get-current-year"
        ).innerHTML = new Date().getFullYear();
    }
})();
/* Function for opning navbar on mobile */
function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("block");
}
/* Function for dropdowns */
function openDropdown(event, dropdownID) {
    let element = event.target;
    while (element.nodeName !== "A") {
        element = element.parentNode;
    }
    Popper.createPopper(element, document.getElementById(dropdownID), {
        placement: "bottom-start",
    });
    document.getElementById(dropdownID).classList.toggle("hidden");
    document.getElementById(dropdownID).classList.toggle("block");
}
</script>

</html>