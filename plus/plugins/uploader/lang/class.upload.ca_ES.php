<?php
// +------------------------------------------------------------------------+
// | class.upload.ca_ES.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Antoni Canals 2008. All rights reserved.                 |
// | Version       0.25                                                     |
// | Last modified 24/12/2008                                               |
// | Email         antoni.canals@prehistoria.urv.cat                        |
// | Web           http://iphes.urv.cat                                     |
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
 * Class upload catalan translation
 *
 * @version   0.25
 * @author    Antoni Canals (antoni.canals@prehistoria.urv.cat)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Antoni Canals
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Error de transmissi??. Si us plau, torneu-ho a provar.';
    $translation['local_file_missing']          = 'El fitxer local no existeix.';
    $translation['local_file_not_readable']     = 'El fitxer local no es pot llegir.';
    $translation['uploaded_too_big_ini']        = 'Error en pujar el fitxer (la mida del fitxer que es vol pujar depassa la directiva \'upload_max_filesize\' del fitxer php.ini).';
    $translation['uploaded_too_big_html']       = 'Error en pujar el fitxer (la mida del fitxer que es vol pujar depassa la directiva \'MAX_FILE_SIZE\' especificada en el formulari html).';
    $translation['uploaded_partial']            = 'Error en pujar el fitxer (el fitxer nom??s ha sigut parcialment pujat).';
    $translation['uploaded_missing']            = 'Error en pujar el fitxer (no s\'ha pujat cap fitxer).';
    $translation['uploaded_unknown']            = 'Error en pujar el fitxer (codi d\'error desconegut).';
    $translation['try_again']                   = 'Error en pujar el fitxer. Si us plau, torneu-ho a provar.';
    $translation['file_too_big']                = 'Fitxer massa gran.';
    $translation['no_mime']                     = 'No es pot detectar el tipus MIME.';
    $translation['incorrect_file']              = 'Tipus de fitxer (MIME) incorrecte.';
    $translation['image_too_wide']              = 'La imatge ??s massa ample.';
    $translation['image_too_narrow']            = 'La imatge no ??s prou ample';
    $translation['image_too_high']              = 'La imatge ??s massa alta.';
    $translation['image_too_short']             = 'La imatge ??s massa curta.';
    $translation['ratio_too_high']              = 'La ratio de la imatge ??s massa gran (la imatge ??s massa ample).';
    $translation['ratio_too_low']               = 'La ratio de la imatge ??s massa petita (la imatge ??s massa alta).';
    $translation['too_many_pixels']             = 'La imatge t?? massa pixels.';
    $translation['not_enough_pixels']           = 'La imatge no t?? prou pixels.';
    $translation['file_not_uploaded']           = 'Error en pujar el fitxer. No es pot continuar.';
    $translation['already_exists']              = '%s ja existeix. Si us plau, canvieu el nom del fitxer.';
    $translation['temp_file_missing']           = 'El fitxer temporal ??s incorrecte. No es pot continuar.';
    $translation['source_missing']              = 'El fitxer pujat ??s incorrecte. No es pot continuar.';
    $translation['destination_dir']             = 'El directori de dest?? no es pot crear. No es pot continuar.';
    $translation['destination_dir_missing']     = 'El directori de dest?? no existeix. No es pot continuar.';
    $translation['destination_path_not_dir']    = 'El \'path\' de dest?? no ??s un directori. No es pot continuar.';
    $translation['destination_dir_write']       = 'El directori de dest?? no es pot obrir en escriptura. No es pot continuar.';
    $translation['destination_path_write']      = 'El \'path\' de dest?? no t?? drets d\'escriptura. No es pot continuar.';
    $translation['temp_file']                   = 'No es pot crear el fitxer temporal. No es pot continuar.';
    $translation['source_not_readable']         = 'El fitxer d\'origen no es pot llegir. No es pot continuar.';
    $translation['no_create_support']           = 'Creaci?? des del fitxer %s impossible.';
    $translation['create_error']                = 'Error en la creaci?? del fitxer %s imatge des del fitxer origen.';
    $translation['source_invalid']              = 'No puc llegir la imatge d\'origen. Esteu segurs que ??s una imatge?.';
    $translation['gd_missing']                  = 'GD sembla que no est?? present.';
    $translation['watermark_no_create_support'] = 'Creaci?? des del fitxer %s impossible, no es pot llegir la watermark.';
    $translation['watermark_create_error']      = 'Error en la creaci?? de la watermark %s des del fitxer origen.';
    $translation['watermark_invalid']           = 'Format de la imatge desconegut, no es pot llegir la watermark.';
    $translation['file_create']                 = 'No es pot crear el fitxer %s.';
    $translation['no_conversion_type']          = 'El tipus de conversi?? no est?? definit.';
    $translation['copy_failed']                 = 'Error en copiar el fitxer al servidor. La comanda \'copy()\' ha fallat.';
    $translation['reading_failed']              = 'Error en la lectura del fitxer.';

?>