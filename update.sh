#!/bin/bash

sudo git clone https://github.com/benzach0421/crypt.git
cd crypt
mv !(update.sh) /var/www/html
cd - && rm -r crypt
rm README.md
