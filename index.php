<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Band</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="assets/fonts/themify-icons/themify-icons.css">
</head>
<body>
    <div class="main">
        <div id="header">
            <!-- Nav -->
            <ul id="nav">
                <li><a href="#">Home</a></li>
                <li><a href="#band">Band</a></li>
                <li><a href="#tour">Tour</a></li>
                <li><a href="#contact">Contact</a></li>
                <li>
                    <a href="#">
                        More
                        <i class="nav-arrow-down ti-angle-down"></i>
                    </a>
                    
                    <ul class="subnav">
                        <li><a href="#">Merchandise</a></li>
                        <li><a href="#">Extras</a></li>
                        <li><a href="#">Media</a></li>
                    </ul>
                </li>
            </ul>
            <!-- End nav -->

            <!-- Begin: Search button -->
            <div class="search-btn">
                <i class="search-icon ti-search"></i>
            </div>

            <div id="search-btn-mobile" class="search-btn-mobile">
                <i class="search-icon-mobile ti-menu-alt"></i>
            </div>
            <!-- End: Search button -->
        </div>

        <div class="slider">
            <div class="text-content">
                <h2 class="text-heading">New York</h2>
                <div class="text-description">The atmosphere in New York is lorem ipsum.</div>
            </div>
        </div>

        <div class="content">
            <div id="band" class="content-section">
                <h2 class="section-heading">THE BAND</h2>
                <p class="section-sub-heading">We love music</p>
                <p class="about-content">
                    We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <div class="row members-list">
                    <div class="menber-item col col-third text-center">
                        <p class="members-name">Name</p>
                        <img src="./assets/images/bandmember-1.jpg" alt="" class="members-img">
                    </div>
                    <div class="menber-item col col-third text-center">
                        <p class="members-name">Name</p>
                        <img src="./assets/images/bandmember-1.jpg" alt="" class="members-img">
                    </div>
                    <div class="menber-item col col-third text-center">
                        <p class="members-name">Name</p>
                        <img src="./assets/images/bandmember-1.jpg" alt="" class="members-img">
                    </div>
                </div>
            </div>

            <div id="tour" class="tour-section">
                <div class="content-section">
                    <h2 class="section-heading text-white">TOUR DATES</h2>
                    <p class="section-sub-heading text-white">Remember to book your tickets!</p>
                    
                    <ul class="tickets-list">
                        <li>September <span class="sold-out">Sold out</span></li>
                        <li>October <span class="sold-out">Sold out</span></li>
                        <li>November <span class="quanliti">3</span></li>
                    </ul>

                    <div class="row places-list">
                        <div class="col col-third mt-16">
                            <img src="./assets/images/tour_1.jpg" alt="" class="places-img">
                            <div class="places-body">
                                <h3 class="places-heading">New York</h3>
                                <p class="places-time">Fri 27 Nov 2022</p>
                                <p class="places-desc">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                <a href="#" class="btn s-full-width">Buy Tickets</a>
                            </div>
                        </div>
                        <div class="col col-third mt-16">
                            <img src="./assets/images/tour_2.jpg" alt="" class="places-img">
                            <div class="places-body">
                                <h3 class="places-heading">Paris</h3>
                                <p class="places-time">Sat 28 Nov 2022</p>
                                <p class="places-desc">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                <a href="#" class="btn s-full-width">Buy Tickets</a>
                            </div>
                        </div>
                        <div class="col col-third mt-16">
                            <img src="./assets/images/tour_3.jpg" alt="" class="places-img">
                            <div class="places-body">
                                <h3 class="places-heading">San Francisco</h3>
                                <p class="places-time">Sun 29 Nov 2022</p>
                                <p class="places-desc">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                <a href="#" class="btn s-full-width">Buy Tickets</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <!-- Begin Contact section -->
            <div id="contact" class="content-section">
                <h2 class="section-heading">CONTACT</h2>
                <p class="section-sub-heading">Fan? Drop a note!</p>
                
                <div class="row contact-content">
                    <div class="col col-half contact-info">
                        <p><i class="ti-location-pin"></i>Chicago, US</p>
                        <p><i class="ti-mobile"></i>Phone: +00 151515</p>
                        <p><i class="ti-email"></i>Email: mail@mail.com</p>
                    </div>
                    <div class="col col-half contact-form">
                        <form action="">
                            <div class="row">
                                <div class="col col-half">
                                    <input type="text" placeholder="Name" required class="form-control">
                                </div>
                                <div class="col col-half">
                                    <input type="email" placeholder="Email" required class="form-control">
                                </div>
                            </div>
                            <div class="row mt-8">
                                <div class="col col-full">
                                    <input type="text" placeholder="Message" required class="form-control">
                                </div>
                            </div>
                            <input class="s-full-width btn-sub btn mt-16" type="submit" value="SEND">
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Contact section -->
            <div class="map-section">
                <img src="./assets/images/map.jpg" alt="map">
            </div>
        </div>

        <div class="footer">
            <div class="social-list">
                <a href=""><i class="ti-facebook"></i></a>
                <a href=""><i class="ti-instagram"></i></a>
                <a href=""><i class="ti-youtube"></i></a>
                <a href=""><i class="ti-pinterest"></i></a>
                <a href=""><i class="ti-twitter"></i></a>
                <a href=""><i class="ti-linkedin"></i></a>
            </div>
            <p class="copyright">Powered by <a href="">w3.css</a></p>
        </div>
    </div>
    <div class="modal">
        <div class="modal-container">
            <div class="modal-close">
                <i class="ti-close"></i>
            </div>

            <header class="modal-header">
                <i class="ti-bag header-icon"></i>
                Tickets
            </header>
            
            <div class="modal-body">
                <label for="quantity" class="modal-label">
                    <i class="ti-shopping-cart"></i>
                    Tickets, $15 per person
                </label>
                <input id="quantity" type="text" class="modal-input" placeholder="How many?">
                <label for="email" class="modal-label">
                    <i class="ti-user"></i>
                    Send To
                </label>
                <input id="email" type="text" class="modal-input" placeholder="Enter email...?">

                <button class="buy-tickets">
                    Pay <i class="ti-check"></i>
                </button>
            </div>
            <footer class="modal-footer">
                <p class="modal-help">Need <a href="#">help?</a></p>
            </footer>
        </div>
    </div>
    <script>
        var mobileMenu = document.getElementById('search-btn-mobile');
        var header = document.getElementById('header');
        var headerHeight = header.clientHeight;

        // Đóng mở menu mobile
        mobileMenu.onclick = function() {
            var isClose = header.clientHeight === headerHeight;
            if (isClose) {
                header.style.height = 'auto';
            }else {
                header.style.height = null;
            }
        }

        // Tự động đóng khi chon menu
        var menuItems = document.querySelectorAll('#nav li a[href*="#"]');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];

            // kiểm tra thẻ kế tiếp
            // console.log(menuItem.nextElementSibling);

            
            menuItem.onclick = function() {
                var isParentMenu = this.nextElementSibling && this.nextElementSibling.classList.contains('subnav');
                if (isParentMenu) {
                    event.preventDefault();
                }else {
                    header.style.height = null;
                }
            }
        }
    </script>
</body>
</html>