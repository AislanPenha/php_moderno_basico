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
### Instalar a biblioteca intl (Internationalization PHP)
```
sudo apt install php-intl
```
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

![novo](https://github.com/AislanPenha/php_moderno_basico/assets/130594608/b2e62f2c-dbe3-446a-aa40-869620956953)
```
sudo nano /etc/apache2/envvars
```
> export APACHE_RUN_USER=www-data
> 
> export APACHE_RUN_GROUP=www-data

Mude o valor www-data para seu usuário.
```
export APACHE_RUN_USER=aislan
export APACHE_RUN_GROUP=aislan
```
# Conexão do PHP com o Banco de Dados
### Comando do nano
```
`nano -c`
```
>para olhar a linha no nano
## Comando do MySQL
```
mysql -u root -p
show databases;
create database BANCO_DADO;
use BANCO_DADO;
show tables;
create table alunos (cod int auto_increment, nome varchar(20), primary key(cod));
desc alunos;
insert into alunos (nomes) values  ('aislan'),  ('alisson'),  ('cata');
```
## Comando do Conexão do banco de dados com o PHP
~~~php

$serv = new mysqli("localhost", "root", "SENHA_BANCO_DADOS", "BANCO_DADOS")
or die("Falha ao acessar servidor.");
$busca = $serv->query("SELECT * FROM alunos ORDER BY nome");
$total = $serv->affected_rows;
echo "<p>Foram encontrados $total pessoas cadastradas.</p>;
while ($dado = $busca->fetch_object()) {
        echo "<p>$dado->nome</p>";
}
$serv->close();
~~~
## ERRO de cache PHPMyAdmin
```
O $cfg['TempDir'](/var/lib/phpmyadmin/tmp/) não está acessível. phpMyAdmin não será capaz de cachear os modelos e deve ficar mais lento por causa disso.
```
acrescentar a última linha abaixo no local que será a pasta temporária no arquivo /etc/phpmyadmin/config.inc.php
```
...
/*
 * Directories for saving/loading files from server
 */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
$cfg['TempDir'] = '/home/aislan/Documentos/temp';
...
```
## ERROR Opções de autenticação de cookies (blowfish_secret)
```
O arquivo de configuração precisa de uma chave válida para a criptografia de cookie. Uma chave temporária foi gerada automaticamente para você. Por favor, consulte a documentação.
```
Procurar a linha abaixo no arquivo /etc/phpmyadmin/config.inc.php
```// Load secret generated on postinst
if (check_file_access('/var/lib/phpmyadmin/blowfish_secret.inc.php')) {
    require('/var/lib/phpmyadmin/blowfish_secret.inc.php');
}
```
e liberar o acesso do arquivo blowfish_secret.inc.php
```
chmod 777 blowfish_secret.inc.php
```
