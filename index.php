<?php include_once('layout/top.php'); ?>
				<div id="content">
					<?php
						switch($_GET['p']){
							case 'home': include_once('pages/home.php'); break;
							case 'idea': include_once('pages/idea.php'); break;
							
						}
					?>
					<div id="footer_container">
						danke an unseren sponsor <a href="http://www.msdata.at" target="_blank">msdata</a> | &copy; 2012 pischinger marion
					</div>
				</div>
			</div>
		</div>
	</body>
</html>