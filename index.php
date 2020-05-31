<?php require("header.php") ?>
	<div class="panel">
		<div class="menu-lateral">
			hola
		</div>
		<div class="panel-control">
			<table id="table_id" class="table table-dark">
				<thead>
					<tr>
						<th>Column 1</th>
						<th>Column 2</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Row 1 Data 1</td>
						<td>Row 1 Data 2</td>
					</tr>
					<tr>
						<td>Row 2 Data 1</td>
						<td>Row 2 Data 2</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
<?php require("footer.php") ?>

	<script>
			$(document).ready( function () {
				$('#table_id').DataTable();
			} );
	</script>