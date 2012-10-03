﻿<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	'server_url'	=>	'http://preview.jitarsabank.com/',
	'server_email'	=>	'JitArsa Bank <JitArsaBank@gmail.com>',
	
	'password_salt'	=>	'abcdefg',

 	'user_roles'		=>	array(
								'volunteer'		=>	'0',
								'organization'	=>	'1',
								'admin'			=>	'2'
							),
	
 	'event_status'		=>	array(
								'1'	=>	__('open'),
								'0'	=>	'close',
								'2'	=>	'draft'
							),
	'sexs'		=>	array(
								''	=>	__('N/A'),
								'm'	=>	__('man'),
								'f'	=>	__('woman')
							),
	
	'provices'			=> array('จังหวัด',
								'กรุงเทพมหานคร', 'กระบี่', 'กาญจนบุรี', 'กาฬสินธุ์', 'กำแพงเพชร', 'ขอนแก่น', 'จันทบุรี', 'ฉะเชิงเทรา', 'ชลบุรี', 'ชัยนาท', 'ชัยภูมิ', 'ชุมพร', 
								'เชียงราย', 'เชียงใหม่', 'ตรัง', 'ตราด', 'ตาก', 'นครนายก', 'นครปฐม', 'นครพนม', 'นครราชสีมา', 'นครศรีธรรมราช', 'นครสวรรค์', 'นนทบุรี', 
								'นราธิวาส', 'น่าน', 'บึงกาฬ', 'บุรีรัมย์', 'ปทุมธานี', 'ประจวบคีรีขันธ์', 'ปราจีนบุรี', 'ปัตตานี', 'พระนครศรีอยุธยา', 'พังงา', 'พัทลุง', 'พิจิตร', 'พิษณุโลก', 
								'เพชรบุรี', 'เพชรบูรณ์', 'แพร่', 'พะเยา', 'ภูเก็ต', 'มหาสารคาม', 'มุกดาหาร', 'แม่ฮ่องสอน', 'ยะลา', 'ยโสธร', 'ร้อยเอ็ด', 'ระนอง', 'ระยอง', 'ราชบุรี', 'ลพบุรี', 
								'ลำปาง', 'ลำพูน', 'เลย', 'ศรีสะเกษ', 'สกลนคร', 'สงขลา', 'สตูล', 'สมุทรปราการ', 'สมุทรสงคราม', 'สมุทรสาคร', 'สระแก้ว', 'สระบุรี', 'สิงห์บุรี', 'สุโขทัย', 
								'สุพรรณบุรี', 'สุราษฎร์ธานี', 'สุรินทร์', 'หนองคาย', 'หนองบัวลำภู', 'อ่างทอง', 'อุดรธานี', 'อุทัยธานี', 'อุตรดิตถ์', 'อุบลราชธานี',  'อำนาจเจริญ'
							),
	'jobs'				=> array('ประเภทงานอาสา',
								 'กู้ภัยและฟื้นฟูจากภัยพิบัติ', 'หัตถกรรมและงานฝีมือ เย็บ ปัก ถัก ร้อย', 'ศาสนาและปฏิบัติธรรม', 'ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ', 'อาหารและโภชนาการ', 
								'สิ่งแวดล้อมและการเกษตร', 'ก่อสร้างและงานช่างเทคนิค', 'ประสานงานและบริหารจัดการ', 'เด็กและเยาวชน', 'สตรี', 'ผู้สูงอายุและครอบครัว', 'ผู้พิการ', 'ไอที และคอมพิวเตอร์กราฟฟิค', 
								'สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด', 'สุนัข แมว และสัตว์เลี้ยง', 'กฎหมาย', 'สุขภาพและสาธารณสุข', 'การศึกษาและฝึกอบรม'
							),
	'skills'			=> array(
								 'การขับขี่พาหนะ (จักรยานยนต์/รถยนต์)', 'ว่ายน้ำ'
							),	
	'languates'			=> array(
								'อังกฤษ', 'จีน', 'เยอรมัน', 'ญี่ปุ่น' 
							),	
	'technicals'			=> array(
								'ช่างอิเล็กทรอนิคส์', 'ช่างโลหะ', 'ช่างไฟฟ้า', 'ช่างประปา', 'ช่างไม้ ช่างสี', 'ช่างปูน'
							),	
	'days'				=> array(
								 'อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'
							),
	'thai_day_arr'		=> array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์"), 
	'link_type'			=> array(
									0   => 'no_link',
									1	=> 'top_interest_1',	
									2	=> 'top_interest_2',
									3	=> 'top_interest_3',
									4	=> 'top_interest_4',
									5	=> 'skill',
									6	=> 'living',
									7	=> 'location',
									8	=> 'end_date',
								),
	'thai_month_arr'    =>array(    
								"1"=>"มกราคม",  
								"2"=>"กุมภาพันธ์",  
								"3"=>"มีนาคม",  
								"4"=>"เมษายน",  
								"5"=>"พฤษภาคม",  
								"6"=>"มิถุนายน",   
								"7"=>"กรกฎาคม",  
								"8"=>"สิงหาคม",  
								"9"=>"กันยายน",  
								"10"=>"ตุลาคม",  
								"11"=>"พฤศจิกายน",  
								"12"=>"ธันวาคม"                    
								),

	'all_skills' 	=> array ( 
							  '1000' => array ( 
												'1100' => array( 
																	'11011', '11012', '1102', '1103', '1104', '1105T'
																),
												'12001' => array(
																	'12011', '12021', '12031', '12041','12051T'
																),
												'12002' => array(
																	'12012', '12022', '12032', '12042','12052T'
																),
												'12003' => array(
																	'12013', '12023', '12033', '12043','12053T'
																),
												'1300' => array(
																'1301', '1302', '1303', '1304', '1305', 
																'1306' => array(
																					'13061', '13062', '13063' ,'13064T'
																					)
																),
												'1400' => array(
																'1401T', '1402T', '1403', '1404', '1405', '1406'
																),
												'1500' => array(
																'1501', '1502', '1503', '1504', '1505', '1506T'
																),
												'xx'   => '0001T'
												 ),
							   '2000' => array(
											    '2100' => array( '2101', '2102', '2103', '2104', '2105', '2106', '2107'),
												'2200' => array(
																'2201' => array(
																				'22011', '22012', '22013', '22014', '22015', '22016', '22017', 
																				'22018', '22019', '22110', '22111', '22112', '22113', '22114', '22115T'
																				),
																'2202' => array(
																				'22021' => array(
																								'220211', '220212', '220213', '220214', '220215', 
																								'220216', '220217', '220218', '220219T'
																								),
																				'22022' => array(
																								'220221', '220222', '220223', '220224', '220225', '220226T'
																								),
																				'22023' => array(
																								'220231', '220232', '220233', '220234', '220235', '220236',
																							    '220237', '220238', '220239', '2202310', '2202311T'
																								),
																				'22024T',
																				),
																'2203' => array(
																				'22031', '22032', '22033', '22034', '22035', '22036', '22037', '22038',
																				'22039', '220310', '220311', '220312', '220313', '220314', '220315', '220316T'
																				),
																'2204T'
																),
												 '2300' => array(
																'23001' => array(
																				'230011', '230012', '230013', '230014', '230015', '230016', '230017',
																				'230018', '230019', '2300110', '2300111', '2300112', '2300113', '2300114', '2300115T'
																				),
																'23002' => array(
																				'230021', '230022', '230023', '230024', '230025', '230026', '230027',
																			  	'230028', '230029', '2300210', '2300211', '2300212T'
																				),
																'23003',
																'23004',
																'23005',
																'23006',
																'23007',
																'23008',
																'23009',
																'230010',
																'230011',
																'230012T',
																),
												'2400' => array(
																'24001',
																'24002',
																'24003',
																'24004',
																'24005',
																'24006',
																'24007',
																'24008',
																'24009',
																'240010',
																'240011' => array(
																				'2400111', '2400112', '2400113', '2400114', '2400115', '2400116', '2400117T'
																				),
																'240012T',
																),
												'2500' => array(
																'25001', '25002', '25003', '25004', '25005T',
																),
												'2600' => array(
																'26001', '26002', '26003', '26004', '26005', '26006T',
																),
												'2700' => array(
																'27001', '27002', '27003', '27004', '27005', '27006',
																'27007', '27008', '27009', '270010', '270011', '270012T',
																),
												'2800' => array(
																'28001' => array(
																				'280011', '280012', '280013', '280014', 
																				'280015', '280016', '280017', 
																				'280018' => array(
																									'2800181', '2800182', 
																									'2800183', '2800184', 
																									'2800185', '2800186', 
																									'2800187T'
																								),
																				'280019'
																				), 
																'28002', '28003', '28004', '28005', '28006','28007T',
																),
												'2900' => array(
																'29001' => array( 
																				'290011', '290012', '290013',
																				'290014', '290015T'
																				),
																'29002'  => array( 
																				'290021', '290022', '290023',
																				'290024', '290025', '290026T'
																				),
																'29003',
																'29004',
																'29005',
																'29006T',
																),
											),
							   
							  ),
	'worddict'		=> array( 	
							'xx'   => '',
							'0001T'   => 'ความสามารถพิเศษ อื่นๆ โปรดระบุ',
							'0002T'   => 'อื่นๆ โปรดระบุ',
							
							'1000' => 'ความสามารถพิเศษ (Special Skill)',
							
								'1100' => 'ทักษะทั่วไป',
									'11011' => 'ขับขี่รถจักรยานยนต์ได้ (มีใบขับขี่)',
									'11012' => 'ขับขี่รถยนต์ได้ (มีใบขับขี่)',
									'1102' => 'ว่ายน้ำ',
									'1103' => 'ดำน้ำแบบ SCUBA',
									'1104' => 'เดินป่า/การใช้ชีวิตในป่า',
									'1105T' => 'อื่นๆ (โปรดระบุ)',
								'12001' => 'การใช้ภาษา "สื่อสารได้"',
									'12011' => 'อังกฤษ',
									'12021' => 'จีน',
									'12031' => 'เยอรมัน',
									'12041' => 'ฝรั่งเศส',
									'12051T' => 'อื่นๆ (ให้ระบุ)',
									'12002' => 'การใช้ภาษา "อ่านเขียนได้"',
									'12012' => 'อังกฤษ',
									'12022' => 'จีน',
									'12032' => 'เยอรมัน',
									'12042' => 'ฝรั่งเศส',
									'12052T' => 'อื่นๆ (ให้ระบุ)',
									'12003' => 'การใช้ภาษา "แปลได้"',
									'12013' => 'อังกฤษ',
									'12023' => 'จีน',
									'12033' => 'เยอรมัน',
									'12043' => 'ฝรั่งเศส',
									'12053T' => 'อื่นๆ (ให้ระบุ)',
								
								'1300' => 'งานดูแลและสุขภาพ',
									'1301' => 'ทำอาหาร',
									'1302' => 'ดูแลเด็ก',
									'1303' => 'ดูแลคนชรา',
									'1304' => 'ดูแลผู้พิการ',
									'1305' => 'นวด',
									'1306' => 'นำกิจกรรมออกกำลังกาย',
									'13061' => 'เต้นแอโรบิค',
									'13062' => 'โยคะ',
									'13063' => 'ไท่เก๊ก, ชี่กง ฯลฯ',
									'13064T' => 'อื่นๆ (โปรดระบุ)',
								
								'1400' => 'นันทนาการ',
									'1401T' => 'เล่นดนตรี (ระบุชนิดเครื่องดนตรี)',
									'1402T' => 'สอนกีฬา (ระบุชนิดกีฬา)',
									'1403' => 'วาดภาพ (ภาพเหมือน/การ์ตูน/ฯลฯ)',
									'1404' => 'เต้นรำ',
									'1405' => 'ร้องเพลง',
									'1406' => 'อื่นๆ (โปรดระบุ)',
								
								'1500' => 'งานฝีมือและศิลปะ',
									'1501' => 'เย็บปักถักร้อย',
									'1502' => 'งานประดิษฐ์',
									'1503' => 'วาดภาพ',
									'1504' => 'ถ่ายภาพ',
									'1505' => 'ถ่ายวิดีโอ',
									'1506T' => 'อื่นๆ (โปรดระบุ)',
							
							'2000' => 'ทักษะวิชาชีพ (Professional Skill)',
							
							'2100' => 'งานช่างเทคนิค',
									'2101' => 'ช่างอิเลคทรอนิคส์',
									'2102' => 'ช่างไฟฟ้า',
									'2103' => 'ช่างไม้',
									'2104' => 'ช่างปูน',
									'2105' => 'ช่างโลหะ',
									'2106' => 'ช่างประปา',
									'2107' => 'ช่างสี',
							
							'2200' => 'วิทยาศาสตร์และเทคโนโลยี',
								'2201' => 'วิทยาศาสตร์',
									'22011' => 'คณิตศาสตร์',
									'22012' => 'เคมี',
									'22013' => 'ชีววิทยา',
									'22014' => 'ฟิสิกส์',
									'22015' => 'จุลชีววิทยา',
									'22016' => 'ชีวเคมี',
									'22017' => 'เทคโนโลยีชีวภาพ',
									'22018' => 'ธรณีวิทยา',
									'22019' => 'พฤกษศาสตร์',
									'22110' => 'วัสดุศาสตร์',
									'22111' => 'วิทยาศาสตร์การเกษตร',
									'22112' => 'วิทยาศาสตร์การอาหาร',
									'22113' => 'วิทยาศาสตร์ทางทะเล',
									'22114' => 'สัตววิทยา',
									'22115T' => 'อื่น (โปรดระบุ)',
								'2202' => 'คอมพิวเตอร์และไอที',
									'22021' => 'โปรแกรมคอมพิวเตอร์สำนักงาน',
										'220211' => 'Microsoft Word',
										'220212' => 'Microsoft Excel',
										'220213' => 'Microsoft PowerPoint',
										'220214' => 'Microsoft Publisher',
										'220215' => 'Pages',
										'220216' => 'Keynote',
										'220217' => 'Numbers',
										'220218' => 'Open Office ',
										'220219T' => 'อื่นๆ (โปรดระบุ)',
									'22022' => 'พัฒนาเว็บไซต์',
										'220221' => 'WordPress',
										'220222' => 'Joomla',
										'220223' => 'Adobe Dreamweaver',
										'220224' => 'HTML',
										'220225' => 'CSS',
										'220226T' => 'อื่นๆ (โปรดระบุ)',
									'22023' => 'การใช้โปรแกรมสร้างสื่อผสม (multimedia)',
										'220231' => 'Adobe Photoshop',
										'220232' => 'Adobe Illustrator',
										'220233' => 'Adobe Flash',
										'220234' => 'Adobe InDesign',
										'220235' => 'Adobe Premiere Pro',
										'220236' => 'Windows Movie Maker',
										'220237' => 'iMovie',
										'220238' => 'Final Cut Pro',
										'220239' => 'Maya',
										'2202310' => '3D Max ',
										'2202311T' => 'อื่นๆ (โปรดระบุ)',
									'22024T'	=> 'อื่นๆ (โปรดระบุ)ุ',
								'2203' => 'วิศวกรรม',
									'22031' => 'วิศวกรรมนิวเคลียร์',
									'22032' => 'วิศวกรรมคอมพิวเตอร์',
									'22033' => 'วิศวกรรมเคมี',
									'22034' => 'วิศวกรรมเครื่องกล',
									'22035' => 'วิศวกรรมไฟฟ้า',
									'22036' => 'วิศวกรรมโยธา',
									'22037' => 'วิศวกรรมโลหการ',
									'22038' => 'วิศวกรรมสำรวจ',
									'22039' => 'วิศวกรรมสิ่งแวดล้อม ',
									'220310' => 'วิศวกรรมเหมืองแร่',
									'220311' => 'วิศวกรรมปิโตรเลียม',
									'220312' => 'วิศวกรรมแหล่งน้ำ',
									'220313' => 'วิศวกรรมอุตสาหการ',
									'220314' => 'วิศวกรรมชีวการแพทย์',
									'220315' => 'วิศวกรรมการบินและอวกาศ',
									'220316T' => 'อื่นๆ (โปรดระบุ)',
								'2204T' => 'อื่นๆ(โปรดระบุ)',	
							'2300' => 'สุขภาพ',
								'23001' => 'แพทย์',
									'230011' => 'แพทย์เวชปฏิบัติทั่วไป',
									'230012' => 'อายุรแพทย์',
									'230013' => 'ศัลยแพทย์',
									'230014' => 'ศัลยแพทย์ออร์โธปิดิกส์ ',
									'230015' => 'จักษุแพทย์',
									'230016' => 'จิตแพทย์',
									'230017' => 'แพทย์โสตศอนาสิก',
									'230018' => 'พยาธิแพทย์',
									'230019' => 'รังสีแพทย์ ',
									'2300110' => 'วิสัญญีแพทย์',
									'2300111' => 'กุมารแพทย์',
									'2300112' => 'แพทย์เวชปฏิบัติครอบครัว',
									'2300113' => 'แพทย์เวชศาสตร์ฟื้นฟู',
									'2300114' => 'แพทย์เวชศาสตร์ฉุกเฉิน',
									'2300115T' => 'อื่นๆ (โปรดระบุ)',
								'23002' => 'พยาบาล',
									'230021' => 'การพยาบาลปฐมภูมิ',
									'230022' => 'การพยาบาลกุมารเวชศาสตร์',
									'230023' => 'การพยาบาลจักษุ โสต นาสิก ลาริงซ์วิทยา',
									'230024' => 'การพยาบาลผู้ป่วยนอก',
									'230025' => 'การพยาบาลผู้ป่วยพิเศษ',
									'230026' => 'การพยาบาลศัลยศาสตร์',
									'230027' => 'การพยาบาลรังสีวิทยา',
									'230028' => 'การพยาบาลสูติศาสตร์',
									'230029' => 'การพยาบาลอายุรศาสตร์ ',
									'2300210' => 'การพยาบาลระบบหัวใจ',
									'2300211' => 'ผู้ช่วยพยาบาล',
									'2300212T' => 'อื่นๆ (โปรดระบุ)',
								'23003' => 'ทันตแพทย์',
								'23004' => 'เทคนิคการแพทย์',
								'23005' => 'รังสีเทคนิค',
								'23006' => 'เภสัชศาสตร์',
								'23007' => 'กายภาพบำบัด',
								'23008' => 'กิจกรรมบำบัด',
								'23009' => 'สาธารณสุข',
								'230010' => 'โภชนาการ ',
								'230011' => 'สัตวแพทย์',
								'230012T' => 'อื่นๆ (โปรดระบุ)',
							'2400' => 'สังคมศาตร์และมนุษยศาสตร์',
								'24001' => 'สังคมวิทยา',
								'24002' => 'มานุษยวิทยา',
								'24003' => 'ประวัติศาสตร์',
								'24004' => 'รัฐศาสตร์',
								'24005' => 'ภูมิศาสตร์ ',
								'24006' => 'กฎหมาย',
								'24007' => 'ประชากรศาสตร์',
								'24008' => 'เศรษฐศาสตร์',
								'24009' => 'บรรณารักษ์',
								'240010' => 'พัฒนาสังคม/สังคมสงเคราะห์',
								'240011' => 'จิตวิทยา',
									'2400111' => 'จิตวิทยาคลินิก',
									'2400112' => 'จิตวิทยาการให้คำปรึกษา',
									'2400113' => 'จิตวิทยาอุตสาหกรรม',
									'2400114' => 'จิตวิทยาพัฒนาการ',
									'2400115' => 'จิตวิทยาชุมชน',
									'2400116' => 'จิตวิทยาการศึกษา',
									'2400117T' => 'อื่นๆ (โปรดระบุ)',
								'240012T' => 'อื่นๆ (โปรดระบุ)',
							'2500' => 'บริหารธุรกิจ',
								'25001' => 'การบัญชี',
								'25002' => 'การเงิน',
								'25003' => 'การตลาด',
								'25004' => 'การบริหารจัดการ',
								'25005T' => 'อื่นๆ (โปรดระบุ) ',
							'2600' => 'สถาปัตยกรรม',
								'26001' => 'สถาปัตยกรรมภายใน',
								'26002' => 'วางแผนภาคและเมือง',
								'26003' => 'ออกแบบอุตสาหกรรม',
								'26004' => 'ภูมิสถาปัตยกรรม',
								'26005' => 'เคหการ ',
								'26006T' => 'อื่นๆ (โปรดระบุ)',
							'2700' => 'ศิลปวัฒนธรรม วารสารศาสตร์ นิเทศศาสตร์',
								'27001' => 'การละคร',
								'27002' => 'วรรณศิลป์',
								'27003' => 'โบราณคดี',
								'27004' => 'ภาพยนตร์',
								'27005' => 'สื่อสารมวลชน ',
								'27006' => 'โทรทัศน์/วิทยุ',
								'27007' => 'การโฆษณาและประชาสัมพันธ์',
								'27008' => 'วารสารศาสตร์ (journalism)',
								'27009' => 'จิตรกรรมและประติมากรรม ',
								'270010' => 'ออกแบบและตกแต่งภายใน',
								'270011' => 'ออกแบบกราฟฟิก',
								'270012T' => 'อื่นๆ (โปรดระบุ) ',
							'2800' => 'การศึกษา',
								'28001' => 'งานสอน',
									'280011' => 'สอนภาษาไทย',
									'280012' => 'สอนคณิตศาสตร์',
									'280013' => 'สอนวิทยาศาสตร์',
									'280014' => 'สอนสังคมศึกษา',
									'280015' => 'สอนสุขศึกษา',
									'280016' => 'สอนพลศึกษา',
									'280017' => 'สอนการงานอาชีพและเทคโนโลยี',
									'280018' => 'ภาษาต่างประเทศ ',
										'2800181' => 'สอนอังกฤษ',
										'2800182' => 'สอนเยอรมัน',
										'2800183' => 'สอนฝรั่งเศส',
										'2800184' => 'สอนญี่ปุ่น',
										'2800185' => 'สอนจีน',
										'2800186' => 'สอนเกาหลี',
										'2800187T' => 'อื่นๆ (โปรดระบุ)',
									'280019' => 'อื่นๆ (โปรดระบุ)',
								'28002' => 'สอนเทคโนโลยีการศึกษา',
								'28003' => 'สอนวิจัยการศึกษา',
								'28004' => 'สอนบริหารการศึกษา',
								'28005' => 'สอนการวัดและประเมินผลการศึกษา',
								'28006' => 'สอนสถิติและสารสนเทศการศึกษา',
								'28007T' => 'อื่นๆ (โปรดระบุ)',
							'2900' => 'สิ่งแวดล้อมและการเกษตร',
								'29001' => 'สิ่งแวดล้อม',
									'290011' => 'เทคโนโลยีการบริหารสิ่งแวดล้อม',
									'290012' => 'การจัดการสิ่งแวดล้อม และทรัพยากรธรรมชาติ',
									'290013' => 'การจัดการสารสนเทศสิ่งแวดล้อมและทรัพยากร',
									'290014' => 'สิ่งแวดล้อมศึกษา',
									'290015T' => 'อื่นๆ (โปรดระบุ)',
								'29002' => 'การเกษตร',
									'290021' => 'พืชไร่',
									'290022' => 'พืชสวน',
									'290023' => 'โรคพืช',
									'290024' => 'เคมีการเกษตร',	
									'290025' => 'การจัดการศัตรูพืช',
									'290026T' => 'อื่นๆ (โปรดระบุ)',
								'29003' => 'สัตวบาล',
								'29004' => 'การประมง',
								'29005' => 'วนศาสตร์',
								'29006T' => 'อื่นๆ (โปรดระบุ)',
						'3000T' => 'สิ่งแวดล้อมและการเกษตร'
						)		
				
);