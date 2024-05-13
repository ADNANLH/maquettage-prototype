<!DOCTYPE html>
<html lang="fr">

<?php include_once "../../layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- Navigation -->
        <?php include_once "../../layouts/nav.php" ?>
        <!-- Barre latérale -->
        <?php include_once "../../layouts/aside.php" ?>

        <div class="content-wrapper" style="min-height: 1302.4px;">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Gestion des consultations</h1>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-sm-right">
                                <a href="./rendez-vous.php" class="btn btn-info">
                                    <i class="fas fa-plus"></i>Ajouter consultation
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header col-md-12">
                                    <div class=" p-0">
                                        <div class="input-group input-group-sm float-sm-right col-md-3 p-0">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Recherche">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body table-responsive p-0">

                                    <table class="table table-striped text-nowrap">
                                        <thead>
                                            <tr>
                                                <th style="width: 20%">N° dossier
                                                </th>
                                                <th style="width: 20%">
                                                    Nom
                                                </th>
                                                <th style="width: 20%">Prénom</th>
                                                
                                                <th style="width: 20%">
                                                    Date d'enregistrement
                                                </th>
                                                <th style="width: 20%">
                                                    Date de consultation
                                                </th>
                                                <th style="width: 20%">
                                                    Actions
                                                </th>
                                                <th style="width: 20%">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>A-1800</td>
                                                <td>salhi</td>
                                                <td>karima</td>
                                                <td>03/03/2023</td>
                                                <td>03/04/2023</td>
                                                <td class="project-actions text-right d-flex d-md-block">
                                                    <a class="btn btn-primary btn-sm" href="./gestion-consultations/show.php">
                                                        <i class="fas fa-folder">
                                                        </i>
                                                        Afficher
                                                    </a>
                                                    <a class="btn btn-info btn-sm" href="../gestion-consultations/edit.php">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Modifier
                                                    </a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>A-1700</td>
                                                <td>radi</td>
                                                <td>aya</td>
                                                <td>03/04/2023</td>
                                                <td>03/05/2023</td>
                                                <td class="project-actions text-right d-flex d-md-block">
                                                    <a class="btn btn-primary btn-sm" href="./gestion-consultations/show.php">
                                                        <i class="fas fa-folder">
                                                        </i>
                                                        Afficher
                                                    </a>
                                                    <a class="btn btn-info btn-sm" href="./gestion-consultations/edit.php">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Modifier
                                                    </a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-flex justify-content-between align-items-center p-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <button type="button" class="btn  btn-default btn-sm">
                                            <i class="fa-solid fa-file-arrow-down"></i>
                                            IMPORTER</button>
                                        <button type="button" class="btn  btn-default btn-sm mt-0 mx-2">
                                            <i class="fa-solid fa-file-export"></i>
                                            EXPORTER</button>
                                    </div>
                                    <div class="mr-5">
                                        <ul class="pagination  m-0 float-right">
                                            <li class="page-item"><a class="page-link text-secondary" href="#">«</a></li>
                                            <li class="page-item"><a class="page-link text-secondary active" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link text-secondary" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link text-secondary" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link text-secondary" href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</body>

<!-- get script -->
<?php include_once "../../layouts/script-link.php"; ?>

</html>