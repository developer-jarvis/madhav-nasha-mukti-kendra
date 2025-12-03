<?php
$baseUrl = "http://localhost/nmk/";
?>
<header class="main-header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="container text-center">
            <ul class="info-list clearfix mt-3">
                <li><strong>Opening Hours </strong>: Monday to Sunday - 8am to 10pm</li>
            </ul>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container clearfix">
            <div class="logo-outer pull-left">
                <div class="logo">
                    <a href="<?= $baseUrl ?>">
                        <span style="font-size:25px; color:#24a3d8; font-weight:800;">Madhav Care Centre</span>
                    </a>
                </div>
            </div>
            <div class="upper-right pull-right text-center">
                <div class="upper-column info-box">
                    <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                    <ul>
                        <li><strong>+91 99057 76271</strong></li>
                        <li><a href="tel:919905776271">+91 99057 76271</a></li>
                    </ul>
                </div>
                <div class="upper-column info-box">
                    <div class="icon-box"><span class="flaticon-placeholder"></span></div>
                    <ul>
                        <li><strong>New Bypass, N.H-30, Near Chandan Automobiles Patna - 800030</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Lower (Sticky Nav) -->
    <div class="header-lower" id="stickyHeader">
        <div class="auto-container clearfix">
            <div class="nav-outer clearfix">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="mobileToggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <nav class="main-menu" id="navMenu">
                    <ul class="navigation clearfix">
                        <li class="current"><a href="<?= $baseUrl ?>">Home</a></li>
                        <li><a href="<?= $baseUrl ?>#about">About Us</a></li>
                        <li><a href="<?= $baseUrl ?>#services">Services</a></li>
                        <li><a href="<?= $baseUrl ?>#gallery">Gallery</a></li>
                        <li><a href="<?= $baseUrl ?>#contact">Contact Us</a></li>
                    </ul>
                </nav>

                <div class="get-btn">
                    <a href="tel:+919905776271" class="theme-btn appt-btn">+91 99057 76271</a>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
/* Sticky header-lower */
#stickyHeader.sticky {
    position: fixed !important;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 9999;
    background: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
}

/* Desktop menu */
#navMenu {
    display: flex;
    justify-content: center;
}

/* Mobile toggle button */
.navbar-toggle {
    display: none;
    cursor: pointer;
    border: none;
    background: transparent;
}

.navbar-toggle span {
    display: block;
    width: 25px;
    height: 3px;
    margin: 5px 0;
    background-color: #000;
}

/* Mobile Menu */
@media (max-width: 991px) {
    #navMenu {
        display: none;
        flex-direction: column !important;
        width: 100%;
        width: 100%;
        margin-top: 10px;
    }

    #navMenu.show {
        display: flex !important;
        flex-direction: column !important;
    }

    #navMenu ul {
        flex-direction: column !important;
    }

    .navigation li {
        width: 100%;
        text-align: start;
        /* margin: 5px 0; */
    }

    .navbar-toggle {
        display: block;
    }
}
</style>

<script>
// Sticky header-lower
const stickyHeader = document.getElementById('stickyHeader');
window.addEventListener('scroll', function() {
    if (window.scrollY > 300) {
        stickyHeader.classList.add('sticky');
    } else {
        stickyHeader.classList.remove('sticky');
    }
});

// Mobile menu toggle
const toggleBtn = document.getElementById('mobileToggle');
const navMenu = document.getElementById('navMenu');

toggleBtn.addEventListener('click', function() {
    navMenu.classList.toggle('show');
});

// Close mobile menu after clicking a link
navMenu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', function() {
        if (window.innerWidth < 992) {
            navMenu.classList.remove('show');
        }
    });
});
</script>