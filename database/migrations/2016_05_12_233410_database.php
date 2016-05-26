<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class Database extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		//IMAGES
		
		Schema::create('image', function ($table) {
			$table->increments('id');
			$table->string('alt')->nullable();
			$table->integer('height')->nullable();
			$table->integer('width')->nullable();
			$table->string('location')->unique();
			$table->integer('size')->nullable();
		});
		
		//PERSONAL INFO
		
        Schema::create('course', function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
        });

        Schema::create('country', function ($table) {
            $table->string('code')->unique();
            $table->string('country');
        });

        Schema::create('faculty', function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('designation');
        });

        Schema::create('postal_code', function ($table) {
            $table->increments('id');
            $table->integer('prefix');
            $table->integer('sufix');
            $table->string('designation');
        });

        Schema::create('interest', function ($table) {
            $table->increments('id');
            $table->string('interest')->unique();
        });

        Schema::create('users', function ($table) {

            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->date('birthdate')->nullable();
            $table->boolean('gender')->nullable();
            $table->integer('phone')->nullable();
            $table->dateTime('confirm_date')->nullable();
            $table->text('about')->nullable();
            $table->boolean('private_email')->nullable()->default(false);
            $table->integer('points')->default(0);
            $table->boolean('carta_conducao')->nullable();
            $table->string('nif',9)->nullable();
            $table->string('localidade')->nullable();

            $table->text('token');
			
			$table->integer('image')->unsigned()->nullable();
			$table->foreign('image')->references('id')->on('image');


            $table->string('country');
            $table->integer('course')->unsigned()->nullable();
            $table->integer('postal_code')->unsigned()->nullable();
            $table->foreign('country')->references('code')->on('country');
            $table->foreign('course')->references('id')->on('course');
            $table->foreign('postal_code')->references('id')->on('postal_code');
            
            $table->boolean('admin');
            $table->timestamps();
        });

        Schema::create('volunteerinterest', function ($table) {
            $table->integer('volunteer')->unsigned();
            $table->integer('interest')->unsigned();
            $table->foreign('volunteer')->references('id')->on('users');
            $table->foreign('interest')->references('id')->on('interest');

            $table->primary(['volunteer', 'interest']);
        }); 

        Schema::create('organization', function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('address');
            $table->integer('phone')->nullable();
            $table->string('website')->nullable();
            $table->integer('facebook')->nullable();
            $table->text('about')->nullable();
            $table->timestamp('confirm_date');
			$table->integer('image')->unsigned();
			$table->foreign('image')->references('id')->on('image');
            $table->timestamps();
        });

        Schema::create('organizationinterest', function ($table) {
            $table->integer('organization')->unsigned();
            $table->integer('interest')->unsigned();
            $table->foreign('organization')->references('id')->on('organization');
            $table->foreign('interest')->references('id')->on('interest');
            
            $table->primary(['organization', 'interest']);
        });

        Schema::create('organization_page', function($table) {
            $table->increments('id');
            $table->integer('organization')->unsigned();
            $table->foreign('organization')->references('id')->on('organization');
            $table->text('mission');
            $table->text('vision');
            $table->text('values');
        });

       Schema::create('user_organization', function ($table) {
            $table->integer('volunteer')->unsigned();
            $table->integer('organization')->unsigned();
            $table->foreign('volunteer')->references('id')->on('users');
            $table->foreign('organization')->references('id')->on('organization');
            $table->timestamp('reg_date');
            $table->boolean('banned');
            $table->boolean('active');
			$table->boolean('admin');

            $table->primary(['volunteer', 'organization']);
        });

        Schema::create('group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('organization')->unsigned();
            $table->foreign('organization')->references('id')->on('organization');
			$table->integer('image')->unsigned();
			$table->foreign('image')->references('id')->on('image');
            $table->text('description');
            $table->boolean('public');
            $table->boolean('open');
            $table->boolean('active');
            $table->timestamp('created_date');
            $table->rememberToken();
            $table->timestamps();
        });

        
        Schema::create('volunteergroup', function ($table) {
            $table->integer('volunteer')->unsigned();
            $table->integer('group')->unsigned();
            $table->foreign('volunteer')->references('id')->on('users');
            $table->foreign('group')->references('id')->on('group');
			$table->boolean('admin');

            $table->primary(['volunteer', 'group']);
        });
		
		Schema::create('activity', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('group')->unsigned();
            $table->foreign('group')->references('id')->on('group');
			$table->integer('image')->unsigned();
			$table->foreign('image')->references('id')->on('image');
            $table->text('description');
            $table->boolean('public');
            $table->boolean('open');
            $table->boolean('active');
            $table->timestamp('created_date');
			$table->timestamp('init_date');
			$table->timestamp('end_date');
            $table->rememberToken();
            $table->timestamps();
        });
		
		Schema::create('volunteeractivity', function ($table) {
            $table->integer('volunteer')->unsigned();
            $table->integer('activity')->unsigned();
            $table->foreign('volunteer')->references('id')->on('users');
            $table->foreign('activity')->references('id')->on('activity');
			$table->boolean('admin');

            $table->primary(['volunteer', 'activity']);
        });
        

        Schema::create('news', function ($table) {
            $table->increments('id');
			$table->integer('image')->unsigned();
			$table->foreign('image')->references('id')->on('image');
            $table->text('title');
            $table->text('description');
            $table->timestamp('date');
			$table->timestamps();
        });


        // GAMIFICATION TABLES

        Schema::create('medal', function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('description');
        });

        Schema::create('trophy', function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('description');
        });

        
        Schema::create('medalattribution', function ($table) {
            $table->integer('volunteer')->unsigned();
            $table->integer('medal')->unsigned();
            $table->integer('organization')->unsigned();
            $table->foreign('volunteer')->references('id')->on('users');
            $table->foreign('medal')->references('id')->on('medal');
            $table->foreign('organization')->references('id')->on('organization');
            $table->timestamp('date');

            $table->primary(['volunteer', 'medal', 'organization']);
        });

        Schema::create('trophyvolunteer', function ($table) {
            $table->integer('trophy')->unsigned();
            $table->integer('volunteer')->unsigned();
            $table->foreign('volunteer')->references('id')->on('users');
            $table->foreign('trophy')->references('id')->on('trophy');
            $table->timestamp('date');

            $table->primary(['volunteer', 'trophy']);
        });

        DB::table('country')->insert(array('code'=>'AF','country'=>'Afghanistan'));
        DB::table('country')->insert(array('code'=>'AL','country'=>'Albania'));
        DB::table('country')->insert(array('code'=>'DZ','country'=>'Algeria'));
        DB::table('country')->insert(array('code'=>'AS','country'=>'American Samoa'));
        DB::table('country')->insert(array('code'=>'AD','country'=>'Andorra'));
        DB::table('country')->insert(array('code'=>'AO','country'=>'Angola'));
        DB::table('country')->insert(array('code'=>'AI','country'=>'Anguilla'));
        DB::table('country')->insert(array('code'=>'AQ','country'=>'Antarctica'));
        DB::table('country')->insert(array('code'=>'AG','country'=>'Antigua and Barbuda'));
        DB::table('country')->insert(array('code'=>'AR','country'=>'Argentina'));
        DB::table('country')->insert(array('code'=>'AM','country'=>'Armenia'));
        DB::table('country')->insert(array('code'=>'AW','country'=>'Aruba'));
        DB::table('country')->insert(array('code'=>'AU','country'=>'Australia'));
        DB::table('country')->insert(array('code'=>'AT','country'=>'Austria'));
        DB::table('country')->insert(array('code'=>'AZ','country'=>'Azerbaijan'));
        DB::table('country')->insert(array('code'=>'BS','country'=>'Bahamas'));
        DB::table('country')->insert(array('code'=>'BH','country'=>'Bahrain'));
        DB::table('country')->insert(array('code'=>'BD','country'=>'Bangladesh'));
        DB::table('country')->insert(array('code'=>'BB','country'=>'Barbados'));
        DB::table('country')->insert(array('code'=>'BY','country'=>'Belarus'));
        DB::table('country')->insert(array('code'=>'BE','country'=>'Belgium'));
        DB::table('country')->insert(array('code'=>'BZ','country'=>'Belize'));
        DB::table('country')->insert(array('code'=>'BJ','country'=>'Benin'));
        DB::table('country')->insert(array('code'=>'BM','country'=>'Bermuda'));
        DB::table('country')->insert(array('code'=>'BT','country'=>'Bhutan'));
        DB::table('country')->insert(array('code'=>'BO','country'=>'Bolivia'));
        DB::table('country')->insert(array('code'=>'BA','country'=>'Bosnia and Herzegovina'));
        DB::table('country')->insert(array('code'=>'BW','country'=>'Botswana'));
        DB::table('country')->insert(array('code'=>'BV','country'=>'Bouvet Island'));
        DB::table('country')->insert(array('code'=>'BR','country'=>'Brazil'));
        DB::table('country')->insert(array('code'=>'IO','country'=>'British Indian Ocean Territory'));
        DB::table('country')->insert(array('code'=>'VG','country'=>'British Virgin Islands'));
        DB::table('country')->insert(array('code'=>'BN','country'=>'Brunei Darussalam'));
        DB::table('country')->insert(array('code'=>'BG','country'=>'Bulgaria'));
        DB::table('country')->insert(array('code'=>'BF','country'=>'Burkina Faso'));
        DB::table('country')->insert(array('code'=>'BI','country'=>'Burundi'));
        DB::table('country')->insert(array('code'=>'KH','country'=>'Cambodia'));
        DB::table('country')->insert(array('code'=>'CM','country'=>'Cameroon'));
        DB::table('country')->insert(array('code'=>'CA','country'=>'Canada'));
        DB::table('country')->insert(array('code'=>'CV','country'=>'Cape Verde'));
        DB::table('country')->insert(array('code'=>'KY','country'=>'Cayman Islands'));
        DB::table('country')->insert(array('code'=>'CF','country'=>'Central African Republic'));
        DB::table('country')->insert(array('code'=>'TD','country'=>'Chad'));
        DB::table('country')->insert(array('code'=>'CL','country'=>'Chile'));
        DB::table('country')->insert(array('code'=>'CN','country'=>'China'));
        DB::table('country')->insert(array('code'=>'CX','country'=>'Christmas Island'));
        DB::table('country')->insert(array('code'=>'CC','country'=>'Cocos'));
        DB::table('country')->insert(array('code'=>'CO','country'=>'Colombia'));
        DB::table('country')->insert(array('code'=>'KM','country'=>'Comoros'));
        DB::table('country')->insert(array('code'=>'CD','country'=>'Congo'));
        DB::table('country')->insert(array('code'=>'CG','country'=>'Congo'));
        DB::table('country')->insert(array('code'=>'CK','country'=>'Cook Islands'));
        DB::table('country')->insert(array('code'=>'CR','country'=>'Costa Rica'));
        DB::table('country')->insert(array('code'=>'CI','country'=>'Cote D\'Ivoire'));
        DB::table('country')->insert(array('code'=>'CU','country'=>'Cuba'));
        DB::table('country')->insert(array('code'=>'CY','country'=>'Cyprus'));
        DB::table('country')->insert(array('code'=>'CZ','country'=>'Czech Republic'));
        DB::table('country')->insert(array('code'=>'DK','country'=>'Denmark'));
        DB::table('country')->insert(array('code'=>'DJ','country'=>'Djibouti'));
        DB::table('country')->insert(array('code'=>'DM','country'=>'Dominica'));
        DB::table('country')->insert(array('code'=>'DO','country'=>'Dominican Republic'));
        DB::table('country')->insert(array('code'=>'EC','country'=>'Ecuador'));
        DB::table('country')->insert(array('code'=>'EG','country'=>'Egypt'));
        DB::table('country')->insert(array('code'=>'SV','country'=>'El Salvador'));
        DB::table('country')->insert(array('code'=>'GQ','country'=>'Equatorial Guinea'));
        DB::table('country')->insert(array('code'=>'ER','country'=>'Eritrea'));
        DB::table('country')->insert(array('code'=>'EE','country'=>'Estonia'));
        DB::table('country')->insert(array('code'=>'ET','country'=>'Ethiopia'));
        DB::table('country')->insert(array('code'=>'FO','country'=>'Faeroe Islands'));
        DB::table('country')->insert(array('code'=>'FK','country'=>'Falkland Islands'));
        DB::table('country')->insert(array('code'=>'FJ','country'=>'Fiji'));
        DB::table('country')->insert(array('code'=>'FI','country'=>'Finland'));
        DB::table('country')->insert(array('code'=>'FR','country'=>'France'));
        DB::table('country')->insert(array('code'=>'GF','country'=>'French Guiana'));
        DB::table('country')->insert(array('code'=>'PF','country'=>'French Polynesia'));
        DB::table('country')->insert(array('code'=>'TF','country'=>'French Southern Territories'));
        DB::table('country')->insert(array('code'=>'GA','country'=>'Gabon'));
        DB::table('country')->insert(array('code'=>'GM','country'=>'Gambia'));
        DB::table('country')->insert(array('code'=>'GE','country'=>'Georgia'));
        DB::table('country')->insert(array('code'=>'DE','country'=>'Germany'));
        DB::table('country')->insert(array('code'=>'GH','country'=>'Ghana'));
        DB::table('country')->insert(array('code'=>'GI','country'=>'Gibraltar'));
        DB::table('country')->insert(array('code'=>'GR','country'=>'Greece'));
        DB::table('country')->insert(array('code'=>'GL','country'=>'Greenland'));
        DB::table('country')->insert(array('code'=>'GD','country'=>'Grenada'));
        DB::table('country')->insert(array('code'=>'GP','country'=>'Guadaloupe'));
        DB::table('country')->insert(array('code'=>'GU','country'=>'Guam'));
        DB::table('country')->insert(array('code'=>'GT','country'=>'Guatemala'));
        DB::table('country')->insert(array('code'=>'GN','country'=>'Guinea'));
        DB::table('country')->insert(array('code'=>'GW','country'=>'Guinea-Bissau'));
        DB::table('country')->insert(array('code'=>'GY','country'=>'Guyana'));
        DB::table('country')->insert(array('code'=>'HT','country'=>'Haiti'));
        DB::table('country')->insert(array('code'=>'HM','country'=>'Heard and McDonald Islands'));
        DB::table('country')->insert(array('code'=>'VA','country'=>'Holy See'));
        DB::table('country')->insert(array('code'=>'HN','country'=>'Honduras'));
        DB::table('country')->insert(array('code'=>'HK','country'=>'Hong Kong'));
        DB::table('country')->insert(array('code'=>'HR','country'=>'Hrvatska'));
        DB::table('country')->insert(array('code'=>'HU','country'=>'Hungary'));
        DB::table('country')->insert(array('code'=>'IS','country'=>'Iceland'));
        DB::table('country')->insert(array('code'=>'IN','country'=>'India'));
        DB::table('country')->insert(array('code'=>'ID','country'=>'Indonesia'));
        DB::table('country')->insert(array('code'=>'IR','country'=>'Iran'));
        DB::table('country')->insert(array('code'=>'IQ','country'=>'Iraq'));
        DB::table('country')->insert(array('code'=>'IE','country'=>'Ireland'));
        DB::table('country')->insert(array('code'=>'IL','country'=>'Israel'));
        DB::table('country')->insert(array('code'=>'IT','country'=>'Italy'));
        DB::table('country')->insert(array('code'=>'JM','country'=>'Jamaica'));
        DB::table('country')->insert(array('code'=>'JP','country'=>'Japan'));
        DB::table('country')->insert(array('code'=>'JO','country'=>'Jordan'));
        DB::table('country')->insert(array('code'=>'KZ','country'=>'Kazakhstan'));
        DB::table('country')->insert(array('code'=>'KE','country'=>'Kenya'));
        DB::table('country')->insert(array('code'=>'KI','country'=>'Kiribati'));
        DB::table('country')->insert(array('code'=>'KP','country'=>'Korea'));
        DB::table('country')->insert(array('code'=>'KR','country'=>'Korea'));
        DB::table('country')->insert(array('code'=>'KW','country'=>'Kuwait'));
        DB::table('country')->insert(array('code'=>'KG','country'=>'Kyrgyz Republic'));
        DB::table('country')->insert(array('code'=>'LA','country'=>'Lao People\'s Democratic Republic'));
        DB::table('country')->insert(array('code'=>'LV','country'=>'Latvia'));
        DB::table('country')->insert(array('code'=>'LB','country'=>'Lebanon'));
        DB::table('country')->insert(array('code'=>'LS','country'=>'Lesotho'));
        DB::table('country')->insert(array('code'=>'LR','country'=>'Liberia'));
        DB::table('country')->insert(array('code'=>'LY','country'=>'Libyan Arab Jamahiriya'));
        DB::table('country')->insert(array('code'=>'LI','country'=>'Liechtenstein'));
        DB::table('country')->insert(array('code'=>'LT','country'=>'Lithuania'));
        DB::table('country')->insert(array('code'=>'LU','country'=>'Luxembourg'));
        DB::table('country')->insert(array('code'=>'MO','country'=>'Macao'));
        DB::table('country')->insert(array('code'=>'MK','country'=>'Macedonia'));
        DB::table('country')->insert(array('code'=>'MG','country'=>'Madagascar'));
        DB::table('country')->insert(array('code'=>'MW','country'=>'Malawi'));
        DB::table('country')->insert(array('code'=>'MY','country'=>'Malaysia'));
        DB::table('country')->insert(array('code'=>'MV','country'=>'Maldives'));
        DB::table('country')->insert(array('code'=>'ML','country'=>'Mali'));
        DB::table('country')->insert(array('code'=>'MT','country'=>'Malta'));
        DB::table('country')->insert(array('code'=>'MH','country'=>'Marshall Islands'));
        DB::table('country')->insert(array('code'=>'MQ','country'=>'Martinique'));
        DB::table('country')->insert(array('code'=>'MR','country'=>'Mauritania'));
        DB::table('country')->insert(array('code'=>'MU','country'=>'Mauritius'));
        DB::table('country')->insert(array('code'=>'YT','country'=>'Mayotte'));
        DB::table('country')->insert(array('code'=>'MX','country'=>'Mexico'));
        DB::table('country')->insert(array('code'=>'FM','country'=>'Micronesia'));
        DB::table('country')->insert(array('code'=>'MD','country'=>'Moldova'));
        DB::table('country')->insert(array('code'=>'MC','country'=>'Monaco'));
        DB::table('country')->insert(array('code'=>'MN','country'=>'Mongolia'));
        DB::table('country')->insert(array('code'=>'MS','country'=>'Montserrat'));
        DB::table('country')->insert(array('code'=>'MA','country'=>'Morocco'));
        DB::table('country')->insert(array('code'=>'MZ','country'=>'Mozambique'));
        DB::table('country')->insert(array('code'=>'MM','country'=>'Myanmar'));
        DB::table('country')->insert(array('code'=>'NA','country'=>'Namibia'));
        DB::table('country')->insert(array('code'=>'NR','country'=>'Nauru'));
        DB::table('country')->insert(array('code'=>'NP','country'=>'Nepal'));
        DB::table('country')->insert(array('code'=>'AN','country'=>'Netherlands Antilles'));
        DB::table('country')->insert(array('code'=>'NL','country'=>'Netherlands'));
        DB::table('country')->insert(array('code'=>'NC','country'=>'New Caledonia'));
        DB::table('country')->insert(array('code'=>'NZ','country'=>'New Zealand'));
        DB::table('country')->insert(array('code'=>'NI','country'=>'Nicaragua'));
        DB::table('country')->insert(array('code'=>'NE','country'=>'Niger'));
        DB::table('country')->insert(array('code'=>'NG','country'=>'Nigeria'));
        DB::table('country')->insert(array('code'=>'NU','country'=>'Niue'));
        DB::table('country')->insert(array('code'=>'NF','country'=>'Norfolk Island'));
        DB::table('country')->insert(array('code'=>'MP','country'=>'Northern Mariana Islands'));
        DB::table('country')->insert(array('code'=>'NO','country'=>'Norway'));
        DB::table('country')->insert(array('code'=>'OM','country'=>'Oman'));
        DB::table('country')->insert(array('code'=>'PK','country'=>'Pakistan'));
        DB::table('country')->insert(array('code'=>'PW','country'=>'Palau'));
        DB::table('country')->insert(array('code'=>'PS','country'=>'Palestinian Territory'));
        DB::table('country')->insert(array('code'=>'PA','country'=>'Panama'));
        DB::table('country')->insert(array('code'=>'PG','country'=>'Papua New Guinea'));
        DB::table('country')->insert(array('code'=>'PY','country'=>'Paraguay'));
        DB::table('country')->insert(array('code'=>'PE','country'=>'Peru'));
        DB::table('country')->insert(array('code'=>'PH','country'=>'Philippines'));
        DB::table('country')->insert(array('code'=>'PN','country'=>'Pitcairn Island'));
        DB::table('country')->insert(array('code'=>'PL','country'=>'Poland'));
        DB::table('country')->insert(array('code'=>'PT','country'=>'Portugal'));
        DB::table('country')->insert(array('code'=>'PR','country'=>'Puerto Rico'));
        DB::table('country')->insert(array('code'=>'QA','country'=>'Qatar'));
        DB::table('country')->insert(array('code'=>'RE','country'=>'Reunion'));
        DB::table('country')->insert(array('code'=>'RO','country'=>'Romania'));
        DB::table('country')->insert(array('code'=>'RU','country'=>'Russian Federation'));
        DB::table('country')->insert(array('code'=>'RW','country'=>'Rwanda'));
        DB::table('country')->insert(array('code'=>'SH','country'=>'St. Helena'));
        DB::table('country')->insert(array('code'=>'KN','country'=>'St. Kitts and Nevis'));
        DB::table('country')->insert(array('code'=>'LC','country'=>'St. Lucia'));
        DB::table('country')->insert(array('code'=>'PM','country'=>'St. Pierre and Miquelon'));
        DB::table('country')->insert(array('code'=>'VC','country'=>'St. Vincent and the Grenadines'));
        DB::table('country')->insert(array('code'=>'WS','country'=>'Samoa'));
        DB::table('country')->insert(array('code'=>'SM','country'=>'San Marino'));
        DB::table('country')->insert(array('code'=>'ST','country'=>'Sao Tome and Principe'));
        DB::table('country')->insert(array('code'=>'SA','country'=>'Saudi Arabia'));
        DB::table('country')->insert(array('code'=>'SN','country'=>'Senegal'));
        DB::table('country')->insert(array('code'=>'CS','country'=>'Serbia and Montenegro'));
        DB::table('country')->insert(array('code'=>'SC','country'=>'Seychelles'));
        DB::table('country')->insert(array('code'=>'SL','country'=>'Sierra Leone'));
        DB::table('country')->insert(array('code'=>'SG','country'=>'Singapore'));
        DB::table('country')->insert(array('code'=>'SK','country'=>'Slovakia'));
        DB::table('country')->insert(array('code'=>'SI','country'=>'Slovenia'));
        DB::table('country')->insert(array('code'=>'SB','country'=>'Solomon Islands'));
        DB::table('country')->insert(array('code'=>'SO','country'=>'Somalia'));
        DB::table('country')->insert(array('code'=>'ZA','country'=>'South Africa'));
        DB::table('country')->insert(array('code'=>'GS','country'=>'South Georgia and the South Sandwich Islands'));
        DB::table('country')->insert(array('code'=>'ES','country'=>'Spain'));
        DB::table('country')->insert(array('code'=>'LK','country'=>'Sri Lanka'));
        DB::table('country')->insert(array('code'=>'SD','country'=>'Sudan'));
        DB::table('country')->insert(array('code'=>'SR','country'=>'Suriname'));
        DB::table('country')->insert(array('code'=>'SJ','country'=>'Svalbard & Jan Mayen Islands'));
        DB::table('country')->insert(array('code'=>'SZ','country'=>'Swaziland'));
        DB::table('country')->insert(array('code'=>'SE','country'=>'Sweden'));
        DB::table('country')->insert(array('code'=>'CH','country'=>'Switzerland'));
        DB::table('country')->insert(array('code'=>'SY','country'=>'Syrian Arab Republic'));
        DB::table('country')->insert(array('code'=>'TW','country'=>'Taiwan'));
        DB::table('country')->insert(array('code'=>'TJ','country'=>'Tajikistan'));
        DB::table('country')->insert(array('code'=>'TZ','country'=>'Tanzania'));
        DB::table('country')->insert(array('code'=>'TH','country'=>'Thailand'));
        DB::table('country')->insert(array('code'=>'TL','country'=>'Timor-Leste'));
        DB::table('country')->insert(array('code'=>'TG','country'=>'Togo'));
        DB::table('country')->insert(array('code'=>'TK','country'=>'Tokelau'));
        DB::table('country')->insert(array('code'=>'TO','country'=>'Tonga'));
        DB::table('country')->insert(array('code'=>'TT','country'=>'Trinidad and Tobago'));
        DB::table('country')->insert(array('code'=>'TN','country'=>'Tunisia'));
        DB::table('country')->insert(array('code'=>'TR','country'=>'Turkey'));
        DB::table('country')->insert(array('code'=>'TM','country'=>'Turkmenistan'));
        DB::table('country')->insert(array('code'=>'TC','country'=>'Turks and Caicos Islands'));
        DB::table('country')->insert(array('code'=>'TV','country'=>'Tuvalu'));
        DB::table('country')->insert(array('code'=>'VI','country'=>'US Virgin Islands'));
        DB::table('country')->insert(array('code'=>'UG','country'=>'Uganda'));
        DB::table('country')->insert(array('code'=>'UA','country'=>'Ukraine'));
        DB::table('country')->insert(array('code'=>'AE','country'=>'United Arab Emirates'));
        DB::table('country')->insert(array('code'=>'GB','country'=>'United Kingdom of Great Britain & N. Ireland'));
        DB::table('country')->insert(array('code'=>'UM','country'=>'United States Minor Outlying Islands'));
        DB::table('country')->insert(array('code'=>'US','country'=>'United States of America'));
        DB::table('country')->insert(array('code'=>'UY','country'=>'Uruguay'));
        DB::table('country')->insert(array('code'=>'UZ','country'=>'Uzbekistan'));
        DB::table('country')->insert(array('code'=>'VU','country'=>'Vanuatu'));
        DB::table('country')->insert(array('code'=>'VE','country'=>'Venezuela'));
        DB::table('country')->insert(array('code'=>'VN','country'=>'Viet Nam'));
        DB::table('country')->insert(array('code'=>'WF','country'=>'Wallis and Futuna Islands'));
        DB::table('country')->insert(array('code'=>'EH','country'=>'Western Sahara'));
        DB::table('country')->insert(array('code'=>'YE','country'=>'Yemen'));
        DB::table('country')->insert(array('code'=>'ZM','country'=>'Zambia'));
        DB::table('country')->insert(array('code'=>'ZW','country'=>'Zimbabwe'));
		
		
		$description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
		Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
		
		DB::table('image')->insert(array('alt' => 'An image', 'height' => 90, 'width' => 90, 'location' => '../../public/src/imgs/voluntariado_atividades.jpg', 'size' => 900));
		$lastId = DB::table('image')->max('id');
		DB::table('news')->insert(array('image' => $lastId, 'title' => 'Título 1' , 'description' => $description, 'date' => Carbon\Carbon::now()));
		
		DB::table('image')->insert(array('alt' => 'Another image', 'height' => 90, 'width' => 90, 'location' => '../../public/src/imgs/voluntariado_up.jpg', 'size' => 900));
		$lastId = DB::table('image')->max('id');
		DB::table('news')->insert(array('image' => $lastId, 'title' => 'Título 2' , 'description' => $description, 'date' => Carbon\Carbon::now()));
		
		DB::table('image')->insert(array('alt' => 'Yet another image', 'height' => 90, 'width' => 90, 'location' => '../../public/src/imgs/voluntariado3.jpg', 'size' => 900));
		$lastId = DB::table('image')->max('id');
		DB::table('news')->insert(array('image' => $lastId, 'title' => 'Título 3' , 'description' => $description, 'date' => Carbon\Carbon::now()));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trophyvolunteer');
        Schema::drop('medalattribution');
        Schema::drop('trophy');
        Schema::drop('medal');
        Schema::drop('news');
        Schema::drop('volunteergroup');
        Schema::drop('group');
        Schema::drop('user_organization');
        Schema::drop('organizationinterest');
        Schema::drop('organization');
		Schema::drop('volunteerinterest');
        Schema::drop('interest');
        Schema::drop('postal_code');
        Schema::drop('faculty');
        Schema::drop('country');
        Schema::drop('course');
		Schema::drop('image');
		Schema::drop('activity');
		Schema::drop('volunteeractivity');
    }
}
