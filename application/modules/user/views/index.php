<html>
<head>	
	<!-- Material Design fonts -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

	<link rel="stylesheet" type="text/css" href="<?=base_css()."style.css"?>">

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?=base_css()."bootstrap.min.css"?>">

	<!-- Bootstrap Material Design -->
	<link rel="stylesheet" type="text/css" href="<?=base_css()."bootstrap-material-design.min.css"?>">	

	<title>Lippo Cikarang</title>
</head>

<body>

	<div class="fullback-home">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 half-page">
					<img src="<?=base_img().'logo.png'?>">
				</div>
				<div class="col-sm-12 center">					
					<ul class="nav navbar-nav">						
						<li><a class="ripple" href="<?=base_url().'user/entertainment'?>"><center><img src="<?=base_img().'entertainment.png'?>"><br>Entertainment</center></a></li>
						<li><a class="ripple" href="<?=base_url().'user/dining'?>"><center><img src="<?=base_img().'dining.png'?>"><br>Dining</center></a></li>
						<li><a class="ripple" href="<?=base_url().'user/accomodation'?>"><center><img src="<?=base_img().'accomodation.png'?>"><br>Accomodation</center></a></li>
						<li><a class="ripple" href="<?=base_url().'user/shopping'?>"><center><img src="<?=base_img().'shopping.png'?>"><br>Shopping</center></a></li>
						<li><a class="ripple" href="<?=base_url().'user/publicservice'?>"><center><img src="<?=base_img().'public service.png'?>"><br>Public Service</center></a></li>
						<li><a class="ripple" href="<?=base_url().'user/transportation'?>"><center><img src="<?=base_img().'transportation.png'?>"><br>Transportation</center></a></li>
						<li><a class="ripple" href="<?=base_url().'user/industry'?>"><center><img src="<?=base_img().'industry.png'?>"><br>Industry</center></a></li>
					</ul>												
				</div>
			</div>
		</div>	
	</div>

</body>

<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>    
<script type="text/javascript">
	$(function() {
		$('.ripple').on('mousedown', function (event) {
			event.preventDefault();

			var $div = $('<div/>'),
			btnOffset = $(this).offset(),
			xPos = event.pageX - btnOffset.left,
			yPos = event.pageY - btnOffset.top;

			$div.addClass('ripple-effect');
			var $ripple = $(".ripple-effect");

			$ripple.css("height", $(this).height());
			$ripple.css("width", $(this).height());
			$div
			.css({
				top: yPos - ($ripple.height()/2),
				left: xPos - ($ripple.width()/2),
				background: "white"
			}) 
			.appendTo($(this));

			window.setTimeout(function(){
				$div.remove();
			}, 2000);
		});

	});
</script>
</html>