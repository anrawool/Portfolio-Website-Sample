<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="themeStylesheet" rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500;700&display=swap" rel="stylesheet">
    <title>My Website</title>
</head>
<body>
    <div id="popup">
        <!-- Header -->
        <section id="header">
            <div class="header container">
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
        <section id="hero">
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
                    <a href="#" class="cta">Download Resume</a>
                </div>
            </div>
        </section>

        <!-- End About Me Section -->

        <!-- Footer -->
        <section id="footer">
            <div class="footer container">
                <div class="brand"><h1><span>S</span>arthak <span> A </span> <span>R</span>awool</h1></div>
                <h2>&nbsp; &nbsp; &nbsp; Your Complete Guide</h2>
                <p>Want to know more about Development?</p>
                <div class="social-icon">
                    <div class="social-item">
                        <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" alt="none"></a>
                    </div>
                    <div class="social-item">
                        <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" alt="none"></a>
                    </div>
                    <div class="social-item">
                        <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/services.png" alt="none"></a>
                    </div>
                </div>
                <p>Copyright &copy; 2021 Sarthak Rawool</p>
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
        const themeSelect = document.getElementById("themeSelect");
        const themeStylesheet = document.getElementById("themeStylesheet");

        themeSelect.addEventListener("change", function () {
            themeStylesheet.setAttribute("href", "css/" + this.value + ".css")
        });
    </script>
</body>
</html>