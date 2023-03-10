<?php
// +------------------------------------------------------------------------+
// | class.upload.ro_RO.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Cristian Datculescu 2007 & Ciprian Murariu 2008. All rights reserved.           |
// | Version       0.32                                                     |
// | Email         cristian.datculescu@gmail.com                            |
// | Last modified 25/09/2009                                               |
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
 * Class upload romanian translation
 *
 * @version   0.32
 * @author Cristian Datculescu (cristian.datculescu@gmail.com) - v.0.25
 * @updater Ciprian Murariu (ciprianmp@yahoo.com) - added utf-8 & diacritics support
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Cristian Datculescu & Ciprian Murariu
 * @package cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Eroare de fi??ier. Re??ncerca??i!';
    $translation['local_file_missing']          = 'Fi??ierul local nu exist??.';
    $translation['local_file_not_readable']     = 'Fi??ierul local nu poate fi citit.';
    $translation['uploaded_too_big_ini']        = 'Eroare upload fi??ier (m??rimea fi??ierului ??nc??rcat dep????e??te %s - valoarea directivei upload_max_filesize din php.ini).';
    $translation['uploaded_too_big_html']       = 'Eroare upload fi??ier (m??rimea fi??ierului ??nc??rcat dep????e??te %s - valoarea limitei MAX_FILE_SIZE stabilit?? pentru upload).';
    $translation['uploaded_partial']            = 'Eroare upload fi??ier (fi??ierul ??nc??rcat a fost uploadat doar par??ial).';
    $translation['uploaded_missing']            = 'Eroare upload fi??ier (niciun fi??ier nu a fost specificat).';
    $translation['uploaded_no_tmp_dir']         = 'Eroare upload fi??ier (directorul temporar nu exist??).';
    $translation['uploaded_cant_write']         = 'Eroare upload fi??ier (scrierea fi??ierului pe disc a e??uat).';
    $translation['uploaded_err_extension']      = 'Eroare upload fi??ier (extensia nu este permis?? pentru upload).';
    $translation['uploaded_unknown']            = 'Eroare upload fi??ier (cod eroare necunoscut).';
    $translation['try_again']                   = 'Eroare upload fi??ier. Re??ncerca??i.';
    $translation['file_too_big']                = 'M??rimea fi??ierului este prea mare (%s).';
    $translation['no_mime']                     = 'Tipul MIME nu poate fi detectat.';
    $translation['incorrect_file']              = 'Tipul fi??ierului este incorect.';
    $translation['image_too_wide']              = 'Imagine prea lat?? (<= %s).';
    $translation['image_too_narrow']            = 'Imagine prea ??ngust?? (>= %s).';
    $translation['image_too_high']              = 'Imagine prea ??nalt?? (<= %s).';
    $translation['image_too_short']             = 'Imagine prea scurt?? (>= %s).';
    $translation['ratio_too_high']              = 'Ra??ia imaginii prea ridicat?? (imagine prea lat??) (<= %s).';
    $translation['ratio_too_low']               = 'Ra??ia imaginii prea joas?? (imagine prea ??nalt??) (>= %s).';
    $translation['too_many_pixels']             = 'Imaginea are prea mul??i pixeli (<= %s).';
    $translation['not_enough_pixels']           = 'Imaginea nu are destui pixeli (>= %s).';
    $translation['file_not_uploaded']           = 'Fi??ier neuploadat. Nu se poate executa un proces.';
    $translation['already_exists']              = '%s exist?? deja. Schimba??i numele fi??ierului.';
    $translation['temp_file_missing']           = 'Fi??ierul surs?? temporar incorect. Opera??iune e??uat??.';
    $translation['source_missing']              = 'Fi??ierul surs?? uploadat incorect. Opera??iune e??uat??.';
    $translation['destination_dir']             = 'Directorul destina??ie nu poate fi creat. Opera??iune e??uat??.';
    $translation['destination_dir_missing']     = 'Directorul destina??ie nu exist??. Opera??iune e??uat??.';
    $translation['destination_path_not_dir']    = 'Calea pentru destina??ie nu este un director. Opera??iune e??uat??.';
    $translation['destination_dir_write']       = 'Nu se poate scrie ??n directorul destina??ie. Opera??iune e??uat??.';
    $translation['destination_path_write']      = 'Calea pentru destina??ie nu permite scrierea. Opera??iune e??uat??.';
    $translation['temp_file']                   = 'Nu poate fi creat fi??ierul temporar. Opera??iune e??uat??.';
    $translation['source_not_readable']         = 'Fi??ierul surs?? nu este poate fi citit. Opera??iune e??uat??.';
    $translation['no_create_support']           = 'Serverul nu suport?? crearea din %s.';
    $translation['create_error']                = 'Eroare la crearea imaginii %s din surs??.';
    $translation['source_invalid']              = 'Nu se poate citi sursa imaginii. Nu este o imagine?';
    $translation['gd_missing']                  = 'GD nu este prezent sau nu este activat.';
    $translation['watermark_no_create_support'] = 'Serverul nu suport?? crearea %s, nu se poate citi filigran-ul.';
    $translation['watermark_create_error']      = 'Serverul nu suport?? citirea din %s, nu se poate crea filigran-ul.';
    $translation['watermark_invalid']           = 'Format de imagine necunoscut, nu se poate crea filigran-ul.';
    $translation['file_create']                 = 'Serverul nu suport?? crearea %s.';
    $translation['no_conversion_type']          = 'Nu este definit niciun tip de conversie.';
    $translation['copy_failed']                 = 'Eroare la copierea fi??ierului pe server. copy() nereu??it.';
    $translation['reading_failed']              = 'Eroare la citirea fi??ierului.';

?>