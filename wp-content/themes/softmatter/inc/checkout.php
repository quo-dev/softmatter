<?php

add_action( 'wp_ajax_save_shipping_data', 'connect_save_shipping_data' );
add_action( 'wp_ajax_nopriv_save_shipping_data', 'connect_save_shipping_data' );

function connect_save_shipping_data(){
    $order_id = WC()->session->get( 'order_id' );
    if(!$order_id){
        $checkout = WC()->checkout();
        $order_id = $checkout->create_order(array());
    }
    $order = wc_get_order( $order_id );

    $shipping_address = array(
        'email'      => trim($_POST['email']),
        'phone' => trim($_POST['phone']),
        'first_name' => trim($_POST['first_name']),
        'last_name'  => trim($_POST['last_name']),
        'address_1'  => trim($_POST['shipping_address']),
        'city'     => trim($_POST['shipping_city']),
        'state'      => trim($_POST['shipping_state']),
        'postcode'   => trim($_POST['shipping_postcode']),
        'country'    => trim($_POST['shipping_country'])
    );
    $order->set_address( $shipping_address, 'shipping' );

    $billing_address = array(
        'email'      => trim($_POST['email']),
        'phone' => trim($_POST['phone']),
        'first_name' => trim($_POST['first_name']),
        'last_name'  => trim($_POST['last_name']),
        'address_1'  => trim($_POST['shipping_address']),
        'city'     => trim($_POST['shipping_city']),
        'state'      => trim($_POST['shipping_state']),
        'postcode'   => trim($_POST['shipping_postcode']),
        'country'    => trim($_POST['shipping_country'])
    );
    $order->set_address( $billing_address, 'billing' );

    WC()->session->set( 'order_id', $order_id);

    if($_POST['email_subscribe']) add_email_subscribe(trim($_POST['email']));
    
    wp_send_json_success(array(
        'redirect_url' => home_url('payment'),
        'order_id' => $order_id
    ));
    wp_die();
}

function add_email_subscribe($email){
    if(!$email) return false;
    if(!check_email_subscribed($email)){
        $email_subscribe = array(
            'post_title'    => wp_strip_all_tags( $email ),
            'post_status'   => 'draft',
            'post_type'     => 'email_subscribe',
        );
        wp_insert_post( $email_subscribe );
    }
       
    return true;
}

function get_shipping_detail($type = "shipping"){
    $order_id = WC()->session->get( 'order_id' );
    if($order_id){
        $order = wc_get_order($order_id);
        if($type === 'billing'){
            $shipping_detail =  array(
                'address' => $order->billing_address_1,
                'city' => $order->billing_city,
                'country' => $order->billing_country,
                'phone' => $order->billing_phone,
                'postcode' => $order->billing_postcode,
                'state' => $order->billing_state,
                'email' => $order->billing_email,
                'first_name' => $order->billing_first_name,
                'last_name' => $order->billing_last_name,
            );
        }else{
            $shipping_detail =  array(
                'address' => $order->shipping_address_1,
                'city' => $order->shipping_city,
                'country' => $order->shipping_country,
                'phone' => $order->shipping_phone,
                'postcode' => $order->shipping_postcode,
                'state' => $order->shipping_state,
                'email' => $order->shipping_email,
                'email_subscribe' => check_email_subscribed($order->shipping_email),
                'first_name' => $order->shipping_first_name,
                'last_name' => $order->shipping_last_name,
            );
        }
    }else{
        $shipping_detail =  array(
                                'address' => '',
                                'city' => '',
                                'country' => '',
                                'phone' => '',
                                'postcode' => '',
                                'state' => '',
                                'email' => '',
                                'email_subscribe' => '',
                                'first_name' => '',
                                'last_name' => '',
                            );
    }
    return $shipping_detail;
}

function check_email_subscribed($email){
    if(!$email) return false;
    if ( ! function_exists( 'post_exists' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/post.php' );
    }
    return post_exists($email);
}

add_action( 'wp_ajax_payment_complete', 'connect_payment_complete' );
add_action( 'wp_ajax_nopriv_payment_complete', 'connect_payment_complete' );

function connect_payment_complete(){
    $order_id = WC()->session->get( 'order_id' );
    if(!$order_id){
        return false;
    }
    $order_data = $_POST['data'];
    $order = wc_get_order( $order_id );
    $order->set_transaction_id($order_data['purchase_units'][0]['payments']['captures']['0']['id']);

    $order->payment_complete(); 
    WC()->cart->empty_cart();
    
    wp_send_json_success(array(
        'redirect_url' => home_url('thank-you')
    ));
    wp_die();
}

function get_country_list(){
    return array(
        "AF" => "Afghanistan",
        "AL" => "Albania",
        "DZ" => "Algeria",
        "AS" => "American Samoa",
        "AD" => "Andorra",
        "AO" => "Angola",
        "AI" => "Anguilla",
        "AQ" => "Antarctica",
        "AG" => "Antigua and Barbuda",
        "AR" => "Argentina",
        "AM" => "Armenia",
        "AW" => "Aruba",
        "AU" => "Australia",
        "AT" => "Austria",
        "AZ" => "Azerbaijan",
        "BS" => "Bahamas",
        "BH" => "Bahrain",
        "BD" => "Bangladesh",
        "BB" => "Barbados",
        "BY" => "Belarus",
        "BE" => "Belgium",
        "BZ" => "Belize",
        "BJ" => "Benin",
        "BM" => "Bermuda",
        "BT" => "Bhutan",
        "BO" => "Bolivia",
        "BA" => "Bosnia and Herzegovina",
        "BW" => "Botswana",
        "BV" => "Bouvet Island",
        "BR" => "Brazil",
        "BQ" => "British Antarctic Territory",
        "IO" => "British Indian Ocean Territory",
        "VG" => "British Virgin Islands",
        "BN" => "Brunei",
        "BG" => "Bulgaria",
        "BF" => "Burkina Faso",
        "BI" => "Burundi",
        "KH" => "Cambodia",
        "CM" => "Cameroon",
        "CA" => "Canada",
        "CT" => "Canton and Enderbury Islands",
        "CV" => "Cape Verde",
        "KY" => "Cayman Islands",
        "CF" => "Central African Republic",
        "TD" => "Chad",
        "CL" => "Chile",
        "CN" => "China",
        "CX" => "Christmas Island",
        "CC" => "Cocos [Keeling] Islands",
        "CO" => "Colombia",
        "KM" => "Comoros",
        "CG" => "Congo - Brazzaville",
        "CD" => "Congo - Kinshasa",
        "CK" => "Cook Islands",
        "CR" => "Costa Rica",
        "HR" => "Croatia",
        "CU" => "Cuba",
        "CY" => "Cyprus",
        "CZ" => "Czech Republic",
        "CI" => "Côte d’Ivoire",
        "DK" => "Denmark",
        "DJ" => "Djibouti",
        "DM" => "Dominica",
        "DO" => "Dominican Republic",
        "NQ" => "Dronning Maud Land",
        "DD" => "East Germany",
        "EC" => "Ecuador",
        "EG" => "Egypt",
        "SV" => "El Salvador",
        "GQ" => "Equatorial Guinea",
        "ER" => "Eritrea",
        "EE" => "Estonia",
        "ET" => "Ethiopia",
        "FK" => "Falkland Islands",
        "FO" => "Faroe Islands",
        "FJ" => "Fiji",
        "FI" => "Finland",
        "FR" => "France",
        "GF" => "French Guiana",
        "PF" => "French Polynesia",
        "TF" => "French Southern Territories",
        "FQ" => "French Southern and Antarctic Territories",
        "GA" => "Gabon",
        "GM" => "Gambia",
        "GE" => "Georgia",
        "DE" => "Germany",
        "GH" => "Ghana",
        "GI" => "Gibraltar",
        "GR" => "Greece",
        "GL" => "Greenland",
        "GD" => "Grenada",
        "GP" => "Guadeloupe",
        "GU" => "Guam",
        "GT" => "Guatemala",
        "GG" => "Guernsey",
        "GN" => "Guinea",
        "GW" => "Guinea-Bissau",
        "GY" => "Guyana",
        "HT" => "Haiti",
        "HM" => "Heard Island and McDonald Islands",
        "HN" => "Honduras",
        "HK" => "Hong Kong SAR China",
        "HU" => "Hungary",
        "IS" => "Iceland",
        "IN" => "India",
        "ID" => "Indonesia",
        "IR" => "Iran",
        "IQ" => "Iraq",
        "IE" => "Ireland",
        "IM" => "Isle of Man",
        "IL" => "Israel",
        "IT" => "Italy",
        "JM" => "Jamaica",
        "JP" => "Japan",
        "JE" => "Jersey",
        "JT" => "Johnston Island",
        "JO" => "Jordan",
        "KZ" => "Kazakhstan",
        "KE" => "Kenya",
        "KI" => "Kiribati",
        "KW" => "Kuwait",
        "KG" => "Kyrgyzstan",
        "LA" => "Laos",
        "LV" => "Latvia",
        "LB" => "Lebanon",
        "LS" => "Lesotho",
        "LR" => "Liberia",
        "LY" => "Libya",
        "LI" => "Liechtenstein",
        "LT" => "Lithuania",
        "LU" => "Luxembourg",
        "MO" => "Macau SAR China",
        "MK" => "Macedonia",
        "MG" => "Madagascar",
        "MW" => "Malawi",
        "MY" => "Malaysia",
        "MV" => "Maldives",
        "ML" => "Mali",
        "MT" => "Malta",
        "MH" => "Marshall Islands",
        "MQ" => "Martinique",
        "MR" => "Mauritania",
        "MU" => "Mauritius",
        "YT" => "Mayotte",
        "FX" => "Metropolitan France",
        "MX" => "Mexico",
        "FM" => "Micronesia",
        "MI" => "Midway Islands",
        "MD" => "Moldova",
        "MC" => "Monaco",
        "MN" => "Mongolia",
        "ME" => "Montenegro",
        "MS" => "Montserrat",
        "MA" => "Morocco",
        "MZ" => "Mozambique",
        "MM" => "Myanmar [Burma]",
        "NA" => "Namibia",
        "NR" => "Nauru",
        "NP" => "Nepal",
        "NL" => "Netherlands",
        "AN" => "Netherlands Antilles",
        "NT" => "Neutral Zone",
        "NC" => "New Caledonia",
        "NZ" => "New Zealand",
        "NI" => "Nicaragua",
        "NE" => "Niger",
        "NG" => "Nigeria",
        "NU" => "Niue",
        "NF" => "Norfolk Island",
        "KP" => "North Korea",
        "VD" => "North Vietnam",
        "MP" => "Northern Mariana Islands",
        "NO" => "Norway",
        "OM" => "Oman",
        "PC" => "Pacific Islands Trust Territory",
        "PK" => "Pakistan",
        "PW" => "Palau",
        "PS" => "Palestinian Territories",
        "PA" => "Panama",
        "PZ" => "Panama Canal Zone",
        "PG" => "Papua New Guinea",
        "PY" => "Paraguay",
        "YD" => "People's Democratic Republic of Yemen",
        "PE" => "Peru",
        "PH" => "Philippines",
        "PN" => "Pitcairn Islands",
        "PL" => "Poland",
        "PT" => "Portugal",
        "PR" => "Puerto Rico",
        "QA" => "Qatar",
        "RO" => "Romania",
        "RU" => "Russia",
        "RW" => "Rwanda",
        "RE" => "Réunion",
        "BL" => "Saint Barthélemy",
        "SH" => "Saint Helena",
        "KN" => "Saint Kitts and Nevis",
        "LC" => "Saint Lucia",
        "MF" => "Saint Martin",
        "PM" => "Saint Pierre and Miquelon",
        "VC" => "Saint Vincent and the Grenadines",
        "WS" => "Samoa",
        "SM" => "San Marino",
        "SA" => "Saudi Arabia",
        "SN" => "Senegal",
        "RS" => "Serbia",
        "CS" => "Serbia and Montenegro",
        "SC" => "Seychelles",
        "SL" => "Sierra Leone",
        "SG" => "Singapore",
        "SK" => "Slovakia",
        "SI" => "Slovenia",
        "SB" => "Solomon Islands",
        "SO" => "Somalia",
        "ZA" => "South Africa",
        "GS" => "South Georgia and the South Sandwich Islands",
        "KR" => "South Korea",
        "ES" => "Spain",
        "LK" => "Sri Lanka",
        "SD" => "Sudan",
        "SR" => "Suriname",
        "SJ" => "Svalbard and Jan Mayen",
        "SZ" => "Swaziland",
        "SE" => "Sweden",
        "CH" => "Switzerland",
        "SY" => "Syria",
        "ST" => "São Tomé and Príncipe",
        "TW" => "Taiwan",
        "TJ" => "Tajikistan",
        "TZ" => "Tanzania",
        "TH" => "Thailand",
        "TL" => "Timor-Leste",
        "TG" => "Togo",
        "TK" => "Tokelau",
        "TO" => "Tonga",
        "TT" => "Trinidad and Tobago",
        "TN" => "Tunisia",
        "TR" => "Turkey",
        "TM" => "Turkmenistan",
        "TC" => "Turks and Caicos Islands",
        "TV" => "Tuvalu",
        "UM" => "U.S. Minor Outlying Islands",
        "PU" => "U.S. Miscellaneous Pacific Islands",
        "VI" => "U.S. Virgin Islands",
        "UG" => "Uganda",
        "UA" => "Ukraine",
        "SU" => "Union of Soviet Socialist Republics",
        "AE" => "United Arab Emirates",
        "GB" => "United Kingdom",
        "US" => "United States",
        "ZZ" => "Unknown or Invalid Region",
        "UY" => "Uruguay",
        "UZ" => "Uzbekistan",
        "VU" => "Vanuatu",
        "VA" => "Vatican City",
        "VE" => "Venezuela",
        "VN" => "Vietnam",
        "WK" => "Wake Island",
        "WF" => "Wallis and Futuna",
        "EH" => "Western Sahara",
        "YE" => "Yemen",
        "ZM" => "Zambia",
        "ZW" => "Zimbabwe",
        "AX" => "Åland Islands",
      );
}