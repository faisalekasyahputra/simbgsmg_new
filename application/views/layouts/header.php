<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $title ?></title>
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= base_url('assets/ico/apple-touch-icon-57x57.png') ?>" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('assets/ico/apple-touch-icon-114x114.png') ?>" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url('assets/ico/apple-touch-icon-72x72.png') ?>" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url('assets/ico/apple-touch-icon-144x144.png') ?>" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?= base_url('assets/ico/apple-touch-icon-60x60.png') ?>" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= base_url('assets/ico/apple-touch-icon-120x120.png') ?>" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?= base_url('assets/ico/apple-touch-icon-76x76.png') ?>" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= base_url('assets/ico/apple-touch-icon-152x152.png') ?>" />
<link rel="icon" type="image/png" href="<?= base_url('assets/ico/favicon-196x196.png') ?>" sizes="196x196" />
<link rel="icon" type="image/png" href="<?= base_url('assets/ico/favicon-96x96.pn') ?>g" sizes="96x96" />
<link rel="icon" type="image/png" href="<?= base_url('assets/ico/favicon-32x32.png') ?>" sizes="32x32" />
<link rel="icon" type="image/png" href="<?= base_url('assets/ico/favicon-16x16.png') ?>" sizes="16x16" />
<link rel="icon" type="image/png" href="a<?= base_url('ssets/ico/favicon-128.png') ?>" sizes="128x128" />
<meta name="application-name" content="&nbsp;" />
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="<?= base_url('assets/ico/mstile-144x144.png') ?>" />
<meta name="msapplication-square70x70logo" content="<?= base_url('assets/ico/mstile-70x70.png') ?>" />
<meta name="msapplication-square150x150logo" content="<?= base_url('assets/ico/mstile-150x150.png') ?>" />
<meta name="msapplication-wide310x150logo" content="<?= base_url('assets/ico/mstile-310x150.png') ?>" />
<meta name="msapplication-square310x310logo" content="<?= base_url('assets/ico/mstile-310x310.png') ?>" />

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<link rel="stylesheet" href="http://localhost/ngopi/assets/css/select2.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

<!-- Add Bootstrap CSS from a CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!-- Optional custom CSS -->


<script src="https://kit.fontawesome.com/40248f80b4.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>">

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<link rel="stylesheet" href="<?= base_url('assets/css/leaflet.groupedlayercontrol.css') ?>" />
<script src="<?= base_url('assets/js/leaflet.groupedlayercontrol.js') ?>"></script>


<script src="<?= base_url('/assets/js/Control.FullScreen.js') ?>"></script>
<link rel="stylesheet" href="<?= base_url('assets/css/Control.FullScreen.css') ?>" />

<style>
    .label_kec {
        width: auto;
        height: auto;
        font-size: 12px;
        border-color: none;
        border-width: 0;
        background: rgba(255, 255, 255, 0.0);
        font-weight: bold;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        color: white;
    }

    .label_des {
        display: block;
        width: auto;
        height: auto;
        font-size: 11px;
        border-color: none;
        border-width: 0;
        background: rgba(255, 255, 255, 0.0);
        font-weight: bold;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        color: white;
    }

    .info {
        padding: 6px 8px;
        font: 14px/16px Arial, Helvetica, sans-serif;
        background: white;
        background: rgba(255, 255, 255, 0.8);
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
    }

    .info h4 {
        margin: 0 0 5px;
        color: #777;
    }

    .legend {
        text-align: left;
        line-height: 18px;
        color: #555;
    }

    .legend i {
        width: 18px;
        height: 18px;
        float: left;
        margin-right: 8px;
        opacity: 0.7;
    }

    .legend1 {
        text-align: left;
        line-height: 18px;
        color: #555;
    }

    .legend i {
        width: 18px;
        height: 18px;
        float: left;
        margin-right: 8px;
        opacity: 0.7;
    }
</style>