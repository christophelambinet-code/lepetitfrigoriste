@echo off
REM Ce script ajoute tous les fichiers modifiés, commit et push sur Git

echo Ajout des fichiers modifiés...
git add .

set /p message="Entrez le message du commit : "
git commit -m "%message%"

echo Push vers la branche main...
git push origin main

echo Terminé !
pause