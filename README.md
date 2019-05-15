# crypt
Software for an online media server,  (for use on Linux servers).<br/>
Built using Apache2.<br/>
Running on a Raspberry Pi.<br/>


### Enabling the 404 page
Add the line:
```
ErrorDocument 404 /404.html
```
To **/etc/apache2/sites-available/000-default.conf**
