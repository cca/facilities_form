<?php

// radio field options
$user_groups = array("Faculty", "Staff", "Student", "Other");
$campuses = array("Oakland", "San Francisco");
$oak_buildings = array("Avenue Apartments", "B Building", "Barclay Simpson Sculpture Studio", "Blattner Print Studio", "Cafe", "CAPL/ET (5275 Broadway)", "Carriage House", "Clifton Hall", "Counseling Services (5299 College)", "Facilities", "First Year Studios (5288 College)", "Founder's Hall", "Founder's Hall (Meyer Library)", "Irwin Student Center", "Macky Hall", "Martinez Annex", "Martinez Hall", "North/South Galleries", "Oliver Art Center", "Ralls Studio", "Shaklee Building", "Terrace Apartments (4Plex)", "Textiles / L1 - L4 Classrooms (5301 Broadway)", "Treadwell Hall", "Webster Hall");
$sf_buildings = array("Communications", "Hooper I", "Hooper II", "Hooper III", "Kansas 350", "Kansas 360", "Main Building", "Orientations (DeHaro)", "Student Center (80 Carolina)");
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
