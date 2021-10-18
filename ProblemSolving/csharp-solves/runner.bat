@echo off

set string=%1
set name=%string:.cs=%

dotnet build -p:StartupObject=%name% -nologo -noConsoleLogger  -v:q -t:Rebuild && dotnet run < input.txt > output.txt