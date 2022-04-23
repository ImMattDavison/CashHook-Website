<!DOCTYPE html>
<html>
    <head>
        <!-- Required Meta -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <!-- Custom CSS -->
            <link rel="stylesheet" href="./style.css">
        <!-- Favicons -->
            <link rel="apple-touch-icon" sizes="180x180" SameSite="Strict" href="./asset/favicon/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" SameSite="Strict" href="./asset/favicon/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" SameSite="Strict" href="./asset/favicon/favicon-16x16.png">
            <link rel="manifest" href="./site.webmanifest">
        <!-- Open Graph tags -->
            <meta property="og:title" content="CashHook | Get More Donations!"/>
            <meta property="og:description" content="CashHook is a simple to use and swift setup webhook tool for Ko-Fi, BuyMeACoffee and Patreon!"/>
            <meta property="og:image" SameSite="Strict" content="https://CashHook.tech/asset/og/mainoog.png"/>
            <meta property="og:site_name" content="CashHook"/>
            <meta name="og:url" SameSite="Strict" content="https://CashHook.tech/">
            <meta property="twitter:card" content="summary_large_image" />
            <meta property="twitter:image" SameSite="Strict" content="https://CashHook.tech/asset/og/mainog.png" />
            <meta property="twitter:site" content="CashHook" />
            <meta name="theme-color" content="#3ec300">
        <!-- SEO meta tags -->
            <title>CashHook | Increase your rate of donations by giving your community the recognition they deserve!</title>
            <meta name="description" content="CashHook is a simple to use and swift setup webhook tool for Ko-Fi, BuyMeACoffee and Patreon!">
            <meta name="keywords" content="Ko-Fi, BuyMeACoffee, Patreon, Donation, Donate">
            <meta name="author" content="Matt Davison">
    </head>
    <body>
        <!-- Navbar -->
        <?php include ('./php/navbar.php');?>
        <!-- Main -->
        <main class="container d-flex main-page-container justify-content-center">
            <div class="align-self-center text-center">
                <h1>Cash<wbr><green>Hook</green></h1><br>
                <p>Increase your rate of donations by giving your community the recognition they deserve!</p>
                <span class="row justify-content-center btn-row">
                    <a class="btn btn-cashhook" href="./#ko-fi">Ko-Fi integration</a>
                    <a class="btn btn-cashhook" href="./#buymeacoffee">BuyMeACoffee integration</a>
                    <a class="btn btn-cashhook" href="./#patreon">Patreon integration</a>
                </span>
            </div>
        </main>
        <div class="container">
            <content class="d-flex flex-wrap align-items-center justify-content-center flexbox-mobile mb-10 mt-10">
                    <div class="half-col">
                        <h2>What is CashHook?</h2>
                        <p>CashHook is a simple to use and swift setup webhook tool for Ko-Fi, BuyMeACoffee and Patreon. CashHook is a project built for MLH event - The Hackconomist. CashHook was made with the intention of making it easier for creators to make sure their community and monetary supporters feel recognised for what they do.</p>
                    </div>
                    <div class="half-col">
                        <img class="example-image" src="https://images.unsplash.com/photo-1580519542036-c47de6196ba5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8bW9uZXl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="money image">
                    </div>
            </content>
            <hr>
            <h3 class="text-center integration-title" id="ko-fi">Ko-Fi Integration</h3><br>
            <content class="d-flex flex-wrap align-items-center justify-content-center flexbox-mobile mb-10 mt-10">
                    <div class="half-col">
                        <img class="example-image" src="https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8ZG9uYXRlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="money">
                    </div>
                    <div class="half-col">
                        <h2>Use CashHook with Ko-Fi.com!</h2>
                        <p>Get started with CashHook on Ko-Fi.com. Install CashHook for Ko-Fi with the below buttons to create a CashHook (webhook). Not a developer? We recommend you use Autocode.com as this will allow you to effortlessly allow you to host your CashHook for Ko-Fi with just a few simple details for your Ko-Fi data and Discord Server!</p>
                    </div>
            </content>
            <div class="d-flex justify-content-center get-row">
                <a class="btn btn-cashhook text-center" href="https://autocode.com/app/cashhook/cashhook-kofi/">Get ko-fi integration on Autocode.com</a>
                <a class="btn btn-cashhook text-center" href="https://github.com/immattdavison/CashHook-KoFi">Get ko-fi integration on Github.com</a>
            </div>
            <hr>
            <h3 class="text-center integration-title" id="buymeacoffee">Buy Me A Coffee Integration</h3><br>
            <content class="d-flex flex-wrap align-items-center justify-content-center flexbox-mobile mb-10 mt-10">
                    <div class="half-col">
                        <img class="example-image" src="https://images.unsplash.com/photo-1541167760496-1628856ab772?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Y29mZmVlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="money">
                    </div>
                    <div class="half-col">
                        <h2>Use CashHook with BuyMeACoffee.com!</h2>
                        <p>Get started with CashHook on BuyMeACoffee.com. Install CashHook for BMC with the below buttons to create a CashHook (webhook). Not a developer? We recommend you use Autocode.com as this will allow you to effortlessly allow you to host your CashHook for BMC with just a few simple details for your BMC data and Discord Server!</p>
                    </div>
            </content>
            <div class="d-flex justify-content-center get-row">
                <a class="btn btn-cashhook text-center" href="https://autocode.com/app/cashhook/cashhook-bmc/">Get BMC integration on Autocode.com</a>
                <a class="btn btn-cashhook text-center" href="https://github.com/immattdavison/CashHook-BMC">Get BMC integration on Github.com</a>
            </div>
            <hr>
            <h3 class="text-center integration-title" id="patron">Patreon Integration</h3><br>
            <content class="d-flex flex-wrap align-items-center justify-content-center flexbox-mobile mb-10 mt-10">
                    <div class="half-col">
                        <img class="example-image" src="https://images.unsplash.com/photo-1512358958014-b651a7ee1773?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGRvbmF0ZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="money">
                    </div>
                    <div class="half-col">
                        <h2>Use CashHook with Patreon.com!</h2>
                        <p>Get started with CashHook on Patreon.com. Install CashHook for Patreon with the below buttons to create a CashHook (webhook). Not a developer? We recommend you use Autocode.com as this will allow you to effortlessly host your CashHook for Patreon with just a few simple details for your Discord Server!</p>
                    </div>
            </content>
            <div class="d-flex justify-content-center get-row">
                <a class="btn btn-cashhook text-center" href="https://autocode.com/app/cashhook/cashhook-patreon/">Get Patreon integration on Autocode.com</a>
                <a class="btn btn-cashhook text-center" href="https://github.com/immattdavison/CashHook-Patreon">Get Patreon integration on Github.com</a>
            </div>
        </div>
        <!-- Footer -->
        <?php include ('./php/footer.php');?>
    </body>
</html>