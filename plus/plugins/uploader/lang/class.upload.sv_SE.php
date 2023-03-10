<?php
// +------------------------------------------------------------------------+
// | class.upload.sv_SE.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Mikael Andersson 2007. All rights reserved.              |
// | Version       0.28                                                     |
// | Last modified 24/11/2007                                               |
// | Email         mikael@familjenmartinsson.com                            |
// | Web           http://www.familjenmartinsson.com                        |
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
 * Class upload swedish translation
 * Textkorrigerad av Fimpen H??gstr??m, Fimpen@Relative-Work.se
 *
 * @version   0.28
 * @author    Mikael Andersson (mikael@familjenmartinsson.com)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Mikael Andersson
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Fil fel. F??rs??k igen.';
    $translation['local_file_missing']          = 'Lokal fil hittades inte.';
    $translation['local_file_not_readable']     = 'Gick inte att l??sa skriva till lokal fil.';
    $translation['uploaded_too_big_ini']        = 'Uppladdningsfel (Den uppladdade filen ??verskrider upload_max_filesize direktivet i php.ini - %s).';
    $translation['uploaded_too_big_html']       = 'Uppladdningsfel (Den uppladdade filen ??verskrider MAX_FILE_SIZE direktivet specificerat i html formul??ret - %s).';
    $translation['uploaded_partial']            = 'Uppladdningsfel (Filen blev bara delvis uppladdad).';
    $translation['uploaded_missing']            = 'Uppladdningsfel (Ingen fil blev uppladdad).';
	$translation['uploaded_no_tmp_dir']         = 'Uppladdningsfel (Tempmappen saknas).';
	$translation['uploaded_cant_write']         = 'Uppladdningsfel (Misslyckades att skriva fil till disk).';
	$translation['uploaded_err_extension']      = 'Uppladdningsfel (Filuppladdning stoppad p?? grund av ??ndelse).';    
    $translation['uploaded_unknown']            = 'Uppladdningsfel (Ok??nt fel).';
    $translation['try_again']                   = 'Uppladdningsfel. F??rs??k igen.';
    $translation['file_too_big']                = 'Filen ??r f??r stor (%s).';
    $translation['no_mime']                     = 'MIME typen kan inte hittas.';
    $translation['incorrect_file']              = 'Inkorrekt fil typ.';
    $translation['image_too_wide']              = 'Bilden ??r f??r bred (<= %s).';
    $translation['image_too_narrow']            = 'Bilden ??r f??r smal (>= %s).';
    $translation['image_too_high']              = 'Bilden ??r f??r h??g (<= %s).';
    $translation['image_too_short']             = 'Bilden ??r f??r l??g liten (>= %s).';
    $translation['ratio_too_high']              = 'Bild f??rh??llandet ??r f??r stort (Bilden ??r f??r bred) (<= %s).';
    $translation['ratio_too_low']               = 'Bild f??rh??llandet ??r f??r litet (Bilden ??r f??r h??g) (>= %s).';
    $translation['too_many_pixels']             = 'Bilden har f??r m??nga pixlar (<= %s).';
    $translation['not_enough_pixels']           = 'Bilden har inte tillr??ckligt med pixlar (>= %s).';
    $translation['file_not_uploaded']           = 'Bilden ??r inte uppladdad kan inte forts??tta f??rloppet.';
    $translation['already_exists']              = '%s finns redan. ??ndra filnamnet.';
    $translation['temp_file_missing']           = 'Fel tempor??r k??llfil. Kan inte forts??tta f??rloppet.';
    $translation['source_missing']              = 'K??llfil saknas. Fel uppladdad tempor??r k??llfil. Kan inte forts??tta f??rloppet.';
    $translation['destination_dir']             = 'M??l katalogen kan inte skapas. Kan inte forts??tta f??rloppet.';
    $translation['destination_dir_missing']     = 'M??l katalogen finns inte. Kan inte forts??tta f??rloppet.';
    $translation['destination_dir_write']       = 'M??l katalogen kan inte g??ras skrivbar. Kan inte forts??tta f??rloppet.';
    $translation['destination_path_write']      = 'M??l katalogen ??r inte skrivbar. Kan inte forts??tta f??rloppet.';
    $translation['temp_file']                   = 'Kan inte skapa den tempor??ra filen. Kan inte forts??tta f??rloppet.';
    $translation['source_not_readable']         = 'K??ll filen ??r inte skrivbar. Kan inte forts??tta f??rloppet.';
    $translation['no_create_support']           = 'Inget st??d f??r skapandet av %s.';
    $translation['create_error']                = 'Fel vid skapandet av %s bilden.';
    $translation['source_invalid']              = 'Kan inte l??sa bilden. ??r det en bild?';
    $translation['gd_missing']                  = 'GD Biblioteket verkar inte vara installerat p?? servern.';
    $translation['watermark_no_create_support'] = 'Inget st??d f??r skapandet av %s, Kan inte l??sa vattenst??mpeln.';
    $translation['watermark_create_error']      = 'Inget st??d f??r l??sandet av %s, kan inte skapa vattenst??mplen.';
    $translation['watermark_invalid']           = 'Ok??nt bild format, kan inte l??sa vattenst??mplen.';
    $translation['file_create']                 = 'Inget st??d f??r skapandet av %s.';
    $translation['no_conversion_type']          = 'Ingen f??rvandlings typ best??md.';
    $translation['copy_failed']                 = 'Fel vid kopieringen utav filen. copy() misslyckades.';
    $translation['reading_failed']              = 'Fel vid inl??sningen utav filen.';

?>