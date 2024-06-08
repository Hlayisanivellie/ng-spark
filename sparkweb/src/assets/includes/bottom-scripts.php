<script src="js/bootsrap.min.js"></script>

<script>
    $(document).ready(function () {
        $(window).on('scroll', function () {
            if ($(this).scrollTop() >= 200) {
                $('.navbar').addClass('fixed-scroll');
                popTop();
            } else if ($(this).scrollTop() == 0) {
                $('.navbar').removeClass('fixed-scroll');
            }
        });
    })


    function popTop() {

        $(window).on('scroll', function () {
            if ($(this).scrollTop() >= 200) {
                $('.left-ani').css({
                    "transform": "translateX(0)"
                });

            } else {
                $('.left-ani').css({
                    "transform": "translateX(130px)"
                });
            }
        })
    }

    function gotop() {
        $('.scroll-btn').click(function () {
            $("body,html").animate({
                scrollTop: 0
            }, 600);
        });
    }


    $(document).ready(function() {
        gotop();
    });
</script>


<script>
    const links = document.querySelectorAll('.down-drop');

    const linkContents = document.querySelectorAll('.nav-drop-down')
    var currActive = '';
    var mediaQuery = window.matchMedia('(max-width: 991px)');


    // Check if the media query matches
    if (mediaQuery.matches) {
        // Mobile 

        links.forEach((link, index) => {
            //remove the hrefs
            link.href = 'javascript:void(0)';
            link.addEventListener('click', () => {
                if (currActive != link.rel) {
                    let dropdown = document.getElementById(link.rel);
                    linkContents.forEach(content => {
                        content.classList.remove('active');
                    });
                    dropdown.classList.add('active');
                    currActive = link.rel;
                    dropdown.addEventListener('mouseleave', () => {
                        dropdown.classList.remove('active');
                        currActive = '';
                    })

                } else {
                    linkContents.forEach(content => {
                        content.classList.remove('active');
                    });
                    currActive = '';
                }

            })
        });
    } else {
        // Desktop
        links.forEach((link, index) => {
            link.addEventListener('mouseover', () => {
                if (currActive != link.rel) {
                    let dropdown = document.getElementById(link.rel);
                    linkContents.forEach(content => {
                        content.classList.remove('active');
                    });
                    dropdown.classList.add('active');
                    currActive = link.rel;
                    dropdown.addEventListener('mouseleave', () => {
                        dropdown.classList.remove('active');
                        currActive = '';
                    })

                } else {
                    linkContents.forEach(content => {
                        content.classList.remove('active');
                    });
                    currActive = '';
                }
            })
        });
    }

    mediaQuery.addListener(function (mediaQueryList) {
        if (mediaQueryList.matches) {
            // Mobile 
            links.forEach((link, index) => {
                link.addEventListener('click', () => {
                    if (currActive != link.rel) {
                        let dropdown = document.getElementById(link.rel);
                        linkContents.forEach(content => {
                            content.classList.remove('active');
                        });
                        dropdown.classList.add('active');
                        currActive = link.rel;
                        dropdown.addEventListener('mouseleave', () => {
                            dropdown.classList.remove('active');
                            currActive = '';
                        })

                    } else {
                        linkContents.forEach(content => {
                            content.classList.remove('active');
                        });
                        currActive = '';
                    }

                })
            });
        } else {
            // Desktop
            links.forEach((link, index) => {
                link.addEventListener('mouseover', () => {
                    if (currActive != link.rel) {
                        let dropdown = document.getElementById(link.rel);
                        linkContents.forEach(content => {
                            content.classList.remove('active');
                        });
                        dropdown.classList.add('active');
                        currActive = link.rel;
                        dropdown.addEventListener('mouseleave', () => {
                            dropdown.classList.remove('active');
                            currActive = '';
                        })

                    } else {
                        linkContents.forEach(content => {
                            content.classList.remove('active');
                        });
                        currActive = '';
                    }
                })
            });
        }
    });

    function resetDropdowns() {
        linkContents.forEach(content => {
            content.classList.remove('active');
        });
    }
</script>