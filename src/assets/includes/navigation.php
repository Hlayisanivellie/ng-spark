<?php
$sectionNavHighlight[$pid] = ' activemenu';
$sectionNavHighlightFin[$sectionID] = ' activemenu';
?>
<style>
    li.nav-item .activemenu {
        color: #1F4659;
        background-color: #000;
    }

    .scroll > .scroll-btn {
    position: relative;
    display: block;
    background: #43a9ac;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    text-align: center;
    color: #fff;
    cursor: pointer;
}

.scroll > .scroll-btn span {
    display: block;
    position: relative;
    font-size: 25px;
    top: 50%;
    transform: translateY(-50%);
    color: #fff;
}

.left-ani {
    -webkit-transform: translateX(130px);
    transform: translateX(130px);
    -webkit-transition: 1s;
    transition: 1.25s;
}


.scroll {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 999;
}

.icon-arrow-up:before {
    content: "\e941";
}

span.icon-arrow-up:before {
    font-size: 20px;
    font-family: 'icomoon';
    position: relative;
    transition: 0.6s ease-in-out;
}

    @media screen and (max-width: 991px) {
        .loader-span {
            display: none;
        }

    }
</style>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button onclick="resetDropdowns()" class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
            aria-label="Toggle navigation">
            <img src="images/navigation/hamburger.svg" class="nav-img" alt="">
        </button>
        <a class="navbar-brand" href="index.php"><img src="images/logo1.png" alt="" class="nav-logo"></a>

        <a class="d-flex d-lg-none search-logo" type="submit" href="search-results.php"><img
                src="images/navigation/search.svg" class="nav-img" alt=""></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

            <ul class="navbar-nav ms-8 me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo $sectionNavHighlight['index']; ?>" aria-current="page" href="index.php">Home</a>
                </li>

               <li class="nav-item">
                    <a class="nav-link down-drop <?php echo $sectionNavHighlightFin['two']; ?>" rel="about-us" href="#">About us</a>
                
                </li> 
                
                <li class="nav-item">
                    <a class="nav-link  <?php echo $sectionNavHighlightFin['seven']; ?>" rel="sens" href="#">Contact us</a>

                </li>


            </ul>
            <a class="d-none d-lg-flex search-logo" type="submit" href="search-results.php"><img
                    src="images/navigation/search.svg" class="nav-img" alt=""></a>
        </div>





    </div>

    <div class="loader-span"></div>
</nav>

<div class="scroll left-ani" style="transform: translateX(0px);">
    <div class="scroll-btn">
        <span class="icon-arrow-up"></span>
    </div>
</div>


<script>
    if (window.matchMedia("(min-width: 992px)").matches) {
        // Code to execute when screen width is more than 991px
        $(document).ready(function () {
            $(window).on('scroll', function () {
                var wintop = $(window).scrollTop(),
                    docheight = $(document).height(),
                    winheight = $(window).height();
                var scrolltrigger = 0.95;

                var percScrolled = parseInt((wintop / (docheight - winheight)) * 100);

                $(".loader-span").css('width', percScrolled + "%");


            });
        })
        // Add your logic here
    } else {
        // Code to execute when screen width is less than or equal to 991px
        // console.log("Screen width is 991px or less");
        // Add your logic here
    }
</script>