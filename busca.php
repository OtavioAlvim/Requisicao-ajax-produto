<?php
	//Incluir a conexão com banco de dados
	$pdo = new PDO('sqlite:./db2/sia');
	//Recuperar o valor da palavra
	$cursos = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$sth = $pdo->prepare("SELECT * from produtos where DESCRICAO like '%{$cursos}%' ");
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
    $t = count($result);
	// print_r($t);
	if(count($result) <= 0){
		echo "<h1>"."Nenhum produto encontrado... "."</h1>";
	}else{ ?> 
		<!-- <table>
			<tr>
				<th class="titulo_cod_modal_prod"><h2>COD</h2></th>
				<th class="titulo_desc_modal_prod"><h2>DESCRIÇÃO</h2></th>
				<th class="titulo_un_modal_prod"><h2>UN</h2></th>
				<th class="titulo_unitario_modal_prod"><h2>VALOR</h2></th>
			</tr>
		</table> -->
	<?php
		// echo  'achou algo';
		foreach($result as $row=> $rows){?>
			<tr>
				<br>
				<div class="modal_prod_pesq">
					<div>
						<td><strong><?php echo $rows['ID_PRODUTO'];?> - </strong></td>
					</div>
					<div class="desc_modal_prods">
						<td><strong> <?php echo $rows['DESCRICAO'];?></strong></td>
					</div>
					<div class="unid_modal_prods">
						<td><strong><?php echo $rows['UNIDADE'];?></strong></td>
					</div>
					<div class="unit_modal_prods">
						<td><strong><?php echo $rows['UNITARIO'];?></strong></td>
					</div>
					<div>
						<td><a href="mais_detalhes.php?id=<?php echo $rows['ID_PRODUTO']?>"><button>INSERIR</button></a></td>
					</div>
				
				</div>
				<hr>
			</tr>
		<?php
			
			// echo "ola";
		}
		// while($rows = mysqli_fetch_assoc($resultado_cursos)){
		// 	echo "<li><a href='mais_detalhes.php?id=".$rows['id']."'>".$rows['nome']."</a></li>";
		// }
	}
?>
