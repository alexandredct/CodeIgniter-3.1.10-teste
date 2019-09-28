# Code Igniter como Doctrine

Versão que utiliza o CodeIgniter 3.1.10 e Doctrine 2.6


## Objetivo
Padronização de um ambiente de desenvolvimento usando um container **Docker**.


## Sobre o ambiente
* PHP 7.3.5
* Code Igniter 3.1.10
* Doctrine 2.6.2
* Bootstrap 4.3.1

### Instalação das dependências
As dependências podem ser instaladas usando o gerenciador de dependências **Composer**. 
Para isso, basta executar o comando no diretório que contenha o `composer.json`:

    sudo docker run --rm --interactive --tty   --volume $(pwd):/app   composer {install|update}
    
`Obs: o comando considera que esteja no diretório do projeto.`

### Instanciando o container
     sudo docker build -t php:7.3.5 $(pwd) \
     && sudo docker run -d -v $(pwd):/var/www/html/ --name ci-teste -p 80:80 php:7.3.5
     
 
 ## Configurações importantes
 * **Codificação de caracteres (Text file encoding)**: UTF-8 (sem BOM)
 * **Delimitador de nova linha (New text file line delimiter)**: padrão UNIX
 
