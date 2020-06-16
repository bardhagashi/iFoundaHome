<?php get_header();?>

    <!-- Back to top button -->
    <a class="buttonToTop"></a>

    <h1 id="test"></h1>

    <script>
        var text = "";
        var i;
        for (i = 0; i < 25; i++) {
            text += "INDEX" + "<br>";
        }
        document.getElementById("test").innerHTML = text;       
    </script>

<?php get_footer();?>