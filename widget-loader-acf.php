<?php
$key = "event_intro_callout";

$widgetplacement = self::$config['tab_placement'];

$widget_config = array (
  'key' => 'widget_' . $key,
  'name' => $key,
  'label' => 'Event Intro Callout',
  'display' => 'block',
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

$widget_config["content-types"] = array('page', 'category');
$widget_config["content-sizes"] = array('main');
