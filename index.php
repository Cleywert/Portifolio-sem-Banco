<?php
$urls = fopen("urls.txt", "r");
$string = "";
	// echo $urls;
while (!feof($urls))
{
	$linha = fgets($urls);
	$string .= $linha;
}
$links = explode(";", $string);
fclose($urls);
?>
<?php
	// pega o endereço do diretório
$diretorio = getcwd();
chdir('imgs/trabs/');
$diretorio = getcwd();

	// abre o diretório
$ponteiro  = opendir($diretorio);
	// monta os vetores com os itens encontrados na pasta
while ($nome_itens = readdir($ponteiro)) {
	if($nome_itens!="." || $nome_itens!="..")
		$itens[] = $nome_itens;
}

$length = count($itens);
unset($itens[0]);
unset($itens[1]);

$files = array();
$i=0;$c=0;
while ($i<$length) {
	if(isset($itens[$i]))
	{
		$files[$c] = "imgs/trabs/".$itens[$i];
		$c++;
	}
	$i++;
}

    $images = "['"; // Begin of javascript array
    $images .= implode("','", $files); // Join the files putting these characters after everyone
	$images .= "']"; // End of javascript array

	$tam = count($files);

	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Cleywert Rayol</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	</head>
	<body>

		<header>
		</header>

		<main>
			<div class="minha_apresentacao">
				<div class="meu_perfil">
					<div class="foto">
					</div>
					<p class="nome">Cleywert Rayol</p>
					<div class="social">
					<a class="git"></a>
					<a class="linkedin"></a>
				</div>
				</div>
			</div>

			<div class="contatos">
				<div class="email" onclick="exibir()"></div>
				<a href="https://wa.me/5592999031128?text=sua%20mensagem" target="_blanck"><div class="wpp"></div></a>
			</div>
			<section class="cont-trabalhos">
				<h1 class="titulo">MEUS TRABALHOS</h1>
				<div class="grade">
					<?php
					for($i=0;$i<$tam;$i++){
						?>
						<a target="_blank" href="http://<?php echo $links[$i] ?>" class="item">
							<img class="img-100" src="<?php echo $files[$i]; ?>">
						</a>
						<?php
					}
					?>
				</div>
			</section>

			<section class="cont-sobre">
				<h1 class="titulo">SOBRE MIM</h1>
				<p class="sobre-mim">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sagittis aliquet commodo. Duis non pellentesque magna, in aliquam sapien. Nulla enim nulla, vehicula nec tellus vel, dictum dapibus turpis. Vestibulum ut sagittis est, interdum pulvinar felis. Aliquam erat volutpat. Integer eu efficitur orci. Aliquam vehicula auctor posuere. Nunc ut erat in leo porta vehicula. Nulla consectetur sapien a nibh mattis, et vulputate metus mattis. Praesent sit amet eros eget ipsum dapibus aliquet in in justo.</p>
				<div class="colunas">
					<div class="formacao">
						<h2 class="subtitulo-1">Formação</h2>
						<div class="lista">
							<p>Ensino Médio</p>
							<p>Ensino Técnico</p>
							<p>Curso</p>
							<p>Graguação</p>
							<p>Pós-Graduação</p>
						</div>
					</div>
					<div class="competencias">
						<h2 class="subtitulo-1">Competencias</h2>
						<div class="lista">
							<p>Banco de Dados</p>
							<p>PHP</p>
							<p>HTML</p>
							<p>CSS</p>
							<p>JavaScript</p>
						</div>
					</div>
				</div>
			</section>
		</main>

		<footer>
			<p>&copy;CLEYWERT RAYOL</p>
		</footer>

		<div id="ctt" class="box">
			<div class="email-box">
				<div class="bt-fechar" onclick="fechar()">
				</div>
				<h1 class="titulo-email">Envie-me um e-mail</h1>
				<form>
					<input type="text" name="titulo" placeholder="Titulo" required>
					<input type="text" name="assunto" placeholder="Assunto" required>
					<textarea name="mensagem" placeholder="Mensagem" required></textarea>
					<div class="botoes">
						<input type="submit" name="submit" value="Enviar">
						<input type="reset" name="submit" value="Limpar">
					</div>
				</form>
			</div>
		</div>

	</body>
	<link rel="stylesheet" type="text/css" href="css.css">

	<script type="text/javascript">
		function exibir()
		{
			document.getElementById('ctt').style.display="block";
		}
		function fechar()
		{
			document.getElementById('ctt').style.display="none";
		}
	</script>
	</html>