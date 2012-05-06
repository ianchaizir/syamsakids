<?php $this->load->view('includes/header'); ?>

<div id="loading" style="display:none"><img src="<?php echo base_url();?>img/site/ajax-loader.gif" /><br />Loading. Please wait.....</div>

<div id="main">
<?php $this->load->view($main_content); ?>
</div>

<?php $this->load->view('includes/footer'); ?>