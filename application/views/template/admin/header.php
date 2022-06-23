<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reehat - <?= $title ?></title>
	<link rel="shortcut icon" type="png/x-icon" href="<?= base_url('assets/img/reehat_logo.png'); ?>">
	<link href="<?= base_url('assets/css/styles.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
</head>
<body>
    <div id="main-wrapper">
		<?php $this->load->view('template/admin/navbar'); ?>
		<div class="clearfix"></div>
		<section class="gray pt-4">
			<div class="container-fluid">
				<div class="row">
					<?php $this->load->view('template/admin/sidebar'); ?>	
					<div class="col-lg-9 col-md-9 col-sm-12">
						<?php $this->load->view('template/admin/breadcrumb'); ?>