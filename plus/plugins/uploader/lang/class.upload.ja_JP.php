<?php
// +------------------------------------------------------------------------+
// | class.upload.ja_JP.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Dendeke 2010. All rights reserved.	|
// | Version       0.28					|
// | Last modified 09/04/2010                                               |
// | Email         konchakka211@yahoo.co.jp                       |
// | Web           						|
// +------------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify   |
// | it under the terms of the GNU General Public License version 2 as      |
// | published by the Free Software Foundation.                             |
// |                                                                        |
// | This program is distributed in the hope that it will be useful,        |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of         |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the          |
// | GNU General Public License for more details.                           |
// |                                                                        |
// | You should have received a copy of the GNU General Public License      |
// | along with this program; if not, write to the                          |
// |   Free Software Foundation, Inc., 59 Temple Place, Suite 330,          |
// |   Boston, MA 02111-1307 USA                                            |
// |                                                                        |
// | Please give credit on sites that use class.upload and submit changes   |
// | of the script so other people can use them as well.                    |
// | This script is free to use, don't abuse.                               |
// +------------------------------------------------------------------------+

/**
 * Class upload Japanese translation
 *
 * @version   0.28
 * @author    Dendeke (konchakka211@yahoo.co.jp)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Dendeke
 * @package   cmf
 * @subpackage external
 * Do not use ' but use ??? instead (utf-8 edit bug) or comment it out like \'
 */

    $translation = array();
    $translation['file_error']                  = '????????????????????????????????????????????????????????????';
    $translation['local_file_missing']          = '????????????????????????????????????????????????';
    $translation['local_file_not_readable']     = '?????????????????????????????????????????????';
    $translation['uploaded_too_big_ini']        = '?????????????????????????????????????????????????????????????????????????????????%s????????????????????????php.ini??????upload_max_filesize??????????????????????????????)???';
    $translation['uploaded_too_big_html']       = '?????????????????????????????????????????????????????????????????????????????????%s????????????????????????????????????????????????????????????????????????MAX_FILE_SIZE??????????????????????????????)???';
    $translation['uploaded_partial']            = '????????????????????????????????????????????????????????????????????????????????????????????????????????????';
    $translation['uploaded_missing']            = '?????????????????????????????????????????????????????????????????????????????????????????????????????????';
    $translation['uploaded_no_tmp_dir']         = '????????????????????????????????????????????????????????????????????????????????????';
    $translation['uploaded_cant_write']         = '???????????????????????????????????????????????????????????????????????????????????????????????????';
    $translation['uploaded_err_extension']      = '???????????????????????????????????????????????????????????????????????????????????????????????????';
    $translation['uploaded_unknown']            = '???????????????????????????????????????????????????????????????????????????';
    $translation['try_again']                   = '??????????????????????????????????????????????????????????????????????????????';
    $translation['file_too_big']                = '????????????????????????????????????%s??????';
    $translation['no_mime']                     = 'MIME????????????????????????????????????';
    $translation['incorrect_file']              = '???????????????????????????????????????';
    $translation['image_too_wide']              = '?????????????????????????????????<= %s??????';
    $translation['image_too_narrow']            = '?????????????????????????????????>= %s??????';
    $translation['image_too_high']              = '????????????????????????????????????<= %s??????';
    $translation['image_too_short']             = '????????????????????????????????????>= %s??????';
    $translation['ratio_too_high']              = '?????????????????????????????????????????????????????????<= %s??????';
    $translation['ratio_too_low']               = '?????????????????????????????????????????????????????????>= %s??????';
    $translation['too_many_pixels']             = '?????????????????????????????????????????????<= %s??????';
    $translation['not_enough_pixels']           = '????????????????????????????????????????????????>= %s??????';
    $translation['file_not_uploaded']           = '????????????????????????????????????????????????????????????????????????????????????';
    $translation['already_exists']              = '%s????????????????????????????????????????????????????????????????????????';
    $translation['temp_file_missing']           = '????????????????????????????????????????????????????????????????????????????????????????????????';
    $translation['source_missing']              = '?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????';
    $translation['destination_dir']             = '????????????????????????????????????????????????????????????????????????????????????';
    $translation['destination_dir_missing']     = '?????????????????????????????????????????????????????????????????????????????????';
    $translation['destination_path_not_dir']    = '????????????????????????????????????????????????????????????????????????????????????????????????';
    $translation['destination_dir_write']       = '???????????????????????????????????????????????????????????????????????????????????????????????????';
    $translation['destination_path_write']      = '?????????????????????????????????????????????????????????????????????????????????';
    $translation['temp_file']                   = '??????????????????????????????????????????????????????????????????????????????';
    $translation['source_not_readable']         = '?????????????????????????????????????????????????????????????????????????????????';
    $translation['no_create_support']           = ' %s????????????????????????????????????????????????';
    $translation['create_error']                = '??????????????????%s???????????????????????????????????????????????????';
    $translation['source_invalid']              = '???????????????????????????????????????????????????????????????';
    $translation['gd_missing']                  = 'GD?????????????????????????????????????????????';
    $translation['watermark_no_create_support'] = ' %s??????????????????????????????????????????????????????????????????????????????';
    $translation['watermark_create_error']      = '%s??????????????????????????????????????????????????????????????????????????????????????????';
    $translation['watermark_invalid']           = '????????????????????????????????????????????????????????????????????????';
    $translation['file_create']                 = '%s????????????????????????????????????????????????';
    $translation['no_conversion_type']          = '????????????????????????????????????';
    $translation['copy_failed']                 = '???????????????????????????????????????????????????????????????????????????copy()????????????????????????';
    $translation['reading_failed']              = '??????????????????????????????????????????????????????????????????';   

?>