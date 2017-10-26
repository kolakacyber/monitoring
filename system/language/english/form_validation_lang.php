<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

//$lang['form_validation_required']		= 'The {field} field is required.';
//$lang['form_validation_isset']			= 'The {field} field must have a value.';
//$lang['form_validation_valid_email']		= 'The {field} field must contain a valid email address.';
//$lang['form_validation_valid_emails']		= 'The {field} field must contain all valid email addresses.';
//$lang['form_validation_valid_url']		= 'The {field} field must contain a valid URL.';
//$lang['form_validation_valid_ip']		= 'The {field} field must contain a valid IP.';
//$lang['form_validation_min_length']		= 'The {field} field must be at least {param} characters in length.';
//$lang['form_validation_max_length']		= 'The {field} field cannot exceed {param} characters in length.';
//$lang['form_validation_exact_length']		= 'The {field} field must be exactly {param} characters in length.';
//$lang['form_validation_alpha']			= 'The {field} field may only contain alphabetical characters.';
//$lang['form_validation_alpha_numeric']		= 'The {field} field may only contain alpha-numeric characters.';
//$lang['form_validation_alpha_numeric_spaces']	= 'The {field} field may only contain alpha-numeric characters and spaces.';
//$lang['form_validation_alpha_dash']		= 'The {field} field may only contain alpha-numeric characters, underscores, and dashes.';
//$lang['form_validation_numeric']		= 'The {field} field must contain only numbers.';
//$lang['form_validation_is_numeric']		= 'The {field} field must contain only numeric characters.';
//$lang['form_validation_integer']		= 'The {field} field must contain an integer.';
//$lang['form_validation_regex_match']		= 'The {field} field is not in the correct format.';
//$lang['form_validation_matches']		= 'The {field} field does not match the {param} field.';
//$lang['form_validation_differs']		= 'The {field} field must differ from the {param} field.';
//$lang['form_validation_is_unique'] 		= 'The {field} field must contain a unique value.';
//$lang['form_validation_is_natural']		= 'The {field} field must only contain digits.';
//$lang['form_validation_is_natural_no_zero']	= 'The {field} field must only contain digits and must be greater than zero.';
//$lang['form_validation_decimal']		= 'The {field} field must contain a decimal number.';
//$lang['form_validation_less_than']		= 'The {field} field must contain a number less than {param}.';
//$lang['form_validation_less_than_equal_to']	= 'The {field} field must contain a number less than or equal to {param}.';
//$lang['form_validation_greater_than']		= 'The {field} field must contain a number greater than {param}.';
//$lang['form_validation_greater_than_equal_to']	= 'The {field} field must contain a number greater than or equal to {param}.';
//$lang['form_validation_error_message_not_set']	= 'Unable to access an error message corresponding to your field name {field}.';
//$lang['form_validation_in_list']		= 'The {field} field must be one of: {param}.';

// EDIT BAHASA KE INDOENSIA

$lang['form_validation_required']		= '{field} diperlukan.';
$lang['form_validation_isset']			= '{field} harus memiliki nilai.';
$lang['form_validation_valid_email']		= '{field} harus berisi alamat email yang valid.';
$lang['form_validation_valid_emails']		= '{field} harus berisi semua alamat email yang valid.';
$lang['form_validation_valid_url']		= '{field} harus berisi URL yang valid.';
$lang['form_validation_valid_ip']		= '{field} harus berisi IP yang valid.';
$lang['form_validation_min_length']		= '{field} minimal harus memiliki {param} karakter panjangnya.';
$lang['form_validation_max_length']		= '{field} tidak boleh melebihi {param} karakter panjangnya.';
$lang['form_validation_exact_length']		= '{field} harus sama persis {param} karakter panjangnya.';
$lang['form_validation_alpha']			= '{field} hanya boleh berisi karakter alfabetis.';
$lang['form_validation_alpha_numeric']		= '{field} hanya berisi karakter alfanumerik.';
$lang['form_validation_alpha_numeric_spaces']	= '{field} hanya berisi karakter dan spasi alfa-numerik.';
$lang['form_validation_alpha_dash']		= '{field} hanya berisi karakter alfa-numerik, garis bawah, dan tanda hubung.';
$lang['form_validation_numeric']		= '{field} hanya berisi angka.';
$lang['form_validation_is_numeric']		= '{field} hanya berisi karakter numerik.';
$lang['form_validation_integer']		= '{field} harus berisi bilangan bulat.';
$lang['form_validation_regex_match']		= '{field} tidak dalam format yang benar.';
$lang['form_validation_matches']		= '{field} tidak sesuai dengan {param}.';
$lang['form_validation_differs']		= '{field} harus berbeda dari {param}.';
$lang['form_validation_is_unique'] 		= '{field} harus berisi nilai unik.';
$lang['form_validation_is_natural']		= '{field} hanya boleh berisi digit.';
$lang['form_validation_is_natural_no_zero']	= '{field} hanya boleh berisi angka dan harus lebih besar dari nol.';
$lang['form_validation_decimal']		= '{field} harus berisi angka desimal.';
$lang['form_validation_less_than']		= '{field} harus berisi angka kurang dari {param}.';
$lang['form_validation_less_than_equal_to']	= '{field} harus berisi angka kurang dari atau sama dengan {param}.';
$lang['form_validation_greater_than']		= '{field} harus berisi angka lebih besar dari {param}.';
$lang['form_validation_greater_than_equal_to']	= '{field} harus berisi angka yang lebih besar dari atau sama dengan {param}.';
$lang['form_validation_error_message_not_set']	= 'Tidak dapat mengakses pesan kesalahan yang sesuai dengan nama field {field}.';
$lang['form_validation_in_list']		= '{field} harus berupa: {param}.';