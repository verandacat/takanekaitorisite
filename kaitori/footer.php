 <!------------------------------------------------------------------------------------------------>
 


 </div><!-- #container END-->

 <footer>
     <a class="footer-link" href="<?php echo home_url('/category/column'); ?>">コラム一覧</a>
     <a class="footer-link" href="<?php echo home_url('/unei'); ?>">運営者情報</a>
     <a class="footer-link topBtn" href="<?php echo home_url('/'); ?>">TOPへ</a>
 </footer>

 <!-- footer END -->


 </div><!-- #container END-->




 <script>
new WOW().init();
 </script>

 <script src="<?php bloginfo('template_url'); ?>/js/storage.js">
 </script>

<?php if(is_page('kimono2')) : ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.1/js/jquery.tablesorter.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.1/js/extras/jquery.metadata.min.js"></script>
	<script>
		$(document).ready(function() { 
			$("#myTable").tablesorter();
		});
	</script>
<?php endif; ?>

 <?php if(is_search()) : ?>
 <script type="text/javascript"
     src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.0/js/jquery.tablesorter.min.js"></script>
 <?php endif; ?>

 </body>

 </html>