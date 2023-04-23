<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Réalisation de travaux d'élagage, abtattage, étêtage, ou encore entretien de vos espaces verts">


<!-- favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="/img/logo/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/img/logo/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/logo/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/img/logo/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/logo/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/img/logo/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/img/logo/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/img/logo/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/logo/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="/img/logo/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/logo/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/img/logo/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/logo/favicon/favicon-16x16.png">
<link rel="manifest" href="img/logo/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#0A2D35">
<meta name="msapplication-TileImage" content="img/logo/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#0A2D35">
<!-- Global stylesheet -->
<link rel="stylesheet" href="/styles/global.css" />

<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-53DNTXC');
</script>
<!-- End Google Tag Manager -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-201138072-1">
</script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-201138072-1');
</script>



<!--END  Global site tag (gtag.js) -->

<!-- Facebook Pixel Code -->

<!-- End Facebook Pixel Code -->

<?php
//FUNCTION TO ADD TITLE TO PAGES, LOAD STYLES ETC ACCORDING TO PAGE NAME
$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
$nomPublic = '';
if ($curPageName == 'index.php') {
    $nomPublic = "Accueil";
    echo '<link rel="stylesheet"  href="/styles/index.css"/>';
} else if ($curPageName == 'abattage.php') {
    echo '<link rel="stylesheet"  href="/styles/abattage.css"/>';
    $nomPublic = "Abattage";
} else if ($curPageName == 'elagage.php') {
    echo '<link rel="stylesheet"  href="/styles/elagage.css"/>';
    $nomPublic = "Élagage ";
} else if ($curPageName == 'taille-de-haies.php') {
    echo '<link rel="stylesheet"  href="/styles/taille_haies.css"/>';
    $nomPublic = "Taille de haies ";
} else if ($curPageName == 'espaces-verts.php') {
    echo '<link rel="stylesheet"  href="/styles/espaces_verts.css"/>';
    $nomPublic = "Espaces verts ";
} else if ($curPageName == 'etetage.php') {
    echo '<link rel="stylesheet"  href="/styles/etetage.css"/>';
    $nomPublic = "Étêtage ";
} else if ($curPageName == 'mentions-legales.php') {

    echo '<link rel="stylesheet"  href="/styles/mentions-legales.css"/>';
    $nomPublic = "Mentions légales ";
}
?>
<title>
    Thau Élagage | <?php
                    echo $nomPublic;
                    ?>
</title>