<!DOCTYPE html>
<html>
	<head>
		<title><?php $nombre_chat="charlateze"; echo $nombre_chat; ?></title>
		<link rel="stylesheet" href="./sub/css/estilo.css" />
		<script src="./sub/js/programa.js" ></script>
	</head>
	<body>
		<div class="div">
			<div class="columna_chat_a" >
				<b><?php echo $nombre_chat; ?></b>
			</div>
			<div class="chat" >
			</div>
		</div>
		<div class="texto">
			<table>
				<tr>
					<td class="columna_alias_a" >
						<a>Alias: </a>
					</td>
					<td class="columna_alias_b" >
						<input/>
					</td>
					<td class="columna_textarea" >
						<textarea></textarea>
					</td>
					<td class="columna_enviar" >
						<button>Enviar</button>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
