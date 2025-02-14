<?php
echo '<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Style/Style_Cadastro_Projeto.css">
        <script src="../Stripts/script_cadastro_projeto.JS"></script>
        <title>Cadastro de projeto</title>
    </head>
    <body>
        <div class="Container">
                
                <a href="Cadastro_Projeto1.html"><button class="row_back">←</button><b>Cadastrar projeto</a>
                <div class="progress-bar">
                    <div class="step active"></div>
                    <div class="step active"></div>
                    <div class="step"></div>
                    </div>
    
                <h1>Quais as recompensas?<h1>
            <div class="forms">
                <form action="../controller/cadastroRecompensa.php?ProjetoId='.$_GET['ProjetoId'].'" method="post">
                    <div class="form_group">
                        <label for="descricao">O que a pessoa vai ganhar?<input type="text" name="descricao" id="descricao" required maxlength="100"></label>
                        
                        <label for="valor">Valor da doação<input type="number" name="valor" id="valor" oninput="moedaFormat2()" placeholder="0,00" required></label>
                        <button type="submit" class="save_button">Salvar</button>
                    </div>
                    <hr>
                    <button type="submit" class="submit_button">Avançar</button>
                </form>
            </div>
        </div>
    </body>
    </html>';
?>