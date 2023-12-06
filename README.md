# Sistema de autenticacao de dois fatores por E-mail (em produção)
Nesse sistema irei focar mais no backend, na qual a parte do design será utilizada somente para uma melhor estilização, mas sem nenhum foco de ficar bem apresentavel;

Até o momento foi feito a implementação de gerar um codigo aleatorio que chega no email e logo apos é confirmado pelo usuario na tela de verificação;

## Ainda será implementado:

* Correção do link do email que não expira;
* Formatação do email enviado para o usuario

## O que ja foi implementado:

* Codigo de verificação é gerado de forma aleatoria
* Design (Correção do CSS e criação do CSS)
* Sistema de envio de email com link aleatorio
* Sistema de login com separação de perfils
* Atualização das paginas de Administrador e Usuario comum com controle de perfil, onde somente quem tiver o perfil correto conseguira acessar a pagina solicitada.
* Estruturação do sistema para a utilização de url amigavel, não sendo revelado o diretório e formato dos arquivos que compoem o sistema.
* Implementação das mensagens de alerta no sistema.
* Cadastro de usuarios por meio de formularios;
* Conclusão das paginas externas assim como o design.
* Implementação de recuperações de cadastro caso o usuario esqueça a senha
* Organização dos diretorios seguindo o MVC mais a fundo
* Organização do codigo css separado em arquivos.
* Correção no arquivo do banco (optei em deixar os metodos de conexão separados, visto que teria que reescrever muitos trechos do sistema)

## Quais melhorias pretendo fazer:

* Implementação do session para remover o metodo $_GET
* Separação dos arquivos PHP em funções (atualização de codigo)

## FALHA REPORTADA:
 Ao realizar o deploy do sistema atualizado foi encontrado algumas **falhas de compatibilidade** com a hospedagem.
 1. Foi verificado que estava havendo conflito entre o Github e a hospedagem, na qual ao realizar a implementação o servidor estava encontrando dificuldades para substituir os arquivos.
 2. Solução encontrada: Realizar o deploy de forma manual pelo metodo de envio FTP e não mais via implementação GIT.
 3. Foi encontrado erros de grafia no arquivo perfilAtivo.php, na qual foi corrigido e solucionado outras falhas de compatibilidade.
 4. No mes 6/2023 meu computador apresentou falhas e fiz o backup dos arquivos localmente, mas não fiz o commit no github, apresentando incompatibilidades.
    4.1 Preferi subir o sistema completo no lugar do presente no github, ja que praticamente todos os arquivos tinha algum tipo de modificação, visto que o github apresentava uma media de 1,80mb e meu projeto local apresentava 2,4 mb de tamanho.

Sistema pode ser visto em: <https://2fatores.antonystar.com/>, atualizado em tempo real





