// Analyse the Existing config.inc.php file and add the below lines in it. To Access the multiple MySQL host from Single PHPMyadmin Files.
$i = 0;

/**
 * First server
 */
/* Authentication type */
/* Server parameters */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['verbose'] = 'local-mysql';
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;
$i++;

$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['verbose'] = 'docker-mysql';
$cfg['Servers'][$i]['host'] = '172.17.0.3';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;
$i++;

/* Server parameters */

