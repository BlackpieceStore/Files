
<?php

$tituloPagina = "Produtos - BLACKPIECE";
$pagina = "produtos";

include("inc/header.php");

?>


<?php include("/vitrine/vitrine.php"); ?>

<!--
    <div id="wrapper">
      <section>
        <form id="main" ng-app ng-controller="nomesShow">
			<h1>Escolha os shows</h1>
      <hr>
			<ul id="services">
				<li ng-repeat="nome in nomes">
					<label>
					<input type="checkbox" ng-model="nome.selected" value="1" name="{{nome.nome}}" />
						<strong>{{ nome.nome }}</strong>  -  Data: {{nome.data}} - Preço: <span>R${{ nome.preco}}</span></label>
            <br>
            <hr>
				</li>
			</ul>

			<p id="total"><strong>Total: <span>R${{total()}}</span></strong></p>


			<p><button type='button' onclick="alert('Compra realizada com sucesso!'); location.href='contato.html'" ><h3>Finalizar compra</h3></button></p>

    -->

<?php include("inc/footer.php"); ?>