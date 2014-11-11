And here's an example .htaccess file:

RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f [NC]
RewriteCond %{REQUEST_FILENAME} !-d [NC]
RewriteCond %{REQUEST_URI} !^/index.php
RewriteRule ^(.+)$ index.php/$1 [QSA]


And an example usage:
$proxy = new ProxyHandler('http://publicsite.example.com','http://privatesite.example.com');
$proxy->execute();

