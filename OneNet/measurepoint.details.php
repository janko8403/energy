<?php
error_reporting(0);
// Strona zamknięta tylko dla administratora

if (!hasPrivileges($dbh, $uid, 1) && !hasPrivileges($dbh, $uid, 6) && !hasPrivileges($dbh, $uid, 7))
{
	echo '<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Nie masz uprawnień do oglądania tej strony</h1>
		</div>
	</div>';
	exit;
}

?>
<div class="backgroundSetter">
	<div class="row">
		<div class="col-lg-12 page-header-atributes">
			<h1 class="page-header fleet-details">OneNet pojedyńczy punkt</h1>
		</div>

		<!-- /.col-lg-12 -->
	</div>
	<!-- /.container-fluid -->

	 <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default vehicle-details-panel">
					<div class="panel-body">
						<h4>Tutaj będą wykresy</h4>

					</div>
				</div>
			</div>
</div>


	<div class="modal fade" id="newPoint" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h5 class="modal-title">Dodaj nowy folder</h5>
				</div>

				<div class="modal-body">
					<form action="php/action.documents.add.folder.php" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<label>Nazwa folderu</label>
									<input class="form-control" name="DFName" maxlength="60" required>
								</div>
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Anuluj</button>
							<button type="submit" name="submit"  class="btn btn-reduction btn-float-right" >Dodaj</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">

</script>
