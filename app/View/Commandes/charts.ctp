<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js" xmlns=""></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<style>
	.show-calendar  {
		top: 92px  !important ;
		right: auto !important ;
		left: 24.25em !important;
	}
	.btn-success  {
		position: relative;
		top: -4.2px;
		float:right;
		margin-left: 5px;
	}
	.range_inputs{
		position: relative;
		left: 33.6em;
	}
	.cancelBtn{
		position: relative;
		top: -4.2px;
		background-color: #9e9e9e;
	}
	.daterangepicker {
		width: 490px;
	}
	.mtext-111 {
		font-size: 22px !important;
	}
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script>
	var today = moment().format('DD, MM, YYYY');
	console.log(today)
</script>
<div class="m-t-80 m-b-200 m-t-100 m-l-44">
<h4 class="mtext-111 cl3 m-l-44"> Chart of Commands : </h4>
	<div class="mx-auto" style="width: 400px;">
		<a style="position: relative; top: 38px;" class="font-weight-bold cl2">Choose Date Range : </a><a><input class="m-l-160 text-center"  style="position: relative; top: 15px; border: 2px #fc8803 solid;" type="text" name="daterange" value=today /></a>
	</div>
		<canvas class="m-t-50" id="myChart" width="400px" height="150" aria-label="Hello ARIA World">
	<p>Hello Fallback World</p>
</canvas>
</div>




<script>
	$(function() {
		$('input[name="daterange"]').daterangepicker({
			opens: 'left'
		}, function(start, end, label) {
			var start = start.format('YYYY-MM-DD');
			var end = end.format('YYYY-MM-DD');
			$.ajax({
				type:'POST',
				url:'/wedding1/commandes/charts',
				data:{'first':start,'last':end},
				success:function(data){
					var array = $.parseJSON(data);
					var x = [];
					var y = [];
					var i =0;
					array.forEach(function (element) {
						x[i]=element.DATE;
						y[i]=element.COUNT;
						i++
					});
					var ctx = document.getElementById('myChart').getContext('2d');
					var myChart = new Chart(ctx, {
						type: 'line',
						data: {
							labels: x,
							datasets: [{
								label: 'Nbre Commandes',
								data: y,
								backgroundColor: [
									'rgba(255, 232, 140)',

								],
								borderColor: [
									'rgb(255,99,132)',
								],
								borderWidth: 1
							}]
						},
						options: {
							scales: {
								yAxes: [{
									ticks: {
										beginAtZero: true
									}
								}]
							},
							legend: {
								display: false,
							},
							tooltips: {
								display :'false'
							}
						},

					});
				}
			});
		});
	});

</script>



<!--TORVA20 /// VIARDEJIK // NCLILE // ZIVLOX -->
