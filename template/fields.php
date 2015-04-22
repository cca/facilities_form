<?php

// radio field options
$user_groups = array("Faculty", "Staff", "Student", "Other");
$campuses = array("Oakland", "San Francisco");
$oak_buildings = array("Avenue Apartments", "B Building", "Barclay Simpson", "Cafe", "Clifton Hall", "ETS / CAPL", "Carriage House", "Facilities", "First Year Studio", "Founders", "Irwin", "Macky Hall", "Martinez Annex", "Martinez / Blattner Print Studio", "College Avenue Galleries", "Oliver Art Center", "Ralls", "Shaklee", "Broadway Terrace", "Textiles", "Treadwell", "Webster");
$sf_buildings = array("Back Lot", "Carolina", "Deharo", "Eighth ", "Hooper", "Harriet", "Kansas", "Mission", "Other");
$categories = array("Building Repair", "Electrical/Lighting", "Furniture Assembly/Repair", "Graffiti Removal", "Janitorial", "Keys/Access", "Landscaping", "Mechanical/Climate Control", "Plumbing", "Other");

$username_help = array("help"=>"(If you would like to request service and do not have a CCA email account, please contact Facilities at 415.551.9300)");

$fields = array(
  array("id"=>"first_name", "label"=>"First Name", "type"=>"text"),
  array("id"=>"last_name", "label"=>"Last Name", "type"=>"text"),
  array("id"=>"email", "label"=>"CCA Email", "type"=>"email", "options"=>$username_help),
  array("id"=>"phone", "label"=>"Phone", "type"=>"text"),
  array("id"=>"user_group", "label"=>"User Group", "type"=>"radio", "options"=>$user_groups),
  array("id"=>"campus", "label"=>"Campus", "type"=>"radio", "options"=>$campuses),
  array("id"=>"oak_building", "label"=>"Oakland Building", "type"=>"radio", "options"=>$oak_buildings),
  array("id"=>"sf_building", "label"=>"San Francisco Building", "type"=>"radio", "options"=>$sf_buildings),
  array("id"=>"category", "label"=>"Category", "type"=>"radio", "options"=>$categories),
  array("id"=>"area", "label"=>"Room/Area", "type"=>"text"),
  array("id"=>"title", "label"=>"One-line Description of Your Service Request", "type"=>"text"),
  array("id"=>"description", "label"=>"Full Description", "type"=>"textarea"),
);
