<!DOCTYPE hmtl>	

<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Formulário do contato</title>
	<link rel="stylesheet" type="text/css" href="css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet"> 
</head>
	<body>
		<section class="section"><!-- INICIO SECTION-->
			<div class="container"><!-- INICIO CONTAINER-->
				<dir class="columns is-centered"><!-- INICIO - TAG para centralizar o texto -->
					<dir class="column is-half"><!-- INICIO COLUMNS IS-HALF -->

						<h1 class="title has-text-centered">Formulário de Contato - REDE73</h1>

						<!-- Incio Formulario -->
								<form action="enviar.php" method="POST">

									<div class="field"> <!-- INICIO -FIELD NOME-->
										<label  class="label">Nome</label>
										<div class="control">
											<input name="nome" class="input" type="text" placeholder="Seu nome...">		
										</div>									
									</div><!-- FIM - FIELD EMAIL-->

									<div class="field"> <!-- INCIIO - FIELD EMAIL-->
										<label  class="label">Email*</label>
										<div class="control">
											<input name="email" class="input" type="email" placeholder="Seu email...">		
										</div>									
									</div> <!-- FIM - FIELD EMAIL-->


									<div class="field"> <!-- INCIIO - FIELD ASSUNTO-->

										<label  class="label">Assunto</label>
											<div class="control">
												<div class="select is-fullwidth">
													<select name="assunto">
														<option> </option>
														<option>Reportar erro!</option>
														<option>Anúncios</option>
														<option>Outros</option>													
													</select>												
												</div>												
											</div>	

									</div> <!-- FIM - FIELD ASSUNTO-->

									<div class="field"> <!-- INCIIO - FIELD MENSAGEM-->
										<label  class="label">Mensagem</label>
										<div class="control">
											<textarea name="mensagem" class="textarea" placeholder="Deixe sua mensagem..." maxlength="2000"></textarea>	
										</div>									
									</div> <!-- FIM - FIELD EMAIL -->

									<!-- INCIO - BOTÃO ENVIAR -->
									<div class="field is-grouṕed">
										<div class="control">
											<button class="button is-link is-small">Enviar</button> <!-- TAG is-medium define o tamanho do botão -->											
										</div>										
									</div>
									<!-- FIM - BOTÃO ENVIAR -->

								</form>
						<!-- Fim Formulario -->

					</dir><!-- FIM COLUMNS IS-HALF -->					
				</dir><!-- FIM - TAG para centralizar o texto -->				
			</div><!-- FIM CONTAINER-->			
		</section><!-- FIM SECTION-->
	</body>
</html>