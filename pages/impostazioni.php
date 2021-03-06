<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Impostazioni</title>

    <?php require_once('includes/assets.php'); ?>

</head>

<body>

    <div id="wrapper">

        <?php require_once('includes/header.php'); ?>
        <?php require_once('includes/sidebar-admin.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center huge lead">Impostazioni</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <h3>Seleziona dati da notificare</h3>
                    <div class="row top-buffer">
                        <div class="checkbox col-lg-offset-1">
                            <label>
                                <input type="checkbox" name="notifiche" value="campagna" checked> Andamento Campagne
                            </label>
                        </div>
                        <div class="checkbox col-lg-offset-1">
                            <label>
                                <input type="checkbox" name="notifiche" value="chiamate" checked>Andamento Team (Conversion Rate Chiamate)
                            </label>
                        </div>
                        <div class="checkbox col-lg-offset-1">
                            <label>
                                <input type="checkbox" name="notifiche" value="contatti" checked>Andamento Team (Conversion Rate Contatti)
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3>Imposta frequenza delle notifiche</h3>
                    <div class="row top-buffer">
                        <div class="col-lg-5">Seleziona Orario Notifiche:</div>
                        <div class="col-lg-offset-5">
                            <input type="time" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="dropdown top-buffer col-lg-offset-2">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Seleziona Frequenza
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Giornaliera</a></li>
                            <li><a href="#">Settimanale</a></li>
                            <li><a href="#">Mensile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row top-buffer-lg">
            <div class="col-lg-4 col-lg-offset-4">
                <button type="button" class="btn btn-lg crm-button">Salva Impostazioni</button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php require_once('includes/scripts.php'); ?>

</body>

</html>
