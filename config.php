<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('pgsql');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-54-216-185-51.eu-west-1.compute.amazonaws.com');
$CFG->dbname    = getenv('descba5af0789l');
$CFG->dbuser    = getenv('uhccexhznkqgbz');
$CFG->dbpass    = getenv('51c5da58f6dbcce7ba76642aedee5f7ca901eea013c5f7416922b51bfe2842b7');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('http://moodleipc.herokuapp.com');
$CFG->dataroot  = getenv('/tmp');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
