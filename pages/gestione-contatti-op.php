<?php require_once('includes/faker.php'); ?>

<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gestione Contatti</title>

    <?php require_once('includes/assets.php'); ?>

</head>

<body>

    <div id="wrapper">

        <?php require_once('includes/header.php'); ?>
        <?php require_once('includes/sidebar-operatore.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center huge lead">Gestione Contatti</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="dropdown" id="crm-filter">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Filtra per Campagna
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Kimbo</a></li>
                        <li><a href="#">Wind</a></li>
                        <li><a href="#">Vodafone</a></li>
                    </ul>
                </div>
            </div>

            <div class="row top-buffer">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Campagna</th>
                                            <th class="text-center">Nome</th>
                                            <th class="text-center">Cognome</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Telefono</th>
                                        </tr>
                                    </thead>
                                    <tbody class="crm-table-content">
                                        <tr itemscope itemtype="http://schema.org/Person">
                                            <td class="text-center campaign">Kimbo</td>
                                            <td class="text-center" itemprop="givenName"><?= $faker->firstName ?></td>
                                            <td class="text-center" itemprop="familyName"><?= $faker->lastName ?></td>
                                            <td class="text-center" itemprop="email"><?= $faker->email ?></td>
                                            <td class="text-center" itemprop="telephone"><?= $faker->PhoneNumber ?></td>
                                            <td class="text-center"><button type="button" class="btn crm-button">Visualizza Storico</button></td>
                                        </tr>
                                        <tr itemscope itemtype="http://schema.org/Person">
                                            <td class="text-center campaign">Vodafone</td>
                                            <td class="text-center" itemprop="givenName"><?= $faker->firstName ?></td>
                                            <td class="text-center" itemprop="familyName"><?= $faker->lastName ?></td>
                                            <td class="text-center" itemprop="email"><?= $faker->email ?></td>
                                            <td class="text-center" itemprop="telephone"><?= $faker->PhoneNumber ?></td>
                                            <td class="text-center"><button type="button" class="btn crm-button">Visualizza Storico</button></td>
                                        </tr>
                                        <tr itemscope itemtype="http://schema.org/Person">
                                            <td class="text-center campaign">Vodafone</td>
                                            <td class="text-center" itemprop="givenName"><?= $faker->firstName ?></td>
                                            <td class="text-center" itemprop="familyName"><?= $faker->lastName ?></td>
                                            <td class="text-center" itemprop="email"><?= $faker->email ?></td>
                                            <td class="text-center" itemprop="telephone"><?= $faker->PhoneNumber ?></td>
                                            <td class="text-center"><button type="button" class="btn crm-button">Visualizza Storico</button></td>
                                        </tr>
                                        <tr itemscope itemtype="http://schema.org/Person">
                                            <td class="text-center campaign">Wind</td>
                                            <td class="text-center" itemprop="givenName"><?= $faker->firstName ?></td>
                                            <td class="text-center" itemprop="familyName"><?= $faker->lastName ?></td>
                                            <td class="text-center" itemprop="email"><?= $faker->email ?></td>
                                            <td class="text-center" itemprop="telephone"><?= $faker->PhoneNumber ?></td>
                                            <td class="text-center"><button type="button" class="btn crm-button">Visualizza Storico</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php require_once('includes/scripts.php'); ?>

    <script>
        $(".crm-button").click(function() {
            window.location.href = "visualizza-storico.php";
        });

        $('.dropdown-menu li').click(function() {
            var selectedCampaign = $(this).text();

            $('.crm-table-content tr').show();
            $('.crm-table-content tr').each(function(idx) {
                if ($(this).find('.campaign').text() !== selectedCampaign) {
                    $(this).hide();
                }
            });
        });
    </script>

</body>

</html>
