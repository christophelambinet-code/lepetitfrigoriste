@echo off
REM ===========================================================
REM Script : pushcours.bat
REM Description : Ajoute, commit et push les fichiers modifiés
REM Commit automatique avec message fixe
REM ===========================================================

REM Ajoute tous les fichiers modifiés ou nouveaux
git add .

REM Vérifie s'il y a quelque chose à commit
git diff --cached --quiet
if %errorlevel% equ 0 (
    echo Aucun changement detecte. Rien a push.
) else (
    REM Commit avec message fixe
    git commit -m "Mise à jour des fichiers de cours"
    
    REM Push sur la branche main
    git push origin main
    echo Operation terminee. Les modifications ont ete poussees.
)