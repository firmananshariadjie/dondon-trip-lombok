<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/css/uikit.min.css" />

    <title>Document</title>
</head>

<body>
    <div class="uk-position-relative">
        <img src="img/gambar1.jpg" alt="">
        <div class="uk-position-top">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <a class="uk-navbar-item uk-logo" href="#"><img src="img/logo2.png" alt="" width="50px"></a>
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li>
                            <a href="#">Parent</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-header">Header</li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="b">
                        <p uk-margin>
                            <button class="uk-button uk-button-default uk-button-small">Small button</button>
                            <button class="uk-button uk-button-primary uk-button-small">Small button</button>
                            <button class="uk-button uk-button-secondary uk-button-small">Small button</button>
                        </p>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="uk-section uk-section-primary">
        <div class="uk-container uk-container-small">
            <h1>Welcome in Dondon-Beach</h1>
            <br>
            <h2>hai</h2>
            <br>
            <p>akjfjdsbkjsdbkdsbkgk</p>
        </div>
    </div>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit-icons.min.js"></script>
</body>

</html>