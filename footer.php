    <footer>
		<div id="inner-footer">
			<h2> Tours of The Month! </h2>
			<?php dynamic_sidebar( 'sidebar-footer' ); ?>
		</div> <!-- End "inner-footer". -->
		<div id="copyright">
			<ul>
				<li> Copyright &copy; <?php echo date('Y'); ?> </li>
				<li> All Rights Reserved </li>
				<li> Web Design By Wilson </li>
				<li> <a id="html-checker" href=""> HTML Valid </a> </li>
				<li> <a id="css-checker" href=""> CSS Valid </a> </li>
			</ul>
		</div>
    </footer>

    <!-- This is for Astuteo's nav. -->
    <script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
	</script>

	<!-- Validation Links -->
	<script>
        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
    </script>

	<?php wp_footer(); ?>

</body>

</html>