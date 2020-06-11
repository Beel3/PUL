<div class="conteiner">
	<br>
		<a href="inc/about/gbook.php" class="btn btn-primary btn-block" role="button">Оставить отзыв</a>
	<br>
	<?php
		include 'bd.php';
		foreach(getALL() as $row)
		{

			echo
			"	<div class=\"conteiner\">".
				"<div class=\"card\" >".
					"<div class=\"row no-gutters\">".
						"<div class=\"col-1\"></div>".
						"<div class=\"col-8\">".
							"<div class=\"card-body\">".
								"<h5 class=\"card-title\">".$row["name"]."</h5>".
								"<p class=\"card-text\">".$row["message"]."</p>".
							"</div>".
						"</div>".
					"</div>".
				"</div>".
			"</div><br>";
		}
	?>
</div>