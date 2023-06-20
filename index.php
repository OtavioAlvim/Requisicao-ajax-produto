
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="scrip.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
	<script type="text/javascript" src="javascriptpersonalizado.js"></script>
    <title>Teste Modal</title>
</head>
<body>
    <button class="ola" onclick="abreModalProduto()" accesskey="S">Menu</button>
    <div class="modals" id="modalss">
        <div class="modal-contents">
            <span class="close-buttons" onclick="fechaModalProduto()">
                &times;
            </span>
            <div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1 id="titulo_modal_produtos">Pesquisar produtos</h1>
				<form method="POST" id="form-pesquisa" action="">
					<div class="form-group">
						<input type="text" name="pesquisa" class="pesquisa_modal_item" id="pesquisa" placeholder="Pesquisar produto">
					</div>
				</form>
				
				
			</div>
			<div class="row">
            <table class="testandoGrid">
			<tr>
				<th class="titulo_cod_modal_prod"><h2>COD</h2></th>
				<th class="titulo_desc_modal_prod"><h2>DESCRIÇÃO</h2></th>
				<th class="titulo_un_modal_prod"><h2>UN</h2></th>
				<th class="titulo_unitario_modal_prod"><h2>VALOR</h2></th>
			</tr>
		    </table>
				<div class="col-md-6">
                    <!-- <hr> -->
					<ol class="resultado">

					</ol>
				</div>
			</div>
			
		    </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>