﻿//dummyText($('.dummy_text'));
var $lblClasses = ['label-success', 'label-info', 'label-warning', 'label-danger', 'label-inverse'];
var $pgbClasses = ['success', 'info', 'warning', 'danger'];
var $ranStatusText = {
    'label-success': 'Active',
    'label-info': 'Incomplete',
    'label-warning': 'Freezed',
    'label-danger': 'Deactive',
    'label-inverse': 'Pending'
};

var $ActiveStatusText = {
    'label-success': 'Active'
};
var $ActivelblClasses = ['label-success'];

var $UserLevels = {
    'label-success': 'Administrator',
    'label-info': 'Media-Path User',
    'label-warning': 'Guest',
    'label-danger': 'Agency',
    'label-inverse': 'Client'
};

var $mediacat = {
    'label-success': 'Tv',
    'label-info': 'Radio',
    'label-warning': 'Newsp Regional',
    'label-danger': 'Newsp National',
    'label-inverse': 'Magazine',
    'label-inverse': 'OOH'
};

var $mpLocation = {
  0 : ['Swedish Office','Sweden'],
  1 : ['UK Office', 'London'],
  2 : ['Danish Office','Denmark']
};

var $countries = ["AFGHANISTAN", "ALAND ISLANDS", "ALBANIA", "ALGERIA", "AMERICAN SAMOA", "ANDORRA", "ANGOLA", "ANGUILLA", "ANTARCTICA", "ANTIGUA AND BARBUDA", "ARGENTINA", "ARMENIA", "ARUBA", "AUSTRALIA", "AUSTRIA", "AZERBAIJAN", "BAHAMAS", "BAHRAIN", "BANGLADESH", "BARBADOS", "BELARUS", "BELGIUM", "BELIZE", "BENIN", "BERMUDA", "BHUTAN", "BOLIVIA PLURINATIONAL STATE OF", "BONAIRE SINT EUSTATIUS AND SABA", "BOSNIA AND HERZEGOVINA", "BOTSWANA", "BOUVET ISLAND", "BRAZIL", "BRITISH INDIAN OCEAN TERRITORY", "BRUNEI DARUSSALAM", "BULGARIA", "BURKINA FASO", "BURUNDI", "CAMBODIA", "CAMEROON", "CANADA", "CAPE VERDE", "CAYMAN ISLANDS", "CENTRAL AFRICAN REPUBLIC", "CHAD", "CHILE", "CHINA", "CHRISTMAS ISLAND", "COCOS KEELING) ISLANDS", "COLOMBIA", "COMOROS", "CONGO", "CONGO THE DEMOCRATIC REPUBLIC OF THE", "COOK ISLANDS", "COSTA RICA", "COTE D'IVOIRE", "CROATIA", "CUBA", "CURACAO", "CYPRUS", "CZECH REPUBLIC", "DENMARK", "DJIBOUTI", "DOMINICA", "DOMINICAN REPUBLIC", "ECUADOR", "EGYPT", "EL SALVADOR", "EQUATORIAL GUINEA", "ERITREA", "ESTONIA", "ETHIOPIA", "FALKLAND ISLANDS MALVINAS", "FAROE ISLANDS", "FIJI", "FINLAND", "FRANCE", "FRENCH GUIANA", "FRENCH POLYNESIA", "FRENCH SOUTHERN TERRITORIES", "GABON", "GAMBIA", "GEORGIA", "GERMANY", "GHANA", "GIBRALTAR", "GREECE", "GREENLAND", "GRENADA", "GUADELOUPE", "GUAM", "GUATEMALA", "GUERNSEY", "GUINEA", "GUINEA-BISSAU", "GUYANA", "HAITI", "HEARD ISLAND AND MCDONALD ISLANDS", "HOLY SEE VATICAN CITY STATE", "HONDURAS", "HONG KONG", "HUNGARY", "ICELAND", "INDIA", "INDONESIA", "IRAN ISLAMIC REPUBLIC OF", "IRAQ", "IRELAND", "ISLE OF MAN", "ISRAEL", "ITALY", "JAMAICA", "JAPAN", "JERSEY", "JORDAN", "KAZAKHSTAN", "KENYA", "KIRIBATI", "KOREA DEMOCRATIC PEOPLE'S REPUBLIC OF", "KOREA REPUBLIC OF", "KUWAIT", "KYRGYZSTAN", "LAO PEOPLE'S DEMOCRATIC REPUBLIC", "LATVIA", "LEBANON", "LESOTHO", "LIBERIA", "LIBYAN ARAB JAMAHIRIYA", "LIECHTENSTEIN", "LITHUANIA", "LUXEMBOURG", "MACAO", "MACEDONIA THE FORMER YUGOSLAV REPUBLIC OF", "MADAGASCAR", "MALAWI", "MALAYSIA", "MALDIVES", "MALI", "MALTA", "MARSHALL ISLANDS", "MARTINIQUE", "MAURITANIA", "MAURITIUS", "MAYOTTE", "MEXICO", "MICRONESIA FEDERATED STATES OF", "MOLDOVA REPUBLIC OF", "MONACO", "MONGOLIA", "MONTENEGRO", "MONTSERRAT", "MOROCCO", "MOZAMBIQUE", "MYANMAR", "NAMIBIA", "NAURU", "NEPAL", "NETHERLANDS", "NEW CALEDONIA", "NEW ZEALAND", "NICARAGUA", "NIGER", "NIGERIA", "NIUE", "NORFOLK ISLAND", "NORTHERN MARIANA ISLANDS", "NORWAY", "OMAN", "PAKISTAN", "PALAU", "PALESTINIAN TERRITORY OCCUPIED", "PANAMA", "PAPUA NEW GUINEA", "PARAGUAY", "PERU", "PHILIPPINES", "PITCAIRN", "POLAND", "PORTUGAL", "PUERTO RICO", "QATAR", "REUNION", "ROMANIA", "RUSSIAN FEDERATION", "RWANDA", "SAINT BARTHELEMY", "SAINT HELENA ASCENSION AND TRISTAN DA CUNHA", "SAINT KITTS AND NEVIS", "SAINT LUCIA", "SAINT MARTIN FRENCH PART", "SAINT PIERRE AND MIQUELON", "SAINT VINCENT AND THE GRENADINES", "SAMOA", "SAN MARINO", "SAO TOME AND PRINCIPE", "SAUDI ARABIA", "SENEGAL", "SERBIA", "SEYCHELLES", "SIERRA LEONE", "SINGAPORE", "SINT MAARTEN DUTCH PART", "SLOVAKIA", "SLOVENIA", "SOLOMON ISLANDS", "SOMALIA", "SOUTH AFRICA", "SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS", "SPAIN", "SRI LANKA", "SUDAN", "SURINAME", "SVALBARD AND JAN MAYEN", "SWAZILAND", "SWEDEN", "SWITZERLAND", "SYRIAN ARAB REPUBLIC", "TAIWAN PROVINCE OF CHINA", "TAJIKISTAN", "TANZANIA UNITED REPUBLIC OF", "THAILAND", "TIMOR-LESTE", "TOGO", "TOKELAU", "TONGA", "TRINIDAD AND TOBAGO", "TUNISIA", "TURKEY", "TURKMENISTAN", "TURKS AND CAICOS ISLANDS", "TUVALU", "UGANDA", "UKRAINE", "UNITED ARAB EMIRATES", "UNITED KINGDOM", "UNITED STATES", "UNITED STATES MINOR OUTLYING ISLANDS", "URUGUAY", "UZBEKISTAN", "VANUATU", "VENEZUELA BOLIVARIAN REPUBLIC OF", "VIET NAM", "VIRGIN ISLANDS BRITISH", "VIRGIN ISLANDS U.S.", "WALLIS AND FUTUNA", "WESTERN SAHARA", "YEMEN", "ZAMBIA", "ZIMBABWE"];

var $ismapfield_temp = '<div class="input-group input-group-sm m-bot15 col-sm-4" style="float:inherit;"><span class="input-group-addon field-desc"></span><input type="text" placeholder="" class="form-control" data-field-value="yes" required="required"><span class="btnisfieldremove input-group-addon"> <i title="" data-placement="bottom" data-toggle="tooltip"  class="tooltips fa fa-minus-square" data-original-title="Remove"></i></span></div>';