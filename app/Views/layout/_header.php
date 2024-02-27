<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title><?php echo $settings['web_title'] ?></title>
            <meta name="description" content="<?php echo $settings['web_description'] ?>">
        <!-- plugins:css -->
            <link rel="stylesheet" href="<?= base_url('assets/kitsu_template') ?>/vendors/feather/feather.css">
            <link rel="stylesheet" href="<?= base_url('assets/kitsu_template') ?>/vendors/ti-icons/css/themify-icons.css">
            <link rel="stylesheet" href="<?= base_url('assets/kitsu_template') ?>/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
            <link rel="stylesheet" href="<?= base_url('assets/kitsu_template') ?>/vendors/mdi/css/materialdesignicons.min.css">
        <!-- inject:css -->
            <link rel="stylesheet" href="<?= base_url('assets/kitsu_template') ?>/css/vertical-layout-light/style.css">
        <!-- endinject -->
            <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/images/items/'.($settings['web_profile'] ? $settings['web_profile'] : 'logo-brand-collapse.png')) ?>">
            <link rel="stylesheet" href="<?= base_url('assets/kitsu_template') ?>/vendors/fontawesome-icon/fontawesome.min.css">
    </head>

    <body class="sidebar-dark sidebar-icon-only">