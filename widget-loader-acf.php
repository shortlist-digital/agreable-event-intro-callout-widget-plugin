<?php
$key = "widget_event_intro_callout";

$widgetplacement = self::$config['tab_placement'];

$widget_config = array (
  'key' => $key,
  'name' => 'event_intro_callout',
  'label' => 'Event Intro Callout',
  'display' => 'row',
  'sub_fields' => array (
    array (
      'key' => $key . '_basic_details_tab',
      'label' => 'Basic Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
    array (
      'key' => $key . '_callout',
      'label' => 'Callout',
      'name' => 'callout',
      'type' => 'text',
      'required' => 1,
    ),
    array (
      'key' => $key . '_title',
      'label' => 'Title',
      'name' => 'title',
      'type' => 'text',
      'required' => 1,
    ),
    array (
      'key' => $key . '_sell',
      'label' => 'Sell',
      'name' => 'sell',
      'type' => 'strict_wysiwyg',
      'required' => 1,
    ),
    array (
      'key' => $key . '_advanced_details_tab',
      'label' => 'Advanced Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
  )
);

$widget_config["content-types"] = get_option("options_" . $key . "_available_post_types");

$widget_config["content-sizes"] = array('main');
