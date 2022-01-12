composer dump-autoload -o

sudo pacman -R mysql
sudo pacman -Syu mysql
sudo mariadb-install-db --user=mysql --basedir=/usr --datadir=/var/lib/mysql

mysql 
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY '';
sudo systemctl stop mariadb
sudo systemctl start mariadb



# Caso aconteça algum problema de instalação
# rode a linha de comando abaixo no terminal
# sudo pacman -R mysql