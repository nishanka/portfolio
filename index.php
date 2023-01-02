<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/iconfonts.css">
    <link rel="stylesheet" href="css/default.css">
</head>
<body>
    <div class="container flex-container">
        <header class="header flex-align-items-center">
            <div class="profile">
                <a href="#" class="profile-img__link">
                    <img src="images/nr.jpeg" alt="Nishanka Rupasinghe's Photo" width="200" height="200">
                </a>
                <h1 class="profile-name">
                    <a href="#" class="profile-name__link">Nishanka Rupasinghe</a>
                </h1>
            </div>
            <nav class="nav">
                <a href="index.html" target="_blank"><span class="icon-home"></span>Home</a>
                <a href="about.html" target="_blank"><span class="icon-user"></span>About</a>
                <a href="resume.html" target="_blank"><span class="icon-file-text"></span>Resume</a>
                <a href="portfolio.html" target="_blank"><span class="icon-profile"></span>Portfolio</a>
                <a href="services.html" target="_blank"><span class="icon-folder-open"></span>Projects</a>
                <a href="mylearning.html" target="_blank"><span class="icon-book"></span>My Learning</a>
            </nav>
            <nav class="social-links">
                <a href="#" class="social-links__link social-links__link--linkedin"><span class="icon-linkedin"></span></a>
                <a href="#" class="social-links__link social-links__link--github"><span class="icon-github"></span></a>
                <a href="#" class="social-links__link social-links__link--facebook"><span class="icon-facebook"></span></a>
                <a href="#" class="social-links__link social-links__link--skype"><span class="icon-skype"></span></a>
                <a href="#" class="social-links__link social-links__link--whatsapp"><span class="icon-whatsapp"></span></a>
                <a href="#" class="social-links__link social-links__link--email"><span class="icon-envelop"></span></a>
                <a href="#" class="social-links__link social-links__link--mobile"><span class="icon-mobile"></span></a>
            </nav>
            <div class="toggle-theme">
                <button id="toggle-theme">Switch Mode</button>
            </div>
        </header>
        <section class="main-slider">

        </section>
        <section class="main-content">
            <p>Content goes here...</p>
        </section>
        <footer>

        </footer>
    </div>
    <script>
        const toggleBtn = document.querySelector("#toggle-theme");
        // const toggleBtn = document.getElementById("toggle-theme");
        toggleBtn.addEventListener('click', e => {
        console.log("Switching theme");
        if(document.documentElement.hasAttribute('theme')){
            document.documentElement.removeAttribute('theme');
        }
        else{
            document.documentElement.setAttribute('theme', 'light');
            toggleBtn.html('yyy');
        }
        });
    </script>
</body>
</html>