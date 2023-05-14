<html>

<head>
    <?= $this->include('layouts/v2/head') ?>
</head>

<body>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?= $this->include('layouts/v2/sidebar') ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?= $this->include('layouts/v2/navbar') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                </div>
            </div>
            <!-- End of Main Content -->

            <?= $this->renderSection('content') ?>

            <?= $this->include('layouts/v2/footer') ?>

            <?= $this->include('layouts/v2/scripts') ?>

</body>

</html>