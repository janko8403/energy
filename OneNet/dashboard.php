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

include("onenet.configuration.php");
include("../../API_PV/getDataFromDevice.php");




//  $deviceAddress = 'asd';
// 	//  getDataFromDevice($deviceAddress);

// 	// var_dump($deviceAddress);
// 	// echo '<br><br>';
// 	var_dump($oneNetConfiguration);

$usersNameArray = [];
foreach ($oneNetConfiguration as $key => $value) {
	# code..
	// echo $key;
	// echo JSON.parse($value);
	// echo $value;
	// echo '<br>';

	// print_r($value);
	// echo $value['nazwaOdbiorcy'];

	array_push($usersNameArray, $value['nazwaOdbiorcy']);

	// echo '<br>';
}

// var_dump($usersNameArray);

	// echo json_encode($usersNameArray);
?>

	<script type="text/javascript" src="products/ebi/js/Chart.min.js"></script>
	<script type="text/javascript" src="css/newlook/js/Chart.roundedBarCharts.min.js"></script>



	<script type="text/javascript" src="products/ebi/js/base64.js"></script>
	<script type="text/javascript" src="css/newlook/js/ebi.chart.js"></script>




<div class="backgroundSetter">
	<div class="row">
		<div class="col-lg-12 page-header-atributes">
			<h1 class="page-header fleet-details">OneNet DASHBOARD</h1>
			<input type="hidden" id="loginUserId" name="loginUserId" value="<?php echo $uid; ?>">

		</div>

		<!-- /.col-lg-12 -->
	</div>
	<!-- /.container-fluid -->

	 <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default vehicle-details-panel">
					<div class="panel-body">
						<h4>OneNet</h4>
						<!-- energia START -->
						<!-- <div class="row" >
							<div class="col-lg-3">
								<div class="row">
									<div class="col-lg-12">
										<h2 class="panel-title"></h2>
									</div>
									<div class="col-lg-12">
										<div class="panel panel-default vehicle-details-panel">
											<div class="panel-heading  l-bottom">
												<div class="row">
													<div class="col-lg-12">
														<h2 class="panel-title">Klienci</h2>
													</div>

												</div>
											</div>
											<div class="panel-body">
												<?php
													foreach ($oneNetConfiguration as $key => $value) {
														# code...
														// echo 'key <br>';
														// var_dump($key);
														// echo 'value <br>';
														// var_dump($value['nazwaOdbiorcy']);
														// echo '================================= <br>';

														echo '<div style="font-size:16px; border: 1px solid #e7e7e7; padding:  5px; margin-top-5px; margin-bottom:5px;">
															<div class="form-check">
																<input class="form-check-input" type="checkbox" value="" id="ppeClientId_'.$value['clientId'].'" />
																<label class="form-check-label" for="flexCheckDefault">'.$value['nazwaOdbiorcy'].'</label>
															</div>
														</div>';

													}
												?>

												<?php
													foreach ($oneNetConfiguration as $key => $value) {

														echo '
															<div style="font-size:16px; border: 1px solid #e7e7e7; padding: 5px; margin-top-5px; margin-bottom:3px;">
																'.$value['nazwaOdbiorcy'].'<br>
																<button type="button" class="btn-display-small defaultFade activeButton" id="ppeButtonGeneration_'.$value['clientId'].'"  name="" style="margin-right:10px; margin-bottom:10px;width:5em; padding: 0px 0px 0px 0px;"><span style="font-size:14px">+</span> </button>
																<button type="button" class="btn-display-small defaultFade " name="" id="ppeButtonConsumption_'.$value['clientId'].'" style="margin-right:10px; margin-bottom:10px;width:5em; padding: 0px 0px 0px 0px;"><span style="font-size:14px">-</span> </button>
															</div>
														';

													}
												?>
													<div style="font-size:16px; border: 1px solid #e7e7e7; padding:  5px; margin-top-5px; margin-bottom:3px;">
														SUMA<br>
														<button type="button" class="btn-display-small defaultFade activeButton" id="ppeButtonGeneration_SUMA"  name="" style="margin-right:10px; margin-bottom:10px;width:5em; padding: 0px 0px 0px 0px;"><span style="font-size:14px">+</span> </button>
														<button type="button" class="btn-display-small defaultFade " name="" id="ppeButtonConsumption_SUMA" style="margin-right:10px; margin-bottom:10px;width:5em; padding: 0px 0px 0px 0px;"><span style="font-size:14px">-</span> </button>
													</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- energia END -->
						<!-- PV START -->
						<div class="row" >
							<div class="col-lg-3">
								<!-- <div class="row">
									<div class="col-lg-12">
										<h2 class="panel-title"></h2>
									</div>
									<div class="col-lg-12">
										<div class="panel panel-default vehicle-details-panel">
											<div class="panel-heading  l-bottom">
												<div class="row">
													<div class="col-lg-12">
														<h2 class="panel-title">Klienci</h2>
													</div>

												</div>
											</div>
											<div class="panel-body">

												<?php
												//	foreach ($oneNetConfiguration as $key => $value) {
														# code...
														// echo 'key <br>';
														// var_dump($key);
														// echo 'value <br>';
														// var_dump($value['nazwaOdbiorcy']);
														// echo '================================= <br>';

												//		echo '<div style="font-size:16px; border: 1px solid #e7e7e7; padding:  5px; margin-top-5px; margin-bottom:5px;">
												//			<div class="form-check">
												//				<input class="form-check-input" type="checkbox" value="" id="pvClientId_'.$value['clientId'].'" />
												//				<label class="form-check-label" for="flexCheckDefault">'.$value['nazwaOdbiorcy'].'</label>
												//			</div>
												//		</div>';

												//	}
												?>
												<div style="font-size:16px; border: 1px solid #e7e7e7; padding:  5px; margin-top-5px; margin-bottom:5px;">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="pvClientId_SUMA" />
														<label class="form-check-label" for="flexCheckDefault">SUMA</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> -->

							</div>
							<div class="col-lg-10">
								<div class="panel panel-default vehicle-details-panel">
									<div class="panel-heading  l-bottom">
										<div class="row">
											<div class="col-lg-12">
												<h2 class="panel-title">Panele fotowoltaliczne</h2>
											</div>

										</div>
									</div>
									<div class="panel-body">
										<canvas id="pvChart" width="400" height="200">Panele fotowoltaliczne</canvas>
									</div>

										<!-- <div class="row" style="margin-left: 15px;">
											<button type="button" class="btn-display-small defaultFade activeButton" name="" style="margin-right:10px; margin-bottom:10px;width:4em"><span style="font-size:14px">1 min.</span> </button>
											<button type="button" class="btn-display-small defaultFade activeButton" name="" style="margin-right:10px; margin-bottom:10px;width:4em"><span style="font-size:14px">15 min.</span> </button>
											<button type="button" class="btn-display-small defaultFade activeButton" name="" style="margin-right:10px; margin-bottom:10px;width:4em"><span style="font-size:14px">1 h</span> </button>
											<button type="button" class="btn-display-small defaultFade activeButton" name="" style="margin-right:10px; margin-bottom:10px;width:4em"><span style="font-size:14px">1 d</span> </button>
											<button type="button" class="btn-display-small defaultFade activeButton" name="" style="margin-right:10px; margin-bottom:10px;width:4em"><span style="font-size:14px">1 m</span> </button>
											<button type="button" class="btn-display-small defaultFade activeButton" name="" style="margin-right:10px; margin-bottom:10px;width:4em"><span style="font-size:14px">1 r</span> </button>
											<button type="button" class="btn-display-small defaultFade activeButton" name="" style="margin-right:10px; margin-bottom:10px;width:4em"><span style="font-size:14px">LIVE</span> </button>
											<label for="meeting-time">Od:</label>

											<input type="datetime-local" id="meeting-time"
												name="meeting-time" value="2018-06-12T19:30"
												min="2018-06-07T00:00" max="2018-06-14T00:00">
											<label for="meeting-time">Do:</label>

											<input type="datetime-local" id="meeting-time"
												name="meeting-time" value="2018-06-12T19:30"
												min="2018-06-07T00:00" max="2018-06-14T00:00">
										</div> -->

								</div>
							</div>
							<div class="col-lg-2">
								<div class="row">
									<div class="col-lg-12">
										<div class="panel panel-default vehicle-details-panel">
											<div class="panel-heading  l-bottom">
												<div class="row">
													<div class="col-lg-12">
														<h2 class="panel-title">Konfiguracja</h2>
													</div>

												</div>
											</div>
											<div class="panel-body">
												<div style="font-size:16px; border: 1px solid #e7e7e7; padding:  5px; margin-top-5px; margin-bottom:3px;">
													<?php
													foreach ($oneNetConfiguration as $key => $value) {
														# code...
														// echo 'key <br>';
														// var_dump($key);
														// echo 'value <br>';
														// var_dump($value['nazwaOdbiorcy']);
														// echo '================================= <br>';

														// echo '<div style="font-size:16px; border: 1px solid #e7e7e7; padding:  5px; margin-top-5px; margin-bottom:5px;">
														// 	<div class="form-check">
														// 		<input class="form-check-input" type="checkbox" value="" id="pvClientId_'.$value['clientId'].'" />
														// 		<label class="form-check-label" for="flexCheckDefault">'.$value['nazwaOdbiorcy'].'</label>
														// 	</div>
														// </div>';
														$deviceAddress = "'".$value['fotoWoltalika']['adresUrzadzenia']."'";
														if($value['clientId'] < 16 || $value['clientId'] == 99) {
													echo '
														<div style="font-size:16px; border: 1px solid #e7e7e7; padding:  5px; margin-top-5px; margin-bottom:5px;">
															<div class="form-check-label" for="pvRadio_'.$value['nazwaOdbiorcy'].'"><span>'.$value['nazwaOdbiorcy'].'</span><br>
																<label class="radio-inline">
																	<input
																		type="radio"
																		name="pvRadio_'.$value['clientId'].'"
																		id="pvRadioON_'.$value['clientId'].'"
																		onchange="changePVMode('.$value["clientId"].','. $deviceAddress.', 100)"
																		checked>Włącz
																</label>
																<label class="radio-inline">
																	<input
																		type="radio"
																		name="pvRadio_'.$value['clientId'].'"
																		id="pvRadioOFF_'.$value['clientId'].'"
																		onchange="changePVMode('.$value["clientId"].','. $deviceAddress.', 0)"
																		>Wyłącz
																</label>
															</div>
															<div class="row">
																<div class="col-lg-6">
																	<input style="width: 100%" type="number" name="pvInputName'.$value['clientId'].'" id="pvInput_'.$value["clientId"].'" value="100">
																</div>
																<div class="col-lg-6">
																	<button onclick("change_pv_value_confirm_input('.$value['clientId'].', '. $deviceAddress.')">Ustaw</button>

																</div>
															</div>

														</div>';

														}
													}
													?>


														<!-- <div style="font-size:16px; border: 1px solid #7e7e7; padding:  5px; margin-top-5px; margin-bottom:5px;">
															<div class="form-check-label" for="pvRadio_SUMA"><span>SUMA</span><br>
																<label class="radio-inline">
																	<input type="radio" name="pvRadio_SUMA" id="pvRadioON_SUMA" checked>Włącz
																</label>
																<label class="radio-inline">
																	<input type="radio" name="pvRadio_SUMA" id="pvRadioOFF_SUMA" >Włącz
																</label>
															</div>
														</div> -->

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- PV END -->
						<!-- Pompy START -->
						<div class="row" >
							<!-- <div class="col-lg-3">
								<div class="row">
									<div class="col-lg-12">
										<h2 class="panel-title"></h2>
									</div>
									<div class="col-lg-12">
										<div class="panel panel-default vehicle-details-panel">
											<div class="panel-heading  l-bottom">
												<div class="row">
													<div class="col-lg-12">
														<h2 class="panel-title">Klienci</h2>
													</div>

												</div>
											</div>
											<div class="panel-body">
												<?php
													foreach ($oneNetConfiguration as $key => $value) {
														# code...
														// echo 'key <br>';
														// var_dump($key);
														// echo 'value <br>';
														// var_dump($value['nazwaOdbiorcy']);
														// echo '================================= <br>';

														echo '<div style="font-size:16px; border: 1px solid #e7e7e7; padding:  5px; margin-top-5px; margin-bottom:5px;">
															<div class="form-check">
																<input class="form-check-input" type="checkbox" value="" id="pcClientId_'.$value['clientId'].'" />
																<label class="form-check-label" for="flexCheckDefault">'.$value['nazwaOdbiorcy'].'</label>
															</div>
														</div>';

													}
												?>
												<div style="font-size:16px; border: 1px solid #e7e7e7; padding:  5px; margin-top-5px; margin-bottom:5px;">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="pcClientId_SUMA" />
														<label class="form-check-label" for="flexCheckDefault">SUMA</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div> -->
							<div class="col-lg-10" style="display:none">
								<div class="panel panel-default vehicle-details-panel">
									<div class="panel-heading  l-bottom">
										<div class="row">
											<div class="col-lg-12">
												<h2 class="panel-title">Pompy Ciepła</h2>
											</div>

										</div>
									</div>
									<div class="panel-body">
										<canvas id="pcChart" width="400" height="200">Pompy Ciepła</canvas>
									</div>

									<div class="row" style="margin-left: 15px;">
										<button type="button" class="btn-display-small defaultFade activeButton" name="" style="margin-right:10px; margin-bottom:10px;width:4em"><span style="font-size:14px">1 min.</span> </button>
										<button type="button" class="btn-display-small defaultFade activeButton" name="" style="margin-right:10px; margin-bottom:10px;width:4em"><span style="font-size:14px">15 min.</span> </button>
										<button type="button" class="btn-display-small defaultFade activeButton" name="" style="margin-right:10px; margin-bottom:10px;width:4em"><span style="font-size:14px">1 h</span> </button>
										<button type="button" class="btn-display-small defaultFade activeButton" name="" style="margin-right:10px; margin-bottom:10px;width:4em"><span style="font-size:14px">1 d</span> </button>
										<button type="button" class="btn-display-small defaultFade activeButton" name="" style="margin-right:10px; margin-bottom:10px;width:4em"><span style="font-size:14px">1 m</span> </button>
										<button type="button" class="btn-display-small defaultFade activeButton" name="" style="margin-right:10px; margin-bottom:10px;width:4em"><span style="font-size:14px">1 r</span> </button>
										<button type="button" class="btn-display-small defaultFade activeButton" name="" style="margin-right:10px; margin-bottom:10px;width:4em"><span style="font-size:14px">LIVE</span> </button>
										<label for="meeting-time">Od:</label>

										<input type="datetime-local" id="meeting-time"
											name="meeting-time" value="2018-06-12T19:30"
											min="2018-06-07T00:00" max="2018-06-14T00:00">
										<label for="meeting-time">Do:</label>

										<input type="datetime-local" id="meeting-time"
											name="meeting-time" value="2018-06-12T19:30"
											min="2018-06-07T00:00" max="2018-06-14T00:00">
									</div>




								</div>
							</div>
							<div class="col-lg-2"  style="display:none">
								<div class="row">
									<div class="col-lg-12">
										<div class="panel panel-default vehicle-details-panel">
											<div class="panel-heading  l-bottom">
												<div class="row">
													<div class="col-lg-12">
														<h2 class="panel-title">Tryb pracy</h2>
													</div>
												</div>
											</div>
											<div class="panel-body">
												<?php
													foreach ($oneNetConfiguration as $key => $value) {

														// changePCMode(clientId, deviceAddress, setted_sg_ready_mode)
														$deviceAddress = "'".$value['fotoWoltalika']['adresUrzadzenia']."'";
														echo '
															<div style="font-size:16px; border: 1px solid #e7e7e7; padding:  5px; margin-top-5px; margin-bottom:5px;">
																<div class="form-check-label" for="pcRadio_'.$value['nazwaOdbiorcy'].'"><span>'.$value['nazwaOdbiorcy'].'</span><br>
																	<label class="radio-inline">
																		<input type="radio" name="pcRadio_'.$value['clientId'].'" id="pcRadio0_'.$value['clientId'].'" onchange="changePCMode('.$value["clientId"].', 0,'. $deviceAddress.', 0)" checked>0
																	</label>
																	<label class="radio-inline">
																		<input type="radio" name="pcRadio_'.$value['clientId'].'" id="pcRadio1_'.$value['clientId'].'" onchange="changePCMode('.$value["clientId"].', 0,'. $deviceAddress.', 1)"" >1
																	</label>
																	<label class="radio-inline">
																		<input type="radio" name="pcRadio_'.$value['clientId'].'" id="pcRadio2_'.$value['clientId'].'" onchange="changePCMode('.$value["clientId"].', 0,'. $deviceAddress.', 2)"" >2
																	</label>
																	<label class="radio-inline">
																		<input type="radio" name="pcRadio_'.$value['clientId'].'" id="pcRadio3_'.$value['clientId'].'" onchange="changePCMode('.$value["clientId"].', 0,'. $deviceAddress.', 3)"" >3
																	</label>
																</div>
															</div>';
													}
													?>


														<!-- <div style="font-size:16px; border: 1px solid #7e7e7; padding:  5px; margin-top-5px; margin-bottom:5px;">
															<div class="form-check-label" for="pvRadio_SUMA"><span>SUMA</span><br>
																<label class="radio-inline">
																	<input type="radio" name="pvRadio_SUMA" id="pvRadioON_SUMA" checked>1
																</label>
																<label class="radio-inline">
																	<input type="radio" name="pvRadio_SUMA" id="pvRadioOFF_SUMA" >2
																</label>
																<label class="radio-inline">
																	<input type="radio" name="pvRadio_SUMA" id="pvRadioOFF_SUMA" >3
																</label>
																<label class="radio-inline">
																	<input type="radio" name="pvRadio_SUMA" id="pvRadioOFF_SUMA" >4
																</label>
															</div>
														 </div> -->




											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Pompy END -->
						<!-- TABELA START -->
						<!-- TABELA END -->
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




<script>



		var pvChart ;
		var pcChart ;

// 		var usersNameArray = <?php echo $usersNameArray ; ?>;
// // $usersNameArray = JSON.parse($usersNameArray);
// // $usersNameArray = json_decode($usersNameArray);

// 		console.table(usersNameArray);



// // console.log(js_var);
		var userNameArray = ['M.J. Kasztanowa 1, Przywidz','C.H. Kasztanowa 6 Przywidz','Z.N. Kasztanowa 7, Przywidz','S.H. Kasztanowa 3, Przywidz','Hala Sportowa 31.0.208.227',
							'Hala Sportowa 46.77.79.92','Hydrofornia','Przedszkole ul. Cisowa 12','Oczyszczalnia ścieków 46.77.84.117','Oczyszczalnia ścieków 31.0.219.86',
							'Urząd Gminy 46.77.84.99','Urząd Gminy 37.98.211.249','M.C. Cisowa 8','M.C. Kwiatowa 1a','Szkoła podstawowa',
							'Cisowa 14', 'Kasztanowa 2', 'Kwiatowa 3','Różana 3a', 'Różana 9'];


		var backgroundColorForDataSets = ['rgba(150, 20, 10, 0)','rgba(220, 180, 50, 0)',  'rgba(55, 110, 180, 0)', 'rgba(50, 180, 120, 0)', 'rgba(120, 50, 180, 0)',
										   'rgba(249, 49, 84, 0)', 'rgba(30, 150, 90, 0)', 'rgba(90, 30, 150, 0)','rgba(219, 19, 54, 0)', 'rgba(180, 25, 110, 0)',
										   'rgba(200, 213 50, 0)',  'rgba(55, 150, 180, 0)','rgba(10, 120, 180, 0)','rgba(150, 180, 120, 0)', 'rgba(110, 155, 130, 0)',
										   'rgba(155, 110, 130, 0)','rgba(155, 210, 130, 0)','rgba(110, 0, 128, 0)', 'rgba(138, 38, 238, 0)', 'rgba(238, 38, 138, 0)'];

  		var bordersColorForDataSets = ['rgba(150, 20, 10, 1)','rgba(220, 180, 50, 1)', 'rgba(55, 110, 180, 1)', 'rgba(50, 180, 120, 1)', 'rgba(120, 50, 180, 1)',
										 'rgba(249, 49, 84, 1)', 'rgba(30, 150, 90, 1)', 'rgba(90, 30, 150, 1)', 'rgba(219, 19, 54, 1)', 'rgba(180, 25, 110, 1)',
										 'rgba(200, 213 50, 1)', 'rgba(55, 150, 180, 1)', 'rgba(10, 120, 180, 1)','rgba(150, 180, 120, 1)', 'rgba(110, 155, 130, 1)',
										  'rgba(155, 110, 130, 1)','rgba(155, 210, 130, 1)', 'rgba(110, 0, 128, 1)', 'rgba(138, 38, 238, 1)', 'rgba(238, 38, 138, 1)'];

		$(document).ready(function() {


			var dataSetTeplate = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   ];


				/**
			 * panele fotowoltaliczne
			 */
			var ctx2 = document.getElementById('pvChart').getContext('2d');
			var myChart2 = new Chart(ctx2, {
				type: 'line',
				data: {
					datasets: [
					// {
					// 	label: 'Michał Jasiński',
					// 	data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
					// 		   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
					// 		   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
					// 		   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
					// 		   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
					// 		   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
					// 		   ],
					// 	type: 'line',
					// 	backgroundColor: 'rgba(50, 220, 180, 0)',
					// 	borderColor: 'rgba(50, 220, 180, 1.0)'

					// },
					{
						label: userNameArray[0],
						data: dataSetTeplate,
						type: 'line',
						backgroundColor: backgroundColorForDataSets[0],
						borderColor: bordersColorForDataSets[0]

					},
					// {
					// 	label: 'Barbara Borowska',
					// 	data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
					// 		   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
					// 		   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
					// 		   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
					// 		   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
					// 		   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
					// 		   ],
					// 	// Changes this dataset to become a line
					// 	type: 'line',
					// 	backgroundColor: 'rgba(220, 180, 50, 0)',
					// 	borderColor: 'rgba(220, 180, 50, 1.0)'

					// },
					{
						label: userNameArray[1],
						data: dataSetTeplate,
						type: 'line',
						backgroundColor: backgroundColorForDataSets[1],
						borderColor: bordersColorForDataSets[1]

					},
					{
						label: userNameArray[2],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[2],
						borderColor: bordersColorForDataSets[2]

					},
					{
						label: userNameArray[3],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[3],
						borderColor: bordersColorForDataSets[3]

					},
					{
						label: userNameArray[4],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[4],
						borderColor: bordersColorForDataSets[4]

					},
					{
						label: userNameArray[5],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[5],
						borderColor: bordersColorForDataSets[5]

					},
					{
						label: userNameArray[6],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[6],
						borderColor: bordersColorForDataSets[6]

					},
					{
						label: userNameArray[7],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[7],
						borderColor: bordersColorForDataSets[7]

					},
					{
						label: userNameArray[8],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[8],
						borderColor: bordersColorForDataSets[8]

					},
										{
						label: userNameArray[9],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[9],
						borderColor: bordersColorForDataSets[9]

					},
										{
						label: userNameArray[10],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[10],
						borderColor: bordersColorForDataSets[10]

					},
										{
						label: userNameArray[11],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[11],
						borderColor: bordersColorForDataSets[11]

					},
										{
						label: userNameArray[12],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[12],
						borderColor: bordersColorForDataSets[12]

					},
										{
						label: userNameArray[13],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[13],
						borderColor: bordersColorForDataSets[13]

					},
										{
						label: userNameArray[14],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[14],
						borderColor: bordersColorForDataSets[14]

					},
															{
						label: userNameArray[15],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[15],
						borderColor: bordersColorForDataSets[15]

					},
															{
						label: userNameArray[16],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[16],
						borderColor: bordersColorForDataSets[16]

					},
															{
						label: userNameArray[17],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[17],
						borderColor: bordersColorForDataSets[17]

					},
															{
						label: userNameArray[18],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[18],
						borderColor: bordersColorForDataSets[18]

					},
															{
						label: userNameArray[19],
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: backgroundColorForDataSets[19],
						borderColor: bordersColorForDataSets[19]

					},
					// 															{
					// 	label: userNameArray[20],
					// 	data: dataSetTeplate,
					// 	// Changes this dataset to become a line
					// 	type: 'line',
					// 	backgroundColor: backgroundColorForDataSets[20],
					// 	borderColor: bordersColorForDataSets[20]

					// },
					// 															{
					// 	label: userNameArray[21],
					// 	data: dataSetTeplate,
					// 	// Changes this dataset to become a line
					// 	type: 'line',
					// 	backgroundColor: backgroundColorForDataSets[21],
					// 	borderColor: bordersColorForDataSets[21]

					// },
					{
						label: 'SUMA',
						data: dataSetTeplate,
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: 'rgba(38, 38, 38, 0)',
						borderColor: 'rgba(38, 38, 38, 1.0)'

					}
					],
					// labels: ['January', 'February', 'March', 'April', 'May', 'June']
					labels: ['2022-07-14 13:45:00', '2022-07-14 13:46:00', '2022-07-14 13:47:00', '2022-07-14 13:48:00', '2022-07-14 13:49:00', '2022-07-14 13:50:00', '2022-07-14 13:51:00', '2022-07-14 13:52:00', '2022-07-14 13:53:00', '2022-07-14 13:54:00', '2022-07-14 13:55:00', '2022-07-14 13:56:00', '2022-07-14 13:57:00', '2022-07-14 13:58:00', '2022-07-14 13:59:00', '2022-07-14 14:00:00', '2022-07-14 14:01:00', '2022-07-14 14:02:00', '2022-07-14 14:03:00', '2022-07-14 14:04:00', '2022-07-14 14:05:00', '2022-07-14 14:06:00', '2022-07-14 14:07:00', '2022-07-14 14:08:00', '2022-07-14 14:09:00', '2022-07-14 14:10:00', '2022-07-14 14:11:00', '2022-07-14 14:12:00', '2022-07-14 14:13:00', '2022-07-14 14:14:00', '2022-07-14 14:15:00', '2022-07-14 14:16:00', '2022-07-14 14:17:00', '2022-07-14 14:18:00', '2022-07-14 14:19:00', '2022-07-14 14:20:00', '2022-07-14 14:21:00', '2022-07-14 14:22:00', '2022-07-14 14:23:00', '2022-07-14 14:24:00', '2022-07-14 14:25:00', '2022-07-14 14:26:00', '2022-07-14 14:27:00', '2022-07-14 14:28:00', '2022-07-14 14:29:00', '2022-07-14 14:30:00', '2022-07-14 14:31:00', '2022-07-14 14:32:00', '2022-07-14 14:33:00', '2022-07-14 14:34:00', '2022-07-14 14:35:00', '2022-07-14 14:36:00', '2022-07-14 14:37:00', '2022-07-14 14:38:00', '2022-07-14 14:39:00', '2022-07-14 14:40:00', '2022-07-14 14:41:00', '2022-07-14 14:42:00', '2022-07-14 14:43:00', '2022-07-14 14:44:00']
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true
							},
							stacked: false
						}],
						xAxes: [{
							stacked: true
						}],
					},
					responsive: true,
					title: {
						display: true,
						text: 'Pomiar z panelu fotowoltalicznego'
					}
				}

			});
			pvChart = myChart2;
			 /**
			  * pompy ciepła
			  */
			var ctx3 = document.getElementById('pcChart').getContext('2d');
			var myChart3 = new Chart(ctx3, {
				type: 'line',
				data: {
					datasets: [{
						label: 'Michał Jasiński',
						data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   ],
						type: 'line',
						backgroundColor: 'rgba(50, 180, 220, 0)',
						borderColor: 'rgba(50, 180, 220, 1.0)'

					},
					{
						label: 'Barbara Borowska',
						data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   ],
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: 'rgba(110, 255, 30, 0)',
						borderColor: 'rgba(110, 255, 30, 1.0)'

					},
					{
						label: 'Christian Herbasz',
						data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   ],
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: 'rgba(255, 110, 30, 0)',
						borderColor: 'rgba(255, 110, 30, 1.0)'

					},
					{
						label: 'Ewa Bukowska',
						data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   ],
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: 'rgba(50, 180, 120, 0)',
						borderColor: 'rgba(50, 180, 120, 1.0)'

					},
					{
						label: 'Janusz Tesznar',
						data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   ],
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: 'rgba(120, 50, 180, 0)',
						borderColor: 'rgba(120, 50, 180, 1.0)'

					},
					{
						label: 'Jarosław Jarosiński',
						data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   ],
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: 'rgba(255, 169, 0, 0)',
						borderColor: 'rgba(255, 169, 0, 1.0)'

					},
					{
						label: 'Krzysztof Smoliński',
						data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   ],
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: 'rgba(249, 49, 84, 0)',
						borderColor: 'rgba(249, 49, 84, 1.0)'

					},
					{
						label: 'Mariusz Zając',
						data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   ],

						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: 'rgba(0, 0, 128, 0)',
						borderColor: 'rgba(0, 0, 128, 1.0)'

					},
					{
						label: 'SUMA',
						data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
							   ],
						// Changes this dataset to become a line
						type: 'line',
						backgroundColor: 'rgba(38, 38, 38, 0)',
						borderColor: 'rgba(38, 38, 38, 1.0)'

					}
					],
					// labels: ['January', 'February', 'March', 'April', 'May', 'June']
					labels: ['2022-07-14 13:45:00', '2022-07-14 13:46:00', '2022-07-14 13:47:00', '2022-07-14 13:48:00', '2022-07-14 13:49:00', '2022-07-14 13:50:00', '2022-07-14 13:51:00', '2022-07-14 13:52:00', '2022-07-14 13:53:00', '2022-07-14 13:54:00', '2022-07-14 13:55:00', '2022-07-14 13:56:00', '2022-07-14 13:57:00', '2022-07-14 13:58:00', '2022-07-14 13:59:00', '2022-07-14 14:00:00', '2022-07-14 14:01:00', '2022-07-14 14:02:00', '2022-07-14 14:03:00', '2022-07-14 14:04:00', '2022-07-14 14:05:00', '2022-07-14 14:06:00', '2022-07-14 14:07:00', '2022-07-14 14:08:00', '2022-07-14 14:09:00', '2022-07-14 14:10:00', '2022-07-14 14:11:00', '2022-07-14 14:12:00', '2022-07-14 14:13:00', '2022-07-14 14:14:00', '2022-07-14 14:15:00', '2022-07-14 14:16:00', '2022-07-14 14:17:00', '2022-07-14 14:18:00', '2022-07-14 14:19:00', '2022-07-14 14:20:00', '2022-07-14 14:21:00', '2022-07-14 14:22:00', '2022-07-14 14:23:00', '2022-07-14 14:24:00', '2022-07-14 14:25:00', '2022-07-14 14:26:00', '2022-07-14 14:27:00', '2022-07-14 14:28:00', '2022-07-14 14:29:00', '2022-07-14 14:30:00', '2022-07-14 14:31:00', '2022-07-14 14:32:00', '2022-07-14 14:33:00', '2022-07-14 14:34:00', '2022-07-14 14:35:00', '2022-07-14 14:36:00', '2022-07-14 14:37:00', '2022-07-14 14:38:00', '2022-07-14 14:39:00', '2022-07-14 14:40:00', '2022-07-14 14:41:00', '2022-07-14 14:42:00', '2022-07-14 14:43:00', '2022-07-14 14:44:00']
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true
							},
							stacked: false
						}],
						xAxes: [{
							stacked: true
						}],
					},
					responsive: true,
					title: {
						display: true,
						text: 'Tryb pracy pompy ciepła'
					}
				}

			});
			pcChart = myChart3;

			// get data from API

			// var arrayFromPHP = <?php// print_r $oneNetConfiguration; ?>;

			// // // // // console.log(arrayFromPHP);
			// getDataFromApi();
	});

function getDataFromApi() {
	       $.ajax({
            type: 'GET',
            url: "../../API_PV/getDataFromDeviceGET.php",
			data :
				{
					"deviceAddress" : "testtesttest"
				},
            success: function (response) {
                var data = JSON.parse(response);
                // // // // console.log(data);



                if(data == undefined || data == null || data.length == 0){
                    var buttonStyle = "brakWezwania"
                    var name = "Brak zagrożenia";
                    // $('#reductionPanel').hide();
                }
                else{

                }
            }
        });
}

/**
 * pobieranie danych z bazy do wykresu
 */

 (function($) {


    $(document).ready(function() {

      var refreshId = setInterval(function() {
        // refresher();
		// // refresherSUM();
		// refresherPC(); //loginUserId
		refresher2();
		pvChart.update();
		// pcChart.update();


      }, 30000);

    });
  })(jQuery);

function refresher() {


	/**
	 * zaślepka dla sumy
	 *
	 * pvChart, clientId, title, clientDataSetValues, clientDataSetLabels
	 */

	 let clientId9 = 9;
	 let title9 = "Suma";
	 clientDataSetValues9 = [];
	 clientDataSetLabels9 = [];



	for(i = 1 ; i < 9; i++) {

		// 2, 3, 4, 5, 6, 9

		if ( i == 2 || i == 3 || i == 4 || i == 5 || i == 6  ) {
			// if ( i == 4 ) {
			// // // console.log("@@@@@@@ REFRESHER " + i );
			/**
			 * START
			 */
			$.get("/DSR/pages/OneNet/getMeasurementsFromDB.php", {
					idClient: i
				},
				function(data) {

					var res = JSON.parse(data);

					/**
					 * iterujemy po wszystkich klientach
					 */
// // console.log("@@@@@@@ REFRESHER " + i );
					 // // console.log(res);



					var tmpHourValuesObject = new Object();
					var tmpHourKeysObject = new Object();
					Object.entries(res.hourValues).forEach(entry=> {
						const [key, value] = entry;
						tmpHourValuesObject[key] = parseFloat(value);
						tmpHourKeysObject[key] = key;
					});

					res.hourValues = tmpHourValuesObject;

						var clientId;
						var title;
						var clientDataSetValues = [];
						var clientDataSetLabels = [];
					for (const [key, value] of Object.entries(res)) {

							// // // // // console.log('HOUR key');
							// // // // // console.log(key);
							// // // // // console.log('HOUR value');
							// // // // // console.log(value);



						clientDataSetValues.push(key.hourValues);
						clientDataSetLabels.push(tmpHourKeysObject);


						// console.log("***LOG***");
						// console.log(clientDataSetValues);
						// console.log(clientDataSetLabels);
						// console.log("###LOG###");


						if(key == "hourValues") {

							clientDataSetValues.push(value);
						}





					}

					// console.log(clientId);
					setDataset(pvChart, clientId, title, clientDataSetValues, clientDataSetLabels);
					// // refresherSUM();
						  pvChart.update();


					// // // // console.log('tock');
				});




			/**
			 * END
			 */
		}

		/**
		 * POCZATEK PĘTLI
		 */


		 /**
		  * KONIEC PĘTLI
		  */
	}


	/**
	 * @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
	 */
    var loginuserID = parseInt($('#LUId').val());


  }

  /**
   * refresher SUMA KONIEC
   */
function refresherSUM() {

	/**
	 * @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
	 */

    $.get("/DSR/pages/OneNet/getMeasurementsFromDBSum.php", {
        idClient: 9
      },
      function(data) {

		var res = JSON.parse(data);

		/**
		 * iterujemy po wszystkich klientach
		 */

		//  // console.log(res);
		for (const [key, value] of Object.entries(res)) {


			var clientDataSetValues = [];
			var clientDataSetLabels = [];
			var clientId;
			var title;

			// // // // // console.log(key);
			for (const [keyS, valueS] of Object.entries(value)) {
				// // // // // console.log(valueS.id);
				// // // // // console.log(valueS.idDevice);
				// // // // // console.log(valueS.idClient);
				// // // // // console.log(valueS.clientName);
				// // // // // console.log(valueS.last_power_value);
				// // // // // console.log(valueS.timestamp);

				clientId = valueS.idClient;
				title = valueS.clientName;

				// // // // // console.log(typeof(parseFloat(valueS.last_power_value)));
				clientDataSetValues.push(parseFloat(valueS.last_power_value));
				clientDataSetLabels.push(valueS.timestamp);

				// // // console.table(clientDataSetValues);
			}
			// // // console.table(clientDataSetValues);
			setDatasetSum(pvChart, 8, 'Suma', clientDataSetValues, clientDataSetLabels);
				  pvChart.update();
		}

        // refresherVP();
        // // // // console.log('tock');
      });
  }


/**
 * POMPY CIEPŁA START
 */
function refresherPC() {

	for(i = 1 ; i < 8; i++) {

		/**
		 * POCZATEK PĘTLI
		 */
    $.get("/DSR/pages/OneNet/getMeasurementsFromDBPC.php", {
        idClient: i
      },
      function(data) {

		// // // // // console.log('getMeasurementsFromDBPC');
		// // // console.table(data);
		// // // // // console.log('@@@@@@@@@@@@@@@@@@@@@@@');
		var res = JSON.parse(data);

		/**
		 * iterujemy po wszystkich klientach
		 */

		//  // // // // console.log(res);
			// // // // console.log('FIRST LOOP');
			// // // // console.log(res);
			// // // // console.log(res['timestamps']);
			// // // // console.log(res['hourValue']);
			// // // // console.log(res['values']);
			// // // // console.log('FIRST LOOP');
		// clientDataSetLabelsPC = res.
			// 		// // // // console.log('FIRST LOOP');
			// // // // // console.log(key);
			// // // // // console.log(value);
			// // // // // console.log('FIRST LOOP');
		for (const [key, value] of Object.entries(res)) {

			// // // // // console.log('FIRST LOOP');
			// // // // // console.log(key);
			// // // // // console.log(value);
			// // // // // console.log('FIRST LOOP');

			var clientDataSetValues = [];
			var clientDataSetLabels = [];
			var clientId;
			var title;

			// // // console.log('@@@@@@@@@@@@@@@ KEY '  + key + ' @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@');
			// // // console.log(value);
			for (const [keyS, valueS] of Object.entries(value)) {


				clientId = valueS.idClient;
				title = valueS.clientName;

				clientDataSetValues.push(parseFloat(valueS.last_power_value));
				clientDataSetLabels.push(valueS.timestamp);


			}

				setDataset(pcChart, clientId, title, clientDataSetValues, clientDataSetLabels);


		}

        // // refresherSUM();
        // // // // console.log('tock');
      });

		 /**
		  * KONIEC PĘTLI
		  */
	}



	/**
	 * @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
	 */
    var loginuserID = parseInt($('#LUId').val());


  }

 /**
  * POMPY CIEPŁA END
  */
   /**
	* refresher SUMA KONIEC
    */
  function setDataset(selectedChart, clientId, clientTitleName, dataValues, dataLabels) {



		arrayId = clientId -1;
		// console.log(' SET DATASET START ' + clientId);
		// console.log(selectedChart.data.datasets[arrayId].data);
		// console.log(' SET DATASET END ' + clientId);
		selectedChart.data.datasets[arrayId].data = dataValues;
		selectedChart.data.labels = dataLabels;




  }

  /**
   * ustawianie sumy na wykresie START
   */
  function setDatasetSum(selectedChart, clientId, clientTitleName, dataValues, dataLabels) {



		arrayId = clientId -1;

		selectedChart.data.datasets[8].data = dataValues;

		selectedChart.data.datasets[8].label = clientTitleName;


		selectedChart.data.datasets[8].backgroundColor = 'rgba(38, 38, 38, 0)'; //'rgba(50, 180, 220, 0)';
				// selectedChart.update();
		selectedChart.data.datasets[8].borderColor = 'rgba(38, 38, 38, 1)';//'rgba(50, 180, 220, 1.0)';

  }
   /**
	* ustawianie sumy na wykresie STOP
	*/


	/**
	 * funkcja changePVMode
	 * zmiana poziomu pracy panelu fotowoltalicznego
	 */
function changePVMode(clientId, deviceAddress, setted_active_power) {

	// // // // console.log('clientId ' + clientId);
	// // // // console.log('setted_active_power ' + setted_active_power);
	// // // // console.log('deviceAddress ' + deviceAddress);


	// // // // console.log("***************");
	$.ajax({
        type: 'POST',
        url: "/DSR/pages/OneNet/setPVMode.php",
		data :
			{
				"deviceAddress" : deviceAddress,
				"clientId" : clientId,
				"pvValueToSet" : setted_active_power
			},
        success: function (response) {
            var data = JSON.parse(response);
            // // console.log(data);


        }
    });

}

	/**
	 * funkcja changePVMode
	 * zmiana poziomu pracy panelu fotowoltalicznego
	 */

	//  changePCMode('.$value["clientId"].', 0,'. $deviceAddress.', 3)
function changePCMode(clientId, deviceId ,deviceAddress, setted_sg_ready_mode) {

	// // // // console.log('clientId ' + clientId);
	// // // // console.log('setted_sg_ready_mode ' + setted_sg_ready_mode);
	// // // // console.log('deviceAddress ' + deviceAddress);


	// // // // console.log("***************");
	$.ajax({
        type: 'POST',
        url: "/DSR/pages/OneNet/setPCMode.php",
		data :
			{
				"deviceId" : 0,
				"deviceAddress" : deviceAddress,
				"clientId" : clientId,
				"pcModeToSet" : setted_sg_ready_mode
			},
        success: function (response) {
            var data = JSON.parse(response);
            // // // // console.log(data);


        }
    });

}

var tmpRes;

function testPV(deviceId) {


	/**
	 * zliczanie sumy na wszystkich układach
	 * pvChart, deviceId, title, res.valuesArray, res.timestampsArray
	 */

	var deviceId9 = 21;
	var title9 = "Suma";
	var values9 = [];
	var timestamps9 = [];
	var res = {};

	  $.get("/DSR/pages/OneNet/getMeasurementsFromDB.php",


	  {
        idClient: deviceId
      },


      function(data) {

		var res = JSON.parse(data);

		// // console.log(res.suma);
		tmpRes = res;


		 // // console.log(res.clientName);
		 // // console.log(res.idDevice);
		 // // console.log(res.idClient);
		//  // // console.log(res[0]);

		 // // // // console.log('@@@@@@@@@@@@@@@@@@@@');
		//  // // // // console.log(res.hourValues);
		 // // // // console.log(res.timestampsArray);
		//  // // // // console.log(res.valuesArray);
		 // // // // console.log('####################');

		var tmpHourValuesObject = new Object();
		var tmpHourKeysObject = new Object();
		Object.entries(res.hourValues).forEach(entry=> {
			const [key, value] = entry;
			// // // console.log('KEY => ' + key + ' VALUE => ' + value);
			tmpHourValuesObject[key] = parseFloat(value);
			tmpHourKeysObject[key] = key;
	  	});

		res.hourValues = tmpHourValuesObject;

		for (const [key, value] of Object.entries(res)) {

			var clientId;
			var title;
			var clientDataSetValues = [];
			var clientDataSetLabels = [];

			clientDataSetValues.push(key.hourValues);
			clientDataSetLabels.push(tmpHourKeysObject);


			if(key == "hourValues") {

				clientDataSetValues.push(value);
			}

			for (const [keyS, valueS] of Object.entries(value)) {


				clientId = valueS.idClient;
				title = valueS.clientName;

			}


		}

			if(res.hourValues.length >= 61) {
				// // console.log( ' outer  >= 61 ');

				// // console.log(res.suma.length + ' ================ ');
				// // console.log(res.suma[Object.keys(res.suma)[0]]);
				delete res.hourValues[Object.keys(res.hourValues)[res.hourValues.length]];
				// // console.log(res.suma[Object.keys(res.suma)[0]]);
				// // console.log(res.suma.length + ' **************** ');
			}

			if(res.hourValues.length >= 61 || res.timestampsArray.length <= 59) {
				// // console.log( ' outer  >= 61 ');

				// console.log(res.valuesArray.length + ' VAL');
				// console.log(res.valuesArray);
				// console.log(res.timestampsArray.length + ' TIM');
				// console.log(res.timestampsArray[res.timestampsArray.length-1]);
			}

			let toTimestamp = (strDate) => {
				const dt = new Date(strDate).getTime();
				return dt / 1000;
			}
			var date = new Date('2023-01-26 15:22:00');
			// var datePlus1min = addMinutes(date, 1);


		if(Object.keys(res.hourValues).length < 60 && Object.keys(res.suma).length > 60) {
			// console.log('hourvalues ' + Object.keys(res.hourValues).length);
			// // console.log(res.hourValues);

			var lastProp = res.hourValues[Object.keys(res.hourValues)[Object.keys(res.hourValues).length - 1]];


			// // console.log(Object.keys(res.hourValues)[Object.keys(res.hourValues).length - 1]);

			// // console.log('suma ' + Object.keys(res.suma).length);
			// // console.log(res.suma[res.suma.length-1]);

		}



		title = res.clientName;

		// console.log(deviceId);

		// console.log(res.valuesArray.length);
		setDataset(pvChart, deviceId, title, res.valuesArray, res.timestampsArray);



		/**
		 * ustawianie sumy
		 */


			if(res.suma.length >= 61) {

				delete res.suma[Object.keys(res.suma)[0]];

			}


			if(res.suma.length < 60) {
				// console.log( ' outer  < 60 ');

				// console.log(res.suma.length + ' %%%%%%%%%%%%%%%%% ');
				// console.log(res.suma.length + ' %%%%%%%%%%%%%%%%% ');
				// console.log(res.suma.length + ' %%%%%%%%%%%%%%%%% ');
				// console.log(res.suma.length + ' %%%%%%%%%%%%%%%%% ');
			}


			if(res.suma.length < 60) {
				// console.log( ' outer  < 60 ');

				// console.log(res.suma.length + ' %%%%%%%%%%%%%%%%% ');
				// console.log(res.suma.length + ' %%%%%%%%%%%%%%%%% ');
				// console.log(res.suma.length + ' %%%%%%%%%%%%%%%%% ');
				// console.log(res.suma.length + ' %%%%%%%%%%%%%%%%% ');
			}

		for (const [key, value] of Object.entries(res.suma)) {


			for (const [keyS, valueS] of Object.entries(value)) {
				// // console.log(keyS);
				// // console.log(valueS);
				if(keyS == "last_power_value") {
					values9.push(valueS);
				}
			}

		}

		// // console.log(timestamps9);
		setDataset(pvChart, deviceId9, title, values9, res.timestampsArray);



      });




	//   // console.log(response);
	//   // console.log(res.timestamps);

}



function refresher2() {



		for (var i = 1 ; i < 20 ; i++) {
				testPV(i);
				// refresherSUM();
		}




}


function getDataFromDB(idClient) {
		    $.get("/DSR/pages/OneNet/getMeasurementsFromDB.php", {
        idClient: idClient
      },
      function(data) {

		var res = JSON.parse(data);
		//  // // console.log(res);

		 // // console.log(res[0][0]);

		var tmpHourValuesObject = new Object();
		var tmpHourKeysObject = new Object();
		Object.entries(res.hourValues).forEach(entry=> {
			const [key, value] = entry;
			// // // // // console.log('KEY => ' + key + ' VALUE => ' + value);
			tmpHourValuesObject[key] = parseFloat(value);
			tmpHourKeysObject[key] = key;
	  	});

		res.hourValues = tmpHourValuesObject;
					var clientId;
			var title;
			var clientDataSetValues = [];
			var clientDataSetLabels = [];

		for (const [key, value] of Object.entries(res)) {

			clientDataSetValues.push(key.hourValues);
			clientDataSetLabels.push(tmpHourKeysObject);


			if(key == "hourValues") {

				clientDataSetValues.push(value);
			}

			for (const [keyS, valueS] of Object.entries(value)) {


				clientId = valueS.idClient;
				title = valueS.clientName;

			}

				// setDataset(pvChart, idClient, title, res.valuesArray, res.timestampsArray);


		}


		/**
		 * DEBUG START
		 */
			// // console.log(pvChart);
			// // console.log(clientId);
			// // console.log(title);
			console.table(clientDataSetValues);
			console.table(clientDataSetLabels);

		 /**
		  * DEBUG END
		  */


		// setDataset(pvChart, clientId, title, clientDataSetValues, clientDataSetLabels);
        // // // // console.log('tock');
      });
}

function change_pv_value_confirm_input(clientId, clientAdress) {


	var pvRadio_ON_id = "#pvRadioOn_" + clientId;
	var pvRadio_OFF_id = "#pvRadioOFF_" + clientId;
	var pvInputId = "#pvInput_" + clientId;

	var valueToSetonPV = parseInt($(pvInputId).val());

	if(window.confirm("Czy chcesz zmienić wartość na urządzeniu " +clientAdress + ' na  ' + valueToSetonPV) == true) {

		changePVMode(clientId,clientAdress, valueToSetonPV);


		//zaznaczamy radio button WŁĄCZONY jeżeli wpisaliśmy wartość większą od 0
		if(valueToSetonPV > 0) {
			$(pvRadio_ON_id).attr("checked", "checked");
			$(pvRadio_OFF_id).removeAttr("checked");
		}

		//zaznaczamy radio buton WYŁĄCZONY jeżeli wpisaliśmy wartość 0
		if(valueToSetonPV == 0) {
			$(pvRadio_ON_id).removeAttr("checked");
			$(pvRadio_OFF_id).attr("checked", "checked");
		}

		// console.log(" ZATWIERDZONO zmianę " + clientAdress + ' na  ' + valueToSetonPV);
	} else {
		// console.log(" ODRZUCENIE zmiany " + clientAdress + ' na  ' + valueToSetonPV);
	}

}


function change_pv_value_confirm_radio(cliendId, clientAdress, pvValueToSet) {


	var pvRadio_ON_id = "#pvRadioOn_" + clientId;
	var pvRadio_OFF_id = "#pvRadioOFF_" + clientId;
	var pvInputId = "#pvInput_" + clientId;


	var valueToSetonPV = parseInt($(pvInputId).val());

		var pvInputId = "#pvInput_" + clientId;

		$(pvInputId).val(valueToSetonPV);


	if(window.confirm("Czy chcesz zmienić wartość na urządzeniu " +clientAdress + ' na  ' + valueToSetonPV) == true) {

		changePVMode(clientId,clientAdress, valueToSetonPV);
		$(pvInputId).val(parseInt(valueToSetonPV));
		// console.log(" ZATWIERDZONO zmianę " + clientAdress + ' na  ' + valueToSetonPV);

	} else {
		// console.log(" ODRZUCENIE zmiany " + clientAdress + ' na  ' + valueToSetonPV);
	}
	// $('#radio_button').attr("checked", "checked");




	//przy zmianie wartości 0 lub 100, ustawiamy taką wartośc na inpucie

}





</script>



