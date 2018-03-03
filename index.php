<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="node_modules/bootstrap/complier/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/complier/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/complier/css/font-awesome.min.css">
    <title></title>
<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<div class="container">
		<div class="row my-5">
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header">
						<h6 class="card-title display-5 text-center mb-0">DESIGNER/FRONT-END</h6>
					</div>
					
					
						<img src="img/kata.jpg" alt="" class="card-img-top">
					
					<div class="card-body">
						<a href="#" class="card-link mb-0"><button id="plus"><i class="icon-heart" aria-hidden="true"></i></button></a>
						<a href="#" class="card-link mb-0" data-toggle="modal" data-target="#siteModal">Bio</a>
						<a href="#" class="card-link mb-0" data-toggle="modal" data-target="#siteModal2" id="portfolio">Portfolio</a>
						<a href="#" class="card-link mb-0">Instagram</a>
					</div>
					<div class="card-footer text-center">
						BRUNO FRANCISCO
					</div>

				</div>
			</div>
		</div>


	</div>


	<div class="modal fade" id="siteModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Mini Bio</h5>
				<button class="close" data-dismiss="modal" type="button" >
					<span>&times;</span>
				</button>
			</div>


			<div class="modal-body">
				<p>Sou Bruno, autor e webmaster deste portfolio e blog, minha personalidade é classificada como introvertida,  (passo por muitos maus entendidos por isso <em>(mau caratismons também)</em>), talvez por isso escolhi esta profissão, que me proporciona a			'solidão'.

					<p>Me formei de Design Gráfico em 2016 pela UNIMEP. Desde pequeno sempre gostei de criar coisas, e sempre tive facilidade em desenhar, então busquei o curso de DG que foi decepcionante, mas durante um estágio de fiz o Desenvolvimento Web me acendeu uma paixão.</p>

					<em>Com Web Development posso sempre estar criando, e com resultados 'imediatos'.</em><br><br>

					<p>Gosto de tecnologia em geral, especialmente em coisas diferentes, como diferentes SOs, softwares alternativos. Gosto de ouvir músicas profundas e 'insanas' que falem coisas não triviais, o mesmo vale para filmes e conteúdo que consumo em geral.</p>
				</p>
			</div>
	
			<div class="modal-footer">
				<button class="btn btn-danger" type="button" data-dismiss="modal">
					<span>Fechar</span>
				</button>
			</div>

		</div>
	</div>
</div>


<div class="modal fade" id="siteModal2" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Portfolio</h5>
				<button class="close" data-dismiss="modal" type="button" >
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body text-center">
				
					<p>Você será redirecionado em <span id="count_num">3</span> ...</p>
				
			</div>
	
			<div class="modal-footer">
				<button class="btn btn-danger" type="button" data-dismiss="modal">
					<span>Fechar</span>
				</button>
			</div>

		</div>
	</div>
</div>
<script>
		$("#portfolio").click(function() {
			function endCountdown() {
  // logic to finish the countdown here
}

function handleTimer() {
  if(count === 0) {
    clearInterval(timer);
    endCountdown();
  } else {
    $('#count_num').html(count);
    count--;
  }
}

var count = 3;
var timer = setInterval(function() { 
	handleTimer(count); }, 800);
    window.setTimeout(function () {
    location.href = "https://bruno-francisco.com/portfolio/";
    }, 3300);
})
</script>
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
	<script src="node_modules/popper.js/dist/umd/popper.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>