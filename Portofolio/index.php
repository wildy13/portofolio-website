<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/style.css">
    <!-- Font Awsome CSS for icons -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <title>Document</title>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angel-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="">Portofo<span>lio</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#experience" class="menu-btn">Experience</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Wildy Johanes Simanjuntak</div>
                <div class="text-3">And I'm a <span 
                 class="typer"
                 id="main"
                 data-delay= "100" 
                 data-words = "Student"
                 data-deleteDelay="1000"></span></div>
                <a href="#">Hire me</a>
            </div>
        </div>
    </section>
    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="assets/about.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm wildy & I'm a
                    <span 
                    class="typer"
                    id="main"
                    data-delay= "100" 
                    data-words = "Student"
                    data-deleteDelay="1000">
                </span>
                </div>
                    <p>
                    I am a student from Batam State Polytechnic, majoring in Informatics Engineering.
                    I have experience working both in a team and alone. I am looking for experience and knowledge to develop myself.
                    I am quite confident in my knowledge of both my abilities and my experience.
                    I have a weakness in myself that is lack of experience in programming, but I believe that I am quick to learn and useful to YOUR company.
                    </p>   
                    <a href="#">Download CV</a>
                </div>
            </div>
        </div>
    </section>
     <!-- skills section start -->
     <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">About My Skills</div>
                    <p>I will show you about my skills that I have mastered.</p>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>50%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>50%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>70%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>60%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span> English Language</span>
                            <span>70%</span>
                        </div>
                        <div class="line language"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="experience" id="experience">
        <div class="max-width">
            <h2 class="title">My Experience</h2>
            <div class="experience-content">
                <table class="column">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>COMPANY</th>
                            <th>PERIOD</th>
                            <th>ROLE</th>
                            <th>EXPERIENCE CERTIFICATE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>NOK FREUDENBERG SEALING TECHONOGIES BATAM</td>
                            <td>1 years</td>
                            <td>Employee(OPERATOR)</td>
                            <td><a href="">DOWNLOAD</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">My Contact</h2>
            <div class="contact-content">
                <a href="https://www.facebook.com/profile.php?id=100077767356557"><i class="fa fa-facebook"></i></a>
                <a href="https://instagram.com/jo.14m"><i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/wildy-simanjuntak-181a691a4"><i class="fa fa-linkedin"></i></a>
                <a href="https://wa.me/6289643542731"><i class="fa fa-whatsapp"></i></a>
                <a href="mailto:wildy.simanjuntak13@gmail.com"><i class="fa fa-envelope"></i></a>
            </div>
        </div>
    </section>    
<!-- footer section start -->
<footer>
        <span>Created By <a href="#about">Wildy Johanes Simanjuntak</a> | <i class="fa fa-copyright"></i> 2020 All rights reserved.</span>
    </footer>

    </section>
    <script async src="js/script.js"></script>
</body>
</html>