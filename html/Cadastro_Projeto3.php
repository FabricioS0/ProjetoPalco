<?php
echo '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/Style_Cadastro_Projeto.css">
        <script src="../Stripts/script_cadastro_projeto.JS"></script>
        <title>Cadastro de projeto</title>
    </head>
    <body>
        <div class="Container">
                <a href="Cadastro_Projeto2.html"><button class="row_back">←</button><b>Cadastrar projeto</a>
                <div class="progress-bar">
                    <div class="step active"></div>
                    <div class="step active"></div>
                    <div class="step active"></div>
                    </div>
    
                <h1>Por que o projeto é importante?<h1>
            <div class="forms">
                <form action="../controller/cadastroMidia.php?ProjetoId='.$_GET['ProjetoId'].'" method="post" enctype="multipart/form-data">
                    
                    <input type="file" id="video" name ="video" accept=".avi, .mp4, .wmv">
                    <input type="file" id="imagem1" name ="imagem1" accept=".png, .jpg, .jpeg">
                    <input type="file" id="imagem2" name ="imagem2" accept=".png, .jpg, .jpeg">
                    <div class="form_group1">
                        <label for="descricao">Descrição detalhada do projeto<input type="text" name="descricao" id="descricao" maxlength="1000" required></label>
                    </div>
                    <div class="MaxCaracteres1">1000 caracteres disponíveis</div> 
                        </div>
                        <div class="container-uploads">
                            <div class="upload-box">
                                <!-- <input type="file" id="video" accept=".avi, .mp4, .wmv"> -->
                                <!-- <label for="video">
                                    <img src="../Style/Imgs/adicionar-foto.png" alt="Ícone de upload" width="50">
                                    <div>Anexar arquivo</div>
                                </label> -->
                                <span>No formato AVI, MP4 ou WMV</span>
                            </div>
                            <div class="upload-box">
                                <!-- <input type="file" id="imagem1" accept=".png, .jpg, .jpeg"> -->
                                <!-- <label for="imagem1">
                                    <img src="../Style/Imgs/adicionar-foto.png" alt="Ícone de upload" width="50">
                                    <div>Anexar arquivo</div>
                                </label> -->
                                <span>No formato PNG, JPG ou JPEG</span>
                            </div>
                    
                            <div class="upload-box">
                                <input type="file" id="imagem2" accept=".png, .jpg, .jpeg">
                                <label for="imagem2">
                                    <img src="../Style/Imgs/adicionar-foto.png" alt="Ícone de upload" width="50">
                                    <div>Anexar arquivo</div>
                                </label>
                                <span>No formato PNG, JPG ou JPEG</span>
                            </div>
                        </div>
                    <button type="submit" class="submit_button">Avançar</button>
                </form>
            </div>
        </div>
    </body>
    </html>';
?>