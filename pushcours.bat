@echo off
REM ===========================================================
REM Script : pushcours.bat
REM Description : Ajoute, commit et push les fichiers modifiés
REM Commit automatique avec message fixe
REM ===========================================================

REM Vérifie si des fichiers ont été modifiés
git status --porcelain > temp.txt
for /f %%i in (temp.txt) do set CHANGED=1
del temp.txt

if defined CHANGED (
    echo Des modifications ont ete detectees...
    git add .
    
    REM Commit avec message fixe
    git commit -m "Mise à jour des fichiers de cours"
    
    REM Push sur la branche main
    git push origin main
    echo Operation terminee. Les modifications ont ete poussees.
) else (
    echo Aucun changement detecte. Rien a push.
)