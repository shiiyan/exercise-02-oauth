
<div class="container" align="right">
	<?= $this->tag->linkTo(['/logout', 'Logout']) ?>
</div>
<div class="container">
    <p><h2>Profile of <?= $user->name ?>:</h2></p>
</div>
<div class="container">
	<ul>
	  <li>ID: <?= $user->id ?></li>
	  <li>GitHub ID: <?= $user->github_id ?></li>
	  <li>Name: <?= $user->name ?></li>
	  <li>URL: <?= $user->html_url ?></li>
	  <li>Avatar: <img src="<?= $user->avatar_url ?>" alt="Avatar" height="42" width="42"></li>
	</ul>
</div>

