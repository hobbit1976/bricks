<?php
  $content = (array) $node;
  // BrickLinks bei Rechnung von setzen
  (strpos($node->field_bill_number[$node->language][0]['value'], 'BL#') && empty($node->field_bill_from[$node->language][0]['value'])) ? $node->field_bill_from[$node->language][0]['value'] = 'BrickLinks' : '';
  // incl. MwSt.  
  $add_vat = $content['field_add_vat']['und'][0]["value"];
  // PAYCURRENCYCODE
  $payment_code = 'EUR';
  if (isset($content['field_grand_total_in_payment']['und'][0]["value"]) && strpos($content['field_grand_total_in_payment']['und'][0]["value"], '$')) {
    $payment_code = '$';
    $bricks_bill_grand_total_payment_value = str_replace('US&nbsp;$', '', $content['field_grand_total_in_payment']['und'][0]["value"]);
  }
  // Textbausteine
  if ($content['field_bill_language']['und'][0]['value'] == 'de') {
    $bricks_address_small = '44 Bricks UG (haftungsbeschränkt) | Königstr. 17 | D-01097 Dresden | Deutschland';
    $bricks_address_big =   '44 Bricks UG (haftungsbeschränkt) <br />
                            Königstr. 17 <br />
                            D-01097 Dresden <br />
                            Deutschland <br />
                            <br />
                            Tel.: +49(0)351-21966427 <br />
                            Fax: +49(0)351-8080698 <br />
                            E-Mail: info@44bricks.com <br />
                            Web: www.44bricks.com <br />
                            <br />
                            USt-IdNr.: DE276778872 <br />
                            St.-Nr.: 202/106/08762 <br />
                            <br />';
    $bricks_bill_string = 'Rechnung';
    $bricks_bill_number = 'Rechnung Nr.&nbsp;';
    $bricks_bill_delivery_date = 'Lieferdatum:&nbsp;';
    $bricks_bill_invoice_date = 'Rechnungsdatum:&nbsp;';
    $bricks_bill_term_of_payment = 'Zahlungsziel:&nbsp;';
    $bricks_bill_salutation = 'Hallo';
    $bricks_bill_salutation_part_2 = 'gemäß Deiner ' . ((isset($node->field_bill_from[$node->language][0]['value']) && !empty($node->field_bill_from[$node->language][0]['value'])) ? ($node->field_bill_from[$node->language][0]['value'] . '-') : '') . 'Bestellung';
    $bricks_bill_salutation_part_3 = 'berechnen wir Dir folgenden Auftrag:';
    $bricks_bill_shipping_parts_1 = 'V';
    $bricks_bill_shipping_parts_2 = 'Verpackung & Versand';
    $bricks_bill_coupon_1 = 'R';
    $bricks_bill_coupon_1 = 'Rabatt';
    $bricks_bill_sub_total = 'Zwischensumme';
    $bricks_bill_add_vat = '(zzgl. 19% MwSt.)';
    $bricks_bill_table_header_item = 'Pos.';
    $bricks_bill_table_header_artno = 'Art.Nr.';
    $bricks_bill_table_header_desc = 'Beschreibung';
    $bricks_bill_table_header_quanti = 'Menge';
    $bricks_bill_table_header_unit_price = 'Einzelpreis netto';
    $bricks_bill_table_header_total_price = 'Gesamtpreis netto';
    $bricks_bill_grand_total = 'Endsumme';
    $bricks_bill_grand_total_payment = 'Endsumme in Zahlwährung';
    $bricks_bill_not_vat_text = 'Rechnung gem. § 25a UStG (Anwendung der Differenzbesteuerung, MwSt. nicht ausweisbar)';
    $bricks_bill_text_paymenttype = 'Die Zahlung erfolgte per'; 
    $bricks_bill_text_signatur = 'Vielen Dank für Deine Bestellung!<br /><br /><br />Mit freundlichen Grüßen,<br /><br />Dein 44 Bricks Team';
    $bricks_bill_text_footer_1 = '<b>Geschäftsführer:</b><br />Richard Müller, Dennis Becker<br /><br /><b>Sitz der Gesellschaft:</b><br />Dresden, Deutschland';
    $bricks_bill_text_footer_2 = '<b>Gerichtsstand:</b><br />HRB 29817 Amtsgericht Dresden<br /><br />USt-IdNr. DE276778872<br />St.-Nr. 202/106/08762';
    $bricks_bill_text_footer_3 = '<b>Bankverbindung:</b><br />Dresdner Volksbank Raiffeisenbank eG<br />Konto-Nr. 3136071008<br />BLZ: 85090000<br />IBAN: DE08 8509 0000 3136 0710 08<br />SWIFT: GENODEF1DRS';
    $bricks_bill_invoiced_items = '<b>Rechnungsposten</b> Seite 1 von 1';
  }
  else {
    $bricks_address_small ='44 Bricks UG (haftungsbeschränkt) | Königstr. 17 | D-01097 Dresden | Germany';
    $bricks_address_big =   '44 Bricks UG (haftungsbeschränkt) <br />
                            Königstr. 17 <br />
                            D-01097 Dresden <br />
                            Germany <br />
                            <br />
                            Tel.: +49(0)351-21966427 <br />
                            Fax: +49(0)351-8080698 <br />
                            E-Mail: info@44bricks.com <br />
                            Web: www.44bricks.com <br />
                            <br />
                            VAT-ID: DE276778872 <br />
                            Tax-ID: 202/106/08762 <br />
                            <br />';
    $bricks_bill_string = 'Invoice';
    $bricks_bill_number = 'Invoice No.&nbsp;';
    $bricks_bill_delivery_date = 'Delivery date:&nbsp;';
    $bricks_bill_invoice_date = 'Invoice date:&nbsp;';
    $bricks_bill_term_of_payment = 'Term of payment:&nbsp;';
    $bricks_bill_salutation = 'Dear';
    $bricks_bill_salutation_part_2 = 'according to your ' . ((isset($node->field_bill_from[$node->language][0]['value']) && !empty($node->field_bill_from[$node->language][0]['value'])) ? ($node->field_bill_from[$node->language][0]['value'] . '-') : '') . 'Order';
    $bricks_bill_salutation_part_3 = 'we invoice you for the following goods:';
    $bricks_bill_coupon_1 = 'C';
    $bricks_bill_coupon_1 = 'Credit';
    $bricks_bill_shipping_parts_1 = 'S';
    $bricks_bill_shipping_parts_2 = 'Shipping & Packaging';
    $bricks_bill_sub_total = 'Sub-total';
    $bricks_bill_add_vat = '(add. 19% VAT)';
    $bricks_bill_table_header_item = 'Item';
    $bricks_bill_table_header_artno = 'Art.No.';
    $bricks_bill_table_header_desc = 'Description';
    $bricks_bill_table_header_quanti = 'Quantity';
    $bricks_bill_table_header_unit_price = 'Unit Price net';
    $bricks_bill_table_header_total_price = 'Total Price net';
    $bricks_bill_grand_total = 'Grant-total';
    $bricks_bill_grand_total_payment = 'Grand-total in payment currency';
    $bricks_bill_not_vat_text = 'Invoice according to § 25a UStG (subject to differential taxation, VAT cannot be stated separately)';
    $bricks_bill_text_paymenttype = 'The payment has been made via'; 
    $bricks_bill_text_signatur = 'Thank you very much for your order!<br /><br /><br />Best regards,<br /><br />Your 44 Bricks Team';
    $bricks_bill_text_footer_1 = '<b>Managing Directors:</b><br />Richard Müller, Dennis Becker<br /><br /><b>Registered Office:</b><br />Dresden, Germany';
    $bricks_bill_text_footer_2 = '<b>Court of Jurisdiction:</b><br />HRB 29817 Amtsgericht Dresden<br /><br />VAT-ID: DE276778872<br />Tax-ID: 202/106/08762';  
    $bricks_bill_text_footer_3 = '<b>Bank Details:</b><br />Dresdner Volksbank Raiffeisenbank eG<br />Account-No. 3136071008<br />BLZ: 85090000<br />IBAN: DE08 8509 0000 3136 0710 08<br />SWIFT: GENODEF1DRS';  
    $bricks_bill_invoiced_items = '<b>Invoiced Items</b> Page 1 of 1';
  }
  $raw_items = '';
  $items_count = 0;
  $sum_items = 0.00;
  foreach ($content['field_bill_items_item']['und'] as $key => $value) {
    $sum_items = $sum_items + ($content['field_bill_items_total_price']['und'][$key]["value"]);
    $items_count++;
    $raw_items .=
      '<div class="bill-items" style="display: table-row; position: relative; width: 100%">
        <div style="width: 0.75cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
          ' . $content['field_bill_items_item']['und'][$key]["value"] . '
        </div>
        <div style="width: 0.75cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
          ' . $content['field_bill_items_number']['und'][$key]["value"] . '
        </div>
        <div style="width: 5.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
          ' . $content['field_bill_items_description']['und'][$key]["value"] . '
        </div>
        <div style="width: 1.5cm; display: table-cell; text-align: right; padding-left: 2mm; padding-right: 2mm">
          ' . $content['field_bill_items_quantity']['und'][$key]["value"] . '
        </div>
        <div style="width: 2.25cm; display: table-cell; text-align: right; padding-left: 2mm; padding-right: 2mm">
          ' . number_format(($content['field_bill_items_unit_price']['und'][$key]["value"] / ($add_vat ==1 ? 1.19 : 1)), 2, ',', '.') . ' €
        </div>
        <div style="width: 2.25cm; display: table-cell; text-align: right; padding-left: 2mm; padding-right: 2mm">
          ' . number_format(($content['field_bill_items_total_price']['und'][$key]["value"] / ($add_vat ==1 ? 1.19 : 1)), 2, ',', '.') . ' €
        </div>
      </div>'    
    ;
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<style type="text/css">
@page {margin: 2.0cm; font-family: Helvetica; font-size: 9; color: #000000}

</style>

</head><body>


<div style="margin: 0.0cm; position: relative; font-size: 9px; width: 100%">
  
  <div style="margin-right: 0; position: relative; height: 3.1cm">
    <img style="height: 3.0cm; position: absolute; right: 24.0mm; top: 0.3mm" src="<?php print '/' . drupal_get_path('theme', 'bartik') . '/templates/bricks-logo.jpg'; ?>" />
  </div>
  
  <div style="position: relative; display: table; width: 100%">
    <div style="display: table-row; position: relative">
      <div style="width: 11.4cm; display: table-cell; padding-left: 2mm">
        <div style="font-size: 6px; color: #646D7E"><?php print $bricks_address_small; ?></div>
        <br />
        <?php print $content['field_bill_address']['und']['0']['value']; ?>
      </div>
      <div style="position: relative; display: table-cell; width: auto; padding-left: 2mm">
        <?php print $bricks_address_big; ?>
      </div>
    </div>    
  </div>
  
  <div style="font-size: 14px; font-weight: bold; text-align: center; position: relative">
    <?php print $bricks_bill_string; ?>
  </div>
  
  <div style="position: relative; display: table; width: 100%">
    <div style="display: table-row; position: relative">
      <div style="width: 11.4cm; display: table-cell; padding-left: 2mm; font-weight: bold">
        <?php print $bricks_bill_number; ?><?php print $content['field_bill_number']['und']['0']['value']; ?><br />
        <?php print $bricks_bill_delivery_date; ?><?php print $content['field_bill_delivery_date']['und']['0']['value']; ?>
        <br />
      </div>
      <div style="position: relative; display: table-cell; width: auto; padding-left: 2mm">
        <div style="font-weight: bold">
          <?php print $bricks_bill_invoice_date; ?><?php print $content['field_bill_invoice_date']['und']['0']['value']; ?> 
        </div>  
        <?php print $bricks_bill_term_of_payment; ?><?php print $content['field_bill_term_of_payment']['und']['0']['value']; ?>
      </div>
    </div>    
  </div>
  
  <div style="position: relative; padding-left: 2mm; padding-right: 2mm">    
    <br /><br />
    <?php print $bricks_bill_salutation; ?> <?php print $content['field_bill_salutation']['und']['0']['value']; ?>,
    <br /><br />
    <?php print $bricks_bill_salutation_part_2; ?> <?php print $content['title']; ?> <?php print $bricks_bill_salutation_part_3; ?>
    <br /><br />
    
  </div>
  
  <div style="text-align: center; position: relative">
    <?php print $bricks_bill_invoiced_items; ?>
  </div>
  <br />
  
  <div style="position: relative; display: table; font-size: 8px; border-collapse: collapse; margin-left: auto; margin-right: auto">
    <div style="display: table-row; position: relative">
      <div style="border-bottom: 0.2mm solid grey; width: 0.75cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print $bricks_bill_table_header_item; ?>
      </div>
      <div style="border-bottom: 0.2mm solid grey; width: 0.75cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print $bricks_bill_table_header_artno; ?>
      </div>
      <div style="border-bottom: 0.2mm solid grey; width: 5.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print $bricks_bill_table_header_desc; ?>
      </div>
      <div style="border-bottom: 0.2mm solid grey; width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; text-align: right">
        <?php print $bricks_bill_table_header_quanti; ?>
      </div>
      <div style="border-bottom: 0.2mm solid grey; width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; text-align: right">
        <?php print $bricks_bill_table_header_unit_price; ?>
      </div>
      <div style="border-bottom: 0.2mm solid grey; width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; text-align: right">
        <?php print $bricks_bill_table_header_total_price; ?>
      </div>
    </div>
    
    <?php print $raw_items; ?>
<!--    
    <div class="bill-items" style="border-bottom: 0.1mm solid grey; border-top: 0.1mm solid grey; display: table-row; position: relative; width: 100%; font-weight: bold">
      <div style="border-bottom: 0.1mm solid grey; width: 0.75cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print $items_count+1; ?>
      </div>
      <div style="border-bottom: 0.1mm solid grey; width: 0.75cm; display: table-cell; border-left: 0.1mm solid grey; padding-left: 2mm; padding-right: 2mm">
        <?php print $bricks_bill_shipping_parts_1; ?>
      </div>
      <div style="border-bottom: 0.1mm solid grey; width: 5.0cm; display: table-cell; border-left: 0.1mm solid grey; padding-left: 2mm; padding-right: 2mm">
        <?php print $bricks_bill_shipping_parts_2; ?>
      </div>
      <div style="border-bottom: 0.1mm solid grey; width: 1.5cm; display: table-cell; border-left: 0.1mm solid grey; text-align: right; padding-left: 2mm; padding-right: 2mm">
        1
      </div>
      <div style="border-bottom: 0.1mm solid grey; width: 2.25cm; display: table-cell; border-left: 0.1mm solid grey; text-align: right; padding-left: 2mm; padding-right: 2mm">
        <?php print number_format(($content['field_shipping_packaging']['und'][0]["value"] * ($add_vat ==1 ? 0.81 : 1)), 2, ',', '.'); ?> €
      </div>
      <div style="border-bottom: 0.1mm solid grey; width: 2.25cm; display: table-cell; border-left: 0.1mm solid grey; text-align: right; padding-left: 2mm; padding-right: 2mm">
        <?php print number_format(($content['field_shipping_packaging']['und'][0]["value"] * ($add_vat ==1 ? 0.81 : 1)), 2, ',', '.'); ?> €
      </div>
    </div>    
-->    
    <div class="bill-items" style="display: table-row; position: relative; width: 100%">
      <div style="border-top: 0.2mm solid grey; width: 0.75cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="border-top: 0.2mm solid grey; width: 0.75cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="border-top: 0.2mm solid grey; width: 5.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="border-top: 0.2mm solid grey; width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="border-top: 0.2mm solid grey; width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; text-align: right">
        <?php print $bricks_bill_sub_total; ?>
      </div>
      <div style="border-top: 0.2mm solid grey; width: 2.25cm; display: table-cell; text-align: right; padding-left: 2mm; padding-right: 2mm">
        <?php print number_format(($sum_items / ($add_vat ==1 ? 1.19 : 1)), 2, ',', '.'); ?> €
      </div>
    </div> 
    
    <?php if ($add_vat == 1): ?>
    <div class="bill-items" style="display: table-row; position: relative; width: 100%">
      <div style="width: 0.75cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 0.75cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 5.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; text-align: right">
        <?php print $bricks_bill_add_vat;?>
      </div>
      <div style="width: 2.25cm; display: table-cell; text-align: right; padding-left: 2mm; padding-right: 2mm">
        <?php print number_format(($sum_items * 0.19), 2, ',', '.'); ?> €
      </div>
    </div>
    <?php endif; ?>
    
    <div class="bill-items" style="display: table-row; position: relative; width: 100%">
      <div style="width: 0.75cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 0.75cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 5.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 1.5mm; text-align: right">
        <?php if ($payment_code != '$'): ?><b><?php endif; ?>
        <?php print $bricks_bill_grand_total;?>
        <?php if ($payment_code != '$'): ?></b><?php endif; ?>
      </div>
      <div style="width: 2.25cm; display: table-cell; text-align: right; padding-left: 2mm; padding-right: 1.5mm">
        <?php if ($payment_code != '$'): ?><b><?php endif; ?>
        <?php print number_format($sum_items, 2, ',', '.'); ?> €
        <?php if ($payment_code != '$'): ?></b><?php endif; ?>
      </div>
    </div>
    
    <?php if ($payment_code == '$'): ?>
    <div class="bill-items" style="display: table-row; position: relative; width: 100%">
      <div style="width: 0.75cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 0.75cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 5.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 0.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 3.5cm; display: table-cell; padding-left: 2mm; padding-right: 1.5mm; text-align: right">
        <b><?php print $bricks_bill_grand_total_payment;?></b>
      </div>
      <div style="width: 2.25cm; display: table-cell; text-align: right; padding-left: 2mm; padding-right: 1.5mm">
        <b><?php print number_format($bricks_bill_grand_total_payment_value, 2, ',', '.'); ?> $</b>
      </div>
    </div>
    <?php endif; ?>
    
        
  </div>
    
  <div style="position: relative; padding-left: 2mm; padding-right: 2mm; padding-top: 5mm">
    <?php if ($add_vat != 1): ?>
      <p>
      <?php print $bricks_bill_not_vat_text; ?>
      </p>
    <?php endif;?>
    <p>
      <?php print $bricks_bill_text_paymenttype . ' ' . $content['field_bill_paymenttype']['und'][0]["value"]; ?>.
    </p>
    <p>
      <?php print $bricks_bill_text_signatur; ?>
    </p>
  </div>
  
  <div style="display: table; position: absolute; bottom: 2.0cm; width: 100%; color: #646D7E">
    <div style="display: table-row; height: 2.5cm; color: #666666">
      <div style="display: table-cell; width: 35%; padding-left: 2mm; padding-right: 2mm;">
        <?php print $bricks_bill_text_footer_1; ?>
      </div>
      <div style="display: table-cell; width: 35%; padding-left: 2mm; padding-right: 2mm;">
        <?php print $bricks_bill_text_footer_2; ?>
      </div>
      <div style="display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print $bricks_bill_text_footer_3; ?>
      </div>
    </div>
  </div>
</div>

</body></html>