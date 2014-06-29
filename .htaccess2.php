<IfModule mod_rewrite.c>


RewriteEngine On
RewriteRule ^([a-zA-Z0-9_-]+)$ user.php?username=$1
RewriteRule ^([a-zA-Z0-9_-]+)/$ user.php?username=$1

RewriteRule ^view/(.*).html /dispatcher.php?page=$1
</IfModule>