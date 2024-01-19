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
>Faça um **link simbólico** para acessar no localhost
```
sudo ln -s /usr/share/phpmyadmin/ /var/www/html/
```
## Mudar o endereço padrão do localhost
Entre no arquivo **apache2.conf** como administrador
```
sudo nano /etc/apache2/apache2.conf
```
Adicone alinha no arquivo
```
<Directory /home/aislan/Documentos/localhost/>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
</Directory>
```
Entre no arquivo **000-default.conf** como administrador
```
sudo nano /etc/apache2/sites-available/000-default.conf
```
Altere o endereço do **DocumentRoot** no arquivo
```
DocumentRoot /home/aislan/Documentos/localhost
```
Adicone alinha no arquivo
```
<Directory /home/aislan/Documentos/localhost/>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
</Directory>
```
Entre no arquivo **default-ssl.conf** como administrador
```
sudo nano /etc/apache2/sites-available/000-default.conf
```
Altere o endereço do **DocumentRoot** no arquivo
```
DocumentRoot /home/aislan/Documentos/localhost
```
Depois reinicie o servidor
```
sudo service apache2 restart
```
Se der acesso negado

![Captura de tela de 2024-01-19 14-54-14](https://github.com/AislanPenha/php_moderno_basico/assets/130594608/5e3218b8-4f74-4659-b464-c4561a2ff818)
Altere o arquivo /etc/apache2/envvars
```
sudo nano /etc/apache2/envvars
```
> export APACHE_RUN_USER=www-data
> 
> export APACHE_RUN_GROUP=www-data
```
Mude o valor www-data para seu usuário.
> export APACHE_RUN_USER=aislan
> 
> export APACHE_RUN_GROUP=aislan
