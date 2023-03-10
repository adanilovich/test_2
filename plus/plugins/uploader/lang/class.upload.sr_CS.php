<?php
// +------------------------------------------------------------------------+
// | class.upload.sr_CS.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Vedran Vucic 2008. All rights reserved.                        |
// | Version       0.28                                                     |
// | Last modified 19/09/2008                                               |
// | Email         vedran.vucic@gnulinuxcentar.org               |
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
 * Class upload Serbian - Latin translation
 *
 * @version   0.28
 * @author    Vedran Vucic (vedran.vucic@gnulinuxcentar.org)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Vedran Vucic FDL
 * @package   cmf
 * @subpackage external
 * Do not use ' but use ??? instead (utf-8 edit bug) or comment it out like \'
 */

    $translation = array();
    $translation['file_error']                  = 'Gre??ka u datoteci. Poku??ajte ponovo.';
    $translation['local_file_missing']          = 'Lokalna datoteka ne postoji.';
    $translation['local_file_not_readable']     = 'Lokalna datoteka ne mo??e da se ??ita.';
    $translation['uploaded_too_big_ini']        = 'Gre??ka kod nadodavanja datoteke (nadodavania datoteka prelazi %s - upload_max_filesize server direktivu postavljenu u php.ini).';
    $translation['uploaded_too_big_html']       = 'Gre??ka kod nadodavanja datoteke (nadodana datoteka prelazi %s - MAX_FILE_SIZE granicu definisanu u formularu za nadodavanje).';
    $translation['uploaded_partial']            = 'Gre??ka kod nadodavanja datoteke (datoteka je samo delimi??no dodata).';
    $translation['uploaded_missing']            = 'Gre??ka kod nadodavanja datoteke (datoteka nije dodata).';
	$translation['uploaded_no_tmp_dir']         = 'Gre??ka kod ndodavanju datoteke (nedostaje privremena facikla).';
	$translation['uploaded_cant_write']         = 'Gre??ka kod nodavanju datoteke (gre??ka u upisivanju na disk).';
	$translation['uploaded_err_extension']      = 'Gre??ka kod nodavanju datoteke  (dodavanje zaustavljeno zbog nedozvoljenog nastavkau imenu).';    
    $translation['uploaded_unknown']            = 'Gre??ka kod nadodavanja datoteke (nepoznata ??ifra za datoteku).';
    $translation['try_again']                   = 'Gre??ka kod nadodavanja datoteke. Molimo poku??ajte ponovo.';
    $translation['file_too_big']                = 'Datoteka je prevelika (%s).';
    $translation['no_mime']                     = 'MIME tip nije mogao da se detektuje.';
    $translation['incorrect_file']              = 'Neispravan tip datoteke.';
    $translation['image_too_wide']              = 'Slika je pre??iroka (<= %s).';
    $translation['image_too_narrow']            = 'Slika je preuska (>= %s).';
    $translation['image_too_high']              = 'Slika je previsoka (<= %s).';
    $translation['image_too_short']             = 'Slika je prekratka (>= %s).';
    $translation['ratio_too_high']              = 'Proporcije slike prevelike (slika je pre??iroka) (<= %s).';
    $translation['ratio_too_low']               = 'Proporcije slike su premale (slika je preuska) (>= %s).';
    $translation['too_many_pixels']             = 'Slika ima previ??e piksela (<= %s).';
    $translation['not_enough_pixels']           = 'Slika nema dovoljno piksela (>= %s).';
    $translation['file_not_uploaded']           = 'Datoteka nije dodata. Ne mo??e da se izvr??i proces.';
    $translation['already_exists']              = '%s ve?? postoji. Molimo vas da promenite naziv datoteke.';
    $translation['temp_file_missing']           = 'Neispravna privremena izvorna datoteka. Ne mo??e da se izvr??i proces.';
    $translation['source_missing']              = 'Neispravna dodata izvorna datoteka. Ne mo??e da se izvr??i proces.';
    $translation['destination_dir']             = 'Odredi??na fascikla ne mo??e da se kreira. Ne mo??e da se izvr??i proces.';
    $translation['destination_dir_missing']     = 'Odredi??na fascikla ne mo??e da se kreira. Ne mo??e da se izvr??i proces.';
    $translation['destination_path_not_dir']    = 'Odredi??na putanja nije fascikla. Ne mo??e da se izvr??i proces.';
    $translation['destination_dir_write']       = 'Odredi??na fascikla ne mo??e da se u??ini upisivom. Ne mo??e da se izvr??i proces.';
    $translation['destination_path_write']      = 'odredi??na putanja nije upisiva. Ne mo??e da se izvr??i proces.';
    $translation['temp_file']                   = 'Ne mo??e da se kreira privremena datoteka. Ne mo??e da se izvr??i proces.';
    $translation['source_not_readable']         = 'Izvorna datoteka nije ??itljiva. Ne mo??e da se izvr??i proces.';
    $translation['no_create_support']           = 'Ne mo??e da se kreira iz %s podr??ke.';
    $translation['create_error']                = 'Gre??ka u kreiranju %s slike iz izvora.';
    $translation['source_invalid']              = 'Nije ??itljiva izvorna slika. Nije slika?';
    $translation['gd_missing']                  = 'GD podr??ka izgleda da nije prisutna.';
    $translation['watermark_no_create_support'] = 'Ne mo??e da se kreira %s podr??ka, ne mo??e da se pro??ita vodeni ??ig.';
    $translation['watermark_create_error']      = 'Nema %s podr??ke ??itanja, ne mo??e da se kreira vodeni ??ig.';
    $translation['watermark_invalid']           = 'Nepoznat format slike, ne mogu da ??itam vodeni ??ig.';
    $translation['file_create']                 = 'Bez %s kreirane podr??ke.';
    $translation['no_conversion_type']          = 'Nije odre??en tip konverzije.';
    $translation['copy_failed']                 = 'Gre??ka u kopiranju datoteke na serveru. copy() neuspe??no.';
    $translation['reading_failed']              = 'Gre??ka u ??itanju datoteke.';

?>