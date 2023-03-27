****************************************************************
Mini plataforma colaborativa de catálogo de filmes: CREATHUSFLIX
****************************************************************

A mini plataforma colaborativa de catálogo de filmes foi desenvolvida por Leandro Reis Fonseca como parte integrante de umas das etapas do processo seletivo para desenvoldedor de software do Instituto CREATHUS. O projeto consiste no desenvolvimento de uma mini plataforma colaborativa de catálogo de filmes que permita o usuário visualizar os últimos filmes adicionados e visualizar a sinopse do filme. Nesta plataforma colaborativa, deverá existir também uma página administrativa para cadastro de filme com título, descrição e upload de imagem.

Para agilizar o processo de desenvolvimento, foi utilizada a IDE Sublime Text 3.

----------------------------------------------------
As funcionalidades da mini plataforma creathusflix
----------------------------------------------------

 - Na página inicial são exibidos os filmes recentemente adicionados em ordem de postagem. Nesta página, os usuárioss também podem filtrar os filmes por categoria (Gênero do filme). Além disso, tem uma barra de menu com o propósito de implementação futura para que o usuário possa navegar entre filmes e séries.

 - Para exibir a sinopse do filme, basta o usuário clicar na capa do filme. Além das informações básicas, o usuário também poderá assistir ao trailer do filme que está incorporado com um vídeo do YouTube.

 - Os administradores da plataforma podem postar os filmes. Para tanto, basta acessar o diretório /admin. Lá terá uma tela de login, onde o usuário é: leandro e a senha é: 123.

 - Para postar um filme, são necessárias as seguintes informações: categoria do filme, título do filme, descrição do filme, a capa do filme e o link de incorporação do filme para que seja disponibilizado o trailer.

----------------------------------------------------
Restrições de implementação da mini plataforma
----------------------------------------------------

 - A mini plataforma foi desenvolvida para web. Por tanto, são necessários: servidor web Apache, MySQL e PHP. 

 - Para utilizar a mini plataforma, siga os procedimentoss abaixo:

	1. Importe para o servidor de banco de dados MYSQL o arquivo db_creathusflix.sql que se encontra dentro da pasta bancodados da aplicação.

	2. Importe para a raiz do servidor web (DocumentRoot) os arquivos do diretório creathusflix.

	3. Modifique o usuário e a senha de acesso ao banco de dados db_creathusflix dentro do arquivo conexao.php que se encontra na pasta bancodados.

	4. Digite na barra de endereço do navegador o endereço da aplicação.

----------------------------------------------------
Sugestões de melhorias: leandroreisfonseca@gmail.com
----------------------------------------------------
