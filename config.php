<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('pgsql');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-176-34-105-15.eu-west-1.compute.amazonaws.com');
$CFG->dbname    = getenv('dd1hqstututqac');
$CFG->dbuser    = getenv('jsnrjfdzzgvjne');
$CFG->dbpass    = getenv('b7aeefc19458143ffee5cc63b5521ec4957f210e3903e36d0227e1365d0828c3');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('http://moodleipc.herokuapp.com');
$CFG->dataroot  = getenv('tmp');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
