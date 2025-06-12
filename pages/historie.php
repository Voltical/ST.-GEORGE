<?php include_once '../config/config.php'; ?>
<?php include_once '../includes/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historie | ST. George</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
</head>
<body class="flex flex-col min-h-screen bg-gray-50">

<?php include '../includes/navbar.php'; ?>

<main class="flex-1 container mx-auto px-4 py-12 max-w-4xl space-y-16">

    <section>
        <img src="<?= $base_url ?>uploads/gallery/og_squad.jpg" alt="Oude akte" class="rounded-xl shadow-lg mb-4 w-full h-auto">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">Oorsprong en vroege geschiedenis</h2>
        <p class="text-lg leading-relaxed text-gray-800">
            Hoewel het exacte oprichtingsjaar niet met zekerheid is vast te stellen, wordt aangenomen dat Schutterij St. George rond 1447 is opgericht. Dit baseert men op het feit dat de vereniging in 1997 haar 550-jarig jubileum vierde en in 2022 het 575-jarig bestaan.
            In de 17e en 18e eeuw was Simpelveld onderdeel van het Land van 's-Hertogenrade, dat onder de Spaanse kroon viel. Na het Partagetractaat van 1661 en de Vrede van Utrecht in 1713 kwam het gebied onder Oostenrijks bestuur. Gedurende deze periode was de schutterij actief betrokken bij lokale gebeurtenissen en had zij een belangrijke sociale functie.
        </p>
    </section>

    <section>
        <img src="<?= $base_url ?>uploads/gallery/koningszilver.jpg" alt="Koningszilver" class="rounded-xl shadow-lg mb-4 w-full h-auto">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">Structuur en functies</h2>
        <p class="text-lg leading-relaxed text-gray-800">
            De schutterij kende een hiërarchische structuur met verschillende rangen en functies. In 1620 telde de vereniging 54 actieve leden. Belangrijke functies waren onder andere de schuttenmeester, koning, keizer, secretaris en vaandeldrager. De schuttenmeesters waren verantwoordelijk voor het handhaven van de regels en het opleggen van boetes bij overtredingen. Leden waren verplicht deel te nemen aan activiteiten zoals het koningsvogelschieten en processies.
            Een bijzonder aspect van de schutterij is het koningszilver: zilveren platen die door koningen en keizers werden geschonken ter herinnering aan hun koningschap. De oudste bekende koningsplaat dateert uit 1634.
        </p>
    </section>

    <section>
        <img src="<?= $base_url ?>uploads/gallery/marketentsters.jpg" alt="Processie" class="rounded-xl shadow-lg mb-4 w-full h-auto">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">Religieuze en sociale rol</h2>
        <p class="text-lg leading-relaxed text-gray-800">
            Schutterij St. George had een sterke band met de katholieke kerk. Jaarlijks werd op de dag na Pinksteren een mis gehouden ter nagedachtenis aan overleden leden, het zogenaamde "schuttenbeganckenisse". Tijdens deze mis werden de namen van de overledenen voorgelezen. Daarnaast nam de schutterij deel aan processies en andere religieuze evenementen.
            De schutterij vervulde ook een belangrijke sociale functie binnen de gemeenschap. Leden kwamen samen voor schietwedstrijden, gezamenlijke maaltijden en andere festiviteiten. Boetes voor het niet naleven van verplichtingen, zoals afwezigheid bij evenementen, waren een bron van inkomsten voor de vereniging.
        </p>
    </section>

    <section>
        <img src="<?= $base_url ?>uploads/gallery/geweerdragers.jpg" alt="Historisch schieten" class="rounded-xl shadow-lg mb-4 w-full h-auto">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">19e en 20e eeuw</h2>
        <p class="text-lg leading-relaxed text-gray-800">
            Na de Franse Revolutie en de daaropvolgende secularisatie kwam de schutterij tijdelijk tot stilstand. In het begin van de 19e eeuw werd de draad weer opgepakt, met activiteiten in onder andere 1802, 1803 en 1805. Gedurende de 19e eeuw bleef de schutterij actief, met deelname aan lokale evenementen en het organiseren van schietwedstrijden.
            In de jaren '90 van de 20e eeuw werd de schutterij heropgericht en sloot zich aan bij de Schuttersbond Berg en Dal. Later, in 2010, maakte de vereniging de overstap naar de Rooms Katholieke Zuid-Limburgse Schuttersbond (RKZLSB).
        </p>
    </section>

    <section>
        <img src="<?= $base_url ?>uploads/gallery/feest.jpg" alt="Jubileumoptocht" class="rounded-xl shadow-lg mb-4 w-full h-auto">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">Jubilea en recente activiteiten</h2>
        <p class="text-lg leading-relaxed text-gray-800">
            In 2018 vierde Schutterij St. George een dubbel jubileum: het 575-jarig bestaan en het 250e Bondsschuttersfeest. Het feest trok duizenden bezoekers naar Simpelveld en omvatte onder andere een optocht, schietwedstrijden en een expositie over de geschiedenis van de schutterij.
            In 2023 behaalde de schutterij een derde plaats bij het prestigieuze Oud Limburgs Schuttersfeest (OLS) in Born.
        </p>
    </section>

</main>

<?php include '../includes/footer.php'; ?>

<!-- GLightbox script -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
    const lightbox = GLightbox({ selector: '.glightbox' });
</script>

</body>
</html>
