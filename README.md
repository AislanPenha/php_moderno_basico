# Configurações iniciais
## Instalando o Apache
```
sudo apt install apache2
```
## Configurar o Apache com PHP
```
sudo apt install php libapache2-mod-php php-mbstring
```
>
>**php** interpretador
>
>**libapache2-mob-php** conexão do apache com o php
>
>**php-mbstring** multibyte string codificar UTF-8
### Quando não mostrar erro e a open short tag não pega
Entrar no aquivo php.ini e editar:
```
sudo nano /etc/php/<versao>/apache2/php.ini
```
> `display_erros = On` para exibir os erros do apache
> 
> `short_open_tag = On` para habilitar a opn tag

E reinicie o serviço
```
sudo service apache2 restart
```
## Instalar e configurar o Banco de dados
```
sudo apt install maridab-server php-mysql
sudo mysql_secure_installation
```
>
>**mariadb-server** Servidor
>
>**php-mysql** interpretador usando o mysql, que usa o mesmo banco de dados
>
>**mysql_secure_installation** configura o banco de dados
>
## Instalar o PHPMyAdmin
```
sudo apt install phpmyadmin
```
### Texto produzido por: [Aislan Penha](https://github.com/AislanPenha)
