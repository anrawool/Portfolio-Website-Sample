<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom Styles -->
    <link id="themeStylesheet" rel="stylesheet" href="css/style.css">
    <!-- End Custom Styles -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- End Fonts -->
    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- End Tailwind -->
    <!-- Other resouces -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- End Other resouces -->


    <title>My Website</title>
</head>
<body>
    <div id="popup">
        <!-- Header -->
        <section id="header">
            <div class="header container min-w-full">
                <div class="nav-bar">
                    <div class="brand">
                        <img src="./img/Sarthak Rawool-logos.jpeg" alt="Logo" id="my-logo">
                    </div>
                    <div class="nav-list">
                        <div class="hamburger">
                            <div class="bar">

                            </div>
                        </div>
                        <ul>
                            <li><a href="#hero" data-after="Home">Home</a></li>
                            <li><a href="#services" data-after="Services">Services</a></li>
                            <li><a href="#projects" data-after="projects">Projects</a></li>
                            <li><a href="#about" data-after="About">About</a></li>
                            <li><a href="signup.php" data-after="Contact">Contact</a></li>
                            <li><a href="#" onclick="popup()" data-after="Settings">Settings</a></li>
                            <li><a href="signup.html" data-after="Account">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Header -->

        <!-- Hero Section -->
        <section id="hero" class="hero-parallax">
            <div class="flex-hero">
                <div class="hero container">
                    <div class="greet-text">
                        <h1>Hello,<span></span></h1>
                        <h1>My Name is, <span></span></h1>
                        <h1>Sarthak <span></span></h1>
                        <a href="#projects" type="button" class="cta">Portfolio</a>
                </div>
                <div id="time-proj" class="card">
                    <h2 class="display-4">Current Time is: <span id="time"></span></h2>
                </div>
            </div>
        </section>
        <!-- End Hero Section  -->
        <!-- Service Section -->
        <section id="services">
            <div class="service container">
                <div class="service-top">
                    <h1 class="section-title">Our Serv<span>i</span>ces</h1>
                    <p>We offer many services that you can choose to fulfil your needs. These are the ones that are chosen very commonly by others:</p>
                </div>
                <div class="service-bottom">
                    <div class="service-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" alt="none"></div>
                    
                    <h2>Web Design</h2>
                    <p class="service-p">
                        Get your website designed right now! You will get full services and client support from me and I will ensure that you get the best services that i can offer. <br> <br>
                        Web Design, sometimes, can get a little too comploicated for you to handle. But not to worry, I will offer you the best services and get your website up and running in no time! <br> <br> <br>
                        Sign up now to get the best services in short time!!
                    </p>
                    <a href="#" class="cta" target="_blank">Get started</a>
                    </div>
                    <div class="service-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" alt="none"></div>
                    
                    <h2>Web Development</h2>
                    <p class="service-p">
                        Are you a little confused about how to build your website? Then, you are at the right place! Get your website coded and hosted now! <br> <br>
                        Still a little confused? No wrorries, I have got you covered. All you have to do is make a account and sign up for a trial website. <br> <br> <br>
                        Sign up now! Get your own website by sitting in a chair.
                    </p>
                    <a href="#" class="cta" target="_blank">Get started</a>
                    </div>
                    <div class="service-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" alt="none"></div>
                    
                    <h2>Full Website Design and Code</h2>
                    <p class="service-p">
                        Confused which service to choose? Do not worry, get your webiste designed <b>and</b> coded. If you are a busy person and do not get any time, you have come to the correct place. <br> <br>
                        I will design and code your website for you. All you have to do is tell me the type of website you want and Voila! you have your website designed and coded in no time! <br> <br> <br>
                        Sign up now! Have your own website designed and coded in no time!
                    </p>
                    <a href="#" class="cta" target="_blank">Get started</a>
                    </div>
                    <div class="service-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" alt="none"></div>
                    
                    <h2>Web Technologies Updates</h2>
                    <p class="service-p">
                        New to coding? No need to panic, I have got you covered on all the new technologies. Sign up for the daily newsletter on Web Technologies. <br> <br>
                        You will get updates on all front-end and back-end technologies. the more you learn, the better you can code. If you don't know anything about coding, you can start right here! <br> <br> <br>
                        Sign up for the daily newsletter here!
                    </p>
                    <a href="#" class="cta" target="_blank">Get started</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Section -->
        <!-- Projects Section -->
        <div class="projects-parallax"></div>
        <section id="projects">
            <div class="projects container">
            <div class="projects-header">
                    <h1 class="section-title">Recent <span>Projects</span></h1>
                </div>
                <div class="all-projects">
                    <div class="project-item">
                        <div class="project-info ">
                            <h1>Project 1</h1>
                            <h2>The Cloud Hosting Website</h2>
                            <p class="cloud-hosting">
                                I present Loruki. Host your dream website here! You can host websites as large as enterprise level ones to small ones like a small little webpage to show to the entire world. Take your dreams for imagination to reality!!!
                            </p>
                            <a href="Cloud Hosting website/index.html" class="cta" target="_blank">Sign up Now!</a>
                        </div>
                        <div class="project-img">
                            <img src="img/Website img.png" alt="Img 1">
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-info">
                            <h1>Project 2</h1>
                            <h2>Coding is Love</h2>
                            <p>
                                I have made a convinient note taking web app so that you can store all your notes or TODOs in their. I am going to add new features like:
                                <ul>
                                    <li>Searching</li>
                                    <li>Filtering</li>
                                    <li>Tags</li>
                                    <li>And More...</li>
                                </ul>
                            </p>
                            <a href="JavaScript_Project/notes.html" class="cta" target="_blank">Take a Look!</a>
                        </div>
                        <div class="project-img">
                            <img src="img/todo-list-img.png" alt="Img 1">
                        </div>
                        <div class="project-btn">
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-info">
                            <h1>Project 3</h1>
                            <h2>Coding is Love</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                        deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="project-img">
                            <img src="img/images.jpg" alt="Img 1">
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-info">
                            <h1>Project 4</h1>
                            <h2>Coding is Love</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                        deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="project-img">
                            <img src="img/images.jpg" alt="Img 1">
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-info">
                            <h1>Project 5</h1>
                            <h2>Coding is Love</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                        deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="project-img">
                            <img src="img/images.jpg" alt="Img 1">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Projects Section -->

        <!-- Clients Section -->
        <section id="client">
            <div class="clients">
                <div class="cli-header">
                    <h1 class="section-title">What My <span>Clients</span> Think</h1>
                </div>
                <div class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner text-center lg:flex block w-full">
                        <div class="carousel-item active card block mx-6">
                            <img src="img/client-1.jpg" alt="none" class="client-img w-max d-block w-100 mx-auto">
                            <h2 class=" font-bold text-6xl">David<br>Weston</h2>
                            <p class="p-8">The service was awesome! I got a full fledged website in no time. All i did was sign up for the services!<br><b class="font-bold mt-7"> I say, you must try him!</b></p>
                        </div>
                        <div class="carousel-item active card block mx-6">
                            <img src="img/client-2.jpg" alt="none" class="client-img d-block w-100">
                            <h2 class="font-bold text-6xl">Winston Bradson</h2>
                            <p>The service was awesome! I got a full fledged website in no time. All i did was sign up for the services!<br><b class="font-bold mt-7"> I say, you must try him!</b></p>
                        </div>
                        <div class="carousel-item active card block mx-6">
                            <img src="img/client-3.jpg" alt="none" class="client-img d-block w-100">
                            <h2 class="font-bold text-6xl">Peter Anderson</h2>
                            <p>The service was awesome! I got a full fledged website in no time. All i did was sign up for the services!<br><b class="font-bold mt-7"> I say, you must try him!</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Clients Section -->

        <!-- About Me Section -->
        <section id="about">
            <div class="about container">
                <div class="col-left">
                    <div class="about-img">
                        <img src="img/img2.jpeg" alt="image">
                    </div>
                </div>
                <div class="col-right">
                    <h1 class="section-title">About <span>me</span></h1>
                    <h2>Hello, I am a PHP Developer</h2>
                    <a href="app.js" class="cta" download >Download Resume</a>
                </div>
            </div>
        </section>


        <!-- End About Me Section -->

        <!-- Footer -->
        <section id="footer">
            <div class="footer container">
                <div class="brand"><h1><span>S</span>arthak <span> A </span> <span>R</span>awool</h1></div>
                <h2>&nbsp; &nbsp; &nbsp; Your Complete Guide</h2>
                <p>Want to know more about Development?   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="signup.html" class="credits">Sign Up now!</a></p>
                <p>Copyright &copy; 2021 Sarthak Rawool  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="credits.html" class="credits">Credits</a></p>
            </div>
        </section>
    </div>
        <div id="popup-settings">
            <h1 class="section-title">Settings</h1>
                <h2>Light / Dark Mode:</h2>
                <div class="toggle-container">
                    <input type="checkbox" id="switch" name="theme" />
                    <label for="switch">Toggle</label>
                </div>
                <hr>
                <h2>Color Theme:</h2>
                <form action="./" method="post">
                    <select name="themeSelect" id="themeSelect">
                        <option type="checkbox" id="default-switch" name="theme" class="color-theme">Default</option>
                        <option value="tealstyle" type="checkbox" id="teal-switch" name="theme" class="color-theme">Teal</option>
                        <option value="crimsonstyle"type="checkbox" id="crimson-switch" name="theme" class="color-theme">Crimson</option>
                    </select>
                </form>
            <button href="#" onclick="popup()" class="cta">Save</button>
        </div>
        <!-- End Footer -->
    </div>
    <script src="app.js"></script>
    <script>
    $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000, //2000ms = 2s;
        autoplayHoverPause: true,
    });
    </script>
</body>
</html>