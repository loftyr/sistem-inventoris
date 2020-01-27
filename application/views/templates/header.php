<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistem Informasi">
    <meta name="author" content="ShiroNeko">
    <meta name="category" content="SMP">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('include/bootstrap/css/bootstrap.css') ?>">
    <!-- Sweet Alert 2 CSS -->
    <link rel="stylesheet" href="<?= base_url('include/sweetAlert2/sweetalert2.min.css') ?>">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?= base_url('include/animate.css') ?>">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?= base_url('include/fontawesome/css/all.min.css') ?>">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?= base_url('include/select2/css/select2.css') ?>">
    <link rel="stylesheet" href="<?= base_url('include/select2/css/select2-bootstrap.css') ?>">
    <!-- Custom styles for this page -->
    <link rel="stylesheet" href="<?= base_url('include/datatables/dataTables.bootstrap4.min.css') ?>">
    <!-- Jquery UI -->
    <link rel="stylesheet" href="<?= base_url('include/JqueryUI/jquery-ui.css') ?>">
    <!-- Costum CSS -->
    <link rel="stylesheet" href="<?= base_url('include/my-css/base-style.css') ?>">

    <?php if ($css == '') : ?>

    <?php else : ?>
        <link rel="stylesheet" href="<?= base_url('include/my-css/' . $css . '') ?>">
    <?php endif ?>


    <title><?= $judul ?></title>
    <!-- <link rel="icon" type="image/png" href=""> -->
</head>

<body class="">