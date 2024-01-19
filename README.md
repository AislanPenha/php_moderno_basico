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
### Texto produzido por: [Aislan Penha](https://github.com/AislanPenha)
