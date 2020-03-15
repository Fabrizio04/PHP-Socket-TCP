@echo off
set php="%~dp0\php\php.exe"
:socket
cls
%php% "%~dp0\src\server.php"
pause
goto socket