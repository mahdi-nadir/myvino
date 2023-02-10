{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
        <script differ src="https://kit.fontawesome.com/918ba06b86.js" crossorigin="anonymous"></script>
        <title>Vino Bueno - Admin</title>
    </head>
    <body> --}}
        {{-- <a href="{{ route('listecelliers') }}">Voir les celliers</a> --}}
        <x-app-layout>
            <a href="{{ route('admin.users') }}">Utilisateurs</a><br>
            <a href="{{ route('admin.celliers') }}">Celliers</a><br>
            <a id="btnImportation" href="{{ route('updateSAQ') }}"><button>Importer des bouteilles de la SAQ</button></a>
        </x-app-layout>
        <script>
            // loader pour l'importation des bouteilles
            document.getElementById("btnImportation").addEventListener("click", function() {
                let seconds = 9;
                setInterval(function() {
                    seconds--;
                    if (seconds < 0) seconds = 0;
                    document.body.innerHTML = `<div class="loader" style="display:flex; height:100vh; align-items:center; justify-content:center">Importation des bouteilles en cours... ${seconds} secondes</div>`;
                }, 1000);
            });
        </script>
{{--     </body>
</html> --}}
