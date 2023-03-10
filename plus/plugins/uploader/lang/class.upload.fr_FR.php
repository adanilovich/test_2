<?php
// +------------------------------------------------------------------------+
// | class.upload.fr_FR.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Colin Verot 2003-2007. All rights reserved.              |
// | Version       0.28                                                     |
// | Last modified 28/10/2009                                               |
// | Email         colin@verot.net                                          |
// | Web           http://www.verot.net                                     |
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
 * Class upload french translation
 *
 * @version   0.28
 * @author    Colin Verot <colin@verot.net>
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Colin Verot
 * @package   cmf
 * @subpackage external
 * Do not use ' but use ??? instead (utf-8 edit bug) or comment it out like \'
*/

    $translation = array();
    $translation['file_error']                  = 'Erreur de transmission. Essayez encore.';
    $translation['local_file_missing']          = 'Erreur de chargement de fichier (le fichier local n???existe pas).';
    $translation['local_file_not_readable']     = 'Erreur de chargement de fichier (le fichier local ne peut ??tre ouvert en lecture).';
    $translation['uploaded_too_big_ini']        = 'Erreur de chargement de fichier (le fichier transmis d??passe la taille autoris??e dans la configuration php.ini - %s).';
    $translation['uploaded_too_big_html']       = 'Erreur de chargement de fichier (le fichier transmis d??passe la taille autoris??e dans le formulaire - %s).';
    $translation['uploaded_partial']            = 'Erreur de chargement de fichier (le fichier n???a ??t?? que partiellement transmis).';
    $translation['uploaded_missing']            = 'Erreur de chargement de fichier (le serveur n???a pas re??u de fichier).';
	$translation['uploaded_no_tmp_dir']         = 'Erreur de chargement de fichier (r??pertoire temporaire manquant).';
	$translation['uploaded_cant_write']         = 'Erreur de chargement de fichier (??criture du fichier sur disque impossible).';
	$translation['uploaded_err_extension']      = 'Erreur de chargement de fichier (extension de fichier non autoris??e en upload).';
    $translation['uploaded_unknown']            = 'Erreur inconnue.';
    $translation['try_again']                   = 'Erreur de transmission. Essayez encore.';
    $translation['file_too_big']                = 'Fichier trop gros (%s).';
    $translation['no_mime']                     = 'Le MIME type ne peut ??tre d??tect??.';
    $translation['incorrect_file']              = 'Type de fichier incorrect.';
    $translation['image_too_wide']              = 'L???image est trop large (<= %s).';
    $translation['image_too_narrow']            = 'L???image n???est pas assez large (>= %s).';
    $translation['image_too_high']              = 'L???image est trop haute (<= %s).';
    $translation['image_too_short']             = 'L???image n???est pas assez haute (>= %s).';
    $translation['ratio_too_high']              = 'Le ratio est trop ??lev?? (image trop large) (<= %s).';
    $translation['ratio_too_low']               = 'Le ratio est trop petit (image trop haute) (>= %s).';
    $translation['too_many_pixels']             = 'L???image a trop de pixels (<= %s).';
    $translation['not_enough_pixels']           = 'L???image n???a pas assez de pixels (>= %s).';
    $translation['file_not_uploaded']           = 'Fichier non transmis. Impossible de continuer.';
    $translation['already_exists']              = '%s existe d??j??. Changez le nom du fichier.';
    $translation['temp_file_missing']           = 'Le fichier source est incorrect. Impossible de continuer.';
    $translation['source_missing']              = 'Le fichier transmis est incorrect. Impossible de continuer.';
    $translation['destination_dir']             = 'Le r??pertoire de destination ne peut ??tre cr??e. Impossible de continuer.';
    $translation['destination_dir_missing']     = 'Le r??pertoire de destination n?????xiste pas. Impossible de continuer.';
    $translation['destination_path_not_dir']    = 'Le chemin de destination n???est pas un r??pertoire. Impossible de continuer.';
    $translation['destination_dir_write']       = 'Le r??pertoire de destination ne peut ??tre ouvert en ??criture. Impossible de continuer.';
    $translation['destination_path_write']      = 'Le chemin de destination ne peut ??tre ouvert en ??criture. Impossible de continuer.';
    $translation['temp_file']                   = 'Le fichier temporaire ne peut ??tre cr????. Impossible de continuer.';
    $translation['source_not_readable']         = 'Le fichier source ne peut ??tre lu. Impossible de continuer.';
    $translation['no_create_support']           = 'Cr??ation depuis un fichier %s impossible.';
    $translation['create_error']                = 'Erreur lors de la cr??ation de l???image %s depuis le fichier source.';
    $translation['source_invalid']              = 'Impossible de lire l???image source. Est-ce une image?';
    $translation['gd_missing']                  = 'GD ne semble pas ??tre pr??sent.';
    $translation['watermark_no_create_support'] = 'Cr??ation depuis un fichier %s impossible, watermark ne peut ??tre lu.';
    $translation['watermark_create_error']      = 'Erreur lors de la cr??ation du watermark %s depuis le fichier source.';
    $translation['watermark_invalid']           = 'Impossible de lire le watermark, format de fichier inconnu.';
    $translation['file_create']                 = 'Cr??ation d???un fichier %s impossible.';
    $translation['no_conversion_type']          = 'Le type de conversion n???est pas d??fini.';
    $translation['copy_failed']                 = 'La copie du fichier sur le serveur a ??chou??.';
    $translation['reading_failed']              = 'Erreur pendant la lecture du fichier.';

?>