<section class="container-fluid">
 			<div class="container">
 				<div class="row">
 					<h1 class="col-12 text-center">MY ARTICLE</h1>
	 			</div>
	 			<div class="row">
	 				<div class="col-12 text-center">BLOG D'ARTICLE</div>
	 			</div>
 			</div>
 		</section>
 		<section class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="formulaire_ajout_article.php">New article <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
							<div class="dropdown-menu" aria-labelledby="dropdown08">
								<a class="dropdown-item" value="article" href="tousLesArticles.php">tous les articles</a>
								<?php $bdd = mySqli();
									$gdata = categorie($bdd);
									while ($grep = $gdata->fetch()){ ?>
										<a class="dropdown-item" href="filtre.php?nom=<?php echo $grep['nom'] ?>"><?php echo $grep['nom']?></a>
								<?php } ?>
							</div>
						</li>
					</ul>
					<form class="form-inline my-2 my-md-0 barrerecherche" action="barrerecherche.php" method="get">
            			<input class="form-control" type="text" placeholder="Search" aria-label="Search" name="recherche">
          			</form>
				</div>
			</nav>
 		</section>
 		
 		  