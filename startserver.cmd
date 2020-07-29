@echo off


echo "Starting server"
srvport=3622
cd public

start /min ngrok http $srvport
start /min php -S localhost:$srvport

echo "Sevrers Started"
pause
echo "\n"