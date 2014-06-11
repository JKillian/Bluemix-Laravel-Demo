<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notes</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
</head>
<body style="padding: 10px;">
	<form class="pure-form" method="POST" action="<?= route('notes.store') ?>" >
		<input type="text" placeholder="Note..." name="content"/>
		<button type="submit" class="pure-button pure-button-primary">Create New Note</button>
	</form>
	<br/>
	<table class="pure-table pure-table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Note</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($notes as $note): ?>
			<tr>
				<td><?= $note->id ?></td>
				<td><?= $note->content ?></td>
				<td>
					<form action="<?= route('notes.destroy', $note->id) ?>" method="post">
						<input type="hidden" name="_method" value="DELETE"/>
        				<button type="submit" class="pure-button" style="color: white; background: rgb(202, 60, 60);">Delete</button>
        			</form>
        		</td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>	
</body>	
</html>
