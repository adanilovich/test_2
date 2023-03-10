<?php
// +------------------------------------------------------------------------+
// | class.upload.de_DE.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Felix Kuschnick 2007. All rights reserved.               |
// | Version       0.28                                                    |
// | Last modified 27/11/2007                                               |
// | Email         felix@paranoiaparadise.com                               |
// | Web           http://www.paranoiaparadise.com                          |
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
 * Class upload german translation
 *
 * @version   0.28
 * @author    Felix Kuschnick (felix@paranoiaparadise.com)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Felix Kuschnick
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Dateifehler. Bitte versuchen Sie es erneut.';
    $translation['local_file_missing']          = 'Lokale Datei existiert nicht.';
    $translation['local_file_not_readable']     = 'Lokale Datei ist nicht lesbar.';
    $translation['uploaded_too_big_ini']        = 'Datei Ladefehler (die hochgeladene Datei ??berschreitet die upload_max_filesize Anweisung der php.ini - %s).';
    $translation['uploaded_too_big_html']       = 'Datei Ladefehler (die hochgeladene Datei ??berschreitet die MAX_FILE_SIZE Anweisung, die im html Formular definiert wurde - %s).';
    $translation['uploaded_partial']            = 'Datei Ladefehler (die hochgeladene Datei wurde nur teilweise hochgeladen).';
    $translation['uploaded_missing']            = 'Datei Ladefehler (es wurde keine Datei hochgeladen).';
	$translation['uploaded_no_tmp_dir']         = 'Datei Ladefehler (Ordner f??r tempor??re Dateien fehlt).';
	$translation['uploaded_cant_write']         = 'Datei Ladefehler (Schreib-oder Zugriffsrechtsfehler).';
	$translation['uploaded_err_extension']      = 'Datei Ladefehler (Eine falsche Dateinamen-Erweiterung hat das Hochladen verhindert).';    
    $translation['uploaded_unknown']            = 'Datei Ladefehler (unbekannter Fehler Code).';
    $translation['try_again']                   = 'Datei Ladefehler. Bitte versuchen Sie es erneut.';
    $translation['file_too_big']                = 'Die Datei ist zu gro?? (%s).';
    $translation['no_mime']                     = 'MIME type kann nicht erkannt werden.';
    $translation['incorrect_file']              = 'Falscher Dateityp.';
    $translation['image_too_wide']              = 'Bild zu breit (<= %s).';
    $translation['image_too_narrow']            = 'Bild zu schmal (>= %s).';
    $translation['image_too_high']              = 'Bild zu hoch (<= %s).';
    $translation['image_too_short']             = 'Bild zu kurz (>= %s).';
    $translation['ratio_too_high']              = 'Bildverh??ltnis zu hoch (Bild zu Gross) (<= %s).';
    $translation['ratio_too_low']               = 'Bildverh??ltnis zu gering (Bild zu klein) (>= %s).';
    $translation['too_many_pixels']             = 'Das Bild hat zu viele Pixel (<= %s).';
    $translation['not_enough_pixels']           = 'Das Bild hat nicht genug Pixel (>= %s).';
    $translation['file_not_uploaded']           = 'Datei nicht hochgeladen. Prozess nicht ausf??hrbar.';
    $translation['already_exists']              = '%s existiert bereits. Bitte ??ndern Sie den Dateinamen.';
    $translation['temp_file_missing']           = 'Temp datei existiert nicht. Prozess nicht ausf??hrbar.';
    $translation['source_missing']              = 'Upload datei existiert nicht. Prozess nicht ausf??hrbar.';
    $translation['destination_dir']             = 'Zielverzeichnis kann nicht erstellt werden. Prozess nicht ausf??hrbar.';
    $translation['destination_dir_missing']     = 'Zielverzeichnis existiert nicht. Prozess nicht ausf??hrbar.';
    $translation['destination_path_not_dir']    = 'Zielpfad ist kein Verzeichnis. Prozess nicht ausf??hrbar.';
    $translation['destination_dir_write']       = 'Zielverzeichnis ist nicht beschreibbar. Prozess nicht ausf??hrbar.';
    $translation['destination_path_write']      = 'Zielpfad ist nicht beschreibbar. Prozess nicht ausf??hrbar.';
    $translation['temp_file']                   = 'Kann keine tempor??re Datei erstellen. Prozess nicht ausf??hrbar.';
    $translation['source_not_readable']         = 'Originaldatei ist nicht lesbar. Prozess nicht ausf??hrbar.';
    $translation['no_create_support']           = 'Erstellung von %s wird nicht unterst??tzt.';
    $translation['create_error']                = 'Fehler beim Erstellen des %s Bildes von Originaldatei.';
    $translation['source_invalid']              = 'Originaldatei nicht lesbar. Kein Bild?';
    $translation['gd_missing']                  = 'GD scheint nicht pr??sent zu sein.';
    $translation['watermark_no_create_support'] = 'Erstellung von %s nicht m??glich, da Wasserzeichen nicht lesbar.';
    $translation['watermark_create_error']      = 'Erstellung von %s nicht m??glich, da Wasserzeichen nicht erstellbar.';
    $translation['watermark_invalid']           = 'Unbekanntes Bildformat, Wasserzeichen nicht lesbar.';
    $translation['file_create']                 = 'Erstellung %s wird nicht unterst??tzt.';
    $translation['no_conversion_type']          = 'Kein Konvertierungstyp definiert.';
    $translation['copy_failed']                 = 'Fehler beim Kopieren der Datei auf den Server. Kopiervorgang fehlerhaft.';
    $translation['reading_failed']              = 'Fehler beim Lesen der Datei.';

?>