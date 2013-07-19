# suggestion: create a symlink to this file under /etc/apache/sites-enabled

<VirtualHost *:80>

  ServerName dev.44bricks.com

  # suggestion for single-user dev systems:
  # create a symlink to your actual directory in the workspace
  DocumentRoot /home/hkramer/dennis/bricks/htdocs

  php_value include_path .:/usr/share/php:/usr/share/pear

  <Directory /home/hkramer/dennis/bricks/htdocs>
   Options FollowSymlinks
   AllowOverride All
   Order allow,deny
   Allow from all
  </Directory>

</VirtualHost>