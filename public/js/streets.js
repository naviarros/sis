$(document).ready(function(){
	// Cities or Provinces in Philippines
	var ncr = ['Manila City', 'Quezon City', 'San Juan', 'Caloocan', 'Las Pinas', 'Makati', 'Malabon', 'Marikina', 'Mandaluyong', 'Navotas', 'Paranaque', 'Pasay', 'Pasig', 'Taguig', 'Valenzuela'];
	var region1 = ['Ilocos Norte', 'Ilocos Sur', 'La Union', 'Pangasinan', 'Dagupan'];
	var region2 = ['Batanes', 'Cagayan', 'Isabela', 'Nueva Vizcaya', 'Quirino', 'Cauayan', 'Ilagan', 'Santiago', 'Tuguegarao'];
	var region3 = ['Aurora', 'Bataan', 'Bulacan', 'Nueva Ecija', 'Pampanga', 'Tarlac', 'Zambales'];
	var region4a = ['Cavite', 'Laguna', 'Batangas', 'Rizal', 'Quezon'];
	var region4b = ['Mindoro', 'Marinduque', 'Romblon', 'Palawan'];
	var region5 = ['Albay', 'Camarines Norte', 'Camarines Sur', 'Sorsogon', 'Catanduanes', 'Masbate', 'Legazpi'];
	var region6 = ['Aklan', 'Antique', 'Capiz', 'Guimaras', 'Iloilo', 'Negros Occidental'];
	var region7 = ['Cebu', 'Bohol', 'Negros Oriental', 'Siquijor'];
	var region8 = ['Biliran', 'Eastern Samar', 'Leyte', 'Northern Samar', 'Samar', 'Southern Leyte'];
	var region9 = ['Zamboanga del Norte', 'Zamboanga Sibugay', 'Zamboanga del Sur'];
	var region10 = ['Bukidnon', 'Camiguin Island', 'Lanao del Norte', 'Misamis Occidental', 'Misamis Oriental'];
	var region11 = ['Compostela Valley', 'Davao del Norte', 'Davao del Sur', 'Davao Oriental', 'Davao Occiedental'];
	var region12 = ['South Cotabato', 'Cotabato', 'Sultan Kudarat', 'Sarangani', 'General Santos'];
	var region13 = ['Agusan del Norte', 'Agusan del Sur', 'Dinagat Islands', 'Surigao del Norte', 'Surigao del Sur'];
	var armm = ['Basilan', 'Lanao del Sur', 'Maguindanao', 'Sulu', 'Tawi-Tawi'];
	var car = ['Abra', 'Apayao', 'Benguet', 'Ifugao', 'Kalinga', 'Mountain Province'];
	//---------------------------------------------------------------------------------------------

	// Municipalities in CAR
	var abra = ['Bangued', 'Boliney', 'Bucay', 'Bucloc', 'Daguioman', 'Danglas', 'Dolores', 'La Paz', 'Lacub', 'Langangilang', 'Lagayan', 'Langiden', 'Licuan-Baay (Licuan)', 'Luba', 'Malibcong', 'Manabo', 'Peñarrubia', 'Pidigan', 'Pilar', 'Sallapadan', 'San Isidro', 'San Juan', 'San Quintin', 'Tayum', 'Tineg', 'Tubo', 'Villaviciosa'];
	var apayao = ['Calanasan', 'Conner', 'Flora', 'Kabugao', 'Luna', 'Pudtol', 'Santa Marcela'];
	var benguet = ['Atok', 'Baguio', 'Bakun', 'Bokon', 'Buguias', 'Itogon', 'Kabayan', 'Kapangan', 'Kibungan', 'La Trinidad', 'Mankayan', 'Sablan', 'Tuba', 'Tublay'];
	var ifugao = ['Aguinaldo', 'Alfonso Lista', 'Asipulo', 'Banaue', 'Hingyon', 'Hungduan', 'Kiangan', 'Lagawe', 'Lamut', 'Mayoyao', 'Tinoc'];
	var kalinga = ['Balbalan', 'Lubuagan', 'Pasil', 'Pinukpuk', 'Rizal', 'Tabuk', 'Tanudan', 'Tinglayan'];
	var mtprovince = ['Barlig', 'Bauko', 'Besao', 'Bontoc', 'Natonin', 'Paracelis', 'Sabangan', 'Sadanga', 'Sagada', 'Tadian'];
	//------------------------------------------------------------------------------------------------
	
	// Barangays in Abra
	var bangued = ['Agtangao', 'Angad', 'Bañacao', 'Bangbangar', 'Cabuloan', 'Calaba', 'Cosili East (Proper)', 'Cosili West (Buaya)', 'Dangdangla', 'Lingtan', 'Lipcan', 'Lubong', 'Macarcarmay', 'Macray', 'Malita', 'Maoay', 'Palao', 'Patucannay', 'Sagap', 'San Antonio', 'Santa Rosa', 'Sao-atan', 'Sappaac', 'Tablac (Calot)', 'Zone 1 Poblacion (Nalasin)', 'Zone 2 Poblacion (Consiliman)', 'Zone 3 Poblacion (Lalaud)', 'Zone 4 Poblacion (Town Proper)', 'Zone 5 Poblacion (Bo. Barikir)', 'Zone 6 Poblacion (Sinapangan)', 'Zone 7 Poblacion (Baliling)'];
	var boliney = ['Amti', 'Bao-yan', 'Danac East', 'Danac West', 'Dao-angan', 'Dumagas', 'Kilong-Olao', 'Poblacion (Boliney)'];
	var bucay = ['Abang', 'Bangbangcag', 'Bangcagan', 'Banglolao', 'Bugbog', 'Calao', 'Dugong', 'Labon', 'Layugan', 'Madalipay', 	'North Poblacion', 'Pagala', 'Pakiling', 'Palaquio', 'Patoc', 'Quimloong', 'Salnec', 'San Miguel', 'Siblong', 'South Poblacion', 'Tabiog'];
	var bucloc = ['Ducligan', 'Labaan', 'Lamao (Poblacion)', 'Lingay'];
	var daguioman = ['Ableg', 'Cabaruyan', 'Pikek', 'Tui'];
	var danglas = ['Abaquid', 'Cabaruan', 'Caupasan', 'Danglas', 'Nagaparan', 'Padangitan', 'Pangal'];
	var dolores = ['Bayaan', 'Cabaroan', 'Calumbaya', 'Cardona', 'Isit', 'Kimmalaba', 'Libtec', 'Lub-lubba', 'Mudiit', 'Namit-ingan', 'Pacac', 'Poblacion', 'Salucag', 'Talogtog', 'Taping'];
	var lapaz = ['Benben (Bonbon)', 'Bulbulala', 'Buli', 'Canan (Gapan)', 'Liguis', 'Malabbaga', 'Mudeng', 'Pidipid', 'Poblacion', 'San Gregorio', 'Toon', 'Udangan'];
	var lacub = ['Bacag', 'Buneg', 'Guinguinabang', 'Lan-ag', 'Pacoc', 'Poblacion (Talampac)'];
	//-----------------------------------------------------------------------------------------------

	// Municipalities in ARMM
	var basilan = ['Maluso', 'Lantawan', 'Sumisip', 'Tuburan', 'Tipo-tipo'];
	var lanaodelsur = ['Amai Manabilang (Bumbaran)', 'Bacolod-Kalawi (Bacolod-Grande)', 'Balabagan', 'Balindong (Watu)', 'Bayang', 'Binidayan', 'Buadiposo-Buntong', 'Bubong', 'Butig', 'Calanogas', 'Ditsaan-Ramain', 'Ganassi', 'Kapai', 'Kapatagan', 'Lumba-Bayabao (Maguing)', 'Lumbaca-Unayan', 'Lumbatan', 'Lumbayanague', 'Madalum', 'Madamba', 'Maguing', 'Malabang', 'Marantao', 'Marawi', 'Marogong', 'Masiu', 'Mulondo', 'Pagayawan (Tatarikan)', 'Piagapo', 'Picong (Sultan Gumander)', 'Poona Bayabao (Gata)', 'Pualas', 'Saguiaran', 'Sultan Dumalondong', 'Tagoloan II', 'Tamparan', 'Taraka', 'Tubaran', 'Tugaya', 'Wao'];
	var  maguindanao = ['Barira', 'Buldon', 'Datu Odin Sinuat (Dinaig)', 'Kabuntalan', 'Matanog', 'Parang', 'Sultan Kudarat', 'Upi', 'Sultan Mastura', 'Datu Blah T. Sinsuat', 'Northern Kabuntalan'];
	var sulu = ['Hadji Panglima Tahil (Marunggas)', 'Indanan', 'Jolo', 'Maimbung', 'Pangutaran', 'Parang', 'Patikul', 'Talipao', 'Banguingui (Tongkil)', 'Kalingalan Caluang', 'Lugus', 'Luuk', 'Old Panamao', 'Omar', 'Pandami', 'Panglima Estino (New Panamao)', 'Pata', 'Siasi', 'Tapul'];
	//----------------------------------------------------------------------------------------
	
	// Barangays in Sulu 
	var hadji = ['Bangas (Poblacion)', 'Bubuan', 'Kabuukan', 'Pag-asinan', 'Teomabal'];
	var indanan = ['Adjid', 'Bangalan', 'Bato-bato', 'Buanza', 'Bud-Taran', 'Bunut', 'Jati-Tunggal', 'Kabbon Maas', 'Kagay', 'Kajatian', 'Kan Islam', 'Kandang Tukay', 'Karawan', 'Katian','Kuppong', 'Lambayong', 'Langpas', 'Licup', 'Malimbaya', 'Manggis', 'Manilop', 'Paligue', 'Panabuan', 'Panglima Misuari (Sasak)', 'Pasil', 'Poblacion (Indanan)', 'Sapah Malaum', 'Sawaki', 'Sionogan', 'Tagbak', 'Timbangan', 'Tubig Dakulah', 'Tubig Parang', 'Tumantangis'];
	var jolo = ['Alat', 'Asturias', 'Bus-Bus', 'Takut Takut', 'Tulay', 'San Ray Mundo', 'Chinese Pier', 'Walled City'];
	var maimbung = ['Anak Jati', 'Bato Ugis', 'Bualo Lahi', 'Bualo Lipid', 'Bulabog', 'Duhol Kabbon', 'Gulangan', 'Ipil', 'Kandang', 'Kapok-Punggol', 'Kulasi', 'Labah', 'Lagasan Asibih', 'Lantong', 'Lapa', 'Laud Kulasi', 'Laum Maimbung', 'Lower Tambaking', 'Lunggang', 'Matatal', 'Patao', 'Poblacion (Maimbung)', 'Ratag Limbon', 'Tabu-Bato', 'Tandu Patong', 'Tubig-Samin', 'Upper Tambaking'];
	var pangutaran = ['Alu Bunah','Bangkilay','Kawitan','Kehi Niog','Lantong Babag','Lumah Dapdap','Pandan Niog','Panducan','Panitikan','Patutol','Se-ipang','Simbahan (Poblacion)','Suang Bunah','Tonggasang','Tubig Nonok','Tubig Sallang'];
	var parang = ['Alu Layag-Layag','Alu Pangkoh','Bagsak','Bawisan','Biid','Bukid','Buli Bawang','Buton','Buton Mahablo','Danapa','Duyan Kabao','Gimba Lagasan','Kaha','Kahoy Sinah','Kanaway','Kutah Sairap','Lagasan Higad','Lanao Dakula','Laum Buwahan','Laum Suwah','Liang','Linuho','Lipunos','Lower Sampunay','Lumbaan Mahaba','Lungan Gitong','Lupa Abu','Nonokan','Paugan','Payuhan','Piyahan','Poblacion (Parang)','Saldang','Sampunay','Silangkan','Taingting','Tikong','Tukay','Tumangas','Wanni Piyanjihan'];
	var patikul = ['Anuling','Bakong','Bangkal','Bonbon','Buhanginan (Darayan)','Bungkaung','Danag','Gandasuli','Igasan','Kabbon Takas','Kadday Mampallam','Kan Ague','Kaunayan','Langhub','Latih','Liang','Maligay','Mauboh','Pangdanon','Panglayahan','Pansul','Patikul Higad','Sandah','Taglibi (Poblacion)','Tandu-Bagua','Tanum','Taung','Timpok','Tugas','Umangay'];
	var talipao = ['Andalan','Bagsak','Bandang','Bilaan (Poblacion)','Bud Bunga','Buntod','Buroh','Dalih','Gata','Kabatuhan Bilaan','Kabatuhan Tiis','Kabungkol','Kagay','Kahawa','Kandaga','Kanlibot','Kiutaan','Kuhaw','Kulamboh','Kuttong','Lagtoh','Lambanah','Liban','Liu-Bud Pantao','Lower Binuang','Lower Kamuntayan','Lower Laus','Lower Sinumaan','Lower Talipao','Lumbayao','Lumping Pigih Daho','Lungkiaban','Mabahay','Mahala','Mampallam','Marsada','Mauboh','Mungit-mungit','Niog-Sangahan','Pantao','Samak','Talipao Proper','Tampakan','Tiis','Tinggah','Tubod','Tuyang','Upper Binuang','Upper Kamuntayan','Upper Laus','Upper Sinumaan','Upper Talipao'];
	var banguingui = ['Bakkaan','Bangalaw','Danao','Dungon','Kahikukuk','Luuk (Poblacion)','North Paarol','Sigumbal','South Paarol','Tabialan','Tainga-Bakkao','Tambun-bun','Tattalan','Tinutungan'];
	var kalingalan = ['Kambing','Kanlagay','Karungdong (Poblacion)','Masjid Bayle','Masjid Punjungan','Pang','Pangdan Pangdan','Pitogo','Tunggol'];
	var lugus = ['Alu Bus-Bus','Alu-Duyong','Bas Lugus','Gapas Rugasan','Gapas Tubig Tuwak','Huwit-huwit Bas Nonok','Huwit-huwit Proper','Kutah Parang','Laha','Larap','Lugus Proper','Mangkallay','Mantan','Pait','Parian Kayawan','Sibul','Tingkangan'];
	var luuk = ['Bual','Guimbaun','Kan-Bulak','Kan-Mindus','Lambago','Lianutan','Lingah','Mananti','Niog-niog','Tandu-Bato','Tubig-Puti (Poblacion)','Tulayan Island'];
	var oldpanamao = ['Asin','Bakud','Bangday','Baunoh','Bitanag','Bud Seit','Bulangsi','Datag','Kamalig','Kan Asaali','Kan Ukol','Kan-Dayok','Kan-Sipat','Kawasan','Kulay-kulay','Lakit','Lower Patibulan','Lunggang','Parang','Pugad Manaul','Puhagan','Seit Higad','Seit Lake (Poblacion)','Su-uh','Tabu Manuk','Tandu-tandu','Tayungan','Tinah','Tubig Gantang','Tubig Jati','Upper Patibulan'];
	var omar = ['Andalan','Angilan','Capual Island','Huwit-huwit','Lahing-Lahing','Niangkaan','Sucuban','Tangkuan'];
	var pandami = ['Baligtang','Bud sibaud','Hambilan','Kabbon','Lahi','Lapak','Laud Sibaud','Malanta','Mamanok','North Manubul','Parian Dakula','Sibaud Proper','Siganggang','South Manubul','Suba-suba','Tenga Manubul'];
	var panglimaestino = ['Gagguil','Gata-gata','Jinggan','Kamih-Pungud','Lihbug Kabaw','Likbah','Lubuk-lubuk','Marsada','Paiksa','Pandakan','Punay (Poblacion)','Tiptipon'];
	var pata = ['Andalan','Daungdong','Kamawi','Kanjarang','Kayawan (Poblacion)','Kiput','Likud','Luuk-tulay','Niog-niog','Patian','Pisak-pisak','Saimbangon','Sangkap','Timuddas'];
	var siasi = ['Bakud','Buan','Bulansing Tara','Bulihkullul','Campo Islam','Duggo','Duhol Tara','East Kungtad','East Sisangat','Ipil','Jambangan','Kabubu','Kong-Kong Laminusa','Kud-kud','Kungtad West','Latung','Luuk Laminusa','Luuk Tara','Manta','Minapan','Nipa-nipa','North Laud','North Manta','North Musu Laud','North Silumpak','Pislong','Poblacion (Campo Baro)','Punungan','Puukan Laminusa','Ratag','Sablay','Sarukot','Siburi','Singko','Siokalan','Showing','Sipanding','Sisangat','Siundoh','South Musu Laud','South Silumpak','Southwestern Bulikullul','Subah Buaya','Tampakan Laminusa','Tengah Laminusa','Tong Laminusa','Tong-tong','Tonglabah','Tubig Kutah','Tulling'];
	var tapul = ['Alu-Kabingaan','Banting','Hawan','Kalang (Poblacion)','Kamaunggi','Kanaway','Kanmangon','Kaumpang','Pagatpat','Pangdan','Puok','Sayli','Sumambat','Tangkapaan','Tulakan'];
	// -----------------------------------------------------------------------------------------------


	// Barangays in Lanao del Sur
	var amaimanabilang = ['Bagumbayan', 'Bandara-Ingud', 'Comara (Potre Maamor)', 'Francfort', 'Lambanogan', 'Lico', 'Mansilano', 'Natangcopan', 'Pagalamatan', 'Pagonayan', 'Penud', 'Piagma', 'Poblacion (Apartfort)', 'Ranao-Baning', 'Salam', 'Sigu-an', 'Sumugot'];
	var bacolodkalawi = ['Ampao', 'Bagoaingud', 'Balut', 'Barua', 'Buadiawani', 'Bubong', 'Daramoyod', 'Dilabayan', 'Dipatuan', 'Gandamato', 'Gurain', 'Ilian', 'Lama', 'Liawao 		', 'Lumbaca-Ingud', 'Madanding', 'Orong', 'Pindolonan', 'Poblacion I', 'Poblacion II', 'Raya', 'Rorowan', 'Sugod', 'Tambo', 'Tuka I', 'Tuka II'];
	var balabagan = ['Banago', 'Barorao', 'Batuan', 'Budas', 'Calilangan', 'Igabay', 'Magulaleng Occidental', 'Magulaleng Oriental', 'Molimoc', 'Narra', 'Plasan', 'Purakan', 'Buisan (Bengabeng)', 'Buenavista', 'Lorenzo', 'Lower Itil', 'Macao', 'Poblacion (Sultan Macaraub Masjid)', 'Upper Itil', 'Bagoaingud', 'Ilian', 'Lumbac', 'Matampay', 'Matanog', 'Pindolonan', 'Tataya'];
	var balindong = ['Abaga (Mapantao)', 'Poblacion (Balindong)', 'Pantaragoo', 'Bantogan Wato', 'Barit', 'Bubong', 'Bubong Cadapaan', 'Borakis', 'Bualan', 'Cadapaan', 'Cadayonan', 'Kaluntay', 'Dadayag', 'Dado', 'Dibarusan', 'Dilausan', 'Dimarao', 'Ingud', 'Lalabuan', 'Lilod', 'Lumbayao', 'Limbo', 'Lumbaca Lalan', 'Lumbac Wato', 'Magarang', 'Nusa Lumba Ranao', 'Padila', 'Pagayawan', 'Paigoay', 'Raya', 'Salipongan', 'Talub', 'Tomarompong', 'Tantua Raya', 'Tuka Bubong', 'Bolinsong', 'Lati', 'Mala-ig'];
	var bayang = ['Bagoaingud', 'Bairan (Poblacion)', 'Bandingun', 'Biabi', 'Bialaan', 'Bubong Lilod', 'Bubong Raya', 'Cadayonan', 'Cadingilan Occidental', 'Cadingilan Oriental', 'Condaraan Pob. (Condaraan Dimadap)', 'Cormatan', 'Gandamato', 'Ilian', 'Lalapung Central', 'Lalapung Proper', 'Lalapung Upper', 'Linao', 'Linuk (Poblacion)', 'Liong', 'Lumbac', 'Cadayonan Lumbac', 'Maliwanag', 'Mapantao', 'Mimbalawag', 'Palao', 'Pama-an', 'Pamacotan', 'Pantar', 'Parao', 'Patong', 'Bayang Pobl.', 'Porotan', 'Rantian', 'Cadayonan Raya', 'Rinabor', 'Samporna (Poblacion)', 'Sapa', 'Silid', 'Sugod', 'Sultan Pandapatan', 'Sumbag (Poblacion)', 'Tagoranao', 'Tangcal', 'Tangcal Proper', 'Tomarompong', 'Tomongcal Ligi', 'Torogan', 'Tuca (Poblacion)'];
	var binidayan = ['Badak', 'Baguiangun', 'Balut Maito', 'Basak', 'Bubong Cabasaran', 'Bubonga-Ranao', 'Dansalan Dacsula', 'Ingud', 'Kialilidan', 'Lumbac', 'Macaguiling', 'Madaya', 'Magonaya', 'Maindig', 'Masolun', 'Bario Olama', 'Pagalamatan', 'Pantar', 'Picalilangan', 'Picotaan', 'Pindolonan', 'Poblacion', 'Soldaroro', 'Tambac', 'Timbangan', 'Tuca'];
	var buadiposo = ['Bacolod', 'Bangon', 'Buadiposo Lilod', 'Buadiposo Proper', 'Bubong', 'Buntong Proper', 'Cadayonan', 'Dansalan', 'Gata', 'Kalakala', 'Katogonan', 'Lumbac', 'Lumbatan Manacab', 'Lumbatan Pataingud', 'Manacab (Poblacion)', 'Minanga (Buntong)', 'Paling', 'Pindolonan', 'Pualas', 'Buadiposo Raya', 'Sapot', 'Tangcal', 'Tarik', 'Tuka', 'Bangon Proper', 'Raya Buntong (Buntong East)', 'Lunduban (Ragondingan)', 'Ragondingan East', 'Ragondingan Proper', 'Ragondingan West', 'Boto Ragondingan', 'Datu Tambara', 'Dirisan'];
	var bubong = ['Bagoaingud', 'Bansayan', 'Basingan', 'Batangan', 'Bualan', 'Poblacion (Bubong)', 'Bubonga Didagun', 'Carigongan', 'Bacolod', 'Dilabayan', 'Dimapatoy', 'Dimayon Proper', 'Diolangan', 'Guiguikun', 'Dibarosan', 'Madanding', 'Malungun', 'Masorot', 'Matampay Dimarao', 'Miabalawag', 'Montiaan', 'Pagayawan', 'Palao', 'Panalawan', 'Pantar', 'Pindoguan', 'Polayagan', 'Ramain Bubong', 'Rogero', 'Salipongan', 'Sunggod', 'Taboro', 'Dalaon', 'Dimayon', 'Pindolonan', 'Punud'];
	var butig = ['Butig Proper', 'Cabasaran', 'Coloyan Tambo', 'Dilabayan', 'Dolangan', 'Pindolonan', 'Bayabao Poblacion', 'Poktan', 'Ragayan', 'Raya', 'Samer (Dama)', 'Sandab Madaya', 'Sundig', 'Tiowi', 'Timbab', 'Malungun'];
	var calanogas = ['Bubonga Ranao', 'Calalaoan (poblacion)', 'Gas', 'Inudaran', 'Inoma', 'Luguna', 'Mimbalawag', 'Ngingir', 'Pagalongan', 'Panggawalupa', 'Pantaon', 'Piksan', 'Pindolonan', 'Punud', 'Tagoranao', 'Taliboboka', 'Tambac'];
	var ditsaan = ['Bago a Ingud', 'Bayabao', 'Buada Babai', 'Buadi Alao', 'Buadi Oloc', 'Pagalongan Buadi Dingan', 'Dado', 'Dangimprampiai', 'Darimbang', 'Dilausan', 'Ditsaan Proper', 'Gadongan', 'Pagalongan Ginaopan', 'Barimbingan', 'Baclayan Lilod', 'Baclayan Raya', 'Buayaan Lilod', 'Bubong Dangiprampiai', 'Buayaan Raya', 'Linamon', 'Lumbatan Ramain', 'Buayaan Madanding', 'Maindig Ditsaan', 'Mandara', 'Maranao Timber', 'Pagalongan Proper', 'Pagalongan Masioon', 'Polo', 'Pugaan', 'Ramain Poblacion', 'Ramain Proper', 'Rantian', 'Sundiga Bayabao', 'Talub', 'Sultan Pangadapan', 'Upper Pugaan'];
	var ganassi = ['Bagoaingud', 'Balintad', 'Barit', 'Bato Batoray', 'Campong a Raya', 'Gadongan', 'Gui', 'Linuk', 'Lumbac','Macabao', 'Macaguiling', 'Pagalongan', 'Panggawalupa', 'Pantaon A', 'Para-aba', 'Pindulonan', 'Poblacion', 'Baya','Sogod Madaya', 'Tabuan', 'Taganonok', 'Taliogon', 'Masolun', 'Lumbacaingud', 'Sekun Matampay', 'Dapaan', 'Balintad A', 'Barorao', 'Campong Sabela', 'Pangadapun', 'Pantaon', 'Pamalian'];
	var kapatagan = ['Bakikis', 'Barao', 'Bongabong', 'Daguan', 'Inudaran', 'Kabaniakawan', 'Kapatagan', 'Lusain', 'Matimos', 'Minimao', 'Pinantao', 'Salaman', 'Sigayan', 'Tabuan', 'Upper Igabay'];
	var lumbatan = ['Alog', 'Gandamatu', 'Bayasungen (Raya Macadar)', 'Buad', 'Budi', 'Dago-ok', 'Dalama', 'Dalipuga', 'Lalapung', 'Lumbac', 'Lumbac Bacayawan (Tomarumpong Macadar / Aman village)', 'Lunay', 'Sugoda Tambac', 'Macadar' , 'Madaya', 'Minanga Macadar', 'Pantar', 'Picotaan', 'Poblacion (Lumbatan)', 'Buadi Apha', 'Tambac Oriental', 'Tambac Occidental', 'Bubong Macadar', 'Penaring', 'Ligue'];
	var lumbayanague = ['Bagoaingud', 'Balaigay', 'Bualan', 'Cadingilan', 'Casalayan', 'Dala (Dalama)', 'Dilimbayan', 'Cabuntungan', 'Lamin', 'Diromoyod', 'Kabasaran (Poblacion)', 'Nanagun', 'Mapantao-Balangas', 'Miniros', 'Pantaon', 'Pindolonan', 'Pitatanglan', 'Poctan', 'Singcara', 'Wago', 'Cadayonan', 'Cadingilan A'];
	var madalum = ['Abaga', 'Bacayawan', 'Bago a Ingud', 'Basak', 'Bato', 'Bubong', 'Cabasaran', 'Cadayonan', 'Kormatan', 'Dandamun', 'Diampaca', 'Dibarosan', 'Dilausan', 'Gadongan', 'Gurain', 'Liangan I', 'Liangan II', 'Lilitun', 'Linao', 'Linuk', 'Madaya', 'Pagayawan', 'Poblacion', 'Pokilan', 'Punud', 'Raya', 'Riray', 'Sabanding', 'Salongabanding', 'Sugod', 'Tamporong', 'Tongantongan', 'Udangun', 'Lumbac', 'Paridi-Kalimodan', 'Racotan', 'Padian Torogan I', 'Sogod Koloy'];
	var madamba = ['Balintad', 'Balagunun', 'Bawang', 'Biabe', 'Bubong Uyaan (Liyawaw a Uyaan)', 'Cabasaran', 'Dibarusan', 'Lakitan', 'Liangan', 'Linuk', 'Lumbaca Ingud', 'Palao (Naga Manardas Barangay)', 'Pantaon', 'Pantar', 'Madamba', 'Punud (Murepaga o Shakba sa Lawasa Eg)', 'Tubaran', 'Tambo', 'Tuca', 'Uyaan Proper (poblacion)', 'Tulay', 'Ilian', 'Pagayonan', 'Pangadapan'];
	var malabang = ['Bacayawan', 'Badak Lumao', 'Bagoaingud', 'Banday', 'Betayan', 'Boniga', 'BPS Village', 'Bunk House', 'Cabasaran (South)', 'Calembog', 'Calibagat', 'Campo Muslim', 'China Town (Poblacion)', 'Corahab', 'Diamaro', 'Inandayan', 'Jose Abad Santos', 'Lamin', 'Mable', 'Macuranding', 'Madaya', 'Mananayo', 'Manggahan', 'Masao', 'Matalin','Matampay', 'Matling', 'Montay', 'Pasir', 'Pialot', 'Rebocun', 'Sarang', 'Sumbagarogong', 'Tacub', 'Tambara', 'Tiongcop', 'Tubok'];
	var marogong = ['Balut', 'Bagumbayan', 'Bitayan', 'Bolawan', 'Bonga', 'Cabasaran', 'Cahera', 'Cairantana', 'Canibongan', 'Diragun', 'Mantailoco', 'Mapantao', 'Marogong East', 'Marogong Proper (Poblacion)', 'Mayaman', 'Pabrica', 'Paigoay Coda', 'Pasayanun', 'Piangologan (Lilimo)', 'Puracan', 'Romagondong', 'Sarang', 'Cadayonan', 'Calumbog'];
	var pagayawan = ['Ayong', 'Bandara Ingud', 'Bangon (Poblacion)', 'Biala-an', 'Diampaca', 'Guiarong', 'Ilian', 'Madang', 'Mapantao', 'Ngingir (Kabasaran)', 'Padas', 'Paigoay', 'Pinalangca', 'Poblacion (Lumbac)', 'Rangiran', 'Rubokun', 'Linindingan', 'Kalaludan'];
	var picong = ['Anas', 'Bara-as', 'Biasong', 'Bulangos', 'Durian', 'Ilian', 'Liangan (Poblacion)', 'Maganding', 'Maladi', 'Mapantao', 'Micalubo', 'Mimbalawag', 'Pindolonan', 'Punong', 'Ramitan', 'Torogan', 'Tual', 'Tuca', 'Ubanoban'];
	var pualas = ['Badak', 'Bantayan', 'Basagad', 'Bolinsong', 'Boring', 'Bualan', 'Danugan', 'Dapao', 'Diamla', 'Gadongan', 'Ingud', 'Linuk', 'Lumbac', 'Maligo', 'Masao', 'Notong', 'Porug', 'Romagondong', 'Talambo (Poblacion)', 'Tamlang', 'Tuka', 'Tomarompong', 'Yaran'];
	var tubaran = ['Alog', 'Beta', 'Poblacion (Buribid)', 'Campo', 'Datumanong', 'Dinaigan', 'Guiarong', 'Mindamdag', 'Paigoay-Pimbataan', 'Polo', 'Riantaran', 'Tangcal', 'Tubaran Proper', 'Wago', 'Bagiangun', 'Gadongan', 'Gaput', 'Madaya', 'Malaganding', 'Matiticop', 'Pagalamatan'];
	var tugaya = ['Bagoaingud', 'Bubong', 'Buadi Alawang', 'Buadi Dico', 'Campong Talao', 'Cayagan', 'Dandanun', 'Dilimbayan', 'Gurain', 'Engud Poblacion', 'Lumbac', 'Maidan', 'Mapantao', 'Pagalamatan', 'Pandiaranao', 'Pindolonan I', 'Pindolonan II', 'Putad', 'Raya', 'Sugod I', 'Sugod A Mawatan', 'Sumbaga Rogong', 'Tangcal'];
	var sultandumalondong = ['Bacayawan', 'Buta', 'Dinganun Guilopa (Dingunun)', 'Lumbac', 'Malalis', 'Pagalongan', 'Tagoranao', 'Engdi Apha', 'Sumalindao'];
	var lumbacaunayan = ['Bangon', 'Proper Beta', 'Calalon (formerly Ka-alawan)', 'Calipapa', 'Dapolac', 'Dilausan', 'Dimapaok', 'Lumbaca-Dilausan', 'Pualas', 'Oriental Beta', 'Tringun'];
	var lumbabayabao = ['Bacolod I', 'Bacolod II', 'Bantayao', 'Barit', 'Baugan', 'Buad Lumbac', 'Cabasaran', 'Calilangan', 'Carandangan-Mipaga', 'Cormatan Langban', 'Dialongana', 'Dilindongan-Cadayonan', 'Gadongan', 'Galawan', 'Gambai', 'Kasula', 'Lalangitun', 'Lama', 'Lindongan Dialongana', 'Lobo Basara', 'Lumbac Bacayawan', 'Macaguiling', 'Maliwanag', 'Mapantao', 'Mapoling', 'Pagayawan', 'Maribo (Poblacion)', 'Posudaragat', 'Rumayas (Minitepad)', 'Sabala Bantayao', 'Salaman', 'Salolodun Berwar', 'Sarigidan Madiar', 'Sunggod', 'Taluan', 'Tamlang', 'Tongcopan', 'Turogan', 'Minaring Diladigan'];
	var marantao = ['Bacayawan', 'Cawayan Bacolod', 'Bacong', 'Camalig Bandara Ingud', 'Camalig Bubong', 'Camalig (Poblacion)', 'Inudaran Campong', 'Cawayan', 'Daanaingud', 'Cawayan Kalaw', 'Kialdan Proper', 'Lumbac Kialdan', 'Cawayan Linuk', 'Lubo Kialdan', 'Inudaran Lumbac', 'Mantapoli Kialdan', 'Matampay Kialdan', 'Maul', 'Nataron', 'Pagalongan Bacayawan', 'Pataimas Kialdan', 'Poona Marantao', 'Punud Proper', 'Tacub','Maul Ilian', 'Palao', 'Banga-Pantar', 'Batal-Punud', 'Bubong Madanding (Bubong)', 'Ilian', 'Inudaran Loway', 'Maul Lumbaca Ingud', 'Poblacion', 'Tuca Kialdan'];
	var masiu = ['Abdullah Buisan', 'Alim Raya Caramian', 'Alip Lalabuan Sarip Batua', 'Alumpang Paino Mimbalay', 'Amai Ditimbang Balindong', 'Amai Sindaolan Dansalan', 'Lakadun', 'Buntalis Maranat', 'Dalog Balut', 'Gindolongan Alabat', 'Gondarangin Asa Adigao', 'Sawir', 'Labay Moriatao-Bai', 'Laila Lumbac Bangon', 'Langco Dimapatoy', 'Langi Talub', 'Lomigis Sugod', 'Macabangun Imbaba', 'Macadaag Talaguian (Sultan Panimbang)', 'Macalupang Lumbac Caramian', 'Magayo Bagoaingud',' Magompara Apa Mimbalay', 'Manalocon Talub', 'Marandacan Putad', 'Matao Araza', 'Mohammad Tangul', 'Pangandaman Pantao', 'Sambowang Atawa', 'Tamboro Cormatan', 'Towano Arangca', 'Tomambiling Lumbacaingud', 'Unda Dayawan', 'Buadiamaloy', 'Mangondato Kalilangan', 'Casim Lumbacaingud', 'Maca-alin Lumbacaingud'];
	var mulondo = ['Bangon', 'Bubonga Guilopa', 'Buadi-Abala', 'Buadi-Bayawa', 'Buadi-Insuba', 'Bubong', 'Cabasaran', 'Cairatan', 'Cormatan', 'Poblacion (Dado)', 'Dalama', 'Dansalan', 'Dimarao', 'Guilopa', 'Ilian', 'Kitambugun', 'Lama (Bagoaingud)', 'Lilod', 'Lilod Raybalai', 'Lumbaca Ingud', 'Lumbac (Lumbac Bubong)', 'Madaya', 'Pindolonan', 'Salipongan', 'Sugan', 'Bagoaingud'];
	var piagapo = ['Aposong', 'Bubo', 'Bualan', 'Bubonga Ilian', 'Bubonga Mamaanun', 'Bubonga Tawaan', 'Ilian Proper', 'Ilian Poblacion', 'Lumbaca Mamaanun', 'Mamaanun', 'Mentring', 'Palao', 'Paling', 'Paridi', 'Pindolonan', 'Rantian', 'Sapingit', 'Bangco', 'Basak', 'Gacap', 'Katumbacan', 'Olango', 'Pantaon', 'Pantar', 'Radapan Poblacion', 'Radapan Proper', 'Tambo', 'Tapocan', 'Tawaan', 'Bagoingud', 'Bansayan', 'Kalungnan', 'Lininding', 'Palacat', 'Talao', 'Taporug', 'Udalo'];
	var poona = ['Ataragadong', 'Bangon', 'Bansayan', 'Bubong-Dimunda', 'Bugaran', 'Bualan', 'Cadayonan', 'Calilangan Dicala', 'Calupaan', 'Dimayon', 'Dilausan', 'Dongcoan', 'Gadongan', 'Poblacion (Gata Proper)', 'Liangan', 'Lumbac', 'Lumbaca Ingud', 'Madanding', 'Pantao', 'Punud', 'Ragayan', 'Rogan Cairan', 'Talaguian', 'Rogan Tandiong Dimayon', 'Taporog'];
	var taraka = ['Bandera Buisan', 'Boriongan', 'Borowa', 'Buadi Dingun', 'Buadi Amao', 'Buadi Amunta', 'Buadi Arorao', 'Buadi Atopa', 'Buadi Dayomangga', 'Buadi Ongcalo', 'Bucalan', 'Cadayonan Bagumbayan', 'Caramat', 'Carandangan Calopaan', 'Datu Ma-as', 'Dilabayan', 'Dimayon', 'Gapao Balindong', 'Ilian', 'Lumasa', 'Lumbac Bagoaingud', 'Lumbac Bubong Maindang'];
	var wao = ['Amoyong', 'Balatin', 'Banga', 'Buntongan', 'Bo-ot', 'Cebuano Group', 'Christian Village', 'Eastern Wao (Poblacion)', 'Extension (Poblacion)', 'Gata', 'Kabatangan', 'Kadingilan', 'Katutungan', 'Kilikili East', 'Kilikili West', 'Malaigang', 'Manila Group (Poblacion)', 'Milaya', 'Mimbuaya', 'Muslim Village', 'Pagalongan', 'Panang', 'Park Area', 'Pilintangan', 'Serran Village', 'Western Wao (Poblacion)'];
	var tamparan = ['Bocalan', 'Bangon', 'Cabasaran', 'Dilausan', 'Lalabuan', 'Lilod Tamparan', 'Lindongan', 'Linuk', 'Occidental Linuk', 'Linuk Oriental', 'Lumbaca Ingud', 'Lumbacaingud South', 'Lumbaca Lilod', 'Balutmadiar', 'Mala-abangon', 'Maliwanag', 'Maidan Linuk', 'Miondas', 'New Lumbacaingud', 'Pimbago-Pagalongan', 'Pagayawan', 'Picarabawan', 'Poblacion I', 'Poblacion II', 'Poblacion III', 'Poblacion IV', 'Raya Miondas', 'Raya Buadi Barao', 'Raya Tamparan', 'Salongabanding', 'Saminunggay', 'Talub', 'Tatayawan North', 'Tatayawan South', 'Tubok', 'Beruar', 'Dasomalong', 'Guinaopan', 'Lumbac', 'Minanga', 'Lilod Tubok', 'Mariatao Datu', 'Pagalamatan Linuk', 'Pindolonan Mariatao Sarip'];
	var tagoloan = ['Bantalan', 'Bayog', 'Cadayonan', 'Dagonalan', 'Domalama', 'Gayakay', 'Inudaran', 'Kalilangan', 'Kianibong', 'Kinggan', 'Kita-o-an', 'Bago-ah Ingud', 'Malinao', 'Malingun', 'Mama-an Pagalongan', 'Marawi', 'Mimbaguiang', 'Sigayan', 'Tagoloan Poblacion'];
	var saguiaran = ['Alinun', 'Bagoingud', 'Batangan', 'Bubong', 'Cadayon', 'Cadingilan', 'Lumbacatoros', 'Comonal', 'Dilausan', 'Gadongan', 'Linao', 'Limogao', 'Lumbayanague', 'Basak Maito', 'Maliwanag', 'Mapantao', 'Mipaga', 'Natangcopan', 'Pagalamatan', 'Pamacotan', 'Panggao', 'Pantao Raya', 'Pantaon', 'Patpangkat', 'Pawak', 'Dilimbayan', 'Pindolonan', 'Poblacion', 'Salocod', 'Sunggod'];
	var marawi = ['Ambolong', 'Bacolod Chico Proper', 'Banga', 'Bangco', 'Banggolo Poblacion','Bangon','Biaba-Damag','Bito Buadi Itowa','Bito Buadi Parba','Bubonga Pagalamatan','Bubonga Lilod Madaya','Boganga','Boto Ambolong','Bubonga Cadayonan','Bubong Lumbac','Bubonga Marawi','Bubonga Punod','Cabasaran','Cabingan','Cadayonan','Cadayonan II','Calocan East', 'Calocan West','Kormatan Matampay', 'Daguduban', 'Dansalan', 'Datu Saber (Navarro)', 'Datu Sa Dansalan', 'Dayawan', 'Dimaluna', 'Dulay', 'Dulay West', 'East Basak', 'Emie Punud', 'Fort', 'Gadongan', 'Buadi Sacayo (Green)', 'Guimba (Lilod Proper)', 'Kapantaran', 'Kilala', 'Lilod Madaya (Poblacion)', 'Lilod Saduc', 'Lomidong', 'Lumbaca Madaya (Poblacion)', 'Lumbac Marinaut', 'Lumbaca Toros', 'Malimono', 'Basak Malutlut', 'Gadongan Mapantao', 'Amito Marantao', 'Marinaut East', 'Marinaut West', 'Matampay', 'Pantaon (Langcaf)', 'Mipaga Proper', 'Moncado Colony', 'Moncado Kadingilan', 'Moriatao Loksadato', 'Datu Naga', 'Olawa Ambolong', 'Pagalamatan Gambai', 'Pagayawan', 'Panggao Saduc', 'Papandayan', 'Papandayan Caniogan', 'Paridi', 'Patani', 'Pindolonan', 'Poona Marantao', 'Puga-an', 'Rapasun MSU', 'Raya Madaya I', 'Raya Madaya II', 'Raya Saduc', 'Rorogagus Proper', 'Rorogagus East', 'Sabala Manao', 'Sabala Manao Proper', 'Saduc Proper', 'Sagonsongan', 'Sangcay Dansalan', 'Somiorang', 'South Madaya Proper', 'Sugod Proper', 'Tampilong', 'Timbangalan', 'Tuca Ambolong', 'Tolali', 'Toros', 'Tuca', 'Tuca Marinaut', 'Tongantongan-Tuca Timbangalan', 'Wawalayan Calocan', 'Wawalayan Marinaut', 'Marawi Poblacion', 'Norhaya Village'];
	//---------------------------------------------------------------------------------------	


	// Barangays in Basilan
	var maluso = ['Abong-abong', 'Batungal', 'Calang Canas', 'Fuente Maluso	', 'Guanan North (Zone I)', 'Guanan South (Zone II)', 'Limbubong', 'Mahayahay Lower (Zone I)', '	Mahayahay Upper (Zone II)', 'Muslim Area', 'Port Holland Zone I Poblacion (Upper)', 'Port Holland Zone II Poblacion (Shipyard Main)	', 'Port Holland Zone III Poblacion (Samal Village)', 'Port Holland Zone IV (Lower)', 'Port Holland Zone V (Shipyard Tabuk)', 'Taberlongan', 'Tamuk', 'Townsite (Poblacion)', 'Tubigan', 'Upper Garlayan'];
	var lantawan = ['Atong-atong', 'Bagbagon', 'Baungis', 'Bulan-bulan', 'Bulanza', 'Calayan', 'Calugusan', 'Canibungan', 'Landugan', 'Lantawan Proper (Poblacion)', 'Lawi-lawi', 'Lawila', 'Lower Bañas', 'Lower Manggas', 'Luuk-Maluha', 'Matarling', 'Matikang', 'Pamucalin', 'Paniongan', 'Parian-Baunoh', 'Suba-an (Pangasahan)', 'Switch Yakal', 'Tairan', 'Upper Bañas', 'Upper Manggas'];
	var sumisip = ['Bacung', 'Baiwas', 'Basak', 'Benembengan Lower', 'Benembengan Upper', 'Bohe-languyan', 'Buli-buli', 'Cabcaban', 'Cabengbeng Lower', 'Cabengbeng Upper', 'Ettub-ettub', 'Guiong', 'Kaum-Air', 'Kaumpamatsakem', 'Libug', 'Limbocandis', 'Lukketon', 'Luuk-Bait', 'Mahatalang', 'Manaul', 'Mangal (Poblacion)', 'Marang', 'Mebak', 'Sahaya Bohe Bato', 'Sapah Bulak', 'Sumisip Central', 'Tikus', 'Tongsengal', 'Tumahubong'];
	var tuburan = ['Bohetambis', 'Calut', 'Duga-a', 'Katipunan', 'Lahi-lahi', 'Lower Sinangkapan', 'Lower Tablas', 'Mahawid', 'Sinulatan', 'Tablas Usew'];
	var tipotipo = ['Badja', 'Baguindan', 'Baguindan', 'Bangcuang', 'Bohe-Tambak', 'Bohebaca', 'Bohelebung', 'Lagayas', 'Limbo-Upas', 'Silangkum', 'Tipo-tipo Proper (Poblacion)'];
	//-----------------------------------------------------------------------------------------
	


	// Municipalities 
	var manila = ['Binondo', 'Ermita', 'Intramuros', 'Malate', 'Paco', 'Pandacan', 'Port Area', 'Quiapo', 'Sampaloc', 'San Andres', 'San Miguel', 'San Nicolas', 'Sta. Ana', 'Sta. Cruz', 'Sta. Mesa', 'Tondo'];
	var qc = ['Bago Bantay', 'North Edsa', 'Project 1', 'Project 3', 'Project 4', 'Project 5', 'Project 6', 'Project 7', 'Project 8', 'Balintawak', 'Munoz', 'La Loma', 'Sta. Mesa Heights', 'San Francisco del Monte', 'West Triangle', 'Pantranco', 'Manggahan', 'Don Antonio', 'Eastwood', 'Murphy', 'Cubao', 'Katipunan', 'Jacobo Zobel', 'Old Balara', 'Balara', 'Anonas', 'Green Meadows', 'Diliman', 'U.P. Diliman', 'City Hall', 'Galas', 'Santol', 'Santolan', 'Betty Go-Belmonte', 'Boy Scout District', 'Boy Scout Area', 'Quezon Institute', 'New Manila', 'Philcoa', 'Christ the King', 'Tomas Morato', 'Roces', 'G. Araneta', 'Gilmore', 'Novaliches', 'Zabarte', 'Regalado', 'Susano', 'Holy Cross', 'San Gabriel', 'Novaliches Bayan', 'General Luis', 'Lagro', 'Neopolitan Business Park', 'La Mesa', 'Tandang Sora', 'Central', 'Banlat', 'Baesa Novaliches'];
	var sanjuan = ['District 1', 'District 2'];
	var caloocan = ['Sangandaan', 'Dagat-Dagatan', 'Poblacion', 'Poblacion (A. Mabini)', 'C-3 Road', 'Maypajo', 'Marulas', 'Grace Park West', 'Victory Liner Compound', 'PNR Compound', 'Heroes Del 96', 'Monumento', 'Caimito Road', 'University Hills Subdivision', 'Morning Breeze Subdivision', 'Grace Park East', 'Balintawak', 'Galino', '9th Avenue', 'Barrio San Jose', 'Bagong Barrio West', 'Baesa', 'Libis Baesa', 'Libis Reparo', 'Santa Quiteria', 'Talipapa', 'Bagbaguin', 'Kaybiga', 'Llano', 'Deparo', 'BF Homes Caloocan', 'Deparo 2', 'Bagumbong', 'Urduja Village', 'Congress Village', 'Camarin', 'Bagong Silang', 'Amparo', 'Tala', 'Pangarap Village'];
	var laspinas = ['District 1', 'District 2'];
	var makati = ['District 1', 'District 2'];
	var mandaluyong = ['District 1', 'District 2'];
	var marikina = ['District 1', 'District 2'];
	var navotas = ['District 1', 'District 2'];
	var paranaque = ['District 1', 'District 2'];
	var pasay = ['District 1', 'District 2'];
	var pasig = ['District 1', 'District 2'];
	var malabon = ['District 1', 'District 2'];
	var taguig = ['District 1', 'District 2'];
	var valenzuela = ['District 1', 'District 2'];
	//---------------------------------------------------------------------------------------------

	// Barangays in Manila
	var binondo = ['Barangay 287', 'Barangay 288', 'Barangay 289', 'Barangay 290', 'Barangay 291', 'Barangay 292', 'Barangay 293', 'Barangay 294', 'Barangay 295', 'Barangay 296'];
	var ermita = ['Barangay 659', 'Barangay 659-A', 'Barangay 660', 'Barangay 660-A', 'Barangay 661', 'Barangay 663', 'Barangay 663-A', 'Barangay 664', 'Barangay 666', 'Barangay 667', 'Barangay 668', 'Barangay 669', 'Barangay 670'];
	var intramuros = ['Barangay 654', 'Barangay 655', 'Barangay 656', 'Barangay 657', 'Barangay 658'];
	var malate = ['Barangay 688', 'Barangay 689', 'Barangay 690', 'Barangay 691', 'Barangay 692', 'Barangay 693', 'Barangay 694', 'Barangay 695', 'Barangay 696', 'Barangay 697', 'Barangay 698', 'Barangay 699', 'Barangay 700', 'Barangay 701', 'Barangay 702', 'Barangay 703', 'Barangay 704', 'Barangay 705', 'Barangay 706', 'Barangay 707', 'Barangay 708', 'Barangay 709,', 'Barangay 710', 'Barangay 711', 'Barangay 712', 'Barangay 713', 'Barangay 714', 'Barangay 715', 'Barangay 716', 'Barangay 717', 'Barangay 718', 'Barangay 719', 'Barangay 720', 'Barangay 721', 'Barangay 722', 'Barangay 723', 'Barangay 724', 'Barangay 725', 'Barangay 726', 'Barangay 727', 'Barangay 728', 'Barangay 729', 'Barangay 730', 'Barangay 731', 'Barangay 732', 'Barangay 733', 'Barangay 734', 'Barangay 735', 'Barangay 736', 'Barangay 737', 'Barangay 738', 'Barangay 739', 'Barangay 740', 'Barangay 741', 'Barangay 742', 'Barangay 743', 'Barangay 744'];
	var paco = ['Barangay 662', 'Barangay 664-A', 'Barangay 671', 'Barangay 672', 'Barangay 673', 'Barangay 674', 'Barangay 675', 'Barangay 676', 'Barangay 677', 'Barangay 678', 'Barangay 679', 'Barangay 680', 'Barangay 681', 'Barangay 682', 'Barangay 683', 'Barangay 684', 'Barangay 685', 'Barangay 686', 'Barangay 687', 'Barangay 809', 'Barangay 810', 'Barangay 811', 'Barangay 812', 'Barangay 813', 'Barangay 814', 'Barangay 815', 'Barangay 816', 'Barangay 817', 'Barangay 818', 'Barangay 819', 'Barangay 820', 'Barangay 821', 'Barangay 822', 'Barangay 823', 'Barangay 824', 'Barangay 825', 'Barangay 826', 'Barangay 827', 'Barangay 828', 'Barangay 829', 'Barangay 830', 'Barangay 831', 'Barangay 832'];
	var pandacan = ['Barangay 832', 'Barangay 833', 'Barangay 834', 'Barangay 835', 'Barangay 836', 'Barangay 837', 'Barangay 838', 'Barangay 839', 'Barangay 840', 'Barangay 841', 'Barangay 842', 'Barangay 843', 'Barangay 844', 'Barangay 845', 'Barangay 846', 'Barangay 847', 'Barangay 848', 'Barangay 849', 'Barangay 850', 'Barangay 851', 'Barangay 852', 'Barangay 853', 'Barangay 854', 'Barangay 855', 'Barangay 856', 'Barangay 857', 'Barangay 858', 'Barangay 859', 'Barangay 860', 'Barangay 861', 'Barangay 862', 'Barangay 863', 'Barangay 864', 'Barangay 865', 'Barangay 866', 'Barangay 867', 'Barangay 868', 'Barangay 869', 'Barangay 870', 'Barangay 871', 'Barangay 872'];
	var portarea = ['Barangay 649', 'Barangay 650', 'Barangay 651', 'Barangay 652', 'Barangay 653'];
	var quiapo = ['Barangay 306', 'Barangay 307', 'Barangay 308', 'Barangay 309', 'Barangay 383', 'Barangay 384', 'Barangay 385', 'Barangay 386', 'Barangay 387', 'Barangay 388', 'Barangay 389', 'Barangay 390', 'Barangay 391', 'Barangay 392', 'Barangay 393', 'Barangay 394'];
	var stamesa = ['Barangay 587', 'Barangay 587-A', 'Barangay 588', 'Barangay 589', 'Barangay 590', 'Barangay 591', 'Barangay 592', 'Barangay 593', 'Barangay 594', 'Barangay 595', 'Barangay 596', 'Barangay 597', 'Barangay 598', 'Barangay 599', 'Barangay 600', 'Barangay 601', 'Barangay 602', 'Barangay 603', 'Barangay 604', 'Barangay 605', 'Barangay 606', 'Barangay 607', 'Barangay 608', 'Barangay 609', 'Barangay 610', 'Barangay 611', 'Barangay 612', 'Barangay 613', 'Barangay 614', 'Barangay 615', 'Barangay 616', 'Barangay 617', 'Barangay 618', 'Barangay 619', 'Barangay 620', 'Barangay 621', 'Barangay 622', 'Barangay 623', 'Barangay 624', 'Barangay 625', 'Barangay 626', 'Barangay 627', 'Barangay 628', 'Barangay 629', 'Barangay 630', 'Barangay 631', 'Barangay 632', 'Barangay 633', 'Barangay 634', 'Barangay 635', 'Barangay 636'];
	var staana = ['Barangay 874', 'Barangay 875', 'Barangay 876', 'Barangay 877', 'Barangay 878', 'Barangay 879', 'Barangay 880', 'Barangay 881', 'Barangay 882', 'Barangay 883', 'Barangay 884', 'Barangay 885', 'Barangay 886', 'Barangay 887', 'Barangay 888', 'Barangay 889', 'Barangay 890', 'Barangay 891', 'Barangay 892', 'Barangay 893', 'Barangay 894', 'Barangay 895', 'Barangay 896', 'Barangay 897', 'Barangay 898', 'Barangay 899', 'Barangay 900', 'Barangay 901', 'Barangay 902', 'Barangay 903', 'Barangay 904', 'Barangay 905'];
	var stacruz = ['Barangay 297', 'Barangay 298', 'Barangay 299', 'Barangay 300', 'Barangay 301', 'Barangay 302', 'Barangay 303', 'Barangay 304', 'Barangay 305', 'Barangay 306', 'Barangay 307', 'Barangay 308', 'Barangay 309', 'Barangay 310', 'Barangay 311', 'Barangay 312', 'Barangay 313', 'Barangay 314', 'Barangay 315', 'Barangay 316', 'Barangay 317', 'Barangay 318', 'Barangay 319', 'Barangay 320', 'Barangay 321', 'Barangay 322', 'Barangay 323', 'Barangay 324', 'Barangay 325', 'Barangay 326', 'Barangay 327', 'Barangay 328', 'Barangay 329', 'Barangay 330', 'Barangay 331', 'Barangay 332', 'Barangay 333', 'Barangay 334', 'Barangay 335', 'Barangay 336', 'Barangay 337', 'Barangay 338', 'Barangay 339', 'Barangay 340', 'Barangay 341', 'Barangay 342', 'Barangay 343', 'Barangay 344', 'Barangay 345', 'Barangay 346', 'Barangay 347', 'Barangay 348', 'Barangay 349', 'Barangay 350', 'Barangay 351', 'Barangay 352', 'Barangay 353', 'Barangay 354', 'Barangay 355', 'Barangay 356', 'Barangay 357', 'Barangay 358', 'Barangay 359', 'Barangay 360', 'Barangay 361', 'Barangay 362', 'Barangay 363', 'Barangay 364', 'Barangay 365', 'Barangay 366', 'Barangay 367', 'Barangay 368', 'Barangay 369', 'Barangay 370', 'Barangay 371', 'Barangay 372', 'Barangay 373', 'Barangay 374', 'Barangay 375', 'Barangay 376', 'Barangay 377', 'Barangay 378', 'Barangay 379', 'Barangay 380', 'Barangay 381', 'Barangay 382'];
	var sanandres = ['Barangay 748', 'Barangay 749', 'Barangay 757', 'Barangay 758', 'Barangay 752', 'Barangay 761', 'Barangay 762', 'Barangay 745', 'Barangay 764', 'Barangay 769'];
	var sannicolas = ['Barangay 268', 'Barangay 269', 'Barangay 270', 'Barangay 271', 'Barangay 272', 'Barangay 273', 'Barangay 274', 'Barangay 275', 'Barangay 276', 'Barangay 281', 'Barangay 282', 'Barangay 283', 'Barangay 284', 'Barangay 285', 'Barangay 286'];
	var sanmiguel = ['Barangay 637', 'Barangay 638', 'Barangay 639', 'Barangay 640', 'Barangay 641', 'Barangay 642', 'Barangay 643', 'Barangay 644', 'Barangay 645', 'Barangay 646', 'Barangay 647', 'Barangay 648'];
	var tondo = ['Barangay 1', 'Barangay 2', 'Barangay 3', 'Barangay 4', 'Barangay 5', 'Barangay 6', 'Barangay 7', 'Barangay 8', 'Barangay 9', 'Barangay 10', 'Barangay 11', 'Barangay 12', 'Barangay 13', 'Barangay 14', 'Barangay 15', 'Barangay 16', 'Barangay 17', 'Barangay 18', 'Barangay 19', 'Barangay 20', 'Barangay 21', 'Barangay 22', 'Barangay 23', 'Barangay 24', 'Barangay 25', 'Barangay 26', 'Barangay 27', 'Barangay 28', 'Barangay 29', 'Barangay 30', 'Barangay 31', 'Barangay 32', 'Barangay 33', 'Barangay 34', 'Barangay 35', 'Barangay 36', 'Barangay 37', 'Barangay 38', 'Barangay 39', 'Barangay 40', 'Barangay 41', 'Barangay 42', 'Barangay 43', 'Barangay 44', 'Barangay 45', 'Barangay 46', 'Barangay 47', 'Barangay 48', 'Barangay 49', 'Barangay 50', 'Barangay 51', 'Barangay 52', 'Barangay 53', 'Barangay 54', 'Barangay 55', 'Barangay 56', 'Barangay 57', 'Barangay 58', 'Barangay 59', 'Barangay 60', 'Barangay 61', 'Barangay 62', 'Barangay 63', 'Barangay 64', 'Barangay 65', 'Barangay 66', 'Barangay 67', 'Barangay 68', 'Barangay 69', 'Barangay 70', 'Barangay 71', 'Barangay 72', 'Barangay 73', 'Barangay 74', 'Barangay 75', 'Barangay 76', 'Barangay 77', 'Barangay 78', 'Barangay 79', 'Barangay 80', 'Barangay 81', 'Barangay 82', 'Barangay 83', 'Barangay 84', 'Barangay 85', 'Barangay 86', 'Barangay 87', 'Barangay 88', 'Barangay 89', 'Barangay 90', 'Barangay 91', 'Barangay 92', 'Barangay 93', 'Barangay 94', 'Barangay 95', 'Barangay 96', 'Barangay 97', 'Barangay 98', 'Barangay 99', 'Barangay 100', 'Barangay 101', 'Barangay 102', 'Barangay 103', 'Barangay 104', 'Barangay 105', 'Barangay 106', 'Barangay 107', 'Barangay 108', 'Barangay 109', 'Barangay 110', 'Barangay 111', 'Barangay 112', 'Barangay 113', 'Barangay 114', 'Barangay 115', 'Barangay 116', 'Barangay 117', 'Barangay 118', 'Barangay 119', 'Barangay 120', 'Barangay 121', 'Barangay 122', 'Barangay 123', 'Barangay 124', 'Barangay 125', 'Barangay 126', 'Barangay 127', 'Barangay 128', 'Barangay 129', 'Barangay 130', 'Barangay 131', 'Barangay 132', 'Barangay 133', 'Barangay 134', 'Barangay 135', 'Barangay 136', 'Barangay 137', 'Barangay 138', 'Barangay 139', 'Barangay 140', 'Barangay 141', 'Barangay 142', 'Barangay 143', 'Barangay 144', 'Barangay 145', 'Barangay 146', 'Barangay 147', 'Barangay 148', 'Barangay 149', 'Barangay 150', 'Barangay 151', 'Barangay 152', 'Barangay 153', 'Barangay 154', 'Barangay 155', 'Barangay 156', 'Barangay 157', 'Barangay 158', 'Barangay 159', 'Barangay 160', 'Barangay 161', 'Barangay 162', 'Barangay 163', 'Barangay 164', 'Barangay 165', 'Barangay 166', 'Barangay 167', 'Barangay 168', 'Barangay 169', 'Barangay 170', 'Barangay 171', 'Barangay 172', 'Barangay 173', 'Barangay 174', 'Barangay 175', 'Barangay 176', 'Barangay 177', 'Barangay 178', 'Barangay 179', 'Barangay 180', 'Barangay 181', 'Barangay 182', 'Barangay 183', 'Barangay 184', 'Barangay 185', 'Barangay 186', 'Barangay 187', 'Barangay 188', 'Barangay 189', 'Barangay 190', 'Barangay 191', 'Barangay 192', 'Barangay 193', 'Barangay 194', 'Barangay 195', 'Barangay 196', 'Barangay 197', 'Barangay 198', 'Barangay 199', 'Barangay 200', 'Barangay 201', 'Barangay 202', 'Barangay 202-A', 'Barangay 203', 'Barangay 204', 'Barangay 205', 'Barangay 206', 'Barangay 207', 'Barangay 208', 'Barangay 209', 'Barangay 210', 'Barangay 211', 'Barangay 212', 'Barangay 213', 'Barangay 214', 'Barangay 215', 'Barangay 216', 'Barangay 217', 'Barangay 218', 'Barangay 219', 'Barangay 220', 'Barangay 221', 'Barangay 222', 'Barangay 223', 'Barangay 224', 'Barangay 225', 'Barangay 226', 'Barangay 227', 'Barangay 228', 'Barangay 229', 'Barangay 230', 'Barangay 231', 'Barangay 232', 'Barangay 233', 'Barangay 234', 'Barangay 235', 'Barangay 236', 'Barangay 237', 'Barangay 238', 'Barangay 239', 'Barangay 240', 'Barangay 241', 'Barangay 242', 'Barangay 243', 'Barangay 244', 'Barangay 245', 'Barangay 246', 'Barangay 247', 'Barangay 248', 'Barangay 249', 'Barangay 250', 'Barangay 251', 'Barangay 252', 'Barangay 253', 'Barangay 254', 'Barangay 255', 'Barangay 256', 'Barangay 257', 'Barangay 258', 'Barangay 259', 'Barangay 260', 'Barangay 261', 'Barangay 262', 'Barangay 263', 'Barangay 264', 'Barangay 265', 'Barangay 266', 'Barangay 267'];
	var sampaloc = [];
	var i;
	for(i = 395; i < 587; i++)
	{	
		sampaloc.push("Barangay "+i);
	}
	//---------------------------------------------------------------------------------------------

	// Barangays in QC
	var bagobantay = ['Alicia'];
	var northedsa = ['Bagong Pag-asa'];
	var project8 = ['Bahay Toro', 'Sangandaan'];
	var project7 = ['Bungad', 'Veterans Village'];
	var project1 = ['East Kamias', 'Roxas'];
	var project2 = ['Quirino 2-A', 'Quirino 2-B', 'Quirino 2-C'];
	var project3 = ['Quirino 3-A', 'Amihan', 'Claro (Quirino 3-B)', 'Duyan-duyan'];
	var project4 = ['Bagumbuhay', 'Bayanihan', 'Blue Ridge A', 'Blue Ridge B', 'Escopa I', 'Escopa II', 'Escopa III', 'Escopa IV', 'Marilag', 'Milagrosa', 'Tagumpay', 'Villa Maria Clara'];
	var project5 = ['Kamuning', 'E. Rodriguez', 'West Kamias'];
	var sanfrancisco = ['Damayan', 'Del Monte', 'Mariblo', 'Paltok', 'Paraiso', 'San Antonio'];
	var laloma = ['N. S. Amoranto', 'Paang Bundok', 'Salvacion', 'San Isidro Labrador'];
	var westtriangle = ['Phil-Am', 'West Triangle'];
	var balintawakqc = ['Balingasa', 'Pag-ibig sa Nayon', 'Apolonio Samson', 'Balong Bato', 'Unang Sigaw'];
	var stamesaheights = ['Lourdes', 'Maharlika', 'Saint Peter', 'Santa Teresita'];
	var tandangsora = ['Culiat', 'Pasong Tamo', 'Tandang Sora'];
	var centralinc = ['New Era'];
	var novalichesqc = ['Bagbag', 'Gulod', 'Santa Monica', 'Sauyo', 'Talipapa'];
	var novabayanqc = ['Novaliches Proper'];
	var novabaesa = ['Baesa'];
	var cubao = ['E. Rodriguez', 'San Roque', 'Silangan', 'Socorro', 'Immaculate Conception', 'Kaunlaran', 'Pinagkaisahan', 'San Martin de Porres'];
	var oldbalara = ['Matandang Balara'];
	var balara = ['Pansol'];
	var katipunan = ['Loyola Heights'];
	var munoz = ['Katipunan', 'Veterans Village'];
	var pantranco = ['Santa Cruz'];
	var manggahan = ['Commonwealth'];
	var donantonio = ['Holy Spirit'];
	var eastwood = ['Bagumbayan', 'Libis'];
	var murphy = ['Camp Aguinaldo'];
	var jacobozobel = ['Masagana'];
	var greenmeadows = ['Ugong Norte'];
	var project6 = ['Project 6'];
	var diliman = ['Botocan', 'Krus na Ligas', 'Malaya', 'Pinyahan', 'San Vicente', 'Sikatuna Village', 'Teachers Village East', 'Teachers Village West'];
	var updiliman = ['U.P. Campus', 'U.P. Village'];
	var galas = ['Sto. Nino', 'Don Manuel', 'Dona Aurora', 'San Isidro'];
	var boyscoutdistrict = ['Laging Handa', 'South Triangle'];
	var boyscoutarea = ['Sacred Heart'];
	var araneta = ['Tatalon'];
	var santol = ['Dona Imelda'];
	var santolan = ['Bagong Lipunan ng Crame'];
	var cityhall = ['Central'];
	var bettygo = ['Immaculate Conception'];
	var quezoninstitute = ['Damayang Lagi'];
	var newmanila = ['Mariana'];
	var tomasmorato = ['Obrero'];
	var philcoa = ['Old Capitol Site'];
	var roces = ['Paligsahan'];
	var christtheking = ['Kristong Hari'];
	var gilmore = ['Valencia'];
	var zabarte = ['Kaligayahan'];
	var regalado = ['North Fairview'];
	var generalluis = ['Nagkaisang Nayon'];
	var lagro = ['Greater Lagro'];
	var lamesa = ['Fairview'];
	var neopolitan = ['Pasong Putik Proper'];
	var susano = ['San Agustin'];
	var holycross = ['San Bartolome'];
	var sangabriel = ['Santa Lucia'];
	var banlat = ['Tandang Sora']; 
	//---------------------------------------------------------------------------------------------

	// Barangays in San Juan
	var district1 = ['Balong-Bato', 'Batis', 'Corazon de Jesus', 'Ermitano', 'Pasadena', 'Pedro Cruz', 'Progreso', 'Rivera', 'Salapan', 'San Perfecto'];
	var district2 = ['Addition Hills', 'Greenhills', 'Isabelita', 'Kabayanan', 'Little Baguio', 'Maytunas', 'Onse', 'Saint Joseph', 'Santa Lucia', 'Tibagan', 'West Crame'];
	//-------------------------------------------------------------------------------------------

	// Barangays in Las Pinas
	var district1lp = ['Daniel Fajardo', 'Elias Aldana', 'Ilaya', 'Manuyo Uno', 'Pamplona Uno', 'Pulang Lupa Uno', 'Talon Uno', 'Zapote', 'C.A.A. - B.F. International', 'Manuyo Dos', 'Pamplona Tres', 'Pulang Lupa Dos'];
	var district2lp = ['Almanza Uno', 'Almanza Dos', 'Pamplona Dos', 'Pilar', 'Talon Dos', 'Talos Tres', 'Talon Kuatro', 'Talon Singko'];
	//--------------------------------------------------------------------------------------------

	// Barangays in Makati
	var district1mkti = ['Bangkal', 'Bel-Air', 'Carmona', 'Dasmariñas', 'Forbes Park', 'Kasilawan', 'La Paz', 'Magallanes', 'Olympia', 'Palanan', 'Pio del Pilar', 'Poblacion', 'San Antonio', 'San Isidro', 'San Lorenzo', 'Santa Cruz', 'Singkamas', 'Tejeros', 'Urdaneta', 'Valenzuela'];
	var district2mkti = ['Cembo', 'Comembo', 'East Rembo', 'Guadalupe Nuevo', 'Guadalupe Viejo', 'Pembo', 'Pinagkaisahan', 'Pitogo', 'Post Proper Northside', 'Post Propoer Southside', 'Rizal', 'South Cembo', 'West Rembo'];
	//--------------------------------------------------------------------------------------------

	// Barangays in Malabon
	var district1malabon = ['Baritan', 'Bayan-bayanan', 'Catmon', 'Concepcion', 'Dampalit', 'Flores', 'Hulong Duhat', 'Ibaba', 'Maysilo', 'Muzon', 'Niugan', 'Panghulo', 'San Agustin', 'Santolan', 'Tañong'];
	var district2malabon = ['Acacia', 'Longos', 'Potrero', 'Tinajeros', 'Tonsuya', 'Tugatog'];
	//--------------------------------------------------------------------------------------------

	// Barangays in Marikina
	var district1marikina = ['Barangka', 'Calumpang', 'Industrial Valley', 'Jesus Dela Peña	', 'Malanday', 'San Roque', 'Santa Elena', 'Santo Niño', 'Tañong'];
	var district2marikina = ['Concepcion Uno', 'Concepcion Dos', 'Fortune', 'Marikina Heights', 'Nangka', 'Parang', 'Tumana'];
	//--------------------------------------------------------------------------------------------

	// Barangays in Mandaluyong
	var district1manda = ['Addition Hills', 'Bagong Silang', 'Burol', 'Daang Bakal', 'Hagdan Bato Itaas', 'Hagdan Bato Libis',  'Harapin ang Bukas', 'Highway Hills', 'Mauway', 'New Zañiga', 'Pag-asa', 'Pleasant Hills', 'Poblacion', 'Wack-Wack Greenhills'];
	var district2manda = ['Barangka Drive', 'Barangka Ibaba', 'Barangka Ilaya', 'Barangka Itaas', 'Buayang Bato', 'Hulo', 'Mabini-J.Rizal', 'Malamig', 'Namayan', 'Old Zañiga', 'Plainview', 'San Jose', 'Vergara'];
	//--------------------------------------------------------------------------------------------

	// Barangays in Navotas
	var district1navotas = ['Bagumbayan North', 'Bagumabayan South', 'Bangkulasi', 'Navotas East', 'Navotas West', 'NBBS Dagat-dagatan (Northbay Boulevard South)', 'NBBS Kaunlaran (Northbay Boulevard South)', 'NBBS Proper (Northbay Boulevard South)', 'Northbay Boulevard North', 'San Rafael Village', 'Sipac-Almacen'];
	var district2navotas = ['Daanghari', 'San Jose', 'San Roque', 'Tangos North (Tangos)', 'Tangos South (Tangos)', 'Tanza 1 (Tanza)', 'Tanza 2 (Tanza)'];
	//-------------------------------------------------------------------------------------------

	// Barangays in Paranaque
	var district1paranaque = ['Baclaran', 'Don Galo', 'La Huerta', 'San Dionisio', 'San Isidro', 'Santo Niño', 'Tambo', 'Vitalez'];
	var district2paranaque = ['BF Homes', 'Don Bosco', 'Marcelo Green', 'Merville', 'Moonwalk', 'San Antonio', 'San Martin de Porres', 'Sun Valley'];
	//--------------------------------------------------------------------------------------------

	// Barangays in Pasay
	var district1pasay = ['Barangay 1', 'Barangay 2', 'Barangay 3', 'Barangay 4', 'Barangay 5', 'Barangay 6', 'Barangay 7', 'Barangay 8', 'Barangay 9', 'Barangay 10', 'Barangay 11', 'Barangay 12', 'Barangay 13', 'Barangay 14', 'Barangay 15', 'Barangay 16', 'Barangay 17', 'Barangay 18', 'Barangay 19', 'Barangay 20', 'Barangay 21', 'Barangay 22', 'Barangay 23', 'Barangay 24', 'Barangay 25', 'Barangay 26', 'Barangay 27', 'Barangay 28', 'Barangay 29', 'Barangay 30', 'Barangay 31', 'Barangay 32', 'Barangay 33', 'Barangay 34', 'Barangay 35', 'Barangay 36', 'Barangay 37', 'Barangay 38', 'Barangay 39', 'Barangay 40', 'Barangay 68', 'Barangay 69', 'Barangay 70', 'Barangay 71', 'Barangay 72', 'Barangay 73', 'Barangay 74', 'Barangay 75', 'Barangay 76', 'Barangay 77', 'Barangay 78', 'Barangay 79', 'Barangay 80', 'Barangay 81', 'Barangay 82', 'Barangay 83', 'Barangay 84', 'Barangay 85', 'Barangay 86', 'Barangay 87', 'Barangay 88', 'Barangay 89', 'Barangay 90', 'Barangay 91', 'Barangay 92', 'Barangay 145', 'Barangay 146', 'Barangay 147', 'Barangay 148', 'Barangay 149', 'Barangay 150', 'Barangay 151', 'Barangay 152', 'Barangay 153', 'Barangay 154', 'Barangay 155', 'Barangay 156', 'Barangay 157', 'Barangay 183', 'Barangay 187', 'Barangay 188', 'Barangay 189', 'Barangay 190', 'Barangay 191', 'Barangay 192', 'Barangay 193', 'Barangay 194', 'Barangay 195', 'Barangay 196', 'Barangay 197', 'Barangay 198', 'Barangay 199', 'Barangay 200', 'Barangay 201'];

	var district2pasay = ['Barangay 41', 'Barangay 42', 'Barangay 43', 'Barangay 44', 'Barangay 45', 'Barangay 46', 'Barangay 47', 'Barangay 48', 'Barangay 49', 'Barangay 50', 'Barangay 51', 'Barangay 52', 'Barangay 53', 'Barangay 54', 'Barangay 55', 'Barangay 56', 'Barangay 57', 'Barangay 58', 'Barangay 59', 'Barangay 60', 'Barangay 61', 'Barangay 62', 'Barangay 63', 'Barangay 64', 'Barangay 65', 'Barangay 66', 'Barangay 67', 'Barangay 93', 'Barangay 94', 'Barangay 95', 'Barangay 96', 'Barangay 97', 'Barangay 98', 'Barangay 99', 'Barangay 100', 'Barangay 101', 'Barangay 102', 'Barangay 103', 'Barangay 104', 'Barangay 105', 'Barangay 106', 'Barangay 107', 'Barangay 108', 'Barangay 109', 'Barangay 110', 'Barangay 111', 'Barangay 112', 'Barangay 113', 'Barangay 114', 'Barangay 115', 'Barangay 116', 'Barangay 117', 'Barangay 118', 'Barangay 119', 'Barangay 120', 'Barangay 121', 'Barangay 122', 'Barangay 123', 'Barangay 124', 'Barangay 125', 'Barangay 126', 'Barangay 127', 'Barangay 128', 'Barangay 129', 'Barangay 130', 'Barangay 131', 'Barangay 132', 'Barangay 133', 'Barangay 134', 'Barangay 135', 'Barangay 136', 'Barangay 137', 'Barangay 138', 'Barangay 139', 'Barangay 140', 'Barangay 141', 'Barangay 142', 'Barangay 143', 'Barangay 144', 'Barangay 158', 'Barangay 159', 'Barangay 160', 'Barangay 161', 'Barangay 162', 'Barangay 163', 'Barangay 164', 'Barangay 165', 'Barangay 166', 'Barangay 167', 'Barangay 168', 'Barangay 169', 'Barangay 170', 'Barangay 171', 'Barangay 172', 'Barangay 173', 'Barangay 174', 'Barangay 175', 'Barangay 176', 'Barangay 177', 'Barangay 178', 'Barangay 179', 'Barangay 180', 'Barangay 181', 'Barangay 182', 'Barangay 183', 'Barangay 184', 'Barangay 185', 'Barangay 186'];
	//--------------------------------------------------------------------------------------------

	// Barangays in Pasig
	var district1pasig = ['Bagong Ilog', 'Bagong Katipunan', 'Bambang', 'Buting', 'Caniogan', 'Kalawaan', 'Kapasigan', 'Kapitolyo', 'Malinao', 'Oranbo', 'Palatiw', 'Pineda', 'Sagád', 'San Antonio', 'San Joaquin', 'San José', 'San Nicolas', 'Santa Cruz', 'Santa Rosa', 'Santo Tomás', 'Sumilang', 'Ugong'];

	var district2pasig = ['Dela Paz', 'Manggahan', 'Maybunga', 'Pinagbuhatan', 'Rosario', 'San Miguel', 'Santa Lucia', 'Santolan'];
	//--------------------------------------------------------------------------------------------

	// Barangays in Taguig
	var district1taguig = ['Bagumbayan', 'Bambang', 'Calzada Tipas', 'Hagonoy', 'Ibayo Tipas', 'Ligid Tipas', 'Lower Bicutan', 'New Lower Bicutan', 'Napindan', 'Palingon', 'San Miguel', 'Santa Ana', 'Tuktukan', 'Ususan', 'Wawa'];

	var district2taguig = ['Central Bicutan', 'Central Signal', 'Fort Bonifacio', 'Katuparan', 'Maharlika Village', 'North Daang Hari', 'North Signal', 'Pinagsama', 'South Daang Hari', 'South Signal', 'Tanyag', 'Upper Bicutan', 'Western Bicutan'];
	//--------------------------------------------------------------------------------------------

	// Barangays in Valenzuela
	var district1valenzuela = ['Arkong Bato', 'Balangkas', 'Bignay', 'Bisig', 'Canumay East', 'Canumay West', 'Coloong', 'Dalandanan', 'Isla', 'Lawang Bato', 'Lingunan', 'Mabolo', 'Malanday', 'Malinta', 'Palasan', 'Pariancillo Villa', 'Pasolo', 'Poblacion', 'Polo', 'Punturin', 'Rincon', 'Tagalag', 'Veinte Reales', 'Wawang Pulo'];
	var district2valenzuela = ['Bagbaguin', 'Gen. T. de Leon', 'Karuhatan', 'Mapulang Lupa', 'Marulas', 'Maysan', 'Parada', 'Paso de Blas', 'Ugong'];
	//--------------------------------------------------------------------------------------------


	// Barangays in Caloocan 
	var sangandaan = ['Barangay 1', 'Barangay 2', 'Barangay 3', 'Barangay 4', 'Barangay 5', 'Barangay 6', 'Barangay 7', 'Barangay 9', 'Barangay 10'];
	var dagatdagatan = ['Barangay 8', 'Barangay 12', 'Barangay 14', 'Barangay 28'];
	var poblacion = ['Barangay 11'];
	var poblacionmabini = ['Barangay 13', 'Barangay 15', 'Barangay 16', 'Barangay 17', 'Barangay 18', 'Barangay 19'];
	var c3 = ['Barangay 20', 'Barangay 21', 'Barangay 22', 'Barangay 23', 'Barangay 24'];
	var maypajo = ['Barangay 25', 'Barangay 26', 'Barangay 27', 'Barangay 29', 'Barangay 30', 'Barangay 31', 'Barangay 32', 'Barangay 33', 'Barangay 34', 'Barangay 35'];
	var marulas = ['Barangay 36', 'Barangay 37'];

	var graceparkwest = [];
	var s;
	for(s = 38; s < 72; s++)
	{
		graceparkwest.push("Barangay "+s);
	}

	var victoryliner = ['Barangay 72'];
	var pnrcompound = ['Barangay 73'];
	var heroesdel = ['Barangay 74', 'Barangay 75'];
	var monumento = ['Barangay 76', 'Barangay 78'];
	var caimito = ['Barangay 77', 'Barangay 79'];
	var universityhills = ['Barangay 80'];
	var morningbreeze = ['Barangay 81', 'Barangay 82', 'Barangay 83', 'Barangay 84', 'Barangay 85'];
	//--------------------------------------------------------------------------------------------
	
	// Zip Codes Manila
	var binondozip = ['1006'];
	var intrazip = ['1002'];
	var malatezip = ['1004'];
	var pacozip = ['1007'];
	var pandacanzip = ['1011'];
	var portareazip = ['1018'];
	var quiapozip = ['1001'];
	var sampaloczip = ['1008', '1015'];
	var sanandreszip = ['1017'];
	var sanmiguelzip = ['1005'];
	var sannicolaszip = ['1010'];
	var staanazip = ['1009'];
	var stacruzzip = ['1014', '1003'];
	var stamesazip = ['1016'];
	var tondozip = ['1013', '1012'];
	var ermitazip = ['1000'];
	//------------------------------------------------------------------------------------------------
	// Controls
	$('#region').on('change', function(){
		if(this.value == '')
		{
			$('#city').empty();
		}

		if(this.value == 'National Capital Region')
		{
			$('#city').empty();
			$('#city').append($('<option></option>'));
			$.each(ncr, function(key, value){
				$('#city').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'ARMM')
		{
			$('#city').empty();
			$('#city').append($('<option></option>'));
			$.each(armm, function(key, value){
				$('#city').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Cordillera Administrative Region')
		{
			$('#city').empty();
			$('#city').append($('<option></option>'));
			$.each(car, function(key, value){
				$('#city').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Region I - Ilocos Region')
		{
			$('#city').empty();
			$('#city').append($('<option></option>'));
			$.each(region1, function(key, value){
				$('#city').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Region II - Cagayan Valley')
		{
			$('#city').empty();
			$('#city').append($('<option></option>'));
			$.each(region2, function(key, value){
				$('#city').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Region III - Central Luzon')
		{
			$('#city').empty();
			$('#city').append($('<option></option>'));
			$.each(region3, function(key, value){
				$('#city').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Region IV-A - CALABARZON')
		{
			$('#city').empty();
			$('#city').append($('<option></option>'));
			$.each(region4a, function(key, value){
				$('#city').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Region IV-B - MIMAROPA')
		{
			$('#city').empty();
			$('#city').append($('<option></option>'));
			$.each(region4b, function(key, value){
				$('#city').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Region V - Bicol Region')
		{
			$('#city').empty();
			$('#city').append($('<option></option>'));
			$.each(region5, function(key, value){
				$('#city').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Region VI - Western Visayas')
		{
			$('#city').empty();
			$('#city').append($('<option></option>'));
			$.each(region6, function(key, value){
				$('#city').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Region VII - Central Visayas')
		{
			$('#city').empty();
			$('#city').append($('<option></option>'));
			$.each(region7, function(key, value){
				$('#city').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Region VIII - Eastern Visayas')
		{
			$('#city').empty();
			$('#city').append($('<option></option>'));
			$.each(region8, function(key, value){
				$('#city').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Region IX - Zamboanga Peninsula')
		{
			$('#city').empty();
			$('#city').append($('<option></option>'));
			$.each(region9, function(key, value){
				$('#city').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Region X - Northern Mindanao')
		{
			$('#city').empty();
			$('#city').append($('<option></option>'));
			$.each(region10, function(key, value){
				$('#city').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Region XI - Davao Region')
		{
			$('#city').empty();
			$('#city').append($('<option></option>'));
			$.each(region11, function(key, value){
				$('#city').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Region XII - SOCCSKSARGEN')
		{
			$('#city').empty();
			$('#city').append($('<option></option>'));
			$.each(region12, function(key, value){
				$('#city').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Region XIII - CARAGA Region')
		{
			$('#city').empty();
			$('#city').append($('<option></option>'));
			$.each(region13, function(key, value){
				$('#city').append($('<option></option>').val(value).html(value));
			});
		}
	});

	$('#city').on('change', function(){
		if(this.value == '')
		{
			$('#muns').empty();
		}

		if(this.value == 'Manila City')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(manila, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Quezon City')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(qc, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'San Juan')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(sanjuan, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Caloocan')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(caloocan, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Las Pinas')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(laspinas, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Makati')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(makati, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Malabon')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(malabon, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Marikina')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(marikina, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Mandaluyong')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(mandaluyong, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Navotas')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(navotas, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Paranaque')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(paranaque, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Pasay')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(pasay, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Pasig')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(pasig, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Taguig')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(taguig, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Valenzuela')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(valenzuela, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Basilan')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(basilan, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Lanao del Sur')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(lanaodelsur, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Maguindanao')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(maguindanao, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Sulu')
		{
			$('#muns').empty();
			$('#muns').append($('<option></option>'));
			$.each(sulu, function(key, value){
				$('#muns').append($('<option></option>').val(value).html(value));
			});
		}
	});

	$('#muns').on('change', function(){
		if(this.value == '')
		{
			$('#bgy').empty();
		}

		if(this.value == 'Binondo')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(binondo, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Ermita')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(ermita, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Intramuros')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(intramuros, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Malate')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(malate, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Paco')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(paco, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Pandacan')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(pandacan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Port Area')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(portarea, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Quiapo')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(quiapo, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Sampaloc')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(sampaloc, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'San Andres')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(sanandres, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'San Miguel')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(sanmiguel, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'San Nicolas')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(sannicolas, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Sta. Ana')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(staana, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Sta. Cruz')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(stacruz, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Sta. Mesa')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(stamesa, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Tondo')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(tondo, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Amai Manabilang (Bumbaran)')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(amaimanabilang, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Bacolod-Kalawi (Bacolod-Grande)')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(bacolodkalawi, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Balabagan')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(balabagan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Balindong (Watu)')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(balindong, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Bayang')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(bayang, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Binidayan')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(binidayan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Buadiposo-Buntong')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(buadiposo, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Bubong')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(bubong, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Butig')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(butig, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Calanogas')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(calanogas, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Ditsaan-Ramain')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(ditsaan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Ganassi')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(ganassi, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Kapai')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(balabagan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Kapatagan')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(kapatagan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Lumba-Bayabao (Maguing)')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(lumbabayabao, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Lumbaca-Unayan')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(lumbacaunayan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Lumbatan')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(lumbatan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Lumbayanague')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(lumbayanague, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Madalum')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(madalum, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Madamba')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(madamba, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Maguing')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(maguing, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Malabang')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(malabang, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Marantao')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(marantao, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Marawi')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(marawi, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Marogong')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(marogong, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Masiu')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(masiu, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Mulondo')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(mulondo, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Pagayawan (Tatarikan)')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(pagayawan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Piagapo')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(piagapo, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Picong (Sultan Gumander)')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(picong, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Poona Bayabao (Gata)')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(poona, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Pualas')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(pualas, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Saguiaran')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(saguiaran, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Sultan Dumalondong')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(sultandumalondong, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Tagoloan II')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(tagoloan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Tamparan')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(tamparan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Taraka')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(taraka, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Tubaran')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(tubaran, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Tugaya')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(tugaya, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Wao')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(wao, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Hadji Panglima Tahil (Marunggas)')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(hadji, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Indanan')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(indanan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Jolo')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(jolo, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Maimbung')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(maimbung, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Pangutaran')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(pangutaran, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Parang')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(parang, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Patikul')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(patikul, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Talipao')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(talipao, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Banguingui (Tongkil)')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(banguingui, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Kalingalan Caluang')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(kalingalan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Lugus')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(lugus, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Luuk')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(luuk, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Old Panamao')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(oldpanamao, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Omar')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(omar, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Pandami')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(pandami, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Panglima Estino (New Panamao)')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(panglimaestino, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Pata')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(pata, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Siasi')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(siasi, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Tapul')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(tapul, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}
	});

	$('#muns').on('change', function(){
		if(this.value == '')
		{
			$('#bgy').empty();
		}

		if(this.value == 'Bago Bantay'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(bagobantay, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'North Edsa'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(northedsa, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Project 1'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(project1, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Project 3'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(project3, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Project 4'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(project4, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Anonas'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(project2, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Project 5'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(project5, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Project 6'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(project6, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Project 7'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(project7, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Project 8'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(project8, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Balintawak'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(balintawakqc, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Munoz'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(munoz, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'La Loma'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(laloma, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Sta. Mesa Heights'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(stamesaheights, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'San Francisco del Monte'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(sanfrancisco, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'West Triangle'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(westtriangle, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Pantranco'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(pantranco, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Manggahan'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(manggahan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Don Antonio'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(donantonio, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Eastwood'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(eastwood, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Murphy'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(murphy, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Cubao'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(cubao, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Katipunan'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(katipunan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Jacobo Zobel'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(jacobozobel, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Old Balara'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(oldbalara, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Balara'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(balara, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Anonas'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(project2, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Green Meadows'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(greenmeadows, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Diliman'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(diliman, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'U.P. Diliman'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(updiliman, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'City Hall'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(cityhall, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Galas'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(galas, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Santol'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(santol, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Santol'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(santol, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Santolan'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(santolan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Betty Go-Belmonte'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(bettygo, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Boy Scout District'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(boyscoutdistrict, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Boy Scout Area'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(boyscoutarea, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Quezon Institute'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(quezoninstitute, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'New Manila'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(newmanila, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Philcoa'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(philcoa, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Christ the King'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(christtheking, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Tomas Morato'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(tomasmorato, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Roces'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(roces, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'G. Araneta'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(araneta, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Gilmore'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(gilmore, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Novaliches'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(novalichesqc, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Zabarte'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(zabarte, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Regalado'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(regalado, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Susano'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(susano, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Holy Cross'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(holycross, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'San Gabriel'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(sangabriel, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Novaliches Bayan'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(novabayanqc, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'General Luis'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(generalluis, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Lagro'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(lagro, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Neopolitan Business Park'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(neopolitan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'La Mesa'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(lamesa, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Tandang Sora'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(tandangsora, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Central'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(centralinc, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Banlat'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(banlat, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Baesa Novaliches'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(novabaesa, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Maluso'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(maluso, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Lantawan'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(lantawan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Sumisip'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(sumisip, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Tuburan'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(tuburan, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if(this.value == 'Tipo-tipo'){
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(tipotipo, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}
	});

	$('#muns').on('change', function(){
		if($('#city').val() == 'San Juan' && this.value == 'District 1')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district1, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if($('#city').val() == 'San Juan' && this.value == 'District 2')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district1, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}
	});

	$('#muns').on('change', function(){
		if($('#city').val() == 'Las Pinas' && this.value == 'District 1')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district1lp, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if($('#city').val() == 'Las Pinas' && this.value == 'District 2')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district2lp, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}
	});

	$('#muns').on('change', function(){
		if($('#city').val() == 'Makati' && this.value == 'District 1')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district1mkti, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if($('#city').val() == 'Makati' && this.value == 'District 2')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district2mkti, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}
	});

	$('#muns').on('change', function(){
		if($('#city').val() == 'Malabon' && this.value == 'District 1')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district1malabon, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if($('#city').val() == 'Malabon' && this.value == 'District 2')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district2malabon, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}
	});

	$('#muns').on('change', function(){
		if($('#city').val() == 'Marikina' && this.value == 'District 1')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district1marikina, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if($('#city').val() == 'Marikina' && this.value == 'District 2')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district2marikina, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}
	});

	$('#muns').on('change', function(){
		if($('#city').val() == 'Mandaluyong' && this.value == 'District 1')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district1manda, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if($('#city').val() == 'Mandaluyong' && this.value == 'District 2')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district2manda, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}
	});

	$('#muns').on('change', function(){
		if($('#city').val() == 'Navotas' && this.value == 'District 1')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district1navotas, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if($('#city').val() == 'Navotas' && this.value == 'District 2')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district2navotas, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}
	});

	$('#muns').on('change', function(){
		if($('#city').val() == 'Paranaque' && this.value == 'District 1')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district1paranaque, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if($('#city').val() == 'Paranaque' && this.value == 'District 2')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district2paranaque, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}
	});

	$('#muns').on('change', function(){
		if($('#city').val() == 'Pasay' && this.value == 'District 1')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district1pasay, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if($('#city').val() == 'Pasay' && this.value == 'District 2')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district2pasay, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}
	});

	$('#muns').on('change', function(){
		if($('#city').val() == 'Pasig' && this.value == 'District 1')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district1pasig, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if($('#city').val() == 'Pasig' && this.value == 'District 2')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district2pasig, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}
	});

	$('#muns').on('change', function(){
		if($('#city').val() == 'Taguig' && this.value == 'District 1')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district1taguig, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if($('#city').val() == 'Taguig' && this.value == 'District 2')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district2taguig, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}
	});

	$('#muns').on('change', function(){
		if($('#city').val() == 'Valenzuela' && this.value == 'District 1')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district1valenzuela, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}

		if($('#city').val() == 'Valenzuela' && this.value == 'District 2')
		{
			$('#bgy').empty();
			$('#bgy').append($('<option></option>'));
			$.each(district2valenzuela, function(key, value){
				$('#bgy').append($('<option></option>').val(value).html(value));
			});
		}
	});

	$('#muns').on('change', function(){
		if(this.value == 'Binondo')
		{
			$('#zipcode').empty();
			$('#zipcode').append($('<option></option>'));
			$.each(binondozip, function(key, value){
				$('#zipcode').append($('<option></option>').val(value).html(value));
			});
		}
		if(this.value == 'Ermita')
		{
			$('#zipcode').empty();
			$('#zipcode').append($('<option></option>'));
			$.each(ermitazip, function(key, value){
				$('#zipcode').append($('<option></option>').val(value).html(value));
			});
		}
		if(this.value == 'Intramuros')
		{
			$('#zipcode').empty();
			$('#zipcode').append($('<option></option>'));
			$.each(intrazip, function(key, value){
				$('#zipcode').append($('<option></option>').val(value).html(value));
			});
		}
		if(this.value == 'Malate')
		{
			$('#zipcode').empty();
			$('#zipcode').append($('<option></option>'));
			$.each(malatezip, function(key, value){
				$('#zipcode').append($('<option></option>').val(value).html(value));
			});
		}
		if(this.value == 'Paco')
		{
			$('#zipcode').empty();
			$('#zipcode').append($('<option></option>'));
			$.each(pacozip, function(key, value){
				$('#zipcode').append($('<option></option>').val(value).html(value));
			});
		}
		if(this.value == 'Pandacan')
		{
			$('#zipcode').empty();
			$('#zipcode').append($('<option></option>'));
			$.each(pandacanzip, function(key, value){
				$('#zipcode').append($('<option></option>').val(value).html(value));
			});
		}
		if(this.value == 'Port Area')
		{
			$('#zipcode').empty();
			$('#zipcode').append($('<option></option>'));
			$.each(portareazip, function(key, value){
				$('#zipcode').append($('<option></option>').val(value).html(value));
			});
		}
		if(this.value == 'Quiapo')
		{
			$('#zipcode').empty();
			$('#zipcode').append($('<option></option>'));
			$.each(quiapozip, function(key, value){
				$('#zipcode').append($('<option></option>').val(value).html(value));
			});
		}
		if(this.value == 'Sampaloc')
		{
			$('#zipcode').empty();
			$('#zipcode').append($('<option></option>'));
			$.each(sampaloczip, function(key, value){
				$('#zipcode').append($('<option></option>').val(value).html(value));
			});
		}
		if(this.value == 'San Andres')
		{
			$('#zipcode').empty();
			$('#zipcode').append($('<option></option>'));
			$.each(sanandreszip, function(key, value){
				$('#zipcode').append($('<option></option>').val(value).html(value));
			});
		}
		if(this.value == 'San Miguel')
		{
			$('#zipcode').empty();
			$('#zipcode').append($('<option></option>'));
			$.each(sanmiguelzip, function(key, value){
				$('#zipcode').append($('<option></option>').val(value).html(value));
			});
		}
		if(this.value == 'San Nicolas')
		{
			$('#zipcode').empty();
			$('#zipcode').append($('<option></option>'));
			$.each(sannicolaszip, function(key, value){
				$('#zipcode').append($('<option></option>').val(value).html(value));
			});
		}
		if(this.value == 'Sta. Ana')
		{
			$('#zipcode').empty();
			$('#zipcode').append($('<option></option>'));
			$.each(staanazip, function(key, value){
				$('#zipcode').append($('<option></option>').val(value).html(value));
			});
		}
		if(this.value == 'Sta. Cruz')
		{
			$('#zipcode').empty();
			$('#zipcode').append($('<option></option>'));
			$.each(stacruzzip, function(key, value){
				$('#zipcode').append($('<option></option>').val(value).html(value));
			});
		}
		if(this.value == 'Sta. Mesa')
		{
			$('#zipcode').empty();
			$('#zipcode').append($('<option></option>'));
			$.each(stamesazip, function(key, value){
				$('#zipcode').append($('<option></option>').val(value).html(value));
			});
		}
		if(this.value == 'Tondo')
		{
			$('#zipcode').empty();
			$('#zipcode').append($('<option></option>'));
			$.each(tondozip, function(key, value){
				$('#zipcode').append($('<option></option>').val(value).html(value));
			});
		}

	});
	//--------------------------------------------------------------------------------------------
});