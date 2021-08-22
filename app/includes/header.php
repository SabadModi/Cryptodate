<header class="text-gray-600 body-font bg-transparent" style="background-color: transparent;">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">

        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="index.php">
            <img src="assets/img/logo.png" style="height: 100px; width: 200px">
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center text-white">
            <a class="mr-5 hover:text-yellow-400 cursor-pointer" style="color: inherit;" href="index.php#hero">Home</a>
            <a class="mr-5 hover:text-yellow-400 cursor-pointer" style="color: inherit;"
                href="index.php#rates">Rates</a>
            <a class="mr-5 hover:text-yellow-400 cursor-pointer" style="color: inherit;"
                href="index.php#calculator">Coin Calculator</a>
            <a class="mr-5 hover:text-yellow-400 cursor-pointer" style="color: inherit;" href="index.php#team">Team</a>
        </nav>
        <?php if(isset($_SESSION['email'])): ?>
        <a href="logout.php" style="text-decoration: none; color: inherit;">
            <button
                class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"
                id="login">Sign Out
        </a>
        <?php else: ?>
        <a href="register.php" style="text-decoration: none; color: inherit;">
            <button
                class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"
                id="login">Sign Up
        </a>
        <?php endif; ?>
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            class="w-4 h-4 ml-1" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
        </button>
    </div>
</header>