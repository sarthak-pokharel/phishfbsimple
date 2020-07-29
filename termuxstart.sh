#!/bin/bash

echo "Starting server"
srvport=3622
cd public

./ngrokarm http $srvport &
php -S localhost:$srvport &
wait

cd ..
echo "\n"
