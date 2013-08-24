<?php

/**
 * @file
 * Bartik's theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
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
        Text1
      </div>
      <div style="position: relative; border-left: 0.1mm solid grey; display: table-cell; width: auto; padding-left: 2mm">
        Text2
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
