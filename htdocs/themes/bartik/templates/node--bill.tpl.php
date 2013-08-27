<?php

  // Textbausteine
  if (1 == 1) {
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
    
    
  }
  foreach ($content['field_bill_items_item']['und'] as $key => $value) {
    
  }
  $raw_pos =
    '<div style="border-bottom: 0.1mm solid grey;display: table-row; position: relative; width: 100%;">
      <div style="width: 1.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        Pos.
      </div>
      <div style="width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; border-left: 0.1mm solid grey">
        Art.Nr.
      </div>
      <div style="width: 5.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; border-left: 0.1mm solid grey">
        Beschreibung
      </div>
      <div style="width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; border-left: 0.1mm solid grey; text-align: right">
        Menge
      </div>
      <div style="width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; border-left: 0.1mm solid grey; text-align: right">
        Einzelpreis netto
      </div>
      <div style="width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; border-left: 0.1mm solid grey; text-align: right">
        Gesamtpreis netto
      </div>
    </div>'    
 ;
 
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
        Pos.
      </div>
      <div style="width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; border-left: 0.1mm solid grey">
        Art.Nr.
      </div>
      <div style="width: 5.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; border-left: 0.1mm solid grey">
        Beschreibung
      </div>
      <div style="width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; border-left: 0.1mm solid grey; text-align: right">
        Menge
      </div>
      <div style="width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; border-left: 0.1mm solid grey; text-align: right">
        Einzelpreis netto
      </div>
      <div style="width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; border-left: 0.1mm solid grey; text-align: right">
        Gesamtpreis netto
      </div>
    </div>
    
    <?php print $raw_pos; ?>
        
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
