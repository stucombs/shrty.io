<div id="main-div-row" class="row drop-shadow">
	<div id="navigation-div" class="col-12-xs">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="/">shrty.io<br />A simplified URL manager</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item <? if($currentPage === 'home'){ echo 'active'; }?>">
						<a class="nav-link" href="/index.php">Home</a>
					</li>
					<li class="nav-item <? if($currentPage === 'contact'){ echo 'active'; }?>">
						<a class="nav-link" href="/files/pages/contact.php">Contact</a>
					</li>
					<li class="nav-item <? if($currentPage === 'more_stuff'){ echo 'active'; }?>">
						<a class="nav-link" href="/files/pages/more_stuff.php">More Stuff</a>
					</li>
					<li class="nav-item <? if($currentPage === 'about'){ echo 'active'; }?>">
						<a class="nav-link" href="/files/pages/about.php">About</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>