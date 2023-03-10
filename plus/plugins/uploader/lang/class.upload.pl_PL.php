<?php
// +------------------------------------------------------------------------+
// | class.upload.pl_PL.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Bartosz Rychlicki 2007. All rights reserved.             |
// | Version       0.25                                                     |
// | Last modified 25/11/2007                                               |
// | Email         info@br-design.pl                                        |
// | Web           http://www.br-design.pl                                  |
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
 * Class upload polish translation
 *
 * @version   0.25
 * @author    Bartosz Rychlicki (info@br-design.pl)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Bartosz Rychlicki
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'B????d pliku. Spr??buj ponownie.';
    $translation['local_file_missing']          = 'Plik lokalny nie istnieje.';
    $translation['local_file_not_readable']     = 'Plik lokalny nie mo??e zosta?? odczytany.';
    $translation['uploaded_too_big_ini']        = 'B????d przy wgrywaniu pliku (rozmiar pliku przekracza ustawienia dyrektywy upload_max_filesize w php.ini - %s).';
    $translation['uploaded_too_big_html']       = 'B????d przy wgrywaniu pliku (rozmiar pliku przekracza warto???? pola MAX_FILE_SIZE ustawionego w formularzu HTML - %s).';
    $translation['uploaded_partial']            = 'B????d przy wgrywaniu pliku (plik zosta?? jedynie cz????ciowo wgrany na serwer).';
    $translation['uploaded_missing']            = 'B????d przy wgrywaniu pliku (brak pliku do wgrania na serwer).';
    $translation['uploaded_unknown']            = 'B????d przy wgrywaniu pliku (nieznany kod b????du).';
    $translation['try_again']                   = 'B????d przy wgrywaniu pliku. Spr??buj ponownie.';
    $translation['file_too_big']                = 'Plik za du??y (%s).';
    $translation['no_mime']                     = 'Nie mog?? wykry?? typu MIME dla pliku.';
    $translation['incorrect_file']              = 'Nieprawid??owy typ pliku.';
    $translation['image_too_wide']              = 'Obraz za szeroki (<= %s).';
    $translation['image_too_narrow']            = 'Obraz za w??ski (>= %s).';
    $translation['image_too_high']              = 'Obraz za wysoki (<= %s).';
    $translation['image_too_short']             = 'Obraz za kr??tki (>= %s).';
    $translation['ratio_too_high']              = 'Ratio obrazu zbyt du??e (obraz jest za szeroki) (<= %s).';
    $translation['ratio_too_low']               = 'Ratio obrazu zbyt ma??e (obraz jest za wysoki) (>= %s).';
    $translation['too_many_pixels']             = 'Obraz ma za du??o pikseli (<= %s).';
    $translation['not_enough_pixels']           = 'Obraz ma za ma??o pikseli (>= %s).';
    $translation['file_not_uploaded']           = 'Plik nie zosta?? wgrany. Mie mog?? kontynuwa?? procesu.';
    $translation['already_exists']              = '%s ju?? istnieje. Zmie?? nazw?? pliku.';
    $translation['temp_file_missing']           = 'Brak prawid??owego pliku tymczasowego. Nie mog?? kontynuowa??.';
    $translation['source_missing']              = 'Brak pliku ??r??d??owego. Nie mog?? kontynuowa??.';
    $translation['destination_dir']             = 'Nie mo??na utworzy?? katalogu docelowego. Nie mog?? kontynuowa??.';
    $translation['destination_dir_missing']     = 'Katalog docelowy nie istnieje. Nie mog?? kontynuowa??.';
    $translation['destination_path_not_dir']    = '??cie??ka docelowa nie istnieje. Nie mog?? kontynuowa??.';
    $translation['destination_dir_write']       = 'Nie mog?? nada?? praw zapisu dla katalogu docelowego. Nie mog?? kontynuowa??.';
    $translation['destination_path_write']      = 'Nie mog?? zapisa?? w ??cie??ce docelowej (brak praw). Nie mog?? kontynuowa??.';
    $translation['temp_file']                   = 'Nie mog?? utworzy?? pliku tymczasowego (temp). Nie mog?? kontynuowa??.';
    $translation['source_not_readable']         = 'Nie mog?? odczyta?? pliku ??r??d??owego. Nie mog?? kontynuowa??.';
    $translation['no_create_support']           = 'Brak wsparcia dla: %s.';
    $translation['create_error']                = 'B????d przy tworzeniu obrazu typu %s.';
    $translation['source_invalid']              = 'Nie mo??na odczyta?? obrazu ??r??d??owego. Upewnij si?? czy plik jest obrazem.';
    $translation['gd_missing']                  = 'Brak biblioteki GD w systemie.';
    $translation['watermark_no_create_support'] = 'Brak wsparcia dla: %s, nie mog?? odczyta?? znaku wodnego.';
    $translation['watermark_create_error']      = 'Brak wsparcia dla: %s, nie mog?? utworzy?? znaku wodnego.';
    $translation['watermark_invalid']           = 'Nieznany format obrazu, nie mog?? utworzy?? znaku wodnego.';
    $translation['file_create']                 = 'Brak wsparcia dla: %s.';
    $translation['no_conversion_type']          = 'Nie zdefiniowano typu konwersji.';
    $translation['copy_failed']                 = 'B????d przy kopiowaniu pliku na serwerze. Funkcja copy() nie powiod??a si??.';
    $translation['reading_failed']              = 'B????d przy odczytywaniu pliku.';

?>