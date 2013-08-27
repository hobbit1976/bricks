<?php
  
  // Textbausteine
  if (1 == 1) {
    $bricks_address_small = '444 Bricks UG (haftungsbeschränkt) | Königstr. 17 | D-01097 Dresden | Deutschland';
    $bricks_address_big =   '44 Bricks UG (haftungsbeschränkt) <br>
                            Königstr. 17 <br>
                            D-01097 Dresden <br>
                            Deutschland<br>
                            <br>
                            Tel.: +49(0)351-21966427 <br>
                            Fax: +49(0)351-8080698 <br>
                            E-Mail: info@44bricks.com <br>
                            Web: www.44bricks.com <br>
                            <br>
                            USt-IdNr.: DE276778872 <br>
                            St.-Nr.: 202/106/08762';
    
  }
  else {
    $bricks_address_small ='44 Bricks UG (haftungsbeschränkt) | Königstr. 17 | D-01097 Dresden | Germany';
  }

  $raw_pos =
    '<div style="display: table-row; position: relative; width: 100%;">
      <div style="border-bottom: 0.1mm solid grey; width: 1.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        Pos.
      </div>
      <div style="border-bottom: 0.1mm solid grey; border-left: 0.1mm solid grey; width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        Art.Nr.
      </div>
      <div style="border-bottom: 0.1mm solid grey; border-left: 0.1mm solid grey; width: 5.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        Beschreibung
      </div>
      <div style="border-bottom: 0.1mm solid grey; border-left: 0.1mm solid grey; width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; text-align: right">
        Menge
      </div>
      <div style="border-bottom: 0.1mm solid grey; border-left: 0.1mm solid grey; width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; text-align: right">
        Einzelpreis netto
      </div>
      <div style="border-bottom: 0.1mm solid grey; border-left: 0.1mm solid grey; width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; text-align: right">
        Gesamtpreis netto
      </div>
    </div>'    
 ;

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<style type="text/css">
@page {margin: 2.0cm; font-family: Helvetica; font-size: 9; color: #000000}

</style>

</head><body>


<div style="border: 0.1mm solid grey; position: relative; font-size: 9px; width: 100%; height: 25.5cm">
  
  <div style="margin-right: 0; position: relative; height: 3.1cm; border-bottom: 0.1mm solid grey">
    <img style="height: 3.0cm; position: absolute; right: 24.0mm; top: 0.3mm" src="<?php print '/' . drupal_get_path('theme', 'bartik') . '/templates/bricks-logo.jpg'; ?>" />
  </div>
  
  <div style="border-bottom: 0.1mm solid grey; position: relative; display: table; width: 100%">
    <div style="display: table-row; position: relative">
      <div style="width: 11.4cm; display: table-cell; padding-left: 2mm">
        <?php print $bricks_address_small; ?>
      </div>
      <div style="position: relative; border-left: 0.1mm solid grey; display: table-cell; width: auto; padding-left: 2mm">
        <?php print $bricks_address_big; ?>
      </div>
    </div>    
  </div>
  
  <div style="font-size: 14px; text-align: center; position: relative; border-bottom: 0.1mm solid grey">
    Rechnung
  </div>
  
  <div style="border-bottom: 0.1mm solid grey; position: relative; display: table; width: 100%">
    <div style="display: table-row; position: relative">
      <div style="width: 11.4cm; display: table-cell; padding-left: 2mm">
        Text1
      </div>
      <div style="position: relative; border-left: 0.1mm solid grey; display: table-cell; width: auto; padding-left: 2mm">
        Text2
      </div>
    </div>    
  </div>
  
  <div style="position: relative">
    Text1
  </div>
  
  
  
  <div style="position: relative; display: table; font-size: 8px; border-collapse: collapse; margin-left: auto; margin-right: auto; border-left: 0.1mm solid grey; border-right: 0.1mm solid grey">
    <div style="display: table-row; position: relative; width: 100%; font-weight: bold">
      <div style="border-top: 0.1mm solid grey; border-bottom: 0.1mm solid grey; width: 1.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        Pos.
      </div>
      <div style="border-top: 0.1mm solid grey; border-bottom: 0.1mm solid grey; border-left: 0.1mm solid grey; width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        Art.Nr.
      </div>
      <div style="border-top: 0.1mm solid grey; border-bottom: 0.1mm solid grey; border-left: 0.1mm solid grey; width: 5.0cm; display: table-cell; padding-left: 2mm; padding-right: 2mm">
        Beschreibung
      </div>
      <div style="border-top: 0.1mm solid grey; border-bottom: 0.1mm solid grey; border-left: 0.1mm solid grey; width: 1.5cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; text-align: right">
        Menge
      </div>
      <div style="border-top: 0.1mm solid grey; border-bottom: 0.1mm solid grey; border-left: 0.1mm solid grey; width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; text-align: right">
        Einzelpreis netto
      </div>
      <div style="border-top: 0.1mm solid grey; border-bottom: 0.1mm solid grey; border-left: 0.1mm solid grey; width: 2.25cm; display: table-cell; padding-left: 2mm; padding-right: 2mm; text-align: right">
        Gesamtpreis netto
      </div>
    </div>
    
    <?php print $raw_pos; ?>
        
  </div>
  
  <div style="position: relative; padding-left: 2mm; padding-right: 2mm">
    Text
  </div>
  
  <div style="display: table; position: absolute; bottom: 2.7cm; border-top: 0.1mm solid grey; width: 100%;">
    <div style="display: table-row; color: #666666">
      <div style="display: table-cell; width: 5.0cm; padding-left: 2mm; padding-right: 2mm; height: 2.5cm; ">
        Text
      </div>
      <div style="display: table-cell; width: 5.25cm; border-left: 0.1mm solid grey; padding-left: 2mm; padding-right: 2mm; height: 2.5cm; ">
        Text
      </div>
      <div style="display: table-cell; border-left: 0.1mm solid grey; padding-left: 2mm; padding-right: 2mm; height: 2.5cm; ">
        Text
      </div>
    </div>
  </div>
</div>

</body></html>