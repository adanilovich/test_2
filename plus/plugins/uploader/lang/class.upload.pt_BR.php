<?php
// +------------------------------------------------------------------------+
// | class.upload.pt_BR.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Marco Gelli Marchese 2012. All rights reserved.                        |
// | Version       0.28                                                     |
// | Last modified 13/11/2012                                               |
// | Email         mvmcgm@gmail.com			  |
// | Web           http://www.xxxx.xxx                                      |
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
 * Class upload Brazilian Portuguese translation
 *
 * @version   0.28
 * @author    Marco Gelli Marchese (mvmcgm@gmail.com)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Marco Gelli Marchese
 * @package   cmf
 * @subpackage external
 * Do not use ' but use ??? instead (utf-8 edit bug) or comment it out like \'
 */

    $translation = array();
    $translation['file_error']                  = 'Erro de transmiss??o. Favor tentar novamente.';
    $translation['local_file_missing']          = 'O arquivo local n??o existe.';
    $translation['local_file_not_readable']     = 'N??o foi poss??vel ler o arquivo local.';
    $translation['uploaded_too_big_ini']        = 'Erro ao carregar o arquivo (o arquivo carregado excede a diretiva upload_max_filesize em php.ini - %s).';
    $translation['uploaded_too_big_html']       = 'Erro ao carregar o arquivo (o arquivo carregado excede a diretiva MAX_FILE_SIZE especificado no formul??rio html - %s).';
    $translation['uploaded_partial']            = 'Erro ao carregar o arquivo (o arquivo s?? foi carregado parcialmente).';
    $translation['uploaded_missing']            = 'Falha ao carregar (nenhum arquivo foi carregado).';
    $translation['uploaded_no_tmp_dir']         = 'Falha ao carregar ( est?? faltando uma pasta tempor??ria).';
    $translation['uploaded_cant_write']         = 'Falha ao carregar (falhou ao tentar transferir arquivo pro disco).';
    $translation['uploaded_err_extension']      = 'Falha ao carregar (tentativa de carregar uma extens??o n??o permitida).';
    $translation['uploaded_unknown']            = 'Erro ao carregar o arquivo (c??digo de erro desconhecido).';
    $translation['try_again']                   = 'Erro ao carregar o arquivo. Favor tentar novamente.';
    $translation['file_too_big']                = 'Arquivo muito grande (%s).';
    $translation['no_mime']                     = 'tipo MIME n??o detectado.';
    $translation['incorrect_file']              = 'Tipo de arquivo incorreto.';
    $translation['image_too_wide']              = 'A imagem ?? muito larga (<= %s).';
    $translation['image_too_narrow']            = 'A imagem ?? muito estreita (>= %s).';
    $translation['image_too_high']              = 'A imagem ?? muito alta (<= %s).';
    $translation['image_too_short']             = 'A imagem ?? muito curta (>= %s).';
    $translation['ratio_too_high']              = 'A propor????o da imagem ?? muito alta (Imagem muito larga) (<= %s).';
    $translation['ratio_too_low']               = 'A propor????o da imagem ?? muito baixa (Imagem muito alta) (>= %s).';
    $translation['too_many_pixels']             = 'A imagem tem muitos pixels (<= %s).';
    $translation['not_enough_pixels']           = 'A imagem tem poucos pixels (>= %s).';
    $translation['file_not_uploaded']           = 'O arquivo n??o foi baixado. Imposs??vel continuar.';
    $translation['already_exists']              = '%s Ja existe. Favor mudar o nome do arquivo.';
    $translation['temp_file_missing']           = 'O arquivo fonte tempor??rio ?? incorreto. Imposs??vel continuar.';
    $translation['source_missing']              = 'O arquivo fonte baixado ?? incorreto. Imposs??vel continuar.';
    $translation['destination_dir']             = 'O diret??rio de destino n??o pode ser criado. Imposs??vel continuar.';
    $translation['destination_dir_missing']     = 'O diret??rio de destino n??o existe. Imposs??vel continuar.';
    $translation['destination_path_not_dir']    = 'O caminho especificado n??o ?? um diret??rio. Imposs??vel continuar.';
    $translation['destination_dir_write']       = 'Diret??rio de destino, sem permiss??o para editar. Imposs??vel continuar.';
    $translation['destination_path_write']      = 'O caminho de destino n??o tem permiss??o de escrita. Imposs??vel continuar.';
    $translation['temp_file']                   = 'N??o foi poss??vel criar o arquivo tempor??rio. Imposs??vel continuar.';
    $translation['source_not_readable']         = 'O arquivo fonte n??o ?? leg??vel. Imposs??vel continuar.';
    $translation['no_create_support']           = 'Cria????o a partir do arquivo %s imposs??vel...';
    $translation['create_error']                = 'Erro na cria????o da imagem %s da fonte.';
    $translation['source_invalid']              = 'Imposs??vel ler a imagem fonte. ?? uma imagem?';
    $translation['gd_missing']                  = 'O suporte GD n??o parece estar presente.';
    $translation['watermark_no_create_support'] = 'Problemas no suporte %s de cria????o, watermark n??o pode ser lida.';
    $translation['watermark_create_error']      = 'Problemas no suporte %s de leitura, imposs??vel criar a watermark';
    $translation['watermark_invalid']           = 'Imposs??vel ler a watermark, formato de imagem desconhecido.';
    $translation['file_create']                 = 'Cria????o do arquivo de suporte  %s imposs??vel.';
    $translation['no_conversion_type']          = 'Tipo de convers??o n??o foi definida.';
    $translation['copy_failed']                 = 'Erro ao copiar o arquivo no servidor. copy() falhou.';
    $translation['reading_failed']              = 'Erro ao ler o arquivo.';
?>