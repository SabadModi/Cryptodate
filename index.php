<?php include('app/database/db.php') ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All in one Cryto App that you need</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/faa1fe5a90.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/calculator.css" />

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
</head>

<body class="bg-black" style="font-family: oswald;">

    <!-- BITCOIN PIC -->
    <section class="bg-scroll"
        style="z-index: 0; background-image: url(assets/img/bitcoinbg.jpeg); background-position: 50% 50%; overflow: hidden;">
        <!-- HEADER -->
        <?php include('app/includes/header.php'); ?>
        <!-- // HEADER -->

        <!-- HERO -->
        <section class="text-white body-font bg-scroll" id="hero">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div
                    class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-left">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 text-white ">The Volatile Market:
                        <br class="hidden lg:inline-block">Now Tamed
                    </h1>
                    <p class="mb-8 leading-relaxed">There is nothing that is as confusing to get into as the
                        cryptocurrency market. New investors will often find themselves scrambling to figure out what to
                        do, but no longer. We present: CryptoDate, the All In One Cryptocurrency app that contains
                        anything one might need for investing, be they a new or veteran investor.</p>
                    <?php if(isset($_SESSION['email'])): ?>

                    <div class="flex justify-center">
                        <a href="admin/dashboard.php"><button
                                class="inline-flex text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">
                                Go to Dashboard
                            </button>
                        </a>
                    </div>
                    <?php else: ?>
                    <div class="flex justify-center">
                        <a href="login.php"><button
                                class="inline-flex text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">Sign
                                In</button></a>
                        <button
                            class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Register
                            Now</button>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                </div>
        </section>
        <!-- // HERO -->

    </section>
    <!-- //BITCOIN PIC -->


    <!-- RATES -->
    <section class="text-gray-600 body-font rounded-b-lg"
        style="background-image: url(assets/img/crypto-bitcoin.png); background-position: center; background-repeat: no-repeat; background-size: cover;"
        id="rates">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full">
                <h1 class="sm:text-4xl text-3xl font-black title-font mb-2 text-yellow-400">Rates</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed font-bold text-yellow-400">Find the rates of the most
                    trending Cryptocurrencies here!</p>
            </div>
            <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-3">
                    <?php
                        $json = file_get_contents('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=3&page=1&sparkline=false&price_change_percentage=24h');
                        $obj = json_decode($json);
                        foreach ($obj as $jsonObj) :
                    ?>
                    <div id="jh-stats-positive"
                        class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                        <div>
                            <div>
                                <p class="flex items-center justify-end text-md">
                                    <span class="font-bold"><?php echo $jsonObj->price_change_24h; ?> USD Change</span>
                                </p>
                            </div>
                            <p class="text-3xl uppercase font-semibold text-center text-gray-800">
                                <?php echo $jsonObj->current_price; ?> USD
                            </p>
                            <p class="text-lg uppercase text-center text-gray-500"><?php echo $jsonObj->id; ?> </p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- // RATES -->

    <br>

    <a href="https://twitter.com/intent/tweet?button_hashtag=CryptoCurrency&ref_src=twsrc%5Etfw"
        class="twitter-hashtag-button" data-related="ElonMusk" data-show-count="false">Tweet #CryptoCurrency</a>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <!-- STEP-BY-STEP -->

    <section class="text-gray-600 body-font bg-yellow-200" id="steps">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <div
                    class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-white text-yellow-500 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Registration</h2>
                    <p class="leading-relaxed text-base">
                        Register yourself on our website to have aceess to all the wonderful features we have awaiting
                        you. These include Latest Market Prices, News, Community Discussions etc.
                    </p>
                </div>
            </div>

            <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <div
                    class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-white text-yellow-500 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Learn</h2>
                    <p class="leading-relaxed text-base">
                        Through our website, find out about all the different Cryptocurrencies with in-depth details
                        such as how to invest, when is the best time to invest etc.
                    </p>
                </div>
            </div>
            <div class="flex items-center lg:w-3/5 mx-auto sm:flex-row flex-col">
                <div
                    class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-white text-yellow-500 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Invest</h2>
                    <p class="leading-relaxed text-base">
                        After learning the basics of investing an d cryptocurrencies, you should be abel to stay up to
                        date with latest Cryptocurrency news and talks and use that knowledge to invest in the market.
                    </p>

                </div>
            </div>

            <?php if(isset($_SESSION['email'])): ?>
            <a href="admin/dashboard.php">
                <button
                    class="flex mx-auto mt-20 text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg">
                    Dashboard
                </button>
            </a>

            <?php else: ?>
            <a href="register.php">
                <button
                    class="flex mx-auto mt-20 text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg">
                    Get Started
                </button>
            </a>
            <?php endif; ?>
        </div>
    </section>

    <!-- // STEP-BY-STEP -->

    <!-- Calculator -->
    <section class="text-gray-600 body-font"
        style="background-image: url(assets/img/bitcoincalc.png); background-position: center; background-repeat: no-repeat; background-size: cover;"
        id="calculator">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">

                <div class="container">
                    <h1 class="title text-black">Bitcoin Calculator</h1>
                    <div class="claculatorbox">
                        <div class="item">
                            <input type="number" id="crytovalue" name="crytovalue" class="valuefield" value="1"
                                min="0.1" step="1" required>
                            <select name="crytoselect" id="crytoselect"></select>
                        </div>

                        <div class="item">
                            <input type="number" id="fiatvalue" name="fiatvalue"
                                class="valuefield rounded border-yellow-200" value="" min="0.1" step="0.01" required>
                            <select name="fiatselect" id="fiatselect"></select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- //Calculator -->

    <!-- TEAM -->
    <section class="team-section spad" id="team">
        <div class="container p-8">
            <div class="section-title text-center">
                <h2>Meet Our Team</h2>
                <p>Our experts in the field of crypto currency can always help you with any of your questions!</p>
            </div>
        </div>
        <div class="team-members clearfix m-4">
            <!-- Team member -->
            <div class="member">
                <div class="member-text">
                    <div class="member-img set-bg"
                        style="background-image: url(assets/img/me.jpeg); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    </div>
                    <h2>Sabad Modi</h2>
                    <span>Developer</span>
                </div>
                <div class="member-social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                </div>
                <div class="member-info">
                    <div class="member-img mf set-bg"
                        style="background-image: url(assets/img/me.jpeg); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    </div>
                    <div class="member-meta">
                        <h2>Sabad</h2>
                        <span>Developer</span>
                    </div>
                    <p>
                        Sabad is a Machine Learning Enthusiast and a Web Developer.
                        He loves to program, especially ML Projects.
                        Really enthusiastic and Passionate about whatever he does
                    </p>
                </div>
            </div>
            <!-- Team member -->
            <div class="member">
                <div class="member-text">
                    <div class="member-img set-bg"
                        style="background-image: url(assets/img/aekam.jpeg); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    </div>
                    <h2>Aekam Singh Pal</h2>
                    <span>Developer</span>
                </div>
                <div class="member-social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                </div>
                <div class="member-info">
                    <div class="member-img mf set-bg"
                        style="background-image: url(assets/img/aekam.jpeg); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    </div>
                    <div class="member-meta">
                        <h2>Aekam Singh Pal</h2>
                        <span>Developer</span>
                    </div>
                    <p>
                        Aekam is a Machine Learning Enthusiast and a Web Developer.
                        He loves to program, especially ML Projects.
                        Really enthusiastic and Passionate about whatever he does
                    </p>
                </div>
            </div>
            <!-- Team member -->
            <div class="member">
                <div class="member-text">
                    <div class="member-img set-bg"
                        style="background-image: url(member/1.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    </div>
                    <h2>John Doe</h2>
                    <span>Business Development</span>
                </div>
                <div class="member-social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                </div>
                <div class="member-info">
                    <div class="member-img mf set-bg"
                        style="background-image: url(member/1.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    </div>
                    <div class="member-meta">
                        <h2>John Doe</h2>
                        <span>Marketing Director</span>
                    </div>
                    <p>Jackson Nash is a full-time faculty member of the Marketing and Behavioural Science Division at
                        the Sauder School of Business at UBC. He leads the Entrepreneurship Group, in the undergraduate
                        and graduate programs, teaching actively in both of these.</p>
                </div>
            </div>
            <!-- Team member -->
            <div class="member">
                <div class="member-text">
                    <div class="member-img set-bg"
                        style="background-image: url(member/2.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    </div>
                    <h2>Jane Doe</h2>
                    <span>Business Development</span>
                </div>
                <div class="member-social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                </div>
                <div class="member-info">
                    <div class="member-img mf set-bg"
                        style="background-image: url(member/2.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    </div>
                    <div class="member-meta">
                        <h2>Jane Doe</h2>
                        <span>Marketing Director</span>
                    </div>
                    <p>Jackson Nash is a full-time faculty member of the Marketing and Behavioural Science Division at
                        the Sauder School of Business at UBC. He leads the Entrepreneurship Group, in the undergraduate
                        and graduate programs, teaching actively in both of these.</p>
                </div>
            </div>

            <!-- Team member -->
            <div class="member">
                <div class="member-text">
                    <div class="member-img set-bg"
                        style="background-image: url(member/3.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    </div>
                    <h2>Jonathan Doe</h2>
                    <span>Business Development</span>
                </div>
                <div class="member-social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                </div>
                <div class="member-info">
                    <div class="member-img mf set-bg"
                        style="background-image: url(member/3.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    </div>
                    <div class="member-meta">
                        <h2>Jonathan Doe</h2>
                        <span>Marketing Director</span>
                    </div>
                    <p>Jackson Nash is a full-time faculty member of the Marketing and Behavioural Science Division at
                        the Sauder School of Business at UBC. He leads the Entrepreneurship Group, in the undergraduate
                        and graduate programs, teaching actively in both of these.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- //TEAM -->

    <!-- FOOTER -->
    <footer class="text-white body-font bg-gray-800">
        <div class="bg-gray-900">
            <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2"
                        class="w-10 h-10 text-white p-2 bg-yellow-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <span class="ml-3 text-xl">Cryptodate</span>
                </a>
                <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2021 Cryptodate
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                    <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>
    <!-- //FOOTER -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="assets/js/calculator.js"></script>
    <script>
    $('.slick').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        autoplay: 3000,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 1
                }
            }
        ]
    });
    </script>
</body>

</html>