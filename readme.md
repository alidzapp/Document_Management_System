Prerequisites
====================
*php7
*php-curl

Server Conf nginx
=================
    server {
            listen 80;
            server_name mydms.com;
            root /var/www/mydms/;
            index index.html index.htm index.php;
        
        location / {
            try_files $uri $uri/ /index.php?/$request_uri;
        }
        
    
        location ~ \.php$ {
            try_files $uri =404;
            fastcgi_split_path_info ^(.+\.php)(/.+)$;
            fastcgi_pass unix:/var/run/php/php7.0-fpm.sock;
            fastcgi_index index.php;
            fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
            include fastcgi_params;
        }
    }
    
    

