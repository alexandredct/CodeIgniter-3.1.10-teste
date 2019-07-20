# Code Igniter como Doctrine

Versão que utiliza o CodeIgniter 3.1.10 e Doctrine 2.6


##Objetivo
Padronização de um ambiente de desenvolvimento usando um container **Docker**.


##Sobre o ambiente
* PHP 7.3.5
* Code Igniter 3.1.10
* Doctrine 2.6.2

### Instanciando o container
     sudo docker build -t php:7.3.5 $PWD \
     && sudo docker run -d -v $PWD:/var/www/html/ --name ci-3.1.10 -p 80:80 php:7.3.5
     
###Instalação das dependências
As dependências podem ser instaladas usando o gerenciador de dependências **Composer**. 
Para isso, basta executar o comando no diretório que contenha o `composer.json`:

    sudo docker run --rm --interactive --tty   --volume $PWD:/app   composer install
    
`Obs: o comando considera que esteja no diretório do projeto. Caso contrário, 
substitua a variável $PWD pelo caminho até o diretório do projeto`
 
 ##Configurações importantes
 * **Codificação de caracteres (Text file encoding)**: UTF-8 (sem BOM)
 * **Delimitador de nova linha (New text file line delimiter)**: padrão UNIX
 
 