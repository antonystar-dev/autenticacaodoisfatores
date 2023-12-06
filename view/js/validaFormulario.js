function validarSenha() {

    senha = document.getElementById('senha').value;
    confSenha = document.getElementById('confSenha').value;
    if (senha != confSenha) {
        alert('As senhas digitadas não coincidem');

        return false;
    }

};



/*   if (nome == "") {
      alert('Digite o campo com seu nome');
      nomeUsuario.focus();

      return false;
  } */