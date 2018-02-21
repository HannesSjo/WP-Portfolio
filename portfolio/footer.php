<footer class="färg footer">
<p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
</footer>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
<script> window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
document.getElementById("BTT").style.display = "block";
} else {
document.getElementById("BTT").style.display = "none";
}
}
</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-98273462-1', 'auto');
ga('send', 'pageview');

</script>
</body>
</html>
