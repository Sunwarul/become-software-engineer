#!/bin/bash
input=$1
IFS='.'
read -a name_arr <<< "$input"
dotnet build -p:StartupObject="${name_arr[0]}" -nologo -noConsoleLogger  -v:q -t:Rebuild && dotnet run < input.txt > output.txt