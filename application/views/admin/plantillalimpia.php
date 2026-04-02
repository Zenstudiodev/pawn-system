<?php
/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 12/06/2017
 * Time: 1:50 PM
 */

$this->layout('admin/admin_master', [
	'title'    => $title]);

?>
<!--Css Personalizadoc para vista-->
<?php $this->start('css_p') ?>

<?php $this->stop() ?>

<?php $this->start('page_content') ?>

<?php $this->stop() ?>

<?php $this->start('js_p') ?>

<?php $this->stop() ?>

<?php $this->start('js_ps') ?>

<?php $this->stop() ?>
