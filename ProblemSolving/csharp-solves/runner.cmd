set string=%1
set name=%string:.cs=%
dotnet build -p:StartupObject=%name% --verbosity=quiet -t:Rebuild && dotnet run