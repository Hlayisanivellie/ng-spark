<style>
    .top-foot-bg {
        background-color: #43A9AC;
        padding: 30px 0;
        margin-top: 50px;
    }

    .set-apart {
        display: flex;
        justify-content: space-between;
        place-items: center;
    }

    a.controls {
        text-decoration: none !important;
        font-size: 18px;
        font-weight: 400;
        position: relative;
        color: #1F4650;
        display: flex;
        place-items: center;
        font-family: "Manrope", sans-serif;
    }

    a.controls::before {
        transition: all .3s ease-in-out;
    }

    a.controls::before {
        font-family: 'icomoon';
        display: flex;
        justify-content: center;
        place-items: center;
        position: absolute;
        height: 28px;
        width: 28px;
        border-radius: 50%;
        border: 1px solid #1F4650;
        font-size: 14px;
        font-weight: 900;
        color: #1F4650;
    }

    a.controls.prev {
        padding-left: 42px;
    }

    a.controls.next {
        padding-right: 42px;
    }

    a.controls.prev:hover::before {
        transform: translateX(-10px);
    }

    a.controls.next:hover::before {
        transform: translateX(10px);
    }

    a.controls.prev::before {
        left: 0;
    }

    a.controls.next::before {
        right: 0;
    }

    a.controls i {
        font-style: normal;
    }

    .bottom-foot-bg {
        padding: 30px 0;
        background-color: #0F1E41;
    }

    ul.footer-nav {
        list-style: none;
        display: flex;
        gap: 20px;
        padding-left: 0;
        padding-bottom: 20px;
        border-bottom: 1px solid #fff;
        width: 100%;

    }

    ul.policy-docs {
        list-style: none;
        display: flex;
        gap: 20px;
        padding-left: 0;
    }

    ul.footer-nav li a,
    ul.policy-docs li a {
        text-decoration: none;
        color: #fff;
        white-space: nowrap;
        text-wrap: nowrap;
        transition: all .3s ease-in-out;
    }

    ul.footer-nav li a:hover,
    ul.policy-docs li a:hover {
        color: #43A9AC;
    }


    .bottom-socials {
        display: flex;
        justify-content: space-between;
    }

    .bottom-socials p {
        color: #fff;
    }

    .social-icons {
        display: flex;
        gap: 8px;
    }

    @media screen and (max-width:1400px) {
        .custom-breaks .col-lg-2 {
            width: 100%;
        }

        .custom-breaks .col-lg-10 {
            width: 100%;
        }
    }

    @media screen and (max-width:1200px) {
        .bottom-socials {
            flex-direction: column-reverse;
            gap: 10px;
        }
    }



    @media screen and (max-width: 991px) {
        ul.footer-nav {
            margin-bottom: 0;
        }

        ul.footer-nav,
        ul.policy-docs {
            flex-direction: column;
            border-bottom: none;
            gap: 15px;
        }

        .bottom-socials {
            justify-content: start;
            gap: 15px;
        }
    }

    @media screen and (max-width: 600px) {
        a.controls i {
            display: none;
        }
    }
</style>

<footer>
    <div class="top-foot-bg">
        <div class="container">
            <div class="set-apart">
                <a href="<?= $prevLink . '.php' ?>" class="controls prev icon-chevron-left"><i><?= $prevTitle ?></i></a>
                <a href="<?= $nextLink . '.php' ?>" class="controls next icon-chevron-right"><i><?= $nextTitle ?></i></a>
            </div>
        </div>

    </div>
    <div class="bottom-foot-bg">

        <div class="container">
            <div class="row custom-breaks">
                <div class="col-lg-2">
                    <a href="index.php"><img src="images/logo1.png" class="mw-100 mb-3"
                            alt="Logo footer"></a>
                </div>
                <div class="col-lg-10">

                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>

                    <div class="bottom-socials">
                        <p class="mb-0">Copyright&nbsp;&copy;&nbsp;2024&nbsp;Spark Innovative Solutions. All rights reserved.</p>

                        <!-- <ul class="policy-docs">
                            <li><a href="sitemap.php">Sitemap</a></li>
                            <li><a href="#" target="_blank">Privacy policy</a></li>
                            <li><a href="#" target="_blank">Terms and conditions</a></li>
                            <li><a href="code-of-ethics.php">Code of ethics </a></li>
                            <li><a href="paia-manual.php">PAIA </a></li>
                            <li><a href="disclaimer.php">Disclaimer </a></li>


                        </ul>-->

                        <div class="social-icons">
                            <a href="#" target="_blank"><img src="images/footer/facebook.svg" alt=""></a>
                            <a href="#" target="_blank"><img src="images/footer/x.svg" alt=""></a>
                            <a href="#" target="_blank"><img src="images/footer/youtube.svg" alt=""></a>
                            <a href="#" target="_blank"><img src="images/footer/linkedIn.svg" alt=""></a>
                            <a href="#" target="_blank"><img src="images/footer/instagram.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>