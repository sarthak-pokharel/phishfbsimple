#!/bin/bash

echo "Starting server"
srvport=3622
cd public

ngrok http $srvport &
php -S localhost:$srvport &
wait

cd ..
echo "\n"
