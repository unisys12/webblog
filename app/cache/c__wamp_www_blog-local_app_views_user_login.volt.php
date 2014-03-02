<!DOCTYPE html>
<html lang=en>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Unisys12 -  Create </title>
<meta name="viewport" content="width=device-width">
<?php $this->assets->outputCss() ?>
</head>
<body>
	<div class="container">
		<div class="topbar">
			<h1>Unisys12's Blog</h1>
			<nav>
				<ul>
					<li> <?php echo $this->tag->linkTo(array('', 'Blog Home')); ?> </li>
					<li> <?php echo $this->tag->linkTo(array('portfolio', 'Portfolio')); ?> </li>
					<li> <?php echo $this->tag->linkTo(array('upto', 'What Am I Up To?')); ?> </li>
					<li> <?php echo $this->tag->linkTo(array('about', 'About Me')); ?> </li>
				</ul>
			</nav>
			<div class="moto"><p>My adventures, trials, tribulations of learning web development as a hobby! I mean... who does that?</p></div>
			<p><?php $this->flashSession->output() ?></p>
		</div>
		<hr>
		
<div class="large-8 large-centered small-centered columns">
	<?php echo $this->tag->form(array('user/authAttempt')); ?>

	<label for="username">Username: </label>
	<?php echo $this->tag->textField(array('username')); ?>

	<label for="password">Password: </label>
	<?php echo $this->tag->passwordField(array('password')); ?>

	<?php echo $this->tag->submitButton(array('Log In')); ?>

	<?php echo $this->tag->endForm(); ?>

	<p><?php $this->flashSession->output() ?></p>
</div>

		<aside class="adds">
			<div class="search">
				<form action="post">
					<input type="search">
					<button class="button">Search</button>
				</form>
			</div>
			<div class="contact">
				<h4>Contact Me</h4>
				<ul>
					<li><a href="mailto:unisys12@gmail.com">unisys12@gmail.com</a></li>
					<li><a href="https://github.com/unisys12">GitHub</a></li>
					<li><a href="https://twitter.com/unisys12">Twitter</a></li>
					<li><a href="https://plus.google.com/u/0/105355777056677229541/">Google+</a></li>
				</ul>
			</div>
		</aside>
		<footer><p>Made with Phalcon v<?php echo Phalcon\Version::get(); ?></p></footer>
	</div>
	
</body>
</html>
