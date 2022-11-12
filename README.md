# PHP (hypertex Preprocessor)
Uma linguagem server-side, roda do lado do servidor.É  uma linguagem de programação back-end, pois ela realiza comumicação com banco de dados.

Ela é processado no servidor e o resultado do precessamento é enviado ao cliente (quem requisitou). Exemplo:

Aquivo  PHP: 2+2

Resposta para o cliente: 4

Todo arquivo PHP tera a extensão .php

## Aula 01
- Introdução ao PHP
- Infraestrutura necessaria
- Onde colocar nossos arquivos
- Variaveis 
- Tipo de dados
- Operadores aritméticos
- Envio/Recebeimento de informações entre arquivos 

### Introdução ao PHP
- Documentação oficial http://.net/
- Ele brilha na web, 79% da web usa PHP (https:// kisnta.com/php-market-share/)
- PHP pode ser utilizado para projetos de IoT (Internet das coisas), funciona para criar aplicações de linha de comando (modo texto), criar aplicativos desktop com PHP 
- PHP é uma linguagem interpretada 

### Infraestrutura necessaria
 - Servidor é computador que fornece serviços a clientes.
 ### Exemplo: Serviço de DHCP: o servidor fica responsavel por distribuir numeros IP (internet protocol) para os clientes (hosts) na rede. 

 - Nossos sites ficam em servidores WEB, um servidor web é responsavel por exibir um site quando for solicitado(requisição).Iresmos utilizar o servidor web chamado APACHE(existem outros como IIS, NGINX) juntamente com um banco de dados chamado MariaDB(mesma coisa do MySQL). 
 - Vamos instalar o XAMPP, esse programa ka instala o APACHE, o PHP e o MariaDB. BAIXE O APACHE FRIENDS WWW.apachefriends.org/ .

 ### Onde colocar nossos arquivos
 - Os arquivos PHP precicam ser executados a partir do servidor, como se você estivesse acessando pela internet.
  - Para o XAMPP, o local aonde devemos colocar os arquivos é em `c:\xampp\htdocs` . Exemplo: `c:\xampp\htdocs\site\index.php`
  - Para executar os arquivos php, precisamos requisita-los a partir do navegador digitando `http://localhost/` . Exemplo: http://localhost/site/index.php


### Variaveis
- Variavel é um espaço na memoria que damos um nome para armazenar algum valor.
- O PHP é case-sensitive, significa que ele diferencia maiusculas de minusculas, ou seja, Nome é diferente de nome.
- O nome de uma variavel deve ser significativo de acordo com o seu Valor. Exemplo: Para uma variavel que vai armazenar a idade de uma pessoa eu coloco o nome da variavel de $idade.
- No PHP toda variavel inicia com $
- Não utilize caracteres especiais, espaços ou acentos para nome de variaveis. Alguns deles ate funcionam, porém é recomendado escrever nomes de variaveis simples. Exemplo: ao invés de endereço para o nome de uma variavel utilize $endereço sem o 'ç'.

### Tipos de dados
- Os valores em php podem ser dividos entre os tipos:
   - string: todo valor que estiver entre aspas é uma string, ou seja, um texto. Exemplo:'Rafa'
   - Integer: todo número inteiro.
   Exemplo: 36
   - float ou double: todo numero decimal. Exemplo: 1.75
   - boolean: valor de verdadeiro(true) ou falso(false)

### Operadores aritméticos 
- + : adição
- - : operador de subtração
- * : operador de multiplicação
- / : operador de divisão
- **: exponenciação
- % : resto da divisão, operador de módulo 



 
