<?php
// +------------------------------------------------------------------------+
// | class.upload.et_EE.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) -lohe- 2008. All rights reserved.                        |
// | Version       0.25                                                     |
// | Last modified 01/13/2008                                               |
// | Email         drache@hot.ee                                            |
// | Web           http://lohe.pri.ee/                                      |
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
 * Class upload Estonian translation
 *
 * @version   0.25
 * @author    -lohe- (drache@hot.ee)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright -lohe-
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Viga. Palun proovi uuesti.';
    $translation['local_file_missing']          = 'Faili ei leitud.';
    $translation['local_file_not_readable']     = 'Laaditav fail on vigane.';
    $translation['uploaded_too_big_ini']        = '??leslaadimise viga (laetav fail ??letab ??upload_max_filesize?? maksimaalse suuruse ??php.ini?? failis - %s).';
    $translation['uploaded_too_big_html']       = '??leslaadimise viga (laetav fail ??letab m????ratud ??MAX_FILE_SIZE?? maksimaalse suuruse HTML formis - %s).';
    $translation['uploaded_partial']            = '??leslaadimise viga (laetav fail oli ainult osaliselt laetud).';
    $translation['uploaded_missing']            = '??leslaadimise viga (faili ei laetud ??les).';
    $translation['uploaded_unknown']            = '??leslaadimise viga (tundmatu vea kood).';
    $translation['try_again']                   = '??leslaadimise viga. Palun proovi uuesti.';
    $translation['file_too_big']                = 'Fail on liiga suur (%s).';
    $translation['no_mime']                     = 'MIME t????pi ei tunne ??ra.';
    $translation['incorrect_file']              = 'Vale failit????p.';
    $translation['image_too_wide']              = 'Pilt liiga lai (<= %s).';
    $translation['image_too_narrow']            = 'Pilt liiga kitsas (>= %s).';
    $translation['image_too_high']              = 'Pilt liiga k??rge (<= %s).';
    $translation['image_too_short']             = 'Pilt liiga l??hike (>= %s).';
    $translation['ratio_too_high']              = 'Pildi koefitsent liiga k??rge (pilt liiga lai) (<= %s).';
    $translation['ratio_too_low']               = 'Pildi koefitsent liiga madal (pilt liiga k??rge) (>= %s).';
    $translation['too_many_pixels']             = 'Pildil on liiga palju piksleid (<= %s).';
    $translation['not_enough_pixels']           = 'Pildil pole poosavalt piksleid (>= %s).';
    $translation['file_not_uploaded']           = 'Faili ei laetud. Ei suuda protsessi j??tkata.';
    $translation['already_exists']              = '??%s?? on juba olemas. Palun muuda faili nime.';
    $translation['temp_file_missing']           = 'Temp fail on vigane. Ei saa protsessi j??tkata.';
    $translation['source_missing']              = 'Laetav fail on vigane. Ei saa protsessi j??tkata.';
    $translation['destination_dir']             = 'Sihtkataloogi ei saa luua. Ei saa protsessi j??tkata.';
    $translation['destination_dir_missing']     = 'Sihtkataloogi ei eksisteeri. Ei saa protsessi j??tkata.';
    $translation['destination_path_not_dir']    = 'Sihtkataloog ei ole kataloog. Ei saa protsessi j??tkata.';
    $translation['destination_dir_write']       = 'Sihtkataloogi ei saa teha kirjutatavaks. Ei saa protsessi j??tkata.';
    $translation['destination_path_write']      = 'Sihtkataloog ei ole kirjutamise ??igusega. Ei saa protsessi j??tkata.';
    $translation['temp_file']                   = 'Ei saa luua ajutist faili. Ei saa protsessi j??tkata.';
    $translation['source_not_readable']         = 'Allikas ei ole loetav. Ei saa protsessi j??tkata.';
    $translation['no_create_support']           = 'Ei looda %s toetust.';
    $translation['create_error']                = 'Viga %s pildi loomisel allikast.';
    $translation['source_invalid']              = 'Ei saa lugeda pildi allikat. Ei ole pilt?';
    $translation['gd_missing']                  = 'GD-d ei leitud.';
    $translation['watermark_no_create_support'] = 'Ei looda %s toetust, ei saa lugeda vesim??rki.';
    $translation['watermark_create_error']      = 'Puudub %s lugemistoetus, ei saa lugeda vesim??rki.';
    $translation['watermark_invalid']           = 'Tundmatu pildi formaat, ei saa lugeda vesim??rki.';
    $translation['file_create']                 = 'Puudub %s loomise toetus.';
    $translation['no_conversion_type']          = 'Konvertimise t????p puudub.';
    $translation['copy_failed']                 = 'Viga faili kopeerimisel serverisse. copy() katkestati.';
    $translation['reading_failed']              = 'Viga faili lugemisel.';

?>