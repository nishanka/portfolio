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
