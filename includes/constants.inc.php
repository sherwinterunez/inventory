<?php
//--HEADSTART
/*
*
* Author: Sherwin R. Terunez
* Contact: sherwinterunez@yahoo.com
*
* Description:
*
* Config file
*
*/

if(!defined('APPLICATION_RUNNING')) {
	header("HTTP/1.0 404 Not Found");
	die('access denied');
}

if(defined('ANNOUNCE')) {
	echo "\n<!-- loaded: ".__FILE__." -->\n";
}

/* INCLUDES_START */

//--HEADEND

//define('DB_USER', 'sherwint_sherwin');
//define('DB_PASS', 'joshua04');
//define('DB_NAME', 'sherwint_eshop');
//define('DB_IP','127.0.0.1');
//define('DB_PORT','5432');
//define('DB_HOST', DB_IP.':'.DB_PORT);

global $_CONSTANTS;

define('TRN_APPROVED',1);
define('TRN_PROCESSING',2);
define('TRN_SENT',4);
define('TRN_COMPLETED',8);
define('TRN_PENDING',16);
define('TRN_CANCELLED',32);
define('TRN_COMPLETED_MANUALLY',64);
define('TRN_HOLD',128);
define('TRN_FAILED',256);
define('TRN_QUEUED',512);
define('TRN_INVALID_SIM_COMMANDS',1024);
define('TRN_CLAIMED',2048);
define('TRN_DRAFT',4096);
define('TRN_WAITING',8192);
define('TRN_POSTED',16384);
define('TRN_RECEIVED',32768);
define('TRN_ERROR',65536);
define('TRN_UPLOADED',131072);
define('TRN_COPIED',262144);
define('TRN_UPLOAD_ERROR',524288);
define('TRN_COPY_ERROR',1048576);
define('TRN_DOWNLOADED',2097152);
define('TRN_DOWNLOAD_ERROR',4194304);
define('TRN_NO_IMAGE',8388608);

define('TRNS_APPROVED','APPROVED');
define('TRNS_PROCESSING','PROCESSING');
define('TRNS_SENT','SENT');
define('TRNS_COMPLETED','COMPLETED');
define('TRNS_PENDING','PENDING');
define('TRNS_CANCELLED','CANCELLED');
define('TRNS_COMPLETED_MANUALLY','COMPLETED MANUALLY');
define('TRNS_HOLD','HOLD');
define('TRNS_FAILED','FAILED');
define('TRNS_QUEUED','QUEUED');
define('TRNS_INVALID_SIM_COMMANDS','INVALID SIM COMMANDS');
define('TRNS_CLAIMED','CLAIMED');
define('TRNS_DRAFT','DRAFT');
define('TRNS_WAITING','WAITING');
define('TRNS_POSTED','POSTED');
define('TRNS_RECEIVED','RECEIVED');
define('TRNS_ERROR','ERROR');
define('TRNS_UPLOADED','UPLOADED');
define('TRNS_COPIED','COPIED');
define('TRNS_UPLOAD_ERROR','UPLOAD ERROR');
define('TRNS_COPY_ERROR','COPY ERROR');
define('TRNS_DOWNLOADED','DOWNLOADED');
define('TRNS_DOWNLOAD_ERROR','DOWNLOAD ERROR');
define('TRNS_NO_IMAGE','NO IMAGE');

define('TYPE_FILECOPY',3);
define('TYPE_FILEUPLOAD',5);
define('TYPE_FILEDOWNLOAD',6);
define('TYPE_PACSDOWNLOAD',7);
define('TYPE_OSFILECOPY',9);
define('TYPE_SECTORFILECOPY',10);
define('TYPE_OSFILEUPLOAD',11);
define('TYPE_SECTORFILEUPLOAD',12);
define('TYPE_OSFILEDOWNLOAD',13);
define('TYPE_SECTORFILEDOWNLOAD',14);
define('TYPE_PACSUPLOAD',15);
define('TYPE_OSDATAIMPORT',17);
define('TYPE_SECTORDATAIMPORT',18);

define('TYPES_FILECOPY','FILE COPY');
define('TYPES_FILEUPLOAD','FILE UPLOAD');
define('TYPES_FILEDOWNLOAD','FILE DOWNLOAD');
define('TYPES_PACSDOWNLOAD','PACS DOWNLOAD');
define('TYPES_PACSUPLOAD','PACS UPLOAD');
define('TYPES_OSFILECOPY','OS FILE COPY');
define('TYPES_SECTORFILECOPY','SECTOR FILE COPY');
define('TYPES_OSFILEUPLOAD','OS FILE UPLOAD');
define('TYPES_SECTORFILEUPLOAD','SECTOR FILE UPLOAD');
define('TYPES_OSFILEDOWNLOAD','OS FILE DOWNLOAD');
define('TYPES_SECTORFILEDOWNLOAD','SECTOR FILE DOWNLOAD');
define('TYPES_OSDATAIMPORT','OS DATA IMPORT');
define('TYPES_SECTORDATAIMPORT','SECTOR DATA IMPORT');

$_CONSTANTS['STATUS'] = array(
		TRN_APPROVED => TRNS_APPROVED,
		TRN_PROCESSING => TRNS_PROCESSING,
		TRN_SENT => TRNS_SENT,
		TRN_COMPLETED => TRNS_COMPLETED,
		TRN_PENDING => TRNS_PENDING,
		TRN_CANCELLED => TRNS_CANCELLED,
		TRN_COMPLETED_MANUALLY => TRNS_COMPLETED_MANUALLY,
		TRN_HOLD => TRNS_HOLD,
		TRN_FAILED => TRNS_FAILED,
		TRN_QUEUED => TRNS_QUEUED,
		TRN_INVALID_SIM_COMMANDS => TRNS_INVALID_SIM_COMMANDS,
		TRN_CLAIMED => TRNS_CLAIMED,
		TRN_DRAFT => TRNS_DRAFT,
		TRN_WAITING => TRNS_WAITING,
    TRN_POSTED => TRNS_POSTED,
		TRN_RECEIVED => TRNS_RECEIVED,
    TRN_ERROR => TRNS_ERROR,
    TRN_UPLOADED => TRNS_UPLOADED,
    TRN_COPIED => TRNS_COPIED,
    TRN_UPLOAD_ERROR => TRNS_UPLOAD_ERROR,
    TRN_COPY_ERROR => TRNS_COPY_ERROR,
    TRN_DOWNLOADED => TRNS_DOWNLOADED,
    TRN_DOWNLOAD_ERROR => TRNS_DOWNLOAD_ERROR,
		TRN_NO_IMAGE => TRNS_NO_IMAGE,
    TYPE_FILECOPY => TYPES_FILECOPY,
    TYPE_FILEUPLOAD => TYPES_FILEUPLOAD,
    TYPE_FILEDOWNLOAD => TYPES_FILEDOWNLOAD,
    TYPE_PACSDOWNLOAD => TYPES_PACSDOWNLOAD,
    TYPE_PACSUPLOAD => TYPES_PACSUPLOAD,
    TYPE_OSFILECOPY => TYPES_OSFILECOPY,
    TYPE_SECTORFILECOPY => TYPES_SECTORFILECOPY,
    TYPE_OSFILEUPLOAD => TYPES_OSFILEUPLOAD,
    TYPE_SECTORFILEUPLOAD => TYPES_SECTORFILEUPLOAD,
    TYPE_OSFILEDOWNLOAD => TYPES_OSFILEDOWNLOAD,
    TYPE_SECTORFILEDOWNLOAD => TYPES_SECTORFILEDOWNLOAD,
    TYPE_OSDATAIMPORT => TYPES_OSDATAIMPORT,
    TYPE_SECTORDATAIMPORT => TYPES_SECTORDATAIMPORT,
	);

/* INCLUDES_END */

# eof includes/config/index.php
