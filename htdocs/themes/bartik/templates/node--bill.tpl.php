<?php
  // incl. MwSt.
  $add_vat = $content['field_add_vat']['#items'][0]["value"];
  // PAYCURRENCYCODE
  $payment_code = 'EUR';
  if (strpos($content['field_grand_total_in_payment']['#items'][0]["value"], 'EUR') == FALSE) {
    $payment_code = '$';
    $bricks_bill_grand_total_payment_value = str_replace('US&nbsp;$', '', $content['field_grand_total_in_payment']['#items'][0]["value"]);
  }
  // Textbausteine
  if ($content['field_bill_language']['#items'][0]['value'] == 'de') {
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
    $bricks_bill_number = '<div style="float: left">Rechnung Nr.&nbsp;</div>';
    $bricks_bill_delivery_date = '<div style="float: left">Lieferdatum:&nbsp;</div>';
    $bricks_bill_invoice_date = '<div style="float: left">Rechnungsdatum:&nbsp;</div>';
    $bricks_bill_term_of_payment = '<div style="float: left">Zahlungsziel:&nbsp;</div>';
    $bricks_bill_salutation = '<div style="float: left">Hallo&nbsp;</div>';
    $bricks_bill_salutation_part_2 = '<div style="float: left">gemäß Deiner BrickLink-Bestellung&nbsp;</div>';
    $bricks_bill_salutation_part_3 = '<div style="float: rigth">&nbsp;berechnen wir Dir folgenden Auftrag:</div>';
    $bricks_bill_shipping_parts_1 = 'V';
    $bricks_bill_shipping_parts_2 = 'Verpackung & Versand';
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
    $bricks_bill_number = '<div style="float: left">Invoice No.&nbsp;</div>';
    $bricks_bill_delivery_date = '<div style="float: left">Delivery date:&nbsp;</div>';
    $bricks_bill_invoice_date = '<div style="float: left">Invoice date:&nbsp;</div>';
    $bricks_bill_term_of_payment = '<div style="float: left">Term of payment:&nbsp;</div>';
    $bricks_bill_salutation = '<div style="float: left">Dear&nbsp;</div>';
    $bricks_bill_salutation_part_2 = '<div style="float: left">according to your BrickLink-Order&nbsp;</div>';
    $bricks_bill_salutation_part_3 = '<div style="float: rigth">&nbsp;we invoice you for the following goods:</div>';
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
    
    
  }
  $raw_items = '';
  $items_count = 0;
  foreach ($content['field_bill_items_item']['#items'] as $key => $value) {
    $items_count++;
    $raw_items .=
      '<div class="bill-items" style="border-bottom: 0.1mm solid grey; border-top: 0.1mm solid grey; display: table-row; position: relative; width: 100%; font-weight: bold">
        <div style="width: 1.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
          ' . $content['field_bill_items_item']['#items'][$key]["value"] . '
        </div>
        <div style="width: 1.5cm; display: table-cell; border-left: 0.1mm solid grey; padding-left: 2mm; padding-right: 2mm">
          ' . $content['field_bill_items_number']['#items'][$key]["value"] . '
        </div>
        <div style="width: 5.0cm; display: table-cell; border-left: 0.1mm solid grey; padding-left: 2mm; padding-right: 2mm">
          ' . $content['field_bill_items_description']['#items'][$key]["value"] . '
        </div>
        <div style="width: 1.5cm; display: table-cell; border-left: 0.1mm solid grey; text-align: right; padding-left: 2mm; padding-right: 2mm">
          ' . $content['field_bill_items_quantity']['#items'][$key]["value"] . '
        </div>
        <div style="width: 2.25cm; display: table-cell; border-left: 0.1mm solid grey; text-align: right; padding-left: 2mm; padding-right: 2mm">
          ' . number_format($content['field_bill_items_unit_price']['#items'][$key]["value"], 2, ',', '.') . ' €
        </div>
        <div style="width: 2.25cm; display: table-cell; border-left: 0.1mm solid grey; text-align: right; padding-left: 2mm; padding-right: 2mm">
          ' . number_format($content['field_bill_items_total_price']['#items'][$key]["value"], 2, ',', '.') . ' €
        </div>
      </div>'    
    ;
  }
?>

<div style="margin: 0.0cm; border: 0.1mm solid grey; position: relative; min-height: 27cm; font-size: 9px; width: 100%">
  
  <div style="margin-right: 0; position: relative; height: 3.1cm; border-bottom: 0.1mm solid grey">
    <img style="height: 3.0cm; position: absolute; right: 2.0mm" src="<?php print '/' . drupal_get_path('theme', 'bartik') . '/templates/bricks-logo.jpg'; ?>" />
  </div>
  
  <div style="border-bottom: 0.1mm solid grey; position: relative; display: table; width: 100%">
    <div style="display: table-row; position: relative">
      <div style="width: 11.4cm; display: table-cell; padding-left: 2mm">
        <div style="font-size: 6px"><?php print $bricks_address_small; ?></div>
        <br />
        <?php print render($content['field_bill_address']); ?>
      </div>
      <div style="position: relative; border-left: 0.1mm solid grey; display: table-cell; width: auto; padding-left: 2mm">
        <?php print $bricks_address_big; ?>
      </div>
    </div>    
  </div>
  
  <div style="font-size: 14px; font-weight: bold; text-align: center; position: relative; border-bottom: 0.1mm solid grey">
    <?php print $bricks_bill_string; ?>
  </div>
  
  <div style="border-bottom: 0.1mm solid grey; position: relative; display: table; width: 100%">
    <div style="display: table-row; position: relative">
      <div style="width: 11.4cm; display: table-cell; padding-left: 2mm">
        <?php print $bricks_bill_number; ?><?php print render($content['field_bill_number']); ?>
        <br />
        <?php print $bricks_bill_delivery_date; ?><?php print render($content['field_bill_delivery_date']); ?>
        <br />
      </div>
      <div style="position: relative; border-left: 0.1mm solid grey; display: table-cell; width: auto; padding-left: 2mm">        
        <?php print $bricks_bill_invoice_date; ?><?php print render($content['field_bill_invoice_date']); ?>     
        <?php print $bricks_bill_term_of_payment; ?><?php print render($content['field_bill_term_of_payment']); ?>
      </div>
    </div>    
  </div>
  
  <div style="position: relative; padding-left: 2mm; padding-right: 2mm">
    <?php print $bricks_bill_salutation; ?><div style="float: left"><?php print render($content['field_bill_salutation']); ?></div><div>,</div>
    <br />
    <?php print $bricks_bill_salutation_part_2; ?><div style="float: left"><?php print render($content['field_bill_order_id']); ?></div><?php print $bricks_bill_salutation_part_3; ?>
    <br />
    
  </div>
  
  
  
  <div style="position: relative; display: table; font-size: 8px; border-collapse: collapse; margin-left: auto; margin-right: auto; border-left: 0.1mm solid grey; border-right: 0.1mm solid grey">
    <div style="border-bottom: 0.1mm solid grey; border-top: 0.1mm solid grey; display: table-row; position: relative; width: 100%; font-weight: bold">
      <div style="width: 1.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print $bricks_bill_table_header_item; ?>
      </div>
      <div style="width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; border-left: 0.1mm solid grey">
        <?php print $bricks_bill_table_header_artno; ?>
      </div>
      <div style="width: 5.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; border-left: 0.1mm solid grey">
        <?php print $bricks_bill_table_header_desc; ?>
      </div>
      <div style="width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; border-left: 0.1mm solid grey; text-align: right">
        <?php print $bricks_bill_table_header_quanti; ?>
      </div>
      <div style="width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; border-left: 0.1mm solid grey; text-align: right">
        <?php print $bricks_bill_table_header_unit_price; ?>
      </div>
      <div style="width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; border-left: 0.1mm solid grey; text-align: right">
        <?php print $bricks_bill_table_header_total_price; ?>
      </div>
    </div>
    
    <?php print $raw_items; ?>
    
    <div class="bill-items" style="border-bottom: 0.1mm solid grey; border-top: 0.1mm solid grey; display: table-row; position: relative; width: 100%; font-weight: bold">
      <div style="width: 1.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print $items_count+1; ?>
      </div>
      <div style="width: 1.5cm; display: table-cell; border-left: 0.1mm solid grey; padding-left: 2mm; padding-right: 2mm">
        <?php print $bricks_bill_shipping_parts_1; ?>
      </div>
      <div style="width: 5.0cm; display: table-cell; border-left: 0.1mm solid grey; padding-left: 2mm; padding-right: 2mm">
        <?php print $bricks_bill_shipping_parts_2; ?>
      </div>
      <div style="width: 1.5cm; display: table-cell; border-left: 0.1mm solid grey; text-align: right; padding-left: 2mm; padding-right: 2mm">
        1
      </div>
      <div style="width: 2.25cm; display: table-cell; border-left: 0.1mm solid grey; text-align: right; padding-left: 2mm; padding-right: 2mm">
        <?php print number_format($content['field_shipping_packaging']['#items'][0]["value"], 2, ',', '.'); ?> €
      </div>
      <div style="width: 2.25cm; display: table-cell; border-left: 0.1mm solid grey; text-align: right; padding-left: 2mm; padding-right: 2mm">
        <?php print number_format($content['field_shipping_packaging']['#items'][0]["value"], 2, ',', '.'); ?> €
      </div>
    </div>    
    
    <div class="bill-items" style="border-bottom: 0.1mm solid grey; border-top: 0.1mm solid grey; display: table-row; position: relative; width: 100%; font-weight: bold">
      <div style="width: 1.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 5.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; text-align: right">
        <?php print $bricks_bill_sub_total; ?>
      </div>
      <div style="width: 2.25cm; display: table-cell; border-left: 0.1mm solid grey; text-align: right; padding-left: 2mm; padding-right: 2mm">
        <?php print number_format($content['field_sub_total']['#items'][0]["value"], 2, ',', '.'); ?> €
      </div>
    </div> 
    
    <?php if ($add_vat == '1'): ?>
    <div class="bill-items" style="border-bottom: 0.1mm solid grey; border-top: 0.1mm solid grey; display: table-row; position: relative; width: 100%; font-weight: bold">
      <div style="width: 1.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
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
      <div style="width: 2.25cm; display: table-cell; border-left: 0.1mm solid grey; text-align: right; padding-left: 2mm; padding-right: 2mm">
        <?php print number_format(($content['field_sub_total']['#items'][0]["value"]*0.19), 2, ',', '.'); ?> €
      </div>
    </div>
    <?php endif; ?>
    
    <div class="bill-items" style="border-bottom: 0.1mm solid grey; border-top: 0.1mm solid grey; display: table-row; position: relative; width: 100%; font-weight: bold">
      <div style="width: 1.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 5.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; text-align: right">
        <?php print $bricks_bill_grand_total;?>
      </div>
      <div style="width: 2.25cm; display: table-cell; border-left: 0.1mm solid grey; text-align: right; padding-left: 2mm; padding-right: 2mm">
        <?php print number_format(($content['field_grand_total']['#items'][0]["value"]*0.19), 2, ',', '.'); ?> €
      </div>
    </div>
    
    <?php if ($payment_code == '$'): ?>
    <div class="bill-items" style="border-bottom: 0.1mm solid grey; border-top: 0.1mm solid grey; display: table-row; position: relative; width: 100%; font-weight: bold">
      <div style="width: 1.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 5.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        <?php print ' '; ?>
      </div>
      <div style="width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; text-align: right">
        <?php print $bricks_bill_grand_total_payment;?>
      </div>
      <div style="width: 2.25cm; display: table-cell; border-left: 0.1mm solid grey; text-align: right; padding-left: 2mm; padding-right: 2mm">
        <?php print number_format($bricks_bill_grand_total_payment_value, 2, ',', '.'); ?> $
      </div>
    </div>
    <?php endif; ?>
    
        
  </div>
  
  <div style="position: relative; padding-left: 2mm; padding-right: 2mm">
    Text
  </div>
  
  <div style="display: table; position: absolute; bottom: 0px; border-top: 0.1mm solid grey; width: 100%;">
    <div style="display: table-row; height: 2.5cm; color: #666666">
      <div style="display: table-cell; width: 5.0cm; padding-left: 2mm; padding-right: 2mm;">
        Text
      </div>
      <div style="display: table-cell; width: 5.25cm; border-left: 0.1mm solid grey; padding-left: 2mm; padding-right: 2mm;">
        Text
      </div>
      <div style="display: table-cell; border-left: 0.1mm solid grey; padding-left: 2mm; padding-right: 2mm;">
        Text
      </div>
    </div>
  </div>
</div>