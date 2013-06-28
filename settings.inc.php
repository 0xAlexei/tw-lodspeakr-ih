<?php

$conf['endpoint']['local'] = 'http://logd.tw.rpi.edu/logd/sparql';
$conf['home'] = '/var/www/html/logd.tw.rpi.edu/ih2/lodspeakr/';
$conf['basedir'] = 'http://logd.tw.rpi.edu/ih2/';
$conf['debug'] = false;
$conf['root'] = 'id';

//THESE NEED TO BE ABOVE $conf['ns']['local']
$conf['ns']['local_agencies'] = 'http://logd.tw.rpi.edu/source/twc-rpi-edu/dataset/instance-hub-us-federal-agencies/vocab/';
$conf['ns']['local_states'] = 'http://logd.tw.rpi.edu/source/twc-rpi-edu/dataset/instance-hub-us-states-and-territories/vocab/';
$conf['ns']['local_countries'] = 'http://logd.tw.rpi.edu/source/twc-rpi-edu/dataset/instance-hub-countries/vocab/';
$conf['ns']['local_crops'] = 'http://logd.tw.rpi.edu/source/twc-rpi-edu/dataset/instance-hub-us-crops/vocab/';
$conf['ns']['local_counties'] = 'http://logd.tw.rpi.edu/source/twc-rpi-edu/dataset/instance-hub-us-counties/vocab/';
//THESE NEED TO BE ABOVE $conf['ns']['local']

$conf['ns']['local']   = 'http://logd.tw.rpi.edu/';
$conf['ns']['base']   = 'http://logd.tw.rpi.edu/ih2/';

$conf['mirror_external_uris'] = true; //needs to be true

// Cherry-picked components (see https://github.com/alangrafu/lodspeakr/wiki/Reuse-cherry-picked-components-from-other-repositories)

// Variables in  can be used to store user info.
// For examples, 'title' will be used in the header.
// (You can forget about all conventions and use your own as well)
$lodspk['title'] = 'RPI Tetherless World Instance Hub';

$conf['modules']['available'] = array('static','type','service');


$lodspk['countries'] = 'http://logd.tw.rpi.edu/source/twc-rpi-edu/dataset/instance-hub-countries/version/2013-Jun-26';
$lodspk['states'] = 'http://logd.tw.rpi.edu/source/twc-rpi-edu/dataset/instance-hub-us-states-and-territories/version/2011-Oct-09';
$lodspk['counties'] = 'http://logd.tw.rpi.edu/source/twc-rpi-edu/dataset/instance-hub-us-counties/version/2013-May-01';
$lodspk['agencies'] = 'http://logd.tw.rpi.edu/source/twc-rpi-edu/dataset/instance-hub-us-federal-agencies/version/2013-May-09';
$lodspk['crops'] = 'http://logd.tw.rpi.edu/source/twc-rpi-edu/dataset/instance-hub-us-crops/version/2013-May-01';
?>