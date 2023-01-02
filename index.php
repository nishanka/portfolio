<?php include 'head.php';?>

    <div class="container flex-container">

        <?php include 'header.php';?>

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
    
<?php include 'footer.php';?>
