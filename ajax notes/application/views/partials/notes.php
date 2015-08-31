<?php foreach ($all_notes as $note) { ?>
	<li>
		<h2><?= $note['title'] ?></h2>
		<form id="delete" action="/remove/<?= $note['id'] ?>" method="post">
			<button  id="<?= $note['id'] ?>" type="submit">Delete</button>
		</form>

		<form id="update" action="/update/<?= $note['id'] ?>" method="post">
			<textarea onchange="this.form.submit()" name="description" id="content" cols="30" rows="10"><?= $note['description'] ?></textarea>	
		</form>
	</li>				
<?php } ?>  