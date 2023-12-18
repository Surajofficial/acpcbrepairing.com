<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/mainurl.php' ?>
<!doctype html>
<html lang="en">



<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P2TWFGX');</script>
<!-- End Google Tag Manager -->


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $metaData['title'] ?></title>
    <link rel="alternate" href="<?= URL ?>" hreflang="en-in" />
    <meta name="description" content="<?= $metaData['description'] ?>">
    <meta content="index, follow" name="robots">
    <meta name="YahooSeeker" content="index, follow">
    <meta name="msnbot" content="index, follow">
    <meta name="Googlebot" content="follow">
    <meta name="revisit-after" content="2 days">
    <meta name="geography" content="India">
    <meta name="country" content="india">
    <meta name="robots" content="index, follow">
    <meta name="copyright" content="Multitech">
    <style>
    @media screen and (max-width: 500px) {
            .mobile_enquiry{
            min-width:120px !important;
            font-size: 12px;
             height:37px !important; 
             overflow:hidden;
            }
            .enquiry{
            min-width: 120px !important;
            }
            
        }
    </style>
    <meta name="dcterms.rightsHolder" content="Multitech Institute of Advance Technologies Pvt. Ltd">
<?php if (str_replace('/', '', $_SERVER['PHP_SELF']) == 'page.php') { ?>
    <link rel="canonical" href="<?= URL . $_GET['url']  ?>" />
    <?php } else if (str_replace('/', '', $_SERVER['PHP_SELF']) == "blogindex.php") { ?>
    <link rel="canonical" href="<?= URL . "blog"  ?>" />
    <?php } else if (str_replace('/', '', $_SERVER['PHP_SELF']) == "index.php") { ?>
    <link rel="canonical" href="<?= str_replace('.com/', '.com', URL)  ?>" />
    <?php } else { ?>
    <link rel="canonical" href="<?= URL . str_replace('/', '', $_SERVER['PHP_SELF']) ?>" />
    <?php } ?>
    <link rel="shortcut icon" href="<?= URL ?>assets/media/icon.png" type="image/x-icon">
    <link rel="icon" href="<?= URL ?>assets/media/icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>assets/boostrap/css/all.min.css">
    <link rel="stylesheet" href="<?= URL ?>assets/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,500;0,600;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        ul.dropdown-menu {
            margin-top: 43px;
        }

        body {
            user-select: none !important;
        }
    </style>
    <style>
        .mkmarquee {
            background: #002063;
            color: #fff;
            font-weight: bold;
            padding: 7px 0px 5px 0;
        }

       
        @media screen and (max-width: 770px) {
            .for-mobile {
                display: block;
            }

            .mobile_section {
                margin-top: 0px !important;
            }
            28
        }

        slide {
            top: 0px !important;
        }

        .navbar-toggler-icon {
            color: #fff I !important;
        }
    </style>
</head>

<body>
    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2TWFGX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <div class="container-fluid m-0 p-0 mt-0 text-center mobile_section ">
        <div class="container-fluid mt-0 for-mobile mkmarquee">
            <marquee loop="-1"> ONLINE COURSES AVAILABLE | AC मेकेनिकल और AC PCB रिपेयरिंग सीखे Expert द्वारा | 100% प्रैक्टिकल के साथ रिपेयरिंग सीखे|</marquee>
        </div>

        <div class="text-center  bg-red-mobile d-md-block d-none">
            <div class="social-links">Connect with us:
                <a href="https://www.facebook.com/multitechinstitute" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/Multitechdelhi" class="twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/channel/UCoHztc5u7oUnMJiguYdQq6g" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
                <a href="https://www.linkedin.com/in/multitechdelhi" target="_blank" class="linkedin"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.instagram.com/multitechdelhi" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <a href="index.php"> <img src="<?= URL; ?>assets/media/logo.png" alt="Logo" class="m-auto py-2 mobile_logo" /></a>
        <div class="col-10 mx-auto blink_me zoom_ot">
            <i class="fas fa-phone-alt"></i> Call Us: <a href="tel:+91-9599704405" style="text-decoration:none;color:#333;">+91-9599704405</a>
        </div>

    </div>

    <?php include("menu/mobilenav.inc.php"); ?>
    <div class=" container-fluid nav_bar my-2 desktop_section  ">
        <div class="container nav_bar">
            <div class="hotel text-white"><i class="fas fa-bed">&nbsp;&nbsp;&nbsp;</i> HOSTEL AVAILABLE FOR STUDENTS </div>
            <div class="social-links text-white">Connect with us:
                <a href="https://www.facebook.com/multitechinstitute" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/Multitechdelhi" class="twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/channel/UCoHztc5u7oUnMJiguYdQq6g" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
                <a href="https://www.linkedin.com/in/multitechdelhi" target="_blank" class="linkedin"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.instagram.com/multitechdelhi" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <header id="header1" class="wow zoomIn for-desktop desktop_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-lg-3 text-left">
                    <div id="logo" class="pull-left">
                        <a href="/"><img src="<?= URL; ?>assets/media/logo.png" alt="logo" class="logo"></a>
                    </div>
                </div>
                <div class="col-md-9 col-lg-9 text-left">
                    <div class="row">
                        <div class="col-md-4 box_sec_1 head_box">
                            <div class="icon-box">
                                <div class="icon-left">
                                    <i class="fas fa-map-marker-alt fa-2x color-red"></i>
                                </div>
                                <h3>Multitech Institute </h3>
                                <p>New Delhi, India.</p>
                            </div>
                        </div>
                        <div class="col-md-4  box_sec_2">
                            <div class="icon-box">
                                <div class="icon-left">
                                    <i class="fas fa-mobile-alt fa-2x color-red"></i>
                                </div>
                                <h3>Call Us: <a href="tel:+91-9599704405" style="text-decoration:none;color:#333333;">+91-9599704405</a></h3>
                                <p>For course information</p>
                            </div>
                        </div>
                        <div class="col-md-4  box_sec_3">
                            <div class="icon-box">
                                <div class="icon-left">
                                    <i class="fab fa-whatsapp fa-2x color-red"></i>
                                </div>
                                <h3>Whatsapp: <a href="tel:+91-9599704405" style="text-decoration:none;color:#333;">+91-9599704405</a></h3>
                                <p>For Demo Class Whatsapp</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            text-transform: uppercase;
        }

        p {
            text-align: justify;
        }

        .facebook {
            color: #4267B2 !important;
        }

        .twitter {
            color: #1DA1F2 !important;
        }

        .linkedin {
            color: #0e76a8 !important;
        }

        .youtube {
            color: red !important;
        }

        .single-course-details :is(h1,
            h2,
            h3,
            h4,
            h5,
            h6) {
            font-size: 1.3em !important;
        }
    </style>
    <?php include("menu/desknav.inc.php"); ?>