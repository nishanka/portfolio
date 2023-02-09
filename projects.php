<?php include './main/head.php';?>

    <div class="container flex-container">

        <?php include './main/header.php';?>
        
        <section class="main-content">
            <div class="section-header margin-top-zero" data-aos="fade-right">
                <h2>My Projects</h2>
            </div>
            <div class="projects flex-container flex-wrap">
                <div class="project flex-container flex-dir-col box-shadow-green" data-aos="fade-up-right" data-aos-delay="1000" data-aos-duration="2000">
                    <div class="project-video">
                        <video width="100%" height="auto" muted autoplay poster="images/microsite.png">
                            <source src="./videos/projects/microsite.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="project-info flex-grow-1">
                        <h4>Microsite</h4>
                        <p>React, Bootstrap</p>
                        <p>HTML5, CSS3, JavaScript</p>
                        <a href="https://github.com/nishanka/micrositesg" target="_blank">Git Repo</a>
                    </div>
                </div>
                <div class="project flex-container flex-dir-col box-shadow-green" data-aos="fade-up-left" data-aos-delay="2000" data-aos-duration="2000">
                    <div class="project-video">
                        <video width="100%" height="auto" muted autoplay poster="images/portfolio-fullpage.png">
                            <source src="videos/projects/portfolio-fullpage.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="project-info flex-grow-1">
                        <h4>My Portfolio Fullpage</h4>
                        <p>HTML5, CSS3, JavaScript</p>
                        <a href="https://github.com/nishanka/portfolio-fullpage" target="_blank">Git Repo</a>
                    </div>
                </div>
                <div class="project flex-container flex-dir-col box-shadow-green" data-aos="fade-up-right" data-aos-duration="2000">
                    <div class="project-video">
                        <video width="100%" height="auto" muted autoplay poster="images/portfolio.png">
                            <source src="videos/projects/portfolio.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="project-info flex-grow-1">
                        <h4>My Portfolio</h4>
                        <p>PHP</p>
                        <p>HTML5, CSS3, JavaScript</p>
                        <a href="https://github.com/nishanka/portfolio" target="_blank">Git Repo</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php include './main/footer.php';?>
