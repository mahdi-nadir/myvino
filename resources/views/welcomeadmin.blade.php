<x-app-layout>
    <div class="contenuPageAdmin">
        <a href="{{ route('updateSAQ') }}"><button id="btnImportation">Importer des bouteilles de la SAQ</button></a><br>
        <a href="{{ route('admin.users') }}"><button class="btnAdmin">Aller à la page des utilisateurs</button></a><br>
        <a href="{{ route('admin.celliers') }}"><button class="btnAdmin">Aller à la page des celliers</button></a>
    </div>
</x-app-layout>
<script>
    document.getElementById("btnImportation").addEventListener("click", function() {
        let seconds = 9;
        setInterval(function() {
            seconds--;
            if (seconds < 0) seconds = 0;
            document.body.innerHTML = `<div class="loader" style="display:flex; height:100vh; align-items:center; justify-content:center">Importation des bouteilles en cours... ${seconds} secondes</div>`;
        }, 1000);
    });
</script>
