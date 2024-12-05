        function validarSenhas(event) {
            let senha = document.getElementById("senha").value;
            let repetirSenha = document.getElementById("repetirSenha").value;

            if (senha !== repetirSenha) {
                event.preventDefault(); 
                alert("As senhas não coincidem!");
                return false;
            }
        }