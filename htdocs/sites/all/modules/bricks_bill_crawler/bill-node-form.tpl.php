<div style="position:fixed; right: 20px; height: 50px; background-color: red"> <?php print drupal_render($form['actions']) ?> </div> 
<?php print drupal_render($form['title']) ?>
<?php print drupal_render($form['field_bill_address']) ?>
<?php print drupal_render($form['field_bill_salutation']) ?>
<?php print drupal_render($form['field_bill_number']) ?>
<?php print drupal_render($form['field_bill_invoice_date']) ?>
<?php print drupal_render($form['field_bill_delivery_date']) ?>
<?php print drupal_render($form['field_bill_term_of_payment']) ?>
<b>Order Items</b>
<?php   print drupal_render($form['fgm_node_bill_form_group_bill_items']) ?>
<?php print drupal_render($form['field_sub_total']) ?>
<?php print drupal_render($form['field_add_vat']) ?>
<?php print drupal_render($form['field_grand_total']) ?>
<?php print drupal_render($form['field_grand_total_in_payment']) ?>
<?php print drupal_render($form['field_bill_paymenttype']) ?>
<?php print drupal_render($form['field_bill_language']) ?>
<div style="display: none"><?php print drupal_render($form['additional_settings']) ?></div> 

<?php print drupal_render_children($form) ?>
