<?php
/**
* index.php view page for generic Customer controller
*
* Used to show how to do CRUD in CodeIgniter
*
* views/customer/index.php
*
* @package ITC260
* @subpackage Customer
* @author Bill Newman <william.newman@seattlecolleges.edu>
* @version 1.0 2015/04/30
* @link http://www.newmanix.com/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Customer_model.php
* @see Customer.php
* @todo none
*/

$this->load->view($this->config->item('theme') . 'header');
?>
<h2><?php echo $title ?></h2>
<?php
  
$this->load->view($this->config->item('theme') . 'footer');
?>