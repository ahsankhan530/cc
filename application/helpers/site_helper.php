<?php
if(!function_exists('parse_text_smileys'))
{
	function parse_text_smileys($text)
	{
		$chars = array("*-*", ":D", ":)",":(", "=(", ":p",":o", ":yeah:", ":@",":#", "8-)", ":s",":$", ":'(", "+o(","(L)", "(6)", "(A)","B-)", ":O", "--'",":haha:", ":ghost:", ":-$","oO", ":x", ";)", ":/");
		$icons = array("<img src='/images/smileys/1.png' alt='' />", "<img src='/images/smileys/2.png' alt='' />", "<img src='/images/smileys/3.png' alt='' />", "<img src='/images/smileys/4.png' alt='' />", "<img src='/images/smileys/5.png' alt='' />", "<img src='/images/smileys/6.png' alt='' />", "<img src='/images/smileys/7.png' alt='' />", "<img src='/images/smileys/8.png' alt='' />", "<img src='/images/smileys/9.png' alt='' />", "<img src='/images/smileys/10.png' alt='' />", "<img src='/images/smileys/11.png' alt='' />", "<img src='/images/smileys/12.png' alt='' />", "<img src='/images/smileys/13.png' alt='' />", "<img src='/images/smileys/14.png' alt='' />", "<img src='/images/smileys/15.png' alt='' />", "<img src='/images/smileys/16.png' alt='' />", "<img src='/images/smileys/17.png' alt='' />", "<img src='/images/smileys/18.png' alt='' />", "<img src='/images/smileys/19.png' alt='' />", "<img src='/images/smileys/20.png' alt='' />", "<img src='/images/smileys/21.png' alt='' />", "<img src='/images/smileys/22.png' alt='' />", "<img src='/images/smileys/23.png' alt='' />", "<img src='/images/smileys/24.png' alt='' />", "<img src='/images/smileys/25.png' alt='' />", "<img src='/images/smileys/26.png' alt='' />", "<img src='/images/smileys/27.png' alt='' />", "<img src='/images/smileys/28.png' alt='' />");
				
		$new_str = str_replace($chars,$icons,$text);
		
		return $new_str;
	}
}

if(!function_exists('genUsername'))
{
 	function genUsername( $length = 8 )
	{
		$conso=array("b","c","d","f","g","h","j","k","l",
	    "m","n","p","r","s","t","v","w","x","y","z");
	    $vocal=array("a","e","i","o","u");
	    $password="";
	    srand ((double)microtime()*1000000);
	    $max = $length/2;
	    for($i=1; $i<=$max; $i++)
	    {
		    $password.=$conso[rand(0,19)];
		    $password.=$vocal[rand(0,4)];
	    }
	    return $password;
		
	}
}

if(!function_exists('get_country_name_by_code'))
{
	function get_country_name_by_code($name)
	{
		$countrycodes = array (
		  'AF' => 'Afghanistan',
		  'AX' => 'Åland Islands',
		  'AL' => 'Albania',
		  'DZ' => 'Algeria',
		  'AS' => 'American Samoa',
		  'AD' => 'Andorra',
		  'AO' => 'Angola',
		  'AI' => 'Anguilla',
		  'AQ' => 'Antarctica',
		  'AG' => 'Antigua and Barbuda',
		  'AR' => 'Argentina',
		  'AU' => 'Australia',
		  'AT' => 'Austria',
		  'AZ' => 'Azerbaijan',
		  'BS' => 'Bahamas',
		  'BH' => 'Bahrain',
		  'BD' => 'Bangladesh',
		  'BB' => 'Barbados',
		  'BY' => 'Belarus',
		  'BE' => 'Belgium',
		  'BZ' => 'Belize',
		  'BJ' => 'Benin',
		  'BM' => 'Bermuda',
		  'BT' => 'Bhutan',
		  'BO' => 'Bolivia',
		  'BA' => 'Bosnia and Herzegovina',
		  'BW' => 'Botswana',
		  'BV' => 'Bouvet Island',
		  'BR' => 'Brazil',
		  'IO' => 'British Indian Ocean Territory',
		  'BN' => 'Brunei Darussalam',
		  'BG' => 'Bulgaria',
		  'BF' => 'Burkina Faso',
		  'BI' => 'Burundi',
		  'KH' => 'Cambodia',
		  'CM' => 'Cameroon',
		  'CA' => 'Canada',
		  'CV' => 'Cape Verde',
		  'KY' => 'Cayman Islands',
		  'CF' => 'Central African Republic',
		  'TD' => 'Chad',
		  'CL' => 'Chile',
		  'CN' => 'China',
		  'CX' => 'Christmas Island',
		  'CC' => 'Cocos (Keeling) Islands',
		  'CO' => 'Colombia',
		  'KM' => 'Comoros',
		  'CG' => 'Congo',
		  'CD' => 'Zaire',
		  'CK' => 'Cook Islands',
		  'CR' => 'Costa Rica',
		  'CI' => 'Côte D\'Ivoire',
		  'HR' => 'Croatia',
		  'CU' => 'Cuba',
		  'CY' => 'Cyprus',
		  'CZ' => 'Czech Republic',
		  'DK' => 'Denmark',
		  'DJ' => 'Djibouti',
		  'DM' => 'Dominica',
		  'DO' => 'Dominican Republic',
		  'EC' => 'Ecuador',
		  'EG' => 'Egypt',
		  'SV' => 'El Salvador',
		  'GQ' => 'Equatorial Guinea',
		  'ER' => 'Eritrea',
		  'EE' => 'Estonia',
		  'ET' => 'Ethiopia',
		  'FK' => 'Falkland Islands (Malvinas)',
		  'FO' => 'Faroe Islands',
		  'FJ' => 'Fiji',
		  'FI' => 'Finland',
		  'FR' => 'France',
		  'GF' => 'French Guiana',
		  'PF' => 'French Polynesia',
		  'TF' => 'French Southern Territories',
		  'GA' => 'Gabon',
		  'GM' => 'Gambia',
		  'GE' => 'Georgia',
		  'DE' => 'Germany',
		  'GH' => 'Ghana',
		  'GI' => 'Gibraltar',
		  'GR' => 'Greece',
		  'GL' => 'Greenland',
		  'GD' => 'Grenada',
		  'GP' => 'Guadeloupe',
		  'GU' => 'Guam',
		  'GT' => 'Guatemala',
		  'GG' => 'Guernsey',
		  'GN' => 'Guinea',
		  'GW' => 'Guinea-Bissau',
		  'GY' => 'Guyana',
		  'HT' => 'Haiti',
		  'HM' => 'Heard Island and Mcdonald Islands',
		  'VA' => 'Vatican City State',
		  'HN' => 'Honduras',
		  'HK' => 'Hong Kong',
		  'HU' => 'Hungary',
		  'IS' => 'Iceland',
		  'IN' => 'India',
		  'ID' => 'Indonesia',
		  'IR' => 'Iran, Islamic Republic of',
		  'IQ' => 'Iraq',
		  'IE' => 'Ireland',
		  'IM' => 'Isle of Man',
		  'IL' => 'Israel',
		  'IT' => 'Italy',
		  'JM' => 'Jamaica',
		  'JP' => 'Japan',
		  'JE' => 'Jersey',
		  'JO' => 'Jordan',
		  'KZ' => 'Kazakhstan',
		  'KE' => 'KENYA',
		  'KI' => 'Kiribati',
		  'KP' => 'Korea, Democratic People\'s Republic of',
		  'KR' => 'Korea, Republic of',
		  'KW' => 'Kuwait',
		  'KG' => 'Kyrgyzstan',
		  'LA' => 'Lao People\'s Democratic Republic',
		  'LV' => 'Latvia',
		  'LB' => 'Lebanon',
		  'LS' => 'Lesotho',
		  'LR' => 'Liberia',
		  'LY' => 'Libyan Arab Jamahiriya',
		  'LI' => 'Liechtenstein',
		  'LT' => 'Lithuania',
		  'LU' => 'Luxembourg',
		  'MO' => 'Macao',
		  'MK' => 'Macedonia, the Former Yugoslav Republic of',
		  'MG' => 'Madagascar',
		  'MW' => 'Malawi',
		  'MY' => 'Malaysia',
		  'MV' => 'Maldives',
		  'ML' => 'Mali',
		  'MT' => 'Malta',
		  'MH' => 'Marshall Islands',
		  'MQ' => 'Martinique',
		  'MR' => 'Mauritania',
		  'MU' => 'Mauritius',
		  'YT' => 'Mayotte',
		  'MX' => 'Mexico',
		  'FM' => 'Micronesia, Federated States of',
		  'MD' => 'Moldova, Republic of',
		  'MC' => 'Monaco',
		  'MN' => 'Mongolia',
		  'ME' => 'Montenegro',
		  'MS' => 'Montserrat',
		  'MA' => 'Morocco',
		  'MZ' => 'Mozambique',
		  'MM' => 'Myanmar',
		  'NA' => 'Namibia',
		  'NR' => 'Nauru',
		  'NP' => 'Nepal',
		  'NL' => 'Netherlands',
		  'AN' => 'Netherlands Antilles',
		  'NC' => 'New Caledonia',
		  'NZ' => 'New Zealand',
		  'NI' => 'Nicaragua',
		  'NE' => 'Niger',
		  'NG' => 'Nigeria',
		  'NU' => 'Niue',
		  'NF' => 'Norfolk Island',
		  'MP' => 'Northern Mariana Islands',
		  'NO' => 'Norway',
		  'OM' => 'Oman',
		  'PK' => 'Pakistan',
		  'PW' => 'Palau',
		  'PS' => 'Palestinian Territory, Occupied',
		  'PA' => 'Panama',
		  'PG' => 'Papua New Guinea',
		  'PY' => 'Paraguay',
		  'PE' => 'Peru',
		  'PH' => 'Philippines',
		  'PN' => 'Pitcairn',
		  'PL' => 'Poland',
		  'PT' => 'Portugal',
		  'PR' => 'Puerto Rico',
		  'QA' => 'Qatar',
		  'RE' => 'Réunion',
		  'RO' => 'Romania',
		  'RU' => 'Russian Federation',
		  'RW' => 'Rwanda',
		  'SH' => 'Saint Helena',
		  'KN' => 'Saint Kitts and Nevis',
		  'LC' => 'Saint Lucia',
		  'PM' => 'Saint Pierre and Miquelon',
		  'VC' => 'Saint Vincent and the Grenadines',
		  'WS' => 'Samoa',
		  'SM' => 'San Marino',
		  'ST' => 'Sao Tome and Principe',
		  'SA' => 'Saudi Arabia',
		  'SN' => 'Senegal',
		  'RS' => 'Serbia',
		  'SC' => 'Seychelles',
		  'SL' => 'Sierra Leone',
		  'SG' => 'Singapore',
		  'SK' => 'Slovakia',
		  'SI' => 'Slovenia',
		  'SB' => 'Solomon Islands',
		  'SO' => 'Somalia',
		  'ZA' => 'South Africa',
		  'GS' => 'South Georgia and the South Sandwich Islands',
		  'ES' => 'Spain',
		  'LK' => 'Sri Lanka',
		  'SD' => 'Sudan',
		  'SR' => 'Suriname',
		  'SJ' => 'Svalbard and Jan Mayen',
		  'SZ' => 'Swaziland',
		  'SE' => 'Sweden',
		  'CH' => 'Switzerland',
		  'SY' => 'Syrian Arab Republic',
		  'TW' => 'Taiwan, Province of China',
		  'TJ' => 'Tajikistan',
		  'TZ' => 'Tanzania, United Republic of',
		  'TH' => 'Thailand',
		  'TL' => 'Timor-Leste',
		  'TG' => 'Togo',
		  'TK' => 'Tokelau',
		  'TO' => 'Tonga',
		  'TT' => 'Trinidad and Tobago',
		  'TN' => 'Tunisia',
		  'TR' => 'Turkey',
		  'TM' => 'Turkmenistan',
		  'TC' => 'Turks and Caicos Islands',
		  'TV' => 'Tuvalu',
		  'UG' => 'Uganda',
		  'UA' => 'Ukraine',
		  'AE' => 'United Arab Emirates',
		  'GB' => 'United Kingdom',
		  'US' => 'United States',
		  'UM' => 'United States Minor Outlying Islands',
		  'UY' => 'Uruguay',
		  'UZ' => 'Uzbekistan',
		  'VU' => 'Vanuatu',
		  'VE' => 'Venezuela',
		  'VN' => 'Viet Nam',
		  'VG' => 'Virgin Islands, British',
		  'VI' => 'Virgin Islands, U.S.',
		  'WF' => 'Wallis and Futuna',
		  'EH' => 'Western Sahara',
		  'YE' => 'Yemen',
		  'ZM' => 'Zambia',
		  'ZW' => 'Zimbabwe',
	    );
	    
	    if(array_key_exists($name, $countrycodes))
		    return $countrycodes[$name];
		else
			return "Unknown country";
	}
}

if(!function_exists('get_country_code_by_name'))
{
	function get_country_code_by_name($name)
	{
		$countrycodes = array (
		  'AF' => 'Afghanistan',
		  'AX' => 'Åland Islands',
		  'AL' => 'Albania',
		  'DZ' => 'Algeria',
		  'AS' => 'American Samoa',
		  'AD' => 'Andorra',
		  'AO' => 'Angola',
		  'AI' => 'Anguilla',
		  'AQ' => 'Antarctica',
		  'AG' => 'Antigua and Barbuda',
		  'AR' => 'Argentina',
		  'AU' => 'Australia',
		  'AT' => 'Austria',
		  'AZ' => 'Azerbaijan',
		  'BS' => 'Bahamas',
		  'BH' => 'Bahrain',
		  'BD' => 'Bangladesh',
		  'BB' => 'Barbados',
		  'BY' => 'Belarus',
		  'BE' => 'Belgium',
		  'BZ' => 'Belize',
		  'BJ' => 'Benin',
		  'BM' => 'Bermuda',
		  'BT' => 'Bhutan',
		  'BO' => 'Bolivia',
		  'BA' => 'Bosnia and Herzegovina',
		  'BW' => 'Botswana',
		  'BV' => 'Bouvet Island',
		  'BR' => 'Brazil',
		  'IO' => 'British Indian Ocean Territory',
		  'BN' => 'Brunei Darussalam',
		  'BG' => 'Bulgaria',
		  'BF' => 'Burkina Faso',
		  'BI' => 'Burundi',
		  'KH' => 'Cambodia',
		  'CM' => 'Cameroon',
		  'CA' => 'Canada',
		  'CV' => 'Cape Verde',
		  'KY' => 'Cayman Islands',
		  'CF' => 'Central African Republic',
		  'TD' => 'Chad',
		  'CL' => 'Chile',
		  'CN' => 'China',
		  'CX' => 'Christmas Island',
		  'CC' => 'Cocos (Keeling) Islands',
		  'CO' => 'Colombia',
		  'KM' => 'Comoros',
		  'CG' => 'Congo',
		  'CD' => 'Zaire',
		  'CK' => 'Cook Islands',
		  'CR' => 'Costa Rica',
		  'CI' => 'Côte D\'Ivoire',
		  'HR' => 'Croatia',
		  'CU' => 'Cuba',
		  'CY' => 'Cyprus',
		  'CZ' => 'Czech Republic',
		  'DK' => 'Denmark',
		  'DJ' => 'Djibouti',
		  'DM' => 'Dominica',
		  'DO' => 'Dominican Republic',
		  'EC' => 'Ecuador',
		  'EG' => 'Egypt',
		  'SV' => 'El Salvador',
		  'GQ' => 'Equatorial Guinea',
		  'ER' => 'Eritrea',
		  'EE' => 'Estonia',
		  'ET' => 'Ethiopia',
		  'FK' => 'Falkland Islands (Malvinas)',
		  'FO' => 'Faroe Islands',
		  'FJ' => 'Fiji',
		  'FI' => 'Finland',
		  'FR' => 'France',
		  'GF' => 'French Guiana',
		  'PF' => 'French Polynesia',
		  'TF' => 'French Southern Territories',
		  'GA' => 'Gabon',
		  'GM' => 'Gambia',
		  'GE' => 'Georgia',
		  'DE' => 'Germany',
		  'GH' => 'Ghana',
		  'GI' => 'Gibraltar',
		  'GR' => 'Greece',
		  'GL' => 'Greenland',
		  'GD' => 'Grenada',
		  'GP' => 'Guadeloupe',
		  'GU' => 'Guam',
		  'GT' => 'Guatemala',
		  'GG' => 'Guernsey',
		  'GN' => 'Guinea',
		  'GW' => 'Guinea-Bissau',
		  'GY' => 'Guyana',
		  'HT' => 'Haiti',
		  'HM' => 'Heard Island and Mcdonald Islands',
		  'VA' => 'Vatican City State',
		  'HN' => 'Honduras',
		  'HK' => 'Hong Kong',
		  'HU' => 'Hungary',
		  'IS' => 'Iceland',
		  'IN' => 'India',
		  'ID' => 'Indonesia',
		  'IR' => 'Iran, Islamic Republic of',
		  'IQ' => 'Iraq',
		  'IE' => 'Ireland',
		  'IM' => 'Isle of Man',
		  'IL' => 'Israel',
		  'IT' => 'Italy',
		  'JM' => 'Jamaica',
		  'JP' => 'Japan',
		  'JE' => 'Jersey',
		  'JO' => 'Jordan',
		  'KZ' => 'Kazakhstan',
		  'KE' => 'KENYA',
		  'KI' => 'Kiribati',
		  'KP' => 'Korea, Democratic People\'s Republic of',
		  'KR' => 'Korea, Republic of',
		  'KW' => 'Kuwait',
		  'KG' => 'Kyrgyzstan',
		  'LA' => 'Lao People\'s Democratic Republic',
		  'LV' => 'Latvia',
		  'LB' => 'Lebanon',
		  'LS' => 'Lesotho',
		  'LR' => 'Liberia',
		  'LY' => 'Libyan Arab Jamahiriya',
		  'LI' => 'Liechtenstein',
		  'LT' => 'Lithuania',
		  'LU' => 'Luxembourg',
		  'MO' => 'Macao',
		  'MK' => 'Macedonia, the Former Yugoslav Republic of',
		  'MG' => 'Madagascar',
		  'MW' => 'Malawi',
		  'MY' => 'Malaysia',
		  'MV' => 'Maldives',
		  'ML' => 'Mali',
		  'MT' => 'Malta',
		  'MH' => 'Marshall Islands',
		  'MQ' => 'Martinique',
		  'MR' => 'Mauritania',
		  'MU' => 'Mauritius',
		  'YT' => 'Mayotte',
		  'MX' => 'Mexico',
		  'FM' => 'Micronesia, Federated States of',
		  'MD' => 'Moldova, Republic of',
		  'MC' => 'Monaco',
		  'MN' => 'Mongolia',
		  'ME' => 'Montenegro',
		  'MS' => 'Montserrat',
		  'MA' => 'Morocco',
		  'MZ' => 'Mozambique',
		  'MM' => 'Myanmar',
		  'NA' => 'Namibia',
		  'NR' => 'Nauru',
		  'NP' => 'Nepal',
		  'NL' => 'Netherlands',
		  'AN' => 'Netherlands Antilles',
		  'NC' => 'New Caledonia',
		  'NZ' => 'New Zealand',
		  'NI' => 'Nicaragua',
		  'NE' => 'Niger',
		  'NG' => 'Nigeria',
		  'NU' => 'Niue',
		  'NF' => 'Norfolk Island',
		  'MP' => 'Northern Mariana Islands',
		  'NO' => 'Norway',
		  'OM' => 'Oman',
		  'PK' => 'Pakistan',
		  'PW' => 'Palau',
		  'PS' => 'Palestinian Territory, Occupied',
		  'PA' => 'Panama',
		  'PG' => 'Papua New Guinea',
		  'PY' => 'Paraguay',
		  'PE' => 'Peru',
		  'PH' => 'Philippines',
		  'PN' => 'Pitcairn',
		  'PL' => 'Poland',
		  'PT' => 'Portugal',
		  'PR' => 'Puerto Rico',
		  'QA' => 'Qatar',
		  'RE' => 'Réunion',
		  'RO' => 'Romania',
		  'RU' => 'Russian Federation',
		  'RW' => 'Rwanda',
		  'SH' => 'Saint Helena',
		  'KN' => 'Saint Kitts and Nevis',
		  'LC' => 'Saint Lucia',
		  'PM' => 'Saint Pierre and Miquelon',
		  'VC' => 'Saint Vincent and the Grenadines',
		  'WS' => 'Samoa',
		  'SM' => 'San Marino',
		  'ST' => 'Sao Tome and Principe',
		  'SA' => 'Saudi Arabia',
		  'SN' => 'Senegal',
		  'RS' => 'Serbia',
		  'SC' => 'Seychelles',
		  'SL' => 'Sierra Leone',
		  'SG' => 'Singapore',
		  'SK' => 'Slovakia',
		  'SI' => 'Slovenia',
		  'SB' => 'Solomon Islands',
		  'SO' => 'Somalia',
		  'ZA' => 'South Africa',
		  'GS' => 'South Georgia and the South Sandwich Islands',
		  'ES' => 'Spain',
		  'LK' => 'Sri Lanka',
		  'SD' => 'Sudan',
		  'SR' => 'Suriname',
		  'SJ' => 'Svalbard and Jan Mayen',
		  'SZ' => 'Swaziland',
		  'SE' => 'Sweden',
		  'CH' => 'Switzerland',
		  'SY' => 'Syrian Arab Republic',
		  'TW' => 'Taiwan, Province of China',
		  'TJ' => 'Tajikistan',
		  'TZ' => 'Tanzania, United Republic of',
		  'TH' => 'Thailand',
		  'TL' => 'Timor-Leste',
		  'TG' => 'Togo',
		  'TK' => 'Tokelau',
		  'TO' => 'Tonga',
		  'TT' => 'Trinidad and Tobago',
		  'TN' => 'Tunisia',
		  'TR' => 'Turkey',
		  'TM' => 'Turkmenistan',
		  'TC' => 'Turks and Caicos Islands',
		  'TV' => 'Tuvalu',
		  'UG' => 'Uganda',
		  'UA' => 'Ukraine',
		  'AE' => 'United Arab Emirates',
		  'GB' => 'United Kingdom',
		  'US' => 'United States',
		  'UM' => 'United States Minor Outlying Islands',
		  'UY' => 'Uruguay',
		  'UZ' => 'Uzbekistan',
		  'VU' => 'Vanuatu',
		  'VE' => 'Venezuela',
		  'VN' => 'Viet Nam',
		  'VG' => 'Virgin Islands, British',
		  'VI' => 'Virgin Islands, U.S.',
		  'WF' => 'Wallis and Futuna',
		  'EH' => 'Western Sahara',
		  'YE' => 'Yemen',
		  'ZM' => 'Zambia',
		  'ZW' => 'Zimbabwe',
	    );
	    
	    $country_code = array_search($name, $countrycodes);
	    
	    if($country_code != FALSE)
		    return strtolower($country_code);
		else
			return "Unknown country";
	}
}

function randomCountry()
{
	$countrycodes = array (
	  'AF' => 'Afghanistan',
	  'AX' => 'Åland Islands',
	  'AL' => 'Albania',
	  'DZ' => 'Algeria',
	  'AS' => 'American Samoa',
	  'AD' => 'Andorra',
	  'AO' => 'Angola',
	  'AI' => 'Anguilla',
	  'AQ' => 'Antarctica',
	  'AG' => 'Antigua and Barbuda',
	  'AR' => 'Argentina',
	  'AU' => 'Australia',
	  'AT' => 'Austria',
	  'AZ' => 'Azerbaijan',
	  'BS' => 'Bahamas',
	  'BH' => 'Bahrain',
	  'BD' => 'Bangladesh',
	  'BB' => 'Barbados',
	  'BY' => 'Belarus',
	  'BE' => 'Belgium',
	  'BZ' => 'Belize',
	  'BJ' => 'Benin',
	  'BM' => 'Bermuda',
	  'BT' => 'Bhutan',
	  'BO' => 'Bolivia',
	  'BA' => 'Bosnia and Herzegovina',
	  'BW' => 'Botswana',
	  'BV' => 'Bouvet Island',
	  'BR' => 'Brazil',
	  'IO' => 'British Indian Ocean Territory',
	  'BN' => 'Brunei Darussalam',
	  'BG' => 'Bulgaria',
	  'BF' => 'Burkina Faso',
	  'BI' => 'Burundi',
	  'KH' => 'Cambodia',
	  'CM' => 'Cameroon',
	  'CA' => 'Canada',
	  'CV' => 'Cape Verde',
	  'KY' => 'Cayman Islands',
	  'CF' => 'Central African Republic',
	  'TD' => 'Chad',
	  'CL' => 'Chile',
	  'CN' => 'China',
	  'CX' => 'Christmas Island',
	  'CC' => 'Cocos (Keeling) Islands',
	  'CO' => 'Colombia',
	  'KM' => 'Comoros',
	  'CG' => 'Congo',
	  'CD' => 'Zaire',
	  'CK' => 'Cook Islands',
	  'CR' => 'Costa Rica',
	  'CI' => 'Côte D\'Ivoire',
	  'HR' => 'Croatia',
	  'CU' => 'Cuba',
	  'CY' => 'Cyprus',
	  'CZ' => 'Czech Republic',
	  'DK' => 'Denmark',
	  'DJ' => 'Djibouti',
	  'DM' => 'Dominica',
	  'DO' => 'Dominican Republic',
	  'EC' => 'Ecuador',
	  'EG' => 'Egypt',
	  'SV' => 'El Salvador',
	  'GQ' => 'Equatorial Guinea',
	  'ER' => 'Eritrea',
	  'EE' => 'Estonia',
	  'ET' => 'Ethiopia',
	  'FK' => 'Falkland Islands (Malvinas)',
	  'FO' => 'Faroe Islands',
	  'FJ' => 'Fiji',
	  'FI' => 'Finland',
	  'FR' => 'France',
	  'GF' => 'French Guiana',
	  'PF' => 'French Polynesia',
	  'TF' => 'French Southern Territories',
	  'GA' => 'Gabon',
	  'GM' => 'Gambia',
	  'GE' => 'Georgia',
	  'DE' => 'Germany',
	  'GH' => 'Ghana',
	  'GI' => 'Gibraltar',
	  'GR' => 'Greece',
	  'GL' => 'Greenland',
	  'GD' => 'Grenada',
	  'GP' => 'Guadeloupe',
	  'GU' => 'Guam',
	  'GT' => 'Guatemala',
	  'GG' => 'Guernsey',
	  'GN' => 'Guinea',
	  'GW' => 'Guinea-Bissau',
	  'GY' => 'Guyana',
	  'HT' => 'Haiti',
	  'HM' => 'Heard Island and Mcdonald Islands',
	  'VA' => 'Vatican City State',
	  'HN' => 'Honduras',
	  'HK' => 'Hong Kong',
	  'HU' => 'Hungary',
	  'IS' => 'Iceland',
	  'IN' => 'India',
	  'ID' => 'Indonesia',
	  'IR' => 'Iran, Islamic Republic of',
	  'IQ' => 'Iraq',
	  'IE' => 'Ireland',
	  'IM' => 'Isle of Man',
	  'IL' => 'Israel',
	  'IT' => 'Italy',
	  'JM' => 'Jamaica',
	  'JP' => 'Japan',
	  'JE' => 'Jersey',
	  'JO' => 'Jordan',
	  'KZ' => 'Kazakhstan',
	  'KE' => 'KENYA',
	  'KI' => 'Kiribati',
	  'KP' => 'Korea, Democratic People\'s Republic of',
	  'KR' => 'Korea, Republic of',
	  'KW' => 'Kuwait',
	  'KG' => 'Kyrgyzstan',
	  'LA' => 'Lao People\'s Democratic Republic',
	  'LV' => 'Latvia',
	  'LB' => 'Lebanon',
	  'LS' => 'Lesotho',
	  'LR' => 'Liberia',
	  'LY' => 'Libyan Arab Jamahiriya',
	  'LI' => 'Liechtenstein',
	  'LT' => 'Lithuania',
	  'LU' => 'Luxembourg',
	  'MO' => 'Macao',
	  'MK' => 'Macedonia, the Former Yugoslav Republic of',
	  'MG' => 'Madagascar',
	  'MW' => 'Malawi',
	  'MY' => 'Malaysia',
	  'MV' => 'Maldives',
	  'ML' => 'Mali',
	  'MT' => 'Malta',
	  'MH' => 'Marshall Islands',
	  'MQ' => 'Martinique',
	  'MR' => 'Mauritania',
	  'MU' => 'Mauritius',
	  'YT' => 'Mayotte',
	  'MX' => 'Mexico',
	  'FM' => 'Micronesia, Federated States of',
	  'MD' => 'Moldova, Republic of',
	  'MC' => 'Monaco',
	  'MN' => 'Mongolia',
	  'ME' => 'Montenegro',
	  'MS' => 'Montserrat',
	  'MA' => 'Morocco',
	  'MZ' => 'Mozambique',
	  'MM' => 'Myanmar',
	  'NA' => 'Namibia',
	  'NR' => 'Nauru',
	  'NP' => 'Nepal',
	  'NL' => 'Netherlands',
	  'AN' => 'Netherlands Antilles',
	  'NC' => 'New Caledonia',
	  'NZ' => 'New Zealand',
	  'NI' => 'Nicaragua',
	  'NE' => 'Niger',
	  'NG' => 'Nigeria',
	  'NU' => 'Niue',
	  'NF' => 'Norfolk Island',
	  'MP' => 'Northern Mariana Islands',
	  'NO' => 'Norway',
	  'OM' => 'Oman',
	  'PK' => 'Pakistan',
	  'PW' => 'Palau',
	  'PS' => 'Palestinian Territory, Occupied',
	  'PA' => 'Panama',
	  'PG' => 'Papua New Guinea',
	  'PY' => 'Paraguay',
	  'PE' => 'Peru',
	  'PH' => 'Philippines',
	  'PN' => 'Pitcairn',
	  'PL' => 'Poland',
	  'PT' => 'Portugal',
	  'PR' => 'Puerto Rico',
	  'QA' => 'Qatar',
	  'RE' => 'Réunion',
	  'RO' => 'Romania',
	  'RU' => 'Russian Federation',
	  'RW' => 'Rwanda',
	  'SH' => 'Saint Helena',
	  'KN' => 'Saint Kitts and Nevis',
	  'LC' => 'Saint Lucia',
	  'PM' => 'Saint Pierre and Miquelon',
	  'VC' => 'Saint Vincent and the Grenadines',
	  'WS' => 'Samoa',
	  'SM' => 'San Marino',
	  'ST' => 'Sao Tome and Principe',
	  'SA' => 'Saudi Arabia',
	  'SN' => 'Senegal',
	  'RS' => 'Serbia',
	  'SC' => 'Seychelles',
	  'SL' => 'Sierra Leone',
	  'SG' => 'Singapore',
	  'SK' => 'Slovakia',
	  'SI' => 'Slovenia',
	  'SB' => 'Solomon Islands',
	  'SO' => 'Somalia',
	  'ZA' => 'South Africa',
	  'GS' => 'South Georgia and the South Sandwich Islands',
	  'ES' => 'Spain',
	  'LK' => 'Sri Lanka',
	  'SD' => 'Sudan',
	  'SR' => 'Suriname',
	  'SJ' => 'Svalbard and Jan Mayen',
	  'SZ' => 'Swaziland',
	  'SE' => 'Sweden',
	  'CH' => 'Switzerland',
	  'SY' => 'Syrian Arab Republic',
	  'TW' => 'Taiwan, Province of China',
	  'TJ' => 'Tajikistan',
	  'TZ' => 'Tanzania, United Republic of',
	  'TH' => 'Thailand',
	  'TL' => 'Timor-Leste',
	  'TG' => 'Togo',
	  'TK' => 'Tokelau',
	  'TO' => 'Tonga',
	  'TT' => 'Trinidad and Tobago',
	  'TN' => 'Tunisia',
	  'TR' => 'Turkey',
	  'TM' => 'Turkmenistan',
	  'TC' => 'Turks and Caicos Islands',
	  'TV' => 'Tuvalu',
	  'UG' => 'Uganda',
	  'UA' => 'Ukraine',
	  'AE' => 'United Arab Emirates',
	  'GB' => 'United Kingdom',
	  'US' => 'United States',
	  'UM' => 'United States Minor Outlying Islands',
	  'UY' => 'Uruguay',
	  'UZ' => 'Uzbekistan',
	  'VU' => 'Vanuatu',
	  'VE' => 'Venezuela',
	  'VN' => 'Viet Nam',
	  'VG' => 'Virgin Islands, British',
	  'VI' => 'Virgin Islands, U.S.',
	  'WF' => 'Wallis and Futuna',
	  'EH' => 'Western Sahara',
	  'YE' => 'Yemen',
	  'ZM' => 'Zambia',
	  'ZW' => 'Zimbabwe',
    );
    
    
    return $countrycodes[array_rand($countrycodes)];
	
}

?>