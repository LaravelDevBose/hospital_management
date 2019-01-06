<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('database', 'session', 'form_validation', 'cart','upload','image_lib');

$autoload['drivers'] = array();

$autoload['helper'] = array('url','file','form');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('Admin','Image_upload','Room', 'ReportTemplate','Test');
