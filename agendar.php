<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,user-scalable=0"/>
        <link rel="stylesheet" type="text/css" href="assets/css/cssAgendar.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <a href="#"><img src="assets/images/logomarca.png"></a>
                </div>
                <div class="menu">
                    <nav>
                        <ul>
                            <li ><a href="index.php">Home</a></li>
                            <li><a href="">Produtos</a></li>
                            <li><a href="">Contato</a></li>
                            <li ><a href="cadastro.php">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <section class="form">
            <div class="container">
			<div class="header"></div>
			</div>
			<div class="form-container">
				<div class="form-header">
					<p>Agendar Consulta</p>
				</div>
				<div class="form-body">
					<form action="agendarConsulta.php" method="GET">
                        <div class="box-input">
							<label>
								Pet :
							  <span class="required-field">*</span> 
							</label>
							<input type="text" name="nomepet" 
							       placeholder="Nome do seu Pet"
							       required>    
						</div>
						<div class="box-input">
							<label>
								CPF :
							  <span class="required-field">*     </span> 
							</label>
							<input type="text" name="cpf_usuario" 
							       placeholder="Digite seu  CPF"
							       minlength="11"  required>    
						</div>
						<div class="box-input">
							<label for="brand">
								Contato:
								<span class="required-field">*</span>
							</label>
							<input type="text" name="telefone"
							       placeholder="Digite seu telefone"
							       minlength="1" maxlength="40" required>    
						</div>
                        <div class="box-text">
							<label>
								Motivo:
								<span class="required-field">*</span>
							</label>
							<textarea name="motivo" id="" rows="4" cols="58" placeholder="Motivo da consulta"></textarea>
                        </div>
						<div class="box-select">
							<label>
								Espécie:
								<span class="required-field">*</span>
							</label>
							<select name="especie" id="">
                                <option value="cachorro">Cachorro</option>
                                <option value="gato">Gato</option>
                                <option value="passaro">Pássaro</option>
                            </select>
                        </div>
						    <input type="submit" class="btn-submit" value="Finalizar">  	              
					</form>
				</div>
			</div>
		</div>
        </section>
        <footer>
            <div class="container flexColumn">
                <div class="footer_area">
                    <div class="footer_areaitem">
                        <div class="widget">
                            <div class="widget_title">
                                <div class="widget_title_text">Endereço</div>
                                <div class="widget_title_bar"></div>
                            </div>
                            <div class="widget_body">
                            Brasília/DF  CEP 71926-000 <br>
                            Avenida Sibipiruna<br>
                            Rua 5 · lote 16  
                            </div>
                        </div>
                    </div>
                    <div class="footer_areaitem">
                        <div class="widget">
                            <div class="widget_title">
                                <div class="widget_title_text">Fale conosco</div>
                                <div class="widget_title_bar"></div>
                            </div>
                             
                            <div class="widget_body">
                                (61) 22336-30475<br>
                                (61) 944079-59232
                            </div>
                        </div>
                    </div>
                    <div class="footer_areaitem">
                        <div class="widget">
                            <div class="widget_title">
                                <div class="widget_title_text">Campanhas e Promoções</div>
                                <div class="widget_title_bar"></div>
                            </div>
                            <div class="widget_body">
                                <a href="#">Promoções do mês</a><br>
                                <a href="#">Campanhas vigentes</a>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="footer_copy">
                    &WesleyMarques
                </div>
            </div>
              
        </footer>
    </body>