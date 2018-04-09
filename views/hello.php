<div>Hello 
	<?= htmlspecialchars(
		$this->name
	)?>!
</div>
<ul>
	<?php
		foreach(
		$this->users as $users
		) {
	?>
	<li>
		<?=htmlspecialchars(
			$users['email']
		)?>
	</li>
	<?php
		}
	?>
</ul>