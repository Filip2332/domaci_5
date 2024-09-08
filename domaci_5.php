<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Domaci
    </title>
</head>

<body>
    <form method="GET" action="domaci_5_podaci.php">
        <input type="text" name="cena" placeholder="Unesite cenu"> <br>

        <select name="kupljena_stvar">
            <option value="hrana">Hrana</option>
            <option value="stvari_za_racunar">Oprema za racunar</option>
        </select>
        <br>
        <input type="checkbox" name="izracunaj_porez">
        Izracunaj porez
        <br>


        <button>Izracunaj cenu</button>
    </form>
</body>

</html>

<style>
    body {
        text-align: center;
        background-color: bisque
    }
</style>