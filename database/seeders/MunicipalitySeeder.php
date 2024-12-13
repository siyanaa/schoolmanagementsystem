<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
                [
                    'id' => 1,
                    'district_id' => 1,
                    'name' => 'Shadanand Municipality',
                    'name_np' => 'षडानन्द नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 2,
                    'district_id' => 1,
                    'name' => 'Bhojpur Municipality',
                    'name_np' => 'भोजपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 3,
                    'district_id' => 1,
                    'name' => 'Hatuwagadhi Rural Municipality',
                    'name_np' => 'हतुवागढी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 4,
                    'district_id' => 1,
                    'name' => 'Ramprasad Rai Rural Municipality',
                    'name_np' => 'रामप्रसाद राई गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 5,
                    'district_id' => 1,
                    'name' => 'Aamchok Rural Municipality',
                    'name_np' => 'आमचोक गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 6,
                    'district_id' => 1,
                    'name' => 'Tyamke Maiyum Rural Municipality',
                    'name_np' => 'टेम्केमैयुङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 7,
                    'district_id' => 1,
                    'name' => 'Arun Rural Municipality',
                    'name_np' => 'अरुण गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 8,
                    'district_id' => 1,
                    'name' => 'Pauwadungma Rural Municipality',
                    'name_np' => 'पौवादुङमा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 9,
                    'district_id' => 1,
                    'name' => 'Salpasilichho Rural Municipality',
                    'name_np' => 'साल्पासिलिछो गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 10,
                    'district_id' => 2,
                    'name' => 'Dhankuta Municipality',
                    'name_np' => 'धनकुटा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 11,
                    'district_id' => 2,
                    'name' => 'Pakhribas Municipality',
                    'name_np' => 'पाख्रिबास नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 12,
                    'district_id' => 2,
                    'name' => 'Mahalaxmi Municipality',
                    'name_np' => 'महालक्ष्मी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 13,
                    'district_id' => 2,
                    'name' => 'Sangurigadhi Rural Municipality',
                    'name_np' => 'साँगुरीगढी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 14,
                    'district_id' => 2,
                    'name' => 'Chaubise Rural Municipality',
                    'name_np' => 'चौविसे गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 15,
                    'district_id' => 2,
                    'name' => 'Sahidbhumi Rural Municipality',
                    'name_np' => 'सहिदभूमि गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 16,
                    'district_id' => 2,
                    'name' => 'Chhathar Jorpati Rural Municipality',
                    'name_np' => 'छथर जोरपाटी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 17,
                    'district_id' => 3,
                    'name' => 'Suryodaya Municipality',
                    'name_np' => 'सूर्योदय नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 18,
                    'district_id' => 3,
                    'name' => 'Ilam Municipality',
                    'name_np' => 'ईलाम नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 19,
                    'district_id' => 3,
                    'name' => 'Deumai Municipality',
                    'name_np' => 'देउमाई नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 20,
                    'district_id' => 3,
                    'name' => 'Maijogmai Rural Municipality',
                    'name_np' => 'माईजोगमाई गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 21,
                    'district_id' => 3,
                    'name' => 'Phakphokthum Rural Municipality',
                    'name_np' => 'फाकफोकथुम गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 22,
                    'district_id' => 3,
                    'name' => 'Mai Municipality',
                    'name_np' => 'माई नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 23,
                    'district_id' => 3,
                    'name' => 'Chulachuli Rural Municipality',
                    'name_np' => 'चुलाचुली गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 24,
                    'district_id' => 3,
                    'name' => 'Rong Rural Municipality',
                    'name_np' => 'रोङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 25,
                    'district_id' => 3,
                    'name' => 'Mangsebung Rural Municipality',
                    'name_np' => 'माङसेबुङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 26,
                    'district_id' => 3,
                    'name' => 'Sandakpur Rural Municipality',
                    'name_np' => 'सन्दकपुर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 27,
                    'district_id' => 4,
                    'name' => 'Mechinagar Municipality',
                    'name_np' => 'मेचीनगर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15,
                    ])
                ],
                [
                    'id' => 28,
                    'district_id' => 4,
                    'name' => 'Birtamod Municipality',
                    'name_np' => 'विर्तामोड नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 29,
                    'district_id' => 4,
                    'name' => 'Damak Municipality',
                    'name_np' => 'दमक नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 30,
                    'district_id' => 4,
                    'name' => 'Bhadrapur Municipality',
                    'name_np' => 'भद्रपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 31,
                    'district_id' => 4,
                    'name' => 'Shivasatakshi Municipality',
                    'name_np' => 'शिवशताक्षी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 32,
                    'district_id' => 4,
                    'name' => 'Arjundhara Municipality',
                    'name_np' => 'अर्जुनधारा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 33,
                    'district_id' => 4,
                    'name' => 'Gauradaha Municipality',
                    'name_np' => 'गौरादह नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 34,
                    'district_id' => 4,
                    'name' => 'Kankai Municipality',
                    'name_np' => 'कन्काई नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 35,
                    'district_id' => 4,
                    'name' => 'Kamal Rural Municipality',
                    'name_np' => 'कमल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 36,
                    'district_id' => 4,
                    'name' => 'Buddha Shanti Rural Municipality',
                    'name_np' => 'बुद्धशान्ति गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 37,
                    'district_id' => 4,
                    'name' => 'Kachankawal Rural Municipality',
                    'name_np' => 'कचनकवल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 38,
                    'district_id' => 4,
                    'name' => 'Jhapa Rural Municipality',
                    'name_np' => 'झापा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 39,
                    'district_id' => 4,
                    'name' => 'Barhadashi Rural Municipality',
                    'name_np' => 'बाह्रदशी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 40,
                    'district_id' => 4,
                    'name' => 'Gaurigunj Rural Municipality',
                    'name_np' => 'गौरीगंज गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 41,
                    'district_id' => 4,
                    'name' => 'Haldibari Rural Municipality',
                    'name_np' => 'हल्दिवारी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 42,
                    'district_id' => 5,
                    'name' => 'Diktel Rupakot Majhuwagadhi Municipality',
                    'name_np' => 'दिक्तेल रुपाकोट मझुवागढी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15,
                    ])
                ],
                [
                    'id' => 43,
                    'district_id' => 5,
                    'name' => 'Halesi Tuwachung Municipality',
                    'name_np' => 'हलेसी तुवाचुङ नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 44,
                    'district_id' => 5,
                    'name' => 'Khotehang Rural Municipality',
                    'name_np' => 'खोटेहाङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 45,
                    'district_id' => 5,
                    'name' => 'Diprung Chuichumma Rural Municipality',
                    'name_np' => 'दिप्रुङ चुइचुम्मा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 46,
                    'district_id' => 5,
                    'name' => 'Aiselukharka Rural Municipality',
                    'name_np' => 'ऐसेलुखर्क गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 47,
                    'district_id' => 5,
                    'name' => 'Jantedhunga Rural Municipality',
                    'name_np' => 'जन्तेढुंगा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 48,
                    'district_id' => 5,
                    'name' => 'Kepilasgadhi Rural Municipality',
                    'name_np' => 'केपिलासगढी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 49,
                    'district_id' => 5,
                    'name' => 'Barahpokhari Rural Municipality',
                    'name_np' => 'वराहपोखरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 50,
                    'district_id' => 5,
                    'name' => 'Rawa Besi Rural Municipality',
                    'name_np' => 'रावा बेसी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 51,
                    'district_id' => 5,
                    'name' => 'Sakela Rural Municipality',
                    'name_np' => 'साकेला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 52,
                    'district_id' => 6,
                    'name' => 'Sundar Haraicha Municipality',
                    'name_np' => 'सुन्दरहरैचा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 53,
                    'district_id' => 6,
                    'name' => 'Belbari Municipality',
                    'name_np' => 'बेलवारी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 54,
                    'district_id' => 6,
                    'name' => 'Pathari Shanischare Municipality',
                    'name_np' => 'पथरी शनिश्चरे नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 55,
                    'district_id' => 6,
                    'name' => 'Ratuwamai Municipality',
                    'name_np' => 'रतुवामाई नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 56,
                    'district_id' => 6,
                    'name' => 'Urlabari Municipality',
                    'name_np' => 'उर्लावारी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 57,
                    'district_id' => 6,
                    'name' => 'Rangeli Municipality',
                    'name_np' => 'रंगेली नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 58,
                    'district_id' => 6,
                    'name' => 'Sunawarshi Municipality',
                    'name_np' => 'सुनवर्षि नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 59,
                    'district_id' => 6,
                    'name' => 'Letang Municipality',
                    'name_np' => 'लेटाङ नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 60,
                    'district_id' => 6,
                    'name' => 'Biratnagar Metropolitan City',
                    'name_np' => 'विराटनगर महानगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19,
                    ])
                ],
                [
                    'id' => 61,
                    'district_id' => 6,
                    'name' => 'Jahada Rural Municipality',
                    'name_np' => 'जहदा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 62,
                    'district_id' => 6,
                    'name' => 'Budi Ganga Rural Municipality',
                    'name_np' => 'बुढीगंगा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 63,
                    'district_id' => 6,
                    'name' => 'Katahari Rural Municipality',
                    'name_np' => 'कटहरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 64,
                    'district_id' => 6,
                    'name' => 'Dhanpalthan Rural Municipality',
                    'name_np' => 'धनपालथान गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 65,
                    'district_id' => 6,
                    'name' => 'Kanepokhari Rural Municipality',
                    'name_np' => 'कानेपोखरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 66,
                    'district_id' => 6,
                    'name' => 'Gramthan Rural Municipality',
                    'name_np' => 'ग्रामथान गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 67,
                    'district_id' => 6,
                    'name' => 'Kerabari Rural Municipality',
                    'name_np' => 'केरावारी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 68,
                    'district_id' => 6,
                    'name' => 'Miklajung Rural Municipality',
                    'name_np' => 'मिक्लाजुङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 69,
                    'district_id' => 7,
                    'name' => 'Siddhicharan Municipality',
                    'name_np' => 'सिद्दिचरण नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 70,
                    'district_id' => 7,
                    'name' => 'Khiji Demba Rural Municipality',
                    'name_np' => 'खिजिदेम्बा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 71,
                    'district_id' => 7,
                    'name' => 'Chisankhugadhi Rural Municipality',
                    'name_np' => 'चिशंखुगढी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 72,
                    'district_id' => 7,
                    'name' => 'Molung Rural Municipality',
                    'name_np' => 'मोलुङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 73,
                    'district_id' => 7,
                    'name' => 'Sunkoshi Rural Municipality',
                    'name_np' => 'सुनकोशी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 74,
                    'district_id' => 7,
                    'name' => 'Champadevi Rural Municipality',
                    'name_np' => 'चम्पादेवी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 75,
                    'district_id' => 7,
                    'name' => 'Manebhanjyang Rural Municipality',
                    'name_np' => 'मानेभञ्याङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 76,
                    'district_id' => 7,
                    'name' => 'Likhu Rural Municipality',
                    'name_np' => 'लिखु गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 77,
                    'district_id' => 8,
                    'name' => 'Phidim Municipality',
                    'name_np' => 'फिदिम नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 78,
                    'district_id' => 8,
                    'name' => 'Miklajung Rural Municipality',
                    'name_np' => 'मिक्लाजुङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 79,
                    'district_id' => 8,
                    'name' => 'Phalgunanda Rural Municipality',
                    'name_np' => 'फाल्गुनन्द गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 80,
                    'district_id' => 8,
                    'name' => 'Hilihang Rural Municipality',
                    'name_np' => 'हिलिहाङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 81,
                    'district_id' => 8,
                    'name' => 'Phalelung Rural Municipality',
                    'name_np' => 'फालेलुङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 82,
                    'district_id' => 8,
                    'name' => 'Yangwarak Rural Municipality',
                    'name_np' => 'याङवरक गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 83,
                    'district_id' => 8,
                    'name' => 'Kummayak Rural Municipality',
                    'name_np' => 'कुम्मायक गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 84,
                    'district_id' => 8,
                    'name' => 'Tumbewa Rural Municipality',
                    'name_np' => 'तुम्बेवा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 85,
                    'district_id' => 9,
                    'name' => 'Khandbari Municipality',
                    'name_np' => 'खाँदवारी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 86,
                    'district_id' => 9,
                    'name' => 'Chainpur Municipality',
                    'name_np' => 'चैनपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 87,
                    'district_id' => 9,
                    'name' => 'Dharmadevi Municipality',
                    'name_np' => 'धर्मदेवी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 88,
                    'district_id' => 9,
                    'name' => 'Panchkhapan Municipality',
                    'name_np' => 'पाँचखपन नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 89,
                    'district_id' => 9,
                    'name' => 'Madi Municipality',
                    'name_np' => 'मादी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 90,
                    'district_id' => 9,
                    'name' => 'Makalu Rural Municipality',
                    'name_np' => 'मकालु गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 91,
                    'district_id' => 9,
                    'name' => 'Silichong Rural Municipality',
                    'name_np' => 'सिलीचोङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 92,
                    'district_id' => 9,
                    'name' => 'Sabhapokhari Rural Municipality',
                    'name_np' => 'सभापोखरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 93,
                    'district_id' => 9,
                    'name' => 'Chichila Rural Municipality',
                    'name_np' => 'चिचिला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 94,
                    'district_id' => 9,
                    'name' => 'BhotKhola Rural Municipality',
                    'name_np' => 'भोटखोला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 95,
                    'district_id' => 10,
                    'name' => 'Solu Dudhkunda Municipality',
                    'name_np' => 'सोलुदुधकुण्ड नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 96,
                    'district_id' => 10,
                    'name' => 'Mapya Dudhkoshi Rural Municipality',
                    'name_np' => 'माप्य दुधकोशी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 97,
                    'district_id' => 10,
                    'name' => 'Necha Salyan Rural Municipality',
                    'name_np' => 'नेचासल्यान गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 98,
                    'district_id' => 10,
                    'name' => 'Thulung Dudhkoshi Rural Municipality',
                    'name_np' => 'थुलुङ दुधकोशी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 99,
                    'district_id' => 10,
                    'name' => 'Maha Kulung Rural Municipality',
                    'name_np' => 'माहाकुलुङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 100,
                    'district_id' => 10,
                    'name' => 'Sotang Rural Municipality',
                    'name_np' => 'सोताङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 101,
                    'district_id' => 10,
                    'name' => 'Khumbu PasangLhamu Rural Municipality',
                    'name_np' => 'खुम्वु पासाङल्हमु गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 102,
                    'district_id' => 10,
                    'name' => 'Likhu Pike Rural Municipality',
                    'name_np' => 'लिखु पिके गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 103,
                    'district_id' => 11,
                    'name' => 'BarahaKshetra Municipality',
                    'name_np' => 'बराहक्षेत्र नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 104,
                    'district_id' => 11,
                    'name' => 'Inaruwa Municipality',
                    'name_np' => 'ईनरुवा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 105,
                    'district_id' => 11,
                    'name' => 'Duhabi Municipality',
                    'name_np' => 'दुहवी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 106,
                    'district_id' => 11,
                    'name' => 'Ramdhuni Municipality',
                    'name_np' => 'रामधुनी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 107,
                    'district_id' => 11,
                    'name' => 'Itahari Sub-Metropolitan City',
                    'name_np' => 'ईटहरी उपमहानगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
                    ])
                ],
                [
                    'id' => 108,
                    'district_id' => 11,
                    'name' => 'Dharan Sub-Metropolitan City',
                    'name_np' => 'धरान उपमहानगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
                    ])
                ],
                [
                    'id' => 109,
                    'district_id' => 11,
                    'name' => 'Koshi Rural Municipality',
                    'name_np' => 'कोशी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 110,
                    'district_id' => 11,
                    'name' => 'Harinagar Rural Municipality',
                    'name_np' => 'हरिनगर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 111,
                    'district_id' => 11,
                    'name' => 'Bhokraha Narsingh Rural Municipality',
                    'name_np' => 'भोक्राहा नरसिंह गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 112,
                    'district_id' => 11,
                    'name' => 'Dewangunj Rural Municipality',
                    'name_np' => 'देवानगञ्ज गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 113,
                    'district_id' => 11,
                    'name' => 'Gadhi Rural Municipality',
                    'name_np' => 'गढी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 114,
                    'district_id' => 11,
                    'name' => 'Barju Rural Municipality',
                    'name_np' => 'बर्जु गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 115,
                    'district_id' => 12,
                    'name' => 'Phungling Municipality',
                    'name_np' => 'फुङलिङ नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 116,
                    'district_id' => 12,
                    'name' => 'Sirijangha Rural Municipality',
                    'name_np' => 'सिरीजङ्घा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 117,
                    'district_id' => 12,
                    'name' => 'Aathrai Triveni Rural Municipality',
                    'name_np' => 'आठराई त्रिवेणी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 118,
                    'district_id' => 12,
                    'name' => 'Pathibhara Yangwarak Rural Municipality',
                    'name_np' => 'पाथीभरा याङवरक गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 119,
                    'district_id' => 12,
                    'name' => 'Meringden Rural Municipality',
                    'name_np' => 'मेरिङदेन गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 120,
                    'district_id' => 12,
                    'name' => 'Sidingwa Rural Municipality',
                    'name_np' => 'सिदिङ्वा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 121,
                    'district_id' => 12,
                    'name' => 'Phaktanglung Rural Municipality',
                    'name_np' => 'फक्ताङलुङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 122,
                    'district_id' => 12,
                    'name' => 'Maiwa Khola Rural Municipality',
                    'name_np' => 'मैवाखोला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 123,
                    'district_id' => 12,
                    'name' => 'Mikwa Khola Rural Municipality',
                    'name_np' => 'मिक्वाखोला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 124,
                    'district_id' => 13,
                    'name' => 'Myanglung Municipality',
                    'name_np' => 'म्याङलुङ नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 125,
                    'district_id' => 13,
                    'name' => 'Laligurans Municipality',
                    'name_np' => 'लालीगुराँस नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 126,
                    'district_id' => 13,
                    'name' => 'Aathrai Rural Municipality',
                    'name_np' => 'आठराई गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 127,
                    'district_id' => 13,
                    'name' => 'Phedap Rural Municipality',
                    'name_np' => 'फेदाप गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 128,
                    'district_id' => 13,
                    'name' => 'Chhathar Rural Municipality',
                    'name_np' => 'छथर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 129,
                    'district_id' => 13,
                    'name' => 'Menchayayem Rural Municipality',
                    'name_np' => 'मेन्छयायेम गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 130,
                    'district_id' => 14,
                    'name' => 'Triyuga Municipality',
                    'name_np' => 'त्रियुगा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16,
                    ])
                ],
                [
                    'id' => 131,
                    'district_id' => 14,
                    'name' => 'Katari Municipality',
                    'name_np' => 'कटारी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 132,
                    'district_id' => 14,
                    'name' => 'Chaudandigadhi Municipality',
                    'name_np' => 'चौदण्डीगढी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 133,
                    'district_id' => 14,
                    'name' => 'Belaka Municipality',
                    'name_np' => 'वेलका नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 134,
                    'district_id' => 14,
                    'name' => 'Udayapurgadhi Rural Municipality',
                    'name_np' => 'उदयपुरगढी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 135,
                    'district_id' => 14,
                    'name' => 'Rautamai Rural Municipality',
                    'name_np' => 'रौतामाई गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 136,
                    'district_id' => 14,
                    'name' => 'Tapli Rural Municipality',
                    'name_np' => 'ताप्ली गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 137,
                    'district_id' => 14,
                    'name' => 'Limchungbung Rural Municipality',
                    'name_np' => 'लिम्चुङ्बुङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 138,
                    'district_id' => 15,
                    'name' => 'Birgunj Metropolitan City',
                    'name_np' => 'बिरगंज महानगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32,
                    ])
                ],
                [
                    'id' => 139,
                    'district_id' => 15,
                    'name' => 'Bahudarmai Municipality',
                    'name_np' => 'बहुदरमाई नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 140,
                    'district_id' => 15,
                    'name' => 'Parsagadhi Municipality',
                    'name_np' => 'पर्सागढी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 141,
                    'district_id' => 15,
                    'name' => 'Pokhariya Municipality',
                    'name_np' => 'पोखरिया नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 142,
                    'district_id' => 15,
                    'name' => 'Bindabasini Rural Municipality',
                    'name_np' => 'बिन्दबासिनी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 143,
                    'district_id' => 15,
                    'name' => 'Dhobini Rural Municipality',
                    'name_np' => 'धोबीनी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 144,
                    'district_id' => 15,
                    'name' => 'Chhipaharmai Rural Municipality',
                    'name_np' => 'छिपहरमाई गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 145,
                    'district_id' => 15,
                    'name' => 'Jagarnathpur Rural Municipality',
                    'name_np' => 'जगरनाथपुर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 146,
                    'district_id' => 15,
                    'name' => 'Jirabhawani Rural Municipality',
                    'name_np' => 'जिरा भवानी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 147,
                    'district_id' => 15,
                    'name' => 'Kalikamai Rural Municipality',
                    'name_np' => 'कालिकामाई गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 148,
                    'district_id' => 15,
                    'name' => 'Pakaha Mainpur Rural Municipality',
                    'name_np' => 'पकाहा मैनपुर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 149,
                    'district_id' => 15,
                    'name' => 'Paterwa Sugauli Rural Municipality',
                    'name_np' => 'पटेर्वा सुगौली गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 150,
                    'district_id' => 15,
                    'name' => 'Sakhuwa Prasauni Rural Municipality',
                    'name_np' => 'सखुवा प्रसौनी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 151,
                    'district_id' => 15,
                    'name' => 'Thori Rural Municipality',
                    'name_np' => 'ठोरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 152,
                    'district_id' => 16,
                    'name' => 'Kalaiya Sub-Metropolitan City',
                    'name_np' => 'कलैया उपमहानगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27,
                    ])
                ],
                [
                    'id' => 153,
                    'district_id' => 16,
                    'name' => 'Jitpur Simara Sub-Metropolitan City',
                    'name_np' => 'जीतपुर सिमरा उपमहानगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,
                    ])
                ],
                [
                    'id' => 154,
                    'district_id' => 16,
                    'name' => 'Kolhabi Municipality',
                    'name_np' => 'कोल्हवी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 155,
                    'district_id' => 16,
                    'name' => 'Nijgadh Municipality',
                    'name_np' => 'निजगढ नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 156,
                    'district_id' => 16,
                    'name' => 'Mahagadhimai Municipality',
                    'name_np' => 'महागढीमाई नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 157,
                    'district_id' => 16,
                    'name' => 'Simaraungadh Municipality',
                    'name_np' => 'सिम्रौनगढ नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 158,
                    'district_id' => 16,
                    'name' => 'Pacharauta Municipality',
                    'name_np' => 'पचरौता नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 159,
                    'district_id' => 16,
                    'name' => 'Pheta Rural Municipality',
                    'name_np' => 'फेटा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 160,
                    'district_id' => 16,
                    'name' => 'Bishrampur Rural Municipality',
                    'name_np' => 'विश्रामपुर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 161,
                    'district_id' => 16,
                    'name' => 'Prasauni Rural Municipality',
                    'name_np' => 'प्रसौनी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 162,
                    'district_id' => 16,
                    'name' => 'Adarsh Kotwal Rural Municipality',
                    'name_np' => 'आदर्श कोटवाल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 163,
                    'district_id' => 16,
                    'name' => 'Karaiyamai Rural Municipality',
                    'name_np' => 'करैयामाई गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 164,
                    'district_id' => 16,
                    'name' => 'Devtal Rural Municipality',
                    'name_np' => 'देवताल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 165,
                    'district_id' => 16,
                    'name' => 'Parwanipur Rural Municipality',
                    'name_np' => 'परवानीपुर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 166,
                    'district_id' => 16,
                    'name' => 'Baragadhi Rural Municipality',
                    'name_np' => 'बारागढी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 167,
                    'district_id' => 16,
                    'name' => 'Suwarna Rural Municipality',
                    'name_np' => 'सुवर्ण गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 168,
                    'district_id' => 17,
                    'name' => 'Baudhimai Municipality',
                    'name_np' => 'बौधीमाई नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 169,
                    'district_id' => 17,
                    'name' => 'Brindaban Municipality',
                    'name_np' => 'बृन्दावन नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 170,
                    'district_id' => 17,
                    'name' => 'Chandrapur Municipality',
                    'name_np' => 'चन्द्रपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 171,
                    'district_id' => 17,
                    'name' => 'Dewahi Gonahi Municipality',
                    'name_np' => 'देवाही गोनाही नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 172,
                    'district_id' => 17,
                    'name' => 'Gadhimai Municipality',
                    'name_np' => 'गढीमाई नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 173,
                    'district_id' => 17,
                    'name' => 'Guruda Municipality',
                    'name_np' => 'गरुडा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 174,
                    'district_id' => 17,
                    'name' => 'Gaur Municipality',
                    'name_np' => 'गौर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 175,
                    'district_id' => 17,
                    'name' => 'Gujara Municipality',
                    'name_np' => 'गुजरा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 176,
                    'district_id' => 17,
                    'name' => 'Ishanath Municipality',
                    'name_np' => 'ईशनाथ नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 177,
                    'district_id' => 17,
                    'name' => 'Katahariya Municipality',
                    'name_np' => 'कटहरिया नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 178,
                    'district_id' => 17,
                    'name' => 'Madhav Narayan Municipality',
                    'name_np' => 'माधव नारायण नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 179,
                    'district_id' => 17,
                    'name' => 'Maulapur Municipality',
                    'name_np' => 'मौलापुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 180,
                    'district_id' => 17,
                    'name' => 'Paroha Municipality',
                    'name_np' => 'परोहा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 181,
                    'district_id' => 17,
                    'name' => 'Phatuwa Bijayapur Municipality',
                    'name_np' => 'फतुवाबिजयपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 182,
                    'district_id' => 17,
                    'name' => 'Rajdevi Municipality',
                    'name_np' => 'राजदेवी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 183,
                    'district_id' => 17,
                    'name' => 'Rajpur Municipality',
                    'name_np' => 'राजपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 184,
                    'district_id' => 17,
                    'name' => 'Durga Bhagwati Rural Municipality',
                    'name_np' => 'दुर्गा भगवती गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 185,
                    'district_id' => 17,
                    'name' => 'Yamunamai Rural Municipality',
                    'name_np' => 'यमुनामाई गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 186,
                    'district_id' => 18,
                    'name' => 'Bagmati Municipality',
                    'name_np' => 'बागमती नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 187,
                    'district_id' => 18,
                    'name' => 'Balara Municipality',
                    'name_np' => 'बलरा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 188,
                    'district_id' => 18,
                    'name' => 'Barahathwa Municipality',
                    'name_np' => 'बरहथवा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18,
                    ])
                ],
                [
                    'id' => 189,
                    'district_id' => 18,
                    'name' => 'Godaita Municipality',
                    'name_np' => 'गोडैटा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 190,
                    'district_id' => 18,
                    'name' => 'Hariwan Municipality',
                    'name_np' => 'हरिवन नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 191,
                    'district_id' => 18,
                    'name' => 'Haripur Municipality',
                    'name_np' => 'हरिपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 192,
                    'district_id' => 18,
                    'name' => 'Haripurwa Municipality',
                    'name_np' => 'हरिपुर्वा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 193,
                    'district_id' => 18,
                    'name' => 'Ishowrpur Municipality',
                    'name_np' => 'ईश्वरपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15,
                    ])
                ],
                [
                    'id' => 194,
                    'district_id' => 18,
                    'name' => 'Kabilasi Municipality',
                    'name_np' => 'कविलासी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 195,
                    'district_id' => 18,
                    'name' => 'Lalbandi Municipality',
                    'name_np' => 'लालबन्दी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17,
                    ])
                ],
                [
                    'id' => 196,
                    'district_id' => 18,
                    'name' => 'Malangawa Municipality',
                    'name_np' => 'मलंगवा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 197,
                    'district_id' => 18,
                    'name' => 'Basbariya Rural Municipality',
                    'name_np' => 'बसबरीया गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 198,
                    'district_id' => 18,
                    'name' => 'Bisnu Rural Municipality',
                    'name_np' => 'विष्णु गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 199,
                    'district_id' => 18,
                    'name' => 'Brahampuri Rural Municipality',
                    'name_np' => 'ब्रह्मपुरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 200,
                    'district_id' => 18,
                    'name' => 'Chakraghatta Rural Municipality',
                    'name_np' => 'चक्रघट्टा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 201,
                    'district_id' => 18,
                    'name' => 'Chandranagar Rural Municipality',
                    'name_np' => 'चन्द्रनगर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 202,
                    'district_id' => 18,
                    'name' => 'Dhankaul Rural Municipality',
                    'name_np' => 'धनकौल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 203,
                    'district_id' => 18,
                    'name' => 'Kaudena Rural Municipality',
                    'name_np' => 'कौडेना गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 204,
                    'district_id' => 18,
                    'name' => 'Parsa Rural Municipality',
                    'name_np' => 'पर्सा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 205,
                    'district_id' => 18,
                    'name' => 'Ramnagar Rural Municipality',
                    'name_np' => 'रामनगर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 206,
                    'district_id' => 19,
                    'name' => 'Lahan Municipality',
                    'name_np' => 'लहान नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,
                    ])
                ],
                [
                    'id' => 207,
                    'district_id' => 19,
                    'name' => 'Dhangadhimai Municipality',
                    'name_np' => 'धनगढीमाई नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 208,
                    'district_id' => 19,
                    'name' => 'Siraha Municipality',
                    'name_np' => 'सिरहा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22,
                    ])
                ],
                [
                    'id' => 209,
                    'district_id' => 19,
                    'name' => 'Golbazar Municipality',
                    'name_np' => 'गोलबजार नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 210,
                    'district_id' => 19,
                    'name' => 'Mirchaiya Municipality',
                    'name_np' => 'मिर्चैयाँ नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 211,
                    'district_id' => 19,
                    'name' => 'Kalyanpur Municipality',
                    'name_np' => 'कल्याणपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 212,
                    'district_id' => 19,
                    'name' => 'Karjanha Municipality',
                    'name_np' => 'कर्जन्हा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 213,
                    'district_id' => 19,
                    'name' => 'Sukhipur Municipality',
                    'name_np' => 'सुखीपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 214,
                    'district_id' => 19,
                    'name' => 'Bhagwanpur Rural Municipality',
                    'name_np' => 'भगवानपुर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 215,
                    'district_id' => 19,
                    'name' => 'Aurahi Rural Municipality',
                    'name_np' => 'औरही गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 216,
                    'district_id' => 19,
                    'name' => 'Bishnupur Rural Municipality',
                    'name_np' => 'विष्णुपुर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 217,
                    'district_id' => 19,
                    'name' => 'Bariyarpatti Rural Municipality',
                    'name_np' => 'बरियारपट्टी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 218,
                    'district_id' => 19,
                    'name' => 'Lakshmipur Patari Rural Municipality',
                    'name_np' => 'लक्ष्मीपुर पतारी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 219,
                    'district_id' => 19,
                    'name' => 'Naraha Rural Municipality',
                    'name_np' => 'नरहा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 220,
                    'district_id' => 19,
                    'name' => 'SakhuwanankarKatti Rural Municipality',
                    'name_np' => 'सखुवानान्कारकट्टी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 221,
                    'district_id' => 19,
                    'name' => 'Arnama Rural Municipality',
                    'name_np' => 'अर्नमा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 222,
                    'district_id' => 19,
                    'name' => 'Navarajpur Rural Municipality',
                    'name_np' => 'नवराजपुर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 223,
                    'district_id' => 20,
                    'name' => 'Janakpurdham Sub-Metropolitan City',
                    'name_np' => 'जनकपुरधाम उपमहानगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25,
                    ])
                ],
                [
                    'id' => 224,
                    'district_id' => 20,
                    'name' => 'Chhireshwarnath Municipality',
                    'name_np' => 'क्षिरेश्वरनाथ नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 225,
                    'district_id' => 20,
                    'name' => 'Ganeshman Charnath Municipality',
                    'name_np' => 'गणेशमान चारनाथ नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 226,
                    'district_id' => 20,
                    'name' => 'Dhanushadham Municipality',
                    'name_np' => 'धनुषाधाम नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 227,
                    'district_id' => 20,
                    'name' => 'Nagarain Municipality',
                    'name_np' => 'नगराइन नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 228,
                    'district_id' => 20,
                    'name' => 'Bideha Municipality',
                    'name_np' => 'विदेह नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 229,
                    'district_id' => 20,
                    'name' => 'Mithila Municipality',
                    'name_np' => 'मिथिला नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 230,
                    'district_id' => 20,
                    'name' => 'Sahidnagar Municipality',
                    'name_np' => 'शहीदनगर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 231,
                    'district_id' => 20,
                    'name' => 'Sabaila Municipality',
                    'name_np' => 'सबैला नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 232,
                    'district_id' => 20,
                    'name' => 'Kamala Municipality',
                    'name_np' => 'कमला नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 233,
                    'district_id' => 20,
                    'name' => 'MithilaBihari Municipality',
                    'name_np' => 'मिथिला बिहारी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 234,
                    'district_id' => 20,
                    'name' => 'Hansapur Municipality',
                    'name_np' => 'हंसपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 235,
                    'district_id' => 20,
                    'name' => 'Janaknandani Rural Municipality',
                    'name_np' => 'जनकनन्दिनी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 236,
                    'district_id' => 20,
                    'name' => 'Bateshwar Rural Municipality',
                    'name_np' => 'बटेश्वर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 237,
                    'district_id' => 20,
                    'name' => 'Mukhiyapatti Musharniya Rural Municipality',
                    'name_np' => 'मुखियापट्टी मुसहरमिया गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 238,
                    'district_id' => 20,
                    'name' => 'Lakshminya Rural Municipality',
                    'name_np' => 'लक्ष्मीनिया गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 239,
                    'district_id' => 20,
                    'name' => 'Aaurahi Rural Municipality',
                    'name_np' => 'औरही गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 240,
                    'district_id' => 20,
                    'name' => 'Dhanauji Rural Municipality',
                    'name_np' => 'धनौजी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 241,
                    'district_id' => 21,
                    'name' => 'Bodebarsain Municipality',
                    'name_np' => 'बोदेबरसाईन नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 242,
                    'district_id' => 21,
                    'name' => 'Dakneshwori Municipality',
                    'name_np' => 'डाक्नेश्वरी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 243,
                    'district_id' => 21,
                    'name' => 'Hanumannagar Kankalini Municipality',
                    'name_np' => 'हनुमाननगर कङ्‌कालिनी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 244,
                    'district_id' => 21,
                    'name' => 'Kanchanrup Municipality',
                    'name_np' => 'कञ्चनरुप नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 245,
                    'district_id' => 21,
                    'name' => 'Khadak Municipality',
                    'name_np' => 'खडक नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 246,
                    'district_id' => 21,
                    'name' => 'Shambhunath Municipality',
                    'name_np' => 'शम्भुनाथ नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 247,
                    'district_id' => 21,
                    'name' => 'Saptakoshi Municipality',
                    'name_np' => 'सप्तकोशी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 248,
                    'district_id' => 21,
                    'name' => 'Surunga Municipality',
                    'name_np' => 'सुरुङ्‍गा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 249,
                    'district_id' => 21,
                    'name' => 'Rajbiraj Municipality',
                    'name_np' => 'राजविराज नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16,
                    ])
                ],
                [
                    'id' => 250,
                    'district_id' => 21,
                    'name' => 'Agnisaira Krishnasavaran Rural Municipality',
                    'name_np' => 'अग्निसाइर कृष्णासरवन गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 251,
                    'district_id' => 21,
                    'name' => 'Balan-Bihul Rural Municipality',
                    'name_np' => 'बलान-बिहुल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 252,
                    'district_id' => 21,
                    'name' => 'Rajgadh Rural Municipality',
                    'name_np' => 'राजगढ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 253,
                    'district_id' => 21,
                    'name' => 'Bishnupur Rural Municipality',
                    'name_np' => 'बिष्णुपुर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 254,
                    'district_id' => 21,
                    'name' => 'Chhinnamasta Rural Municipality',
                    'name_np' => 'छिन्नमस्ता गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 255,
                    'district_id' => 21,
                    'name' => 'Mahadeva Rural Municipality',
                    'name_np' => 'महादेवा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 256,
                    'district_id' => 21,
                    'name' => 'Rupani Rural Municipality',
                    'name_np' => 'रुपनी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 257,
                    'district_id' => 21,
                    'name' => 'Tilathi Koiladi Rural Municipality',
                    'name_np' => 'तिलाठी कोईलाडी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 258,
                    'district_id' => 21,
                    'name' => 'Tirhut Rural Municipality',
                    'name_np' => 'तिरहुत गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 259,
                    'district_id' => 22,
                    'name' => 'Aaurahi Municipality',
                    'name_np' => 'औरही नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 260,
                    'district_id' => 22,
                    'name' => 'Balawa Municipality',
                    'name_np' => 'बलवा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 261,
                    'district_id' => 22,
                    'name' => 'Bardibas Municipality',
                    'name_np' => 'बर्दिबास नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 262,
                    'district_id' => 22,
                    'name' => 'Bhangaha Municipality',
                    'name_np' => 'भँगाहा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 263,
                    'district_id' => 22,
                    'name' => 'Gaushala Municipality',
                    'name_np' => 'गौशाला नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 264,
                    'district_id' => 22,
                    'name' => 'Jaleshor Municipality',
                    'name_np' => 'जलेश्वर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 265,
                    'district_id' => 22,
                    'name' => 'Loharpatti Municipality',
                    'name_np' => 'लोहरपट्टी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 266,
                    'district_id' => 22,
                    'name' => 'Manara Shiswa Municipality',
                    'name_np' => 'मनरा शिसवा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 267,
                    'district_id' => 22,
                    'name' => 'Matihani Municipality',
                    'name_np' => 'मटिहानी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 268,
                    'district_id' => 22,
                    'name' => 'Ramgopalpur Municipality',
                    'name_np' => 'रामगोपालपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 269,
                    'district_id' => 22,
                    'name' => 'Ekdara Rural Municipality',
                    'name_np' => 'एकडारा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 270,
                    'district_id' => 22,
                    'name' => 'Mahottari Rural Municipality',
                    'name_np' => 'महोत्तरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 271,
                    'district_id' => 22,
                    'name' => 'Pipara Rural Municipality',
                    'name_np' => 'पिपरा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 272,
                    'district_id' => 22,
                    'name' => 'Samsi Rural Municipality',
                    'name_np' => 'साम्सी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 273,
                    'district_id' => 22,
                    'name' => 'Sonama Rural Municipality',
                    'name_np' => 'सोनमा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 274,
                    'district_id' => 23,
                    'name' => 'Bhaktapur Municipality',
                    'name_np' => 'भक्तपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 275,
                    'district_id' => 23,
                    'name' => 'Changunarayan Municipality',
                    'name_np' => 'चाँगुनारायण नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 276,
                    'district_id' => 23,
                    'name' => 'Suryabinayak Municipality',
                    'name_np' => 'सूर्यविनायक नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 277,
                    'district_id' => 23,
                    'name' => 'Madhyapur Thimi Municipality',
                    'name_np' => 'मध्यपुर थिमी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 278,
                    'district_id' => 24,
                    'name' => 'Bharatpur Metropolitan City',
                    'name_np' => 'भरतपुर महानगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29,
                    ])
                ],
                [
                    'id' => 279,
                    'district_id' => 24,
                    'name' => 'Kalika Municipality',
                    'name_np' => 'कालिका नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 280,
                    'district_id' => 24,
                    'name' => 'Khairhani Municipality',
                    'name_np' => 'खैरहनी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 281,
                    'district_id' => 24,
                    'name' => 'Madi Municipality',
                    'name_np' => 'माडी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 282,
                    'district_id' => 24,
                    'name' => 'Ratnagar Municipality',
                    'name_np' => 'रत्ननगर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16,
                    ])
                ],
                [
                    'id' => 283,
                    'district_id' => 24,
                    'name' => 'Rapti Municipality',
                    'name_np' => 'राप्ती नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 284,
                    'district_id' => 24,
                    'name' => 'Ichchhakamana Rural Municipality',
                    'name_np' => 'इच्छाकामना गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 285,
                    'district_id' => 25,
                    'name' => 'Dhunibeshi Municipality',
                    'name_np' => 'धुनीबेंशी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 286,
                    'district_id' => 25,
                    'name' => 'Nilkantha Municipality',
                    'name_np' => 'निलकण्ठ नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 287,
                    'district_id' => 25,
                    'name' => 'Khaniyabas Rural Municipality',
                    'name_np' => 'खनियाबास गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 288,
                    'district_id' => 25,
                    'name' => 'Gajuri Rural Municipality',
                    'name_np' => 'गजुरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 289,
                    'district_id' => 25,
                    'name' => 'Galchhi Rural Municipality',
                    'name_np' => 'गल्छी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 290,
                    'district_id' => 25,
                    'name' => 'Gangajamuna Rural Municipality',
                    'name_np' => 'गङ्गाजमुना गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 291,
                    'district_id' => 25,
                    'name' => 'Jwalamukhi Rural Municipality',
                    'name_np' => 'ज्वालामूखी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 292,
                    'district_id' => 25,
                    'name' => 'Thakre Rural Municipality',
                    'name_np' => 'थाक्रे गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 293,
                    'district_id' => 25,
                    'name' => 'Netrawati Dabjong Rural Municipality',
                    'name_np' => 'नेत्रावती डबजोङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 294,
                    'district_id' => 25,
                    'name' => 'Benighat Rorang Rural Municipality',
                    'name_np' => 'बेनीघाट रोराङ्ग गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 295,
                    'district_id' => 25,
                    'name' => 'Rubi Valley Rural Municipality',
                    'name_np' => 'रुवी भ्याली गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 296,
                    'district_id' => 25,
                    'name' => 'Siddhalek Rural Municipality',
                    'name_np' => 'सिद्धलेक गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 297,
                    'district_id' => 25,
                    'name' => 'Tripurasundari Rural Municipality',
                    'name_np' => 'त्रिपुरासुन्दरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 298,
                    'district_id' => 26,
                    'name' => 'Bhimeswor Municipality',
                    'name_np' => 'भिमेश्वर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 299,
                    'district_id' => 26,
                    'name' => 'Jiri Municipality',
                    'name_np' => 'जिरी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 300,
                    'district_id' => 26,
                    'name' => 'Kalinchok Rural Municipality',
                    'name_np' => 'कालिन्चोक गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 301,
                    'district_id' => 26,
                    'name' => 'Melung Rural Municipality',
                    'name_np' => 'मेलुङ्ग गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 302,
                    'district_id' => 26,
                    'name' => 'Bigu Rural Municipality',
                    'name_np' => 'विगु गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 303,
                    'district_id' => 26,
                    'name' => 'Gaurishankar Rural Municipality',
                    'name_np' => 'गौरीशङ्कर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 304,
                    'district_id' => 26,
                    'name' => 'Baiteshowr Rural Municipality',
                    'name_np' => 'वैतेश्वर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 305,
                    'district_id' => 26,
                    'name' => 'Sailung Rural Municipality',
                    'name_np' => 'शैलुङ्ग गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 306,
                    'district_id' => 26,
                    'name' => 'Tamakoshi Rural Municipality',
                    'name_np' => 'तामाकोशी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 307,
                    'district_id' => 27,
                    'name' => 'Kathmandu Metropolitan City',
                    'name_np' => 'काठमाण्डौं महानगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32,
                    ])
                ],
                [
                    'id' => 308,
                    'district_id' => 27,
                    'name' => 'Gokarneshwar Municipality',
                    'name_np' => 'गोकर्णेश्वर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 309,
                    'district_id' => 27,
                    'name' => 'Kirtipur Municipality',
                    'name_np' => 'कीर्तिपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 310,
                    'district_id' => 27,
                    'name' => 'Kageshwari-Manohara Municipality',
                    'name_np' => 'कागेश्वरी मनोहरा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 311,
                    'district_id' => 27,
                    'name' => 'Chandragiri Municipality',
                    'name_np' => 'चन्द्रागिरी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15,
                    ])
                ],
                [
                    'id' => 312,
                    'district_id' => 27,
                    'name' => 'Tokha Municipality',
                    'name_np' => 'टोखा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 313,
                    'district_id' => 27,
                    'name' => 'Tarakeshwar Municipality',
                    'name_np' => 'तारकेश्वर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 314,
                    'district_id' => 27,
                    'name' => 'Dakshinkali Municipality',
                    'name_np' => 'दक्षिणकाली नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 315,
                    'district_id' => 27,
                    'name' => 'Nagarjun Municipality',
                    'name_np' => 'नागार्जुन नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 316,
                    'district_id' => 27,
                    'name' => 'Budhalikantha Municipality',
                    'name_np' => 'बुढानिलकण्ठ नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 317,
                    'district_id' => 27,
                    'name' => 'Shankharapur Municipality',
                    'name_np' => 'शङ्खरापुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 318,
                    'district_id' => 28,
                    'name' => 'Dhulikhel Municipality',
                    'name_np' => 'धुलिखेल नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 319,
                    'district_id' => 28,
                    'name' => 'Namobuddha Municipality',
                    'name_np' => 'नमोबुद्ध नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 320,
                    'district_id' => 28,
                    'name' => 'Panauti Municipality',
                    'name_np' => 'पनौती नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 321,
                    'district_id' => 28,
                    'name' => 'Panchkhal Municipality',
                    'name_np' => 'पाँचखाल नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 322,
                    'district_id' => 28,
                    'name' => 'Banepa Municipality',
                    'name_np' => 'बनेपा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 323,
                    'district_id' => 28,
                    'name' => 'Mandandeupur Municipality',
                    'name_np' => 'मण्डनदेउपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 324,
                    'district_id' => 28,
                    'name' => 'Khani Khola Rural Municipality',
                    'name_np' => 'खानीखोला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 325,
                    'district_id' => 28,
                    'name' => 'Chauri Deurali Rural Municipality',
                    'name_np' => 'चौंरीदेउराली गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 326,
                    'district_id' => 28,
                    'name' => 'Temal Rural Municipality',
                    'name_np' => 'तेमाल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 327,
                    'district_id' => 28,
                    'name' => 'Bethanchok Rural Municipality',
                    'name_np' => 'बेथानचोक गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 328,
                    'district_id' => 28,
                    'name' => 'Bhumlu Rural Municipality',
                    'name_np' => 'भुम्लु गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 329,
                    'district_id' => 28,
                    'name' => 'Mahabharat Rural Municipality',
                    'name_np' => 'महाभारत गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 330,
                    'district_id' => 28,
                    'name' => 'Roshi Rural Municipality',
                    'name_np' => 'रोशी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 331,
                    'district_id' => 29,
                    'name' => 'Lalitpur Metropolitan City',
                    'name_np' => 'ललितपुर महानगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29,
                    ])
                ],
                [
                    'id' => 332,
                    'district_id' => 29,
                    'name' => 'Mahalaxmi Municipality',
                    'name_np' => 'महालक्ष्मी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 333,
                    'district_id' => 29,
                    'name' => 'Godawari Municipality',
                    'name_np' => 'गोदावरी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 334,
                    'district_id' => 29,
                    'name' => 'Konjyosom Rural Municipality',
                    'name_np' => 'कोन्ज्योसोम गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 335,
                    'district_id' => 29,
                    'name' => 'Bagmati Rural Municipality',
                    'name_np' => 'बागमती गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 336,
                    'district_id' => 29,
                    'name' => 'Mahankal Rural Municipality',
                    'name_np' => 'महाङ्काल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 337,
                    'district_id' => 30,
                    'name' => 'Hetauda Sub-Metropolitan City',
                    'name_np' => 'हेटौडा उपमहानगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19,
                    ])
                ],
                [
                    'id' => 338,
                    'district_id' => 30,
                    'name' => 'Thaha Municipality',
                    'name_np' => 'थाहा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 339,
                    'district_id' => 30,
                    'name' => 'Bhimphedi Rural Municipality',
                    'name_np' => 'भिमफेदी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 340,
                    'district_id' => 30,
                    'name' => 'Makawanpurgadhi Rural Municipality',
                    'name_np' => 'मकवानपुरगढी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 341,
                    'district_id' => 30,
                    'name' => 'Manahari Rural Municipality',
                    'name_np' => 'मनहरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 342,
                    'district_id' => 30,
                    'name' => 'Raksirang Rural Municipality',
                    'name_np' => 'राक्सिराङ्ग गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 343,
                    'district_id' => 30,
                    'name' => 'Bakaiya Rural Municipality',
                    'name_np' => 'बकैया गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 344,
                    'district_id' => 30,
                    'name' => 'Bagmati Rural Municipality',
                    'name_np' => 'बाग्मति गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 345,
                    'district_id' => 30,
                    'name' => 'Kailash Rural Municipality',
                    'name_np' => 'कैलाश गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 346,
                    'district_id' => 30,
                    'name' => 'Indrasarowar Rural Municipality',
                    'name_np' => 'इन्द्रसरोबर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 347,
                    'district_id' => 31,
                    'name' => 'Bidur Municipality',
                    'name_np' => 'विदुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 348,
                    'district_id' => 31,
                    'name' => 'Belkotgadhi Municipality',
                    'name_np' => 'बेलकोटगढी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 349,
                    'district_id' => 31,
                    'name' => 'Kakani Rural Municipality',
                    'name_np' => 'ककनी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 350,
                    'district_id' => 31,
                    'name' => 'Panchakanya Rural Municipality',
                    'name_np' => 'पञ्चकन्या गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 351,
                    'district_id' => 31,
                    'name' => 'Likhu Rural Municipality',
                    'name_np' => 'लिखु गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 352,
                    'district_id' => 31,
                    'name' => 'Dupcheshwar Rural Municipality',
                    'name_np' => 'दुप्चेश्वर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 353,
                    'district_id' => 31,
                    'name' => 'Shivapuri Rural Municipality',
                    'name_np' => 'शिवपुरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 354,
                    'district_id' => 31,
                    'name' => 'Tadi Rural Municipality',
                    'name_np' => 'तादी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 355,
                    'district_id' => 31,
                    'name' => 'Suryagadhi Rural Municipality',
                    'name_np' => 'सुर्यगढी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 356,
                    'district_id' => 31,
                    'name' => 'Tarkeshwar Rural Municipality',
                    'name_np' => 'तारकेश्वर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 357,
                    'district_id' => 31,
                    'name' => 'Kispang Rural Municipality',
                    'name_np' => 'किस्पाङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 358,
                    'district_id' => 31,
                    'name' => 'Myagang Rural Municipality',
                    'name_np' => 'म्यगङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 359,
                    'district_id' => 32,
                    'name' => 'Manthali Municipality',
                    'name_np' => 'मन्थली नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 360,
                    'district_id' => 32,
                    'name' => 'Ramechhap Municipality',
                    'name_np' => 'रामेछाप नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 361,
                    'district_id' => 32,
                    'name' => 'Umakunda Rural Municipality',
                    'name_np' => 'उमाकुण्ड गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 362,
                    'district_id' => 32,
                    'name' => 'Khandadevi Rural Municipality',
                    'name_np' => 'खाँडादेवी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 363,
                    'district_id' => 32,
                    'name' => 'Doramba Rural Municipality',
                    'name_np' => 'दोरम्बा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 364,
                    'district_id' => 32,
                    'name' => 'Gokulganga Rural Municipality',
                    'name_np' => 'गोकुलगङ्गा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 365,
                    'district_id' => 32,
                    'name' => 'LikhuTamakoshi Rural Municipality',
                    'name_np' => 'लिखु तामाकोशी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 366,
                    'district_id' => 32,
                    'name' => 'Sunapati Rural Municipality',
                    'name_np' => 'सुनापती गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 367,
                    'district_id' => 33,
                    'name' => 'Kalika Rural Municipality',
                    'name_np' => 'कालिका गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 368,
                    'district_id' => 33,
                    'name' => 'Gosaikunda Rural Municipality',
                    'name_np' => 'गोसाईकुण्ड गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 369,
                    'district_id' => 33,
                    'name' => 'Naukunda Rural Municipality',
                    'name_np' => 'नौकुण्ड गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 370,
                    'district_id' => 33,
                    'name' => 'Parbatikunda Rural Municipality',
                    'name_np' => 'आमाछोदिङमो गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 371,
                    'district_id' => 33,
                    'name' => 'Uttargaya Rural Municipality',
                    'name_np' => 'उत्तरगया गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 372,
                    'district_id' => 34,
                    'name' => 'Kamalamai Municipality',
                    'name_np' => 'कमलामाई नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 373,
                    'district_id' => 34,
                    'name' => 'Dudhauli Municipality',
                    'name_np' => 'दुधौली नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 374,
                    'district_id' => 34,
                    'name' => 'Sunkoshi Rural Municipality',
                    'name_np' => 'सुनकोशी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 375,
                    'district_id' => 34,
                    'name' => 'Hariharpurgadhi Rural Municipality',
                    'name_np' => 'हरिहरपुरगढी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 376,
                    'district_id' => 34,
                    'name' => 'Tinpatan Rural Municipality',
                    'name_np' => 'तीनपाटन गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 377,
                    'district_id' => 34,
                    'name' => 'Marin Rural Municipality',
                    'name_np' => 'मरिण गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 378,
                    'district_id' => 34,
                    'name' => 'Golanjor Rural Municipality',
                    'name_np' => 'गोलन्जर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 379,
                    'district_id' => 34,
                    'name' => 'Phikkal Rural Municipality',
                    'name_np' => 'फिक्कल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 380,
                    'district_id' => 34,
                    'name' => 'Ghyanglekh Rural Municipality',
                    'name_np' => 'घ्याङलेख गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 381,
                    'district_id' => 35,
                    'name' => 'Chautara Sangachowkgadi Municipality',
                    'name_np' => 'चौतारा साँगाचोकगढी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 382,
                    'district_id' => 35,
                    'name' => 'Bahrabise Municipality',
                    'name_np' => 'बाह्रविसे नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 383,
                    'district_id' => 35,
                    'name' => 'Melamchi Municipality',
                    'name_np' => 'मेलम्ची नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 384,
                    'district_id' => 35,
                    'name' => 'Balephi Rural Municipality',
                    'name_np' => 'बलेफी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 385,
                    'district_id' => 35,
                    'name' => 'Sunkoshi Rural Municipality',
                    'name_np' => 'सुनकोशी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 386,
                    'district_id' => 35,
                    'name' => 'Indrawati Rural Municipality',
                    'name_np' => 'ईन्द्रावती गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 387,
                    'district_id' => 35,
                    'name' => 'Jugal Rural Municipality',
                    'name_np' => 'जुगल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 388,
                    'district_id' => 35,
                    'name' => 'Panchpokhari Rural Municipality',
                    'name_np' => 'पाँचपोखरी थाङपाल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 389,
                    'district_id' => 35,
                    'name' => 'Bhotekoshi Rural Municipality',
                    'name_np' => 'भोटेकोशी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 390,
                    'district_id' => 35,
                    'name' => 'Lisankhu Rural Municipality',
                    'name_np' => 'लिसङ्खु पाखर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 391,
                    'district_id' => 35,
                    'name' => 'Helambu Rural Municipality',
                    'name_np' => 'हेलम्बु गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 392,
                    'district_id' => 35,
                    'name' => 'Tripurasundari Rural Municipality',
                    'name_np' => 'त्रिपुरासुन्दरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 393,
                    'district_id' => 36,
                    'name' => 'Baglung Municipality',
                    'name_np' => 'बागलुङ नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 394,
                    'district_id' => 36,
                    'name' => 'Dhorpatan Municipality',
                    'name_np' => 'ढोरपाटन नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 395,
                    'district_id' => 36,
                    'name' => 'Galkot Municipality',
                    'name_np' => 'गल्कोट नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 396,
                    'district_id' => 36,
                    'name' => 'Jaimuni Municipality',
                    'name_np' => 'जैमूनी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 397,
                    'district_id' => 36,
                    'name' => 'Bareng Rural Municipality',
                    'name_np' => 'वरेङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 398,
                    'district_id' => 36,
                    'name' => 'Khathekhola Rural Municipality',
                    'name_np' => 'काठेखोला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 399,
                    'district_id' => 36,
                    'name' => 'Taman Khola Rural Municipality',
                    'name_np' => 'तमानखोला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 400,
                    'district_id' => 36,
                    'name' => 'Tara Khola Rural Municipality',
                    'name_np' => 'ताराखोला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 401,
                    'district_id' => 36,
                    'name' => 'Nishi Khola Rural Municipality',
                    'name_np' => 'निसीखोला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 402,
                    'district_id' => 36,
                    'name' => 'Badigad Rural Municipality',
                    'name_np' => 'वडिगाड गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 403,
                    'district_id' => 37,
                    'name' => 'Gorkha Municipality',
                    'name_np' => 'गोरखा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 404,
                    'district_id' => 37,
                    'name' => 'Palungtar Municipality',
                    'name_np' => 'पालुङटार नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 405,
                    'district_id' => 37,
                    'name' => 'Sulikot Rural Municipality',
                    'name_np' => 'बारपाक सुलिकोट गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 406,
                    'district_id' => 37,
                    'name' => 'Siranchowk Rural Municipality',
                    'name_np' => 'सिरानचोक गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 407,
                    'district_id' => 37,
                    'name' => 'Ajirkot Rural Municipality',
                    'name_np' => 'अजिरकोट गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 408,
                    'district_id' => 37,
                    'name' => 'Chumnubri Rural Municipality',
                    'name_np' => 'चुमनुव्री गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 409,
                    'district_id' => 37,
                    'name' => 'Dharche Rural Municipality',
                    'name_np' => 'धार्चे गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 410,
                    'district_id' => 37,
                    'name' => 'Bhimsen Thapa Rural Municipality',
                    'name_np' => 'भिमसेनथापा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 411,
                    'district_id' => 37,
                    'name' => 'Sahid Lakhan Rural Municipality',
                    'name_np' => 'शहिद लखन गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 412,
                    'district_id' => 37,
                    'name' => 'Aarughat Rural Municipality',
                    'name_np' => 'आरूघाट गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 413,
                    'district_id' => 37,
                    'name' => 'Gandaki Rural Municipality',
                    'name_np' => 'गण्डकी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 414,
                    'district_id' => 38,
                    'name' => 'Pokhara Metropolitan City',
                    'name_np' => 'पोखरा महानगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33,
                    ])
                ],
                [
                    'id' => 415,
                    'district_id' => 38,
                    'name' => 'Annapurna Rural Municipality',
                    'name_np' => 'अन्नपूर्ण गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 416,
                    'district_id' => 38,
                    'name' => 'Machhapuchchhre Rural Municipality',
                    'name_np' => 'माछापुच्छ्रे गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 417,
                    'district_id' => 38,
                    'name' => 'Madi Rural Municipality',
                    'name_np' => 'मादी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 418,
                    'district_id' => 38,
                    'name' => 'Rupa Rural Municipality',
                    'name_np' => 'रूपा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 419,
                    'district_id' => 39,
                    'name' => 'Besisahar Municipality',
                    'name_np' => 'बेसीशहर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 420,
                    'district_id' => 39,
                    'name' => 'Madhya Nepal Municipality',
                    'name_np' => 'मध्यनेपाल नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 421,
                    'district_id' => 39,
                    'name' => 'Rainas Municipality',
                    'name_np' => 'रारइनास नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 422,
                    'district_id' => 39,
                    'name' => 'Sundarbazar Municipality',
                    'name_np' => 'सुन्दरबजार नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 423,
                    'district_id' => 39,
                    'name' => 'Dordi Rural Municipality',
                    'name_np' => 'दोर्दी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 424,
                    'district_id' => 39,
                    'name' => 'Dudhpokhari Rural Municipality',
                    'name_np' => 'दूधपोखरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 425,
                    'district_id' => 39,
                    'name' => 'Kwhlosothar Rural Municipality',
                    'name_np' => 'क्व्होलासोथार गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 426,
                    'district_id' => 39,
                    'name' => 'Marsyangdi Rural Municipality',
                    'name_np' => 'मर्स्याङदी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 427,
                    'district_id' => 40,
                    'name' => 'Chame Rural Municipality',
                    'name_np' => 'चामे गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 428,
                    'district_id' => 40,
                    'name' => 'Nason Rural Municipality',
                    'name_np' => 'नासोँ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 429,
                    'district_id' => 40,
                    'name' => 'NarpaBhumi Rural Municipality',
                    'name_np' => 'नार्पा भूमि गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 430,
                    'district_id' => 40,
                    'name' => 'Manang Ngisyang Rural Municipality',
                    'name_np' => 'मनाङ ङिस्याङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 431,
                    'district_id' => 41,
                    'name' => 'Gharpajhong Rural Municipality',
                    'name_np' => 'घरपझोङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 432,
                    'district_id' => 41,
                    'name' => 'Thasang Rural Municipality',
                    'name_np' => 'थासाङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 433,
                    'district_id' => 41,
                    'name' => 'Barhagaun Muktichhetra Rural Municipality',
                    'name_np' => 'वारागुङ मुक्तिक्षेत्र गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 434,
                    'district_id' => 41,
                    'name' => 'Lomanthang Rural Municipality',
                    'name_np' => 'लोमन्थाङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 435,
                    'district_id' => 41,
                    'name' => 'Lo-Ghekar Damodarkunda Rural Municipality',
                    'name_np' => 'लो-घेकर दामोदरकुण्ड गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 436,
                    'district_id' => 42,
                    'name' => 'Beni Municipality',
                    'name_np' => 'बेनी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 437,
                    'district_id' => 42,
                    'name' => 'Annapurna Rural Municipality',
                    'name_np' => 'अन्नपुर्ण गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 438,
                    'district_id' => 42,
                    'name' => 'Dhaulagiri Rural Municipality',
                    'name_np' => 'धवलागिरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 439,
                    'district_id' => 42,
                    'name' => 'Mangala Rural Municipality',
                    'name_np' => 'मंगला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 440,
                    'district_id' => 42,
                    'name' => 'Malika Rural Municipality',
                    'name_np' => 'मालिका गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 441,
                    'district_id' => 42,
                    'name' => 'Raghuganga Rural Municipality',
                    'name_np' => 'रघुगंगा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 442,
                    'district_id' => 43,
                    'name' => 'Kawasoti Municipality',
                    'name_np' => 'कावासोती नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17,
                    ])
                ],
                [
                    'id' => 443,
                    'district_id' => 43,
                    'name' => 'Gaindakot Municipality',
                    'name_np' => 'गैडाकोट नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18,
                    ])
                ],
                [
                    'id' => 444,
                    'district_id' => 43,
                    'name' => 'Devachuli Municipality',
                    'name_np' => 'देवचुली नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17,
                    ])
                ],
                [
                    'id' => 445,
                    'district_id' => 43,
                    'name' => 'Madhya Bindu Municipality',
                    'name_np' => 'मध्यविन्दु नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15,
                    ])
                ],
                [
                    'id' => 446,
                    'district_id' => 43,
                    'name' => 'Baudikali Rural Municipality',
                    'name_np' => 'बौदीकाली गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 447,
                    'district_id' => 43,
                    'name' => 'Bulingtar Rural Municipality',
                    'name_np' => 'बुलिङटार गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 448,
                    'district_id' => 43,
                    'name' => 'Binayi Tribeni Rural Municipality',
                    'name_np' => 'विनयी त्रिवेणी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 449,
                    'district_id' => 43,
                    'name' => 'Hupsekot Rural Municipality',
                    'name_np' => 'हुप्सेकोट गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 450,
                    'district_id' => 44,
                    'name' => 'Kushma Municipality',
                    'name_np' => 'कुश्मा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 451,
                    'district_id' => 44,
                    'name' => 'Phalewas Municipality',
                    'name_np' => 'फलेवास नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 452,
                    'district_id' => 44,
                    'name' => 'Jaljala Rural Municipality',
                    'name_np' => 'जलजला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 453,
                    'district_id' => 44,
                    'name' => 'Paiyun Rural Municipality',
                    'name_np' => 'पैयूं गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 454,
                    'district_id' => 44,
                    'name' => 'Mahashila Rural Municipality',
                    'name_np' => 'महाशिला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 455,
                    'district_id' => 44,
                    'name' => 'Modi Rural Municipality',
                    'name_np' => 'मोदी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 456,
                    'district_id' => 44,
                    'name' => 'Bihadi Rural Municipality',
                    'name_np' => 'विहादी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 457,
                    'district_id' => 45,
                    'name' => 'Galyang Municipality',
                    'name_np' => 'गल्याङ नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 458,
                    'district_id' => 45,
                    'name' => 'Chapakot Municipality',
                    'name_np' => 'चापाकोट नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 459,
                    'district_id' => 45,
                    'name' => 'Putalibazar Municipality',
                    'name_np' => 'पुतलीबजार नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 460,
                    'district_id' => 45,
                    'name' => 'Bheerkot Municipality',
                    'name_np' => 'भीरकोट नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 461,
                    'district_id' => 45,
                    'name' => 'Waling Municipality',
                    'name_np' => 'वालिङ नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 462,
                    'district_id' => 45,
                    'name' => 'Arjun Chaupari Rural Municipality',
                    'name_np' => 'अर्जुनचौपारी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 463,
                    'district_id' => 45,
                    'name' => 'Aandhikhola Rural Municipality',
                    'name_np' => 'आँधिखोला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 464,
                    'district_id' => 45,
                    'name' => 'Kaligandaki Rural Municipality',
                    'name_np' => 'कालीगण्डकी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 465,
                    'district_id' => 45,
                    'name' => 'Phedikhola Rural Municipality',
                    'name_np' => 'फेदीखोला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 466,
                    'district_id' => 45,
                    'name' => 'Harinas Rural Municipality',
                    'name_np' => 'हरिनास गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 467,
                    'district_id' => 45,
                    'name' => 'Biruwa Rural Municipality',
                    'name_np' => 'बिरुवा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 468,
                    'district_id' => 46,
                    'name' => 'Bhanu Municipality',
                    'name_np' => 'भानु नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 469,
                    'district_id' => 46,
                    'name' => 'Bhimad Municipality',
                    'name_np' => 'भिमाद नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 470,
                    'district_id' => 46,
                    'name' => 'Byas Municipality',
                    'name_np' => 'व्यास नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 471,
                    'district_id' => 46,
                    'name' => 'Suklagandaki Municipality',
                    'name_np' => 'शुक्लागण्डकी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 472,
                    'district_id' => 46,
                    'name' => 'AnbuKhaireni Rural Municipality',
                    'name_np' => 'आँबुखैरेनी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 473,
                    'district_id' => 46,
                    'name' => 'Devghat Rural Municipality',
                    'name_np' => 'देवघाट गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 474,
                    'district_id' => 46,
                    'name' => 'Bandipur Rural Municipality',
                    'name_np' => 'वन्दिपुर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 475,
                    'district_id' => 46,
                    'name' => 'Rishing Rural Municipality',
                    'name_np' => 'ऋषिङ्ग गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 476,
                    'district_id' => 46,
                    'name' => 'Ghiring Rural Municipality',
                    'name_np' => 'घिरिङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 477,
                    'district_id' => 46,
                    'name' => 'Myagde Rural Municipality',
                    'name_np' => 'म्याग्दे गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 478,
                    'district_id' => 47,
                    'name' => 'Kapilvastu Municipality',
                    'name_np' => 'कपिलवस्तु नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 479,
                    'district_id' => 47,
                    'name' => 'Banganga Municipality',
                    'name_np' => 'बाणगंगा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 480,
                    'district_id' => 47,
                    'name' => 'Buddhabhumi Municipality',
                    'name_np' => 'बुद्धभुमी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 481,
                    'district_id' => 47,
                    'name' => 'Shivaraj Municipality',
                    'name_np' => 'शिवराज नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 482,
                    'district_id' => 47,
                    'name' => 'Krishnanagar Municipality',
                    'name_np' => 'कृष्णनगर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 483,
                    'district_id' => 47,
                    'name' => 'Maharajgunj Municipality',
                    'name_np' => 'महाराजगंज नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 484,
                    'district_id' => 47,
                    'name' => 'Mayadevi Rural Municipality',
                    'name_np' => 'मायादेवी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 485,
                    'district_id' => 47,
                    'name' => 'Yashodhara Rural Municipality',
                    'name_np' => 'यसोधरा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 486,
                    'district_id' => 47,
                    'name' => 'Suddhodan Rural Municipality',
                    'name_np' => 'सुद्धोधन गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 487,
                    'district_id' => 47,
                    'name' => 'Bijaynagar Rural Municipality',
                    'name_np' => 'विजयनगर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 488,
                    'district_id' => 48,
                    'name' => 'Bardaghat Municipality',
                    'name_np' => 'बर्दघाट नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16,
                    ])
                ],
                [
                    'id' => 489,
                    'district_id' => 48,
                    'name' => 'Ramgram Municipality',
                    'name_np' => 'रामग्राम नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18,
                    ])
                ],
                [
                    'id' => 490,
                    'district_id' => 48,
                    'name' => 'Sunwal Municipality',
                    'name_np' => 'सुनवल नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 491,
                    'district_id' => 48,
                    'name' => 'Susta Rural Municipality',
                    'name_np' => 'सुस्ता गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 492,
                    'district_id' => 48,
                    'name' => 'Palhi Nandan Rural Municipality',
                    'name_np' => 'पाल्हीनन्दन गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 493,
                    'district_id' => 48,
                    'name' => 'Pratappur Rural Municipality',
                    'name_np' => 'प्रतापपुर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 494,
                    'district_id' => 48,
                    'name' => 'Sarawal Rural Municipality',
                    'name_np' => 'सरावल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 495,
                    'district_id' => 49,
                    'name' => 'Butwal Sub-Metropolitan City',
                    'name_np' => 'बुटवल उपमहानगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19,
                    ])
                ],
                [
                    'id' => 496,
                    'district_id' => 49,
                    'name' => 'Devdaha Municipality',
                    'name_np' => 'देवदह नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 497,
                    'district_id' => 49,
                    'name' => 'Lumbini Sanskritik Municipality',
                    'name_np' => 'लुम्बिनी सांस्कृतिक नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 498,
                    'district_id' => 49,
                    'name' => 'Sainamaina Municipality',
                    'name_np' => 'सैनामैना नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 499,
                    'district_id' => 49,
                    'name' => 'Siddharthanagar Municipality',
                    'name_np' => 'सिद्धार्थनगर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 500,
                    'district_id' => 49,
                    'name' => 'Tilottama Municipality',
                    'name_np' => 'तिलोत्तमा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17,
                    ])
                ],
                [
                    'id' => 501,
                    'district_id' => 49,
                    'name' => 'Gaidahawa Rural Municipality',
                    'name_np' => 'गैडहवा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 502,
                    'district_id' => 49,
                    'name' => 'Kanchan Rural Municipality',
                    'name_np' => 'कन्चन गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 503,
                    'district_id' => 49,
                    'name' => 'Kotahimai Rural Municipality',
                    'name_np' => 'कोटहीमाई गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 504,
                    'district_id' => 49,
                    'name' => 'Marchawari Rural Municipality',
                    'name_np' => 'मर्चवारी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 505,
                    'district_id' => 49,
                    'name' => 'Mayadevi Rural Municipality',
                    'name_np' => 'मायादेवी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 506,
                    'district_id' => 49,
                    'name' => 'Omsatiya Rural Municipality',
                    'name_np' => 'ओमसतिया गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 507,
                    'district_id' => 49,
                    'name' => 'Rohini Rural Municipality',
                    'name_np' => 'रोहिणी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 508,
                    'district_id' => 49,
                    'name' => 'Sammarimai Rural Municipality',
                    'name_np' => 'सम्मरीमाई गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 509,
                    'district_id' => 49,
                    'name' => 'Siyari Rural Municipality',
                    'name_np' => 'सियारी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 510,
                    'district_id' => 49,
                    'name' => 'Suddodhan Rural Municipality',
                    'name_np' => 'शुद्धोधन गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 511,
                    'district_id' => 50,
                    'name' => 'Sandhikharka Municipality',
                    'name_np' => 'सन्धिखर्क नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 512,
                    'district_id' => 50,
                    'name' => 'Sitganga Municipality',
                    'name_np' => 'शितगंगा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 513,
                    'district_id' => 50,
                    'name' => 'Bhumikasthan Municipality',
                    'name_np' => 'भूमिकास्थान नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 514,
                    'district_id' => 50,
                    'name' => 'Chhatradev Rural Municipality',
                    'name_np' => 'छत्रदेव गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 515,
                    'district_id' => 50,
                    'name' => 'Panini Rural Municipality',
                    'name_np' => 'पाणिनी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 516,
                    'district_id' => 50,
                    'name' => 'Malarani Rural Municipality',
                    'name_np' => 'मालारानी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 517,
                    'district_id' => 51,
                    'name' => 'Resunga Municipality',
                    'name_np' => 'रेसुङ्गा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 518,
                    'district_id' => 51,
                    'name' => 'Musikot Municipality',
                    'name_np' => 'मुसिकोट नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 519,
                    'district_id' => 51,
                    'name' => 'Rurukshetra Rural Municipality',
                    'name_np' => 'रुरुक्षेत्र गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 520,
                    'district_id' => 51,
                    'name' => 'Chhatrakot Rural Municipality',
                    'name_np' => 'छत्रकोट गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 521,
                    'district_id' => 51,
                    'name' => 'Gulmidarbar Rural Municipality',
                    'name_np' => 'गुल्मी दरबार गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 522,
                    'district_id' => 51,
                    'name' => 'Chandrakot Rural Municipality',
                    'name_np' => 'चन्द्रकोट गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 523,
                    'district_id' => 51,
                    'name' => 'Satyawati Rural Municipality',
                    'name_np' => 'सत्यवती गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 524,
                    'district_id' => 51,
                    'name' => 'Dhurkot Rural Municipality',
                    'name_np' => 'धुर्कोट गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 525,
                    'district_id' => 51,
                    'name' => 'Kaligandaki Rural Municipality',
                    'name_np' => 'कालीगण्डकी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 526,
                    'district_id' => 51,
                    'name' => 'Isma Rural Municipality',
                    'name_np' => 'ईस्मा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 527,
                    'district_id' => 51,
                    'name' => 'Malika Rural Municipality',
                    'name_np' => 'मालिका गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 528,
                    'district_id' => 51,
                    'name' => 'Madane Rural Municipality',
                    'name_np' => 'मदाने गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 529,
                    'district_id' => 52,
                    'name' => 'Tansen Municipality',
                    'name_np' => 'तानसेन नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 530,
                    'district_id' => 52,
                    'name' => 'Rampur Municipality',
                    'name_np' => 'रामपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 531,
                    'district_id' => 52,
                    'name' => 'Rainadevi Chhahara Rural Municipality',
                    'name_np' => 'रैनादेवी छहरा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 532,
                    'district_id' => 52,
                    'name' => 'Ripdikot Rural Municipality',
                    'name_np' => 'रिब्दिकोट गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 533,
                    'district_id' => 52,
                    'name' => 'Bagnaskali Rural Municipality',
                    'name_np' => 'बगनासकाली गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 534,
                    'district_id' => 52,
                    'name' => 'Rambha Rural Municipality',
                    'name_np' => 'रम्भा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 535,
                    'district_id' => 52,
                    'name' => 'Purbakhola Rural Municipality',
                    'name_np' => 'पूर्वखोला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 536,
                    'district_id' => 52,
                    'name' => 'Nisdi Rural Municipality',
                    'name_np' => 'निस्दी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 537,
                    'district_id' => 52,
                    'name' => 'Mathagadhi Rural Municipality',
                    'name_np' => 'माथागढी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 538,
                    'district_id' => 52,
                    'name' => 'Tinahu Rural Municipality',
                    'name_np' => 'तिनाउ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 539,
                    'district_id' => 53,
                    'name' => 'Ghorahi Sub-Metropolitan City',
                    'name_np' => 'घोराही उपमहानगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19,
                    ])
                ],
                [
                    'id' => 540,
                    'district_id' => 53,
                    'name' => 'Tulsipur Sub-Metropolitan City',
                    'name_np' => 'तुल्सीपुर उपमहानगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19,
                    ])
                ],
                [
                    'id' => 541,
                    'district_id' => 53,
                    'name' => 'Lamahi Municipality',
                    'name_np' => 'लमही नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 542,
                    'district_id' => 53,
                    'name' => 'Gadhawa Rural Municipality',
                    'name_np' => 'गढवा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 543,
                    'district_id' => 53,
                    'name' => 'Rajpur Rural Municipality',
                    'name_np' => 'राजपुर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 544,
                    'district_id' => 53,
                    'name' => 'Shantinagar Rural Municipality',
                    'name_np' => 'शान्तिनगर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 545,
                    'district_id' => 53,
                    'name' => 'Rapti Rural Municipality',
                    'name_np' => 'राप्ती गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 546,
                    'district_id' => 53,
                    'name' => 'Banglachuli Rural Municipality',
                    'name_np' => 'बंगलाचुली गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 547,
                    'district_id' => 53,
                    'name' => 'Dangisharan Rural Municipality',
                    'name_np' => 'दंगीशरण गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 548,
                    'district_id' => 53,
                    'name' => 'Babai Rural Municipality',
                    'name_np' => 'बबई गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 549,
                    'district_id' => 54,
                    'name' => 'Sworgadwari Municipality',
                    'name_np' => 'स्वर्गद्वारी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 550,
                    'district_id' => 54,
                    'name' => 'Pyuthan Municipality',
                    'name_np' => 'प्यूठान नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 551,
                    'district_id' => 54,
                    'name' => 'Mandavi Rural Municipality',
                    'name_np' => 'माण्डवी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 552,
                    'district_id' => 54,
                    'name' => 'Sarumarani Rural Municipality',
                    'name_np' => 'सरुमारानी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 553,
                    'district_id' => 54,
                    'name' => 'Ayirawati Rural Municipality',
                    'name_np' => 'ऐरावती गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 554,
                    'district_id' => 54,
                    'name' => 'Mallarani Rural Municipality',
                    'name_np' => 'मल्लरानी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 555,
                    'district_id' => 54,
                    'name' => 'Jhimruk Rural Municipality',
                    'name_np' => 'झिमरुक गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 556,
                    'district_id' => 54,
                    'name' => 'Naubahini Rural Municipality',
                    'name_np' => 'नौवहिनी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 557,
                    'district_id' => 54,
                    'name' => 'Gaumukhi Rural Municipality',
                    'name_np' => 'गौमुखी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 558,
                    'district_id' => 55,
                    'name' => 'Rolpa Municipality',
                    'name_np' => 'रोल्पा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 559,
                    'district_id' => 55,
                    'name' => 'Runtigadi Rural Municipality',
                    'name_np' => 'रुन्टीगढी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 560,
                    'district_id' => 55,
                    'name' => 'Triveni Rural Municipality',
                    'name_np' => 'त्रिवेणी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 561,
                    'district_id' => 55,
                    'name' => 'Sunil Smiriti Rural Municipality',
                    'name_np' => 'सुनिल स्मृति गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 562,
                    'district_id' => 55,
                    'name' => 'Lungri Rural Municipality',
                    'name_np' => 'लुङग्री गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 563,
                    'district_id' => 55,
                    'name' => 'Sunchhahari Rural Municipality',
                    'name_np' => 'सुनछहरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 564,
                    'district_id' => 55,
                    'name' => 'Thawang Rural Municipality',
                    'name_np' => 'थवाङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 565,
                    'district_id' => 55,
                    'name' => 'Madi Rural Municipality',
                    'name_np' => 'माडी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 566,
                    'district_id' => 55,
                    'name' => 'GangaDev Rural Municipality',
                    'name_np' => 'गंगादेव गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 567,
                    'district_id' => 55,
                    'name' => 'Pariwartan Rural Municipality',
                    'name_np' => 'परिवर्तन गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 568,
                    'district_id' => 56,
                    'name' => 'Putha Uttarganga Rural Municipality',
                    'name_np' => 'पुथा उत्तरगंगा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 569,
                    'district_id' => 56,
                    'name' => 'Bhume Rural Municipality',
                    'name_np' => 'भूमे गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 570,
                    'district_id' => 56,
                    'name' => 'Sisne Rural Municipality',
                    'name_np' => 'सिस्ने गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 571,
                    'district_id' => 57,
                    'name' => 'Nepalgunj Sub-Metropolitan City',
                    'name_np' => 'नेपालगंज उपमहानगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23,
                    ])
                ],
                [
                    'id' => 572,
                    'district_id' => 57,
                    'name' => 'Kohalpur Municipality',
                    'name_np' => 'कोहलपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15,
                    ])
                ],
                [
                    'id' => 573,
                    'district_id' => 57,
                    'name' => 'Rapti-Sonari Rural Municipality',
                    'name_np' => 'राप्ती सोनारी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 574,
                    'district_id' => 57,
                    'name' => 'Narainapur Rural Municipality',
                    'name_np' => 'नरैनापुर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 575,
                    'district_id' => 57,
                    'name' => 'Duduwa Rural Municipality',
                    'name_np' => 'डुडुवा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 576,
                    'district_id' => 57,
                    'name' => 'Janaki Rural Municipality',
                    'name_np' => 'जानकी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 577,
                    'district_id' => 57,
                    'name' => 'Khajura Rural Municipality',
                    'name_np' => 'खजुरा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 578,
                    'district_id' => 57,
                    'name' => 'Baijanath Rural Municipality',
                    'name_np' => 'बैजनाथ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 579,
                    'district_id' => 58,
                    'name' => 'Gulariya Municipality',
                    'name_np' => 'गुलरिया नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 580,
                    'district_id' => 58,
                    'name' => 'Rajapur Municipality',
                    'name_np' => 'राजापुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 581,
                    'district_id' => 58,
                    'name' => 'Madhuwan Municipality',
                    'name_np' => 'मधुवन नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 582,
                    'district_id' => 58,
                    'name' => 'Thakurbaba Municipality',
                    'name_np' => 'ठाकुरबाबा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 583,
                    'district_id' => 58,
                    'name' => 'Basgadhi Municipality',
                    'name_np' => 'बाँसगढी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 584,
                    'district_id' => 58,
                    'name' => 'Barbardiya Municipality',
                    'name_np' => 'बारबर्दिया नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 585,
                    'district_id' => 58,
                    'name' => 'Badhaiyatal Rural Municipality',
                    'name_np' => 'बढैयाताल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 586,
                    'district_id' => 58,
                    'name' => 'Geruwa Rural Municipality',
                    'name_np' => 'गेरुवा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 587,
                    'district_id' => 59,
                    'name' => 'Aathabiskot Municipality',
                    'name_np' => 'आठबिसकोट नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 588,
                    'district_id' => 59,
                    'name' => 'Musikot Municipality',
                    'name_np' => 'मुसिकोट नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 589,
                    'district_id' => 59,
                    'name' => 'Chaurjahari Municipality',
                    'name_np' => 'चौरजहारी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 590,
                    'district_id' => 59,
                    'name' => 'SaniBheri Rural Municipality',
                    'name_np' => 'सानी भेरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 591,
                    'district_id' => 59,
                    'name' => 'Triveni Rural Municipality',
                    'name_np' => 'त्रिवेणी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 592,
                    'district_id' => 59,
                    'name' => 'Banphikot Rural Municipality',
                    'name_np' => 'बाँफिकोट गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 593,
                    'district_id' => 60,
                    'name' => 'Kumakh Rural Municipality',
                    'name_np' => 'कुमाख गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 594,
                    'district_id' => 60,
                    'name' => 'Kalimati Rural Municipality',
                    'name_np' => 'कालिमाटी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 595,
                    'district_id' => 60,
                    'name' => 'Chhatreshwari Rural Municipality',
                    'name_np' => 'छत्रेश्वरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 596,
                    'district_id' => 60,
                    'name' => 'Darma Rural Municipality',
                    'name_np' => 'दार्मा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 597,
                    'district_id' => 60,
                    'name' => 'Kapurkot Rural Municipality',
                    'name_np' => 'कपुरकोट गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 598,
                    'district_id' => 60,
                    'name' => 'Triveni Rural Municipality',
                    'name_np' => 'त्रिवेणी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 599,
                    'district_id' => 60,
                    'name' => 'Siddha Kumakh Rural Municipality',
                    'name_np' => 'सिद्ध कुमाख गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 600,
                    'district_id' => 60,
                    'name' => 'Bagchaur Municipality',
                    'name_np' => 'बागचौर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 601,
                    'district_id' => 60,
                    'name' => 'Shaarda Municipality',
                    'name_np' => 'शारदा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15,
                    ])
                ],
                [
                    'id' => 602,
                    'district_id' => 60,
                    'name' => 'Bangad Kupinde Municipality',
                    'name_np' => 'बनगाड कुपिण्डे नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 603,
                    'district_id' => 61,
                    'name' => 'Mudkechula Rural Municipality',
                    'name_np' => 'मुड्केचुला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 604,
                    'district_id' => 61,
                    'name' => 'Kaike Rural Municipality',
                    'name_np' => 'काईके गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 605,
                    'district_id' => 61,
                    'name' => 'She Phoksundo Rural Municipality',
                    'name_np' => 'शे फोक्सुन्डो गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 606,
                    'district_id' => 61,
                    'name' => 'Jagadulla Rural Municipality',
                    'name_np' => 'जगदुल्ला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 607,
                    'district_id' => 61,
                    'name' => 'Dolpo Buddha Rural Municipality',
                    'name_np' => 'डोल्पो बुद्ध गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 608,
                    'district_id' => 61,
                    'name' => 'Chharka Tongsong Rural Municipality',
                    'name_np' => 'छार्का ताङसोङ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 609,
                    'district_id' => 61,
                    'name' => 'Thuli Bheri Municipality',
                    'name_np' => 'ठूली भेरी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 610,
                    'district_id' => 61,
                    'name' => 'Tripurasundari Municipality',
                    'name_np' => 'त्रिपुरासुन्दरी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 611,
                    'district_id' => 62,
                    'name' => 'Simkot Rural Municipality',
                    'name_np' => 'सिमकोट गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 612,
                    'district_id' => 62,
                    'name' => 'Sarkegad Rural Municipality',
                    'name_np' => 'सर्केगाड गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 613,
                    'district_id' => 62,
                    'name' => 'Adanchuli Rural Municipality',
                    'name_np' => 'अदानचुली गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 614,
                    'district_id' => 62,
                    'name' => 'Kharpunath Rural Municipality',
                    'name_np' => 'खार्पुनाथ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 615,
                    'district_id' => 62,
                    'name' => 'Tanjakot Rural Municipality',
                    'name_np' => 'ताँजाकोट गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 616,
                    'district_id' => 62,
                    'name' => 'Chankheli Rural Municipality',
                    'name_np' => 'चंखेली गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 617,
                    'district_id' => 62,
                    'name' => 'Namkha Rural Municipality',
                    'name_np' => 'नाम्खा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 618,
                    'district_id' => 63,
                    'name' => 'Tatopani Rural Municipality',
                    'name_np' => 'तातोपानी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 619,
                    'district_id' => 63,
                    'name' => 'Patarasi Rural Municipality',
                    'name_np' => 'पातारासी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 620,
                    'district_id' => 63,
                    'name' => 'Tila Rural Municipality',
                    'name_np' => 'तिला गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 621,
                    'district_id' => 63,
                    'name' => 'Kanaka Sundari Rural Municipality',
                    'name_np' => 'कनकासुन्दरी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 622,
                    'district_id' => 63,
                    'name' => 'Sinja Rural Municipality',
                    'name_np' => 'सिंजा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 623,
                    'district_id' => 63,
                    'name' => 'Hima Rural Municipality',
                    'name_np' => 'हिमा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 624,
                    'district_id' => 63,
                    'name' => 'Guthichaur Rural Municipality',
                    'name_np' => 'गुठिचौर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 625,
                    'district_id' => 63,
                    'name' => 'Chandannath Municipality',
                    'name_np' => 'चन्दननाथ नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 626,
                    'district_id' => 64,
                    'name' => 'Khandachakra Municipality',
                    'name_np' => 'खाँडाचक्र नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 627,
                    'district_id' => 64,
                    'name' => 'Raskot Municipality',
                    'name_np' => 'रास्कोट नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 628,
                    'district_id' => 64,
                    'name' => 'Tilagufa Municipality',
                    'name_np' => 'तिलागुफा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 629,
                    'district_id' => 64,
                    'name' => 'Narharinath Rural Municipality',
                    'name_np' => 'नरहरिनाथ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 630,
                    'district_id' => 64,
                    'name' => 'Palata Rural Municipality',
                    'name_np' => 'पलाता गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 631,
                    'district_id' => 64,
                    'name' => 'Shubha Kalika Rural Municipality',
                    'name_np' => 'शुभ कालीका गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 632,
                    'district_id' => 64,
                    'name' => 'Sanni Triveni Rural Municipality',
                    'name_np' => 'सान्नी त्रिवेणी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 633,
                    'district_id' => 64,
                    'name' => 'Pachaljharana Rural Municipality',
                    'name_np' => 'पचालझरना गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 634,
                    'district_id' => 64,
                    'name' => 'Mahawai Rural Municipality',
                    'name_np' => 'महावै गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 635,
                    'district_id' => 65,
                    'name' => 'Khatyad Rural Municipality',
                    'name_np' => 'खत्याड गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 636,
                    'district_id' => 65,
                    'name' => 'Soru Rural Municipality',
                    'name_np' => 'सोरु गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 637,
                    'district_id' => 65,
                    'name' => 'Mugum Karmarong Rural Municipality',
                    'name_np' => 'मुगुम कार्मारोंग गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 638,
                    'district_id' => 65,
                    'name' => 'Chhayanath Rara Municipality',
                    'name_np' => 'छायाँनाथ रारा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 639,
                    'district_id' => 66,
                    'name' => 'Simta Rural Municipality',
                    'name_np' => 'सिम्ता गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 640,
                    'district_id' => 66,
                    'name' => 'Barahatal Rural Municipality',
                    'name_np' => 'बराहताल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 641,
                    'district_id' => 66,
                    'name' => 'Chaukune Rural Municipality',
                    'name_np' => 'चौकुने गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 642,
                    'district_id' => 66,
                    'name' => 'Chingad Rural Municipality',
                    'name_np' => 'चिङ्गाड गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 643,
                    'district_id' => 66,
                    'name' => 'Gurbhakot Municipality',
                    'name_np' => 'गुर्भाकोट नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 644,
                    'district_id' => 66,
                    'name' => 'Birendranagar Municipality',
                    'name_np' => 'बीरेन्द्रनगर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16,
                    ])
                ],
                [
                    'id' => 645,
                    'district_id' => 66,
                    'name' => 'Bheriganga Municipality',
                    'name_np' => 'भेरीगंगा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 646,
                    'district_id' => 66,
                    'name' => 'Panchapuri Municipality',
                    'name_np' => 'पञ्चपुरी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 647,
                    'district_id' => 66,
                    'name' => 'Lekbeshi Municipality',
                    'name_np' => 'लेकवेशी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 648,
                    'district_id' => 67,
                    'name' => 'Dullu Municipality',
                    'name_np' => 'दुल्लु नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 649,
                    'district_id' => 67,
                    'name' => 'Gurans Rural Municipality',
                    'name_np' => 'गुराँस गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 650,
                    'district_id' => 67,
                    'name' => 'Bhairabi Rural Municipality',
                    'name_np' => 'भैरवी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 651,
                    'district_id' => 67,
                    'name' => 'Naumule Rural Municipality',
                    'name_np' => 'नौमुले गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 652,
                    'district_id' => 67,
                    'name' => 'Mahabu Rural Municipality',
                    'name_np' => 'महावु गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 653,
                    'district_id' => 67,
                    'name' => 'Thantikandh Rural Municipality',
                    'name_np' => 'ठाँटीकाँध गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 654,
                    'district_id' => 67,
                    'name' => 'Bhagawatimai Rural Municipality',
                    'name_np' => 'भगवतीमाई गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 655,
                    'district_id' => 67,
                    'name' => 'Dungeshwar Rural Municipality',
                    'name_np' => 'डुंगेश्वर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 656,
                    'district_id' => 67,
                    'name' => 'Aathabis Municipality',
                    'name_np' => 'आठबीस नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 657,
                    'district_id' => 67,
                    'name' => 'Narayan Municipality',
                    'name_np' => 'नारायण नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 658,
                    'district_id' => 67,
                    'name' => 'Chamunda Bindrasaini Municipality',
                    'name_np' => 'चामुण्डा विन्द्रासैनी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 659,
                    'district_id' => 68,
                    'name' => 'Chhedagad Municipality',
                    'name_np' => 'छेडागाड नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 660,
                    'district_id' => 68,
                    'name' => 'Bheri Municipality',
                    'name_np' => 'भेरी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 661,
                    'district_id' => 68,
                    'name' => 'Nalgad Municipality',
                    'name_np' => 'नलगाड नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
                    ])
                ],
                [
                    'id' => 662,
                    'district_id' => 68,
                    'name' => 'Junichande Rural Municipality',
                    'name_np' => 'जुनीचाँदे गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 663,
                    'district_id' => 68,
                    'name' => 'Kuse Rural Municipality',
                    'name_np' => 'कुसे गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 664,
                    'district_id' => 68,
                    'name' => 'Barekot Rural Municipality',
                    'name_np' => 'बारेकोट गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 665,
                    'district_id' => 68,
                    'name' => 'Shivalaya Rural Municipality',
                    'name_np' => 'शिवालय गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 666,
                    'district_id' => 69,
                    'name' => 'Mahakali Municipality',
                    'name_np' => 'महाकाली नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 667,
                    'district_id' => 69,
                    'name' => 'Shailyashikhar Municipality',
                    'name_np' => 'शैल्यशिखर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 668,
                    'district_id' => 69,
                    'name' => 'Naugad Rural Municipality',
                    'name_np' => 'नौगाड गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 669,
                    'district_id' => 69,
                    'name' => 'Malikarjun Rural Municipality',
                    'name_np' => 'मालिकार्जुन गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 670,
                    'district_id' => 69,
                    'name' => 'Marma Rural Municipality',
                    'name_np' => 'मार्मा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 671,
                    'district_id' => 69,
                    'name' => 'Lekam Rural Municipality',
                    'name_np' => 'लेकम गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 672,
                    'district_id' => 69,
                    'name' => 'Duhun Rural Municipality',
                    'name_np' => 'दुहुँ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 673,
                    'district_id' => 69,
                    'name' => 'Vyans Rural Municipality',
                    'name_np' => 'ब्याँस गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 674,
                    'district_id' => 69,
                    'name' => 'Apihimal Rural Municipality',
                    'name_np' => 'अपिहिमाल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 675,
                    'district_id' => 70,
                    'name' => 'Jayaprithvi Municipality',
                    'name_np' => 'जयपृथ्वी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 676,
                    'district_id' => 70,
                    'name' => 'Bungal Municipality',
                    'name_np' => 'बुंगल नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 677,
                    'district_id' => 70,
                    'name' => 'Kedarsyu Rural Municipality',
                    'name_np' => 'केदारस्युँ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 678,
                    'district_id' => 70,
                    'name' => 'Thalara Rural Municipality',
                    'name_np' => 'थलारा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 679,
                    'district_id' => 70,
                    'name' => 'Bitthadchir Rural Municipality',
                    'name_np' => 'वित्थडचिर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 680,
                    'district_id' => 70,
                    'name' => 'Chhabis Pathibhera Rural Municipality',
                    'name_np' => 'छबिसपाथिभेरा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 681,
                    'district_id' => 70,
                    'name' => 'Khaptadchhanna Rural Municipality',
                    'name_np' => 'खप्तडछान्ना गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 682,
                    'district_id' => 70,
                    'name' => 'Masta Rural Municipality',
                    'name_np' => 'मष्टा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 683,
                    'district_id' => 70,
                    'name' => 'Durgathali Rural Municipality',
                    'name_np' => 'दुर्गाथली गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 684,
                    'district_id' => 70,
                    'name' => 'Talkot Rural Municipality',
                    'name_np' => 'तलकोट गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 685,
                    'district_id' => 70,
                    'name' => 'Surma Rural Municipality',
                    'name_np' => 'सूर्मा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 686,
                    'district_id' => 70,
                    'name' => 'Saipal Rural Municipality',
                    'name_np' => 'साइपाल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 687,
                    'district_id' => 71,
                    'name' => 'Badimalika Municipality',
                    'name_np' => 'बडीमालिका नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 688,
                    'district_id' => 71,
                    'name' => 'Triveni Municipality',
                    'name_np' => 'त्रिवेणी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 689,
                    'district_id' => 71,
                    'name' => 'Budhiganga Municipality',
                    'name_np' => 'बुढीगंगा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 690,
                    'district_id' => 71,
                    'name' => 'Budhinanda Municipality',
                    'name_np' => 'बुढीनन्दा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 691,
                    'district_id' => 71,
                    'name' => 'Khaptad Chhededaha Rural Municipality',
                    'name_np' => 'खप्तड छेडेदह गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 692,
                    'district_id' => 71,
                    'name' => 'Swami Kartik Khapar Rural Municipality',
                    'name_np' => 'स्वामीकार्तिक खापर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 693,
                    'district_id' => 71,
                    'name' => 'Jagannath Rural Municipality',
                    'name_np' => 'जगन्‍नाथ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 694,
                    'district_id' => 71,
                    'name' => 'Himali Rural Municipality',
                    'name_np' => 'हिमाली गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 695,
                    'district_id' => 71,
                    'name' => 'Gaumul Rural Municipality',
                    'name_np' => 'गौमुल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 696,
                    'district_id' => 72,
                    'name' => 'Dashrathchanda Municipality',
                    'name_np' => 'दशरथचन्द नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 697,
                    'district_id' => 72,
                    'name' => 'Patan Municipality',
                    'name_np' => 'पाटन नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 698,
                    'district_id' => 72,
                    'name' => 'Melauli Municipality',
                    'name_np' => 'मेलौली नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 699,
                    'district_id' => 72,
                    'name' => 'Purchaudi Municipality',
                    'name_np' => 'पुर्चौडी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 700,
                    'district_id' => 72,
                    'name' => 'Dogdakedar Rural Municipality',
                    'name_np' => 'दोगडाकेदार गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 701,
                    'district_id' => 72,
                    'name' => 'Dilashaini Rural Municipality',
                    'name_np' => 'डीलासैनी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 702,
                    'district_id' => 72,
                    'name' => 'Sigas Rural Municipality',
                    'name_np' => 'सिगास गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 703,
                    'district_id' => 72,
                    'name' => 'Pancheshwar Rural Municipality',
                    'name_np' => 'पञ्चेश्वर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 704,
                    'district_id' => 72,
                    'name' => 'Surnaya Rural Municipality',
                    'name_np' => 'सुर्नया गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 705,
                    'district_id' => 72,
                    'name' => 'Shivanath Rural Municipality',
                    'name_np' => 'शिवनाथ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 706,
                    'district_id' => 73,
                    'name' => 'Dipayal Silgadhi Municipality',
                    'name_np' => 'दिपायल सिलगढी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 707,
                    'district_id' => 73,
                    'name' => 'Shikhar Municipality',
                    'name_np' => 'शिखर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 708,
                    'district_id' => 73,
                    'name' => 'Aadarsha Rural Municipality',
                    'name_np' => 'आदर्श गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 709,
                    'district_id' => 73,
                    'name' => 'Purbichauki Rural Municipality',
                    'name_np' => 'पूर्वीचौकी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 710,
                    'district_id' => 73,
                    'name' => 'K.I.Singh Rural Municipality',
                    'name_np' => 'के.आई.सिं. गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 711,
                    'district_id' => 73,
                    'name' => 'Jorayal Rural Municipality',
                    'name_np' => 'जोरायल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 712,
                    'district_id' => 73,
                    'name' => 'Sayal Rural Municipality',
                    'name_np' => 'सायल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 713,
                    'district_id' => 73,
                    'name' => 'Bogatan-Phudsil Rural Municipality',
                    'name_np' => 'बोगटान फुड्सिल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 714,
                    'district_id' => 73,
                    'name' => 'Badikedar Rural Municipality',
                    'name_np' => 'बडीकेदार गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 715,
                    'district_id' => 74,
                    'name' => 'Ramaroshan Rural Municipality',
                    'name_np' => 'रामारोशन गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 716,
                    'district_id' => 74,
                    'name' => 'Chaurpati Rural Municipality',
                    'name_np' => 'चौरपाटी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 717,
                    'district_id' => 74,
                    'name' => 'Turmakhand Rural Municipality',
                    'name_np' => 'तुर्माखाँद गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 718,
                    'district_id' => 74,
                    'name' => 'Mellekh Rural Municipality',
                    'name_np' => 'मेल्लेख गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 719,
                    'district_id' => 74,
                    'name' => 'Dhakari Rural Municipality',
                    'name_np' => 'ढकारी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 720,
                    'district_id' => 74,
                    'name' => 'Bannigadi Jayagad Rural Municipality',
                    'name_np' => 'बान्निगढी जयगढ गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 721,
                    'district_id' => 74,
                    'name' => 'Mangalsen Municipality',
                    'name_np' => 'मंगलसेन नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 722,
                    'district_id' => 74,
                    'name' => 'Kamalbazar Municipality',
                    'name_np' => 'कमलबजार नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 723,
                    'district_id' => 74,
                    'name' => 'Sanfebagar Municipality',
                    'name_np' => 'साँफेबगर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                    ])
                ],
                [
                    'id' => 724,
                    'district_id' => 74,
                    'name' => 'Panchadewal Binayak Municipality',
                    'name_np' => 'पन्चदेवल विनायक नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 725,
                    'district_id' => 75,
                    'name' => 'Navadurga Rural Municipality',
                    'name_np' => 'नवदुर्गा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 726,
                    'district_id' => 75,
                    'name' => 'Aalitaal Rural Municipality',
                    'name_np' => 'आलिताल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8,
                    ])
                ],
                [
                    'id' => 727,
                    'district_id' => 75,
                    'name' => 'Ganyapadhura Rural Municipality',
                    'name_np' => 'गन्यापधुरा गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 728,
                    'district_id' => 75,
                    'name' => 'Bhageshwar Rural Municipality',
                    'name_np' => 'भागेश्वर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 729,
                    'district_id' => 75,
                    'name' => 'Ajaymeru Rural Municipality',
                    'name_np' => 'अजयमेरु गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 730,
                    'district_id' => 75,
                    'name' => 'Amargadhi Municipality',
                    'name_np' => 'अमरगढी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 731,
                    'district_id' => 75,
                    'name' => 'Parshuram Municipality',
                    'name_np' => 'परशुराम नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 732,
                    'district_id' => 76,
                    'name' => 'Bhimdatta Municipality',
                    'name_np' => 'भीमदत्त नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19,
                    ])
                ],
                [
                    'id' => 733,
                    'district_id' => 76,
                    'name' => 'Punarbas Municipality',
                    'name_np' => 'पुर्नवास नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 734,
                    'district_id' => 76,
                    'name' => 'Bedkot Municipality',
                    'name_np' => 'वेदकोट नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 735,
                    'district_id' => 76,
                    'name' => 'Mahakali Municipality',
                    'name_np' => 'माहाकाली नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 736,
                    'district_id' => 76,
                    'name' => 'Shuklaphanta Municipality',
                    'name_np' => 'शुक्लाफाँटा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 737,
                    'district_id' => 76,
                    'name' => 'Belauri Municipality',
                    'name_np' => 'बेलौरी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 738,
                    'district_id' => 76,
                    'name' => 'Krishnapur Municipality',
                    'name_np' => 'कृष्णपुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 739,
                    'district_id' => 76,
                    'name' => 'Laljhadi Rural Municipality',
                    'name_np' => 'लालझाडी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 740,
                    'district_id' => 76,
                    'name' => 'Beldandi Rural Municipality',
                    'name_np' => 'बेलडाडी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5,
                    ])
                ],
                [
                    'id' => 741,
                    'district_id' => 77,
                    'name' => 'Janaki Rural Municipality',
                    'name_np' => 'जानकी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 742,
                    'district_id' => 77,
                    'name' => 'Kailari Rural Municipality',
                    'name_np' => 'कैलारी गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 743,
                    'district_id' => 77,
                    'name' => 'Joshipur Rural Municipality',
                    'name_np' => 'जोशीपुर गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 744,
                    'district_id' => 77,
                    'name' => 'Bardagoriya Rural Municipality',
                    'name_np' => 'बर्दगोरिया गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 745,
                    'district_id' => 77,
                    'name' => 'Mohanyal Rural Municipality',
                    'name_np' => 'मोहन्याल गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7,
                    ])
                ],
                [
                    'id' => 746,
                    'district_id' => 77,
                    'name' => 'Chure Rural Municipality',
                    'name_np' => 'चुरे गाउँपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6,
                    ])
                ],
                [
                    'id' => 747,
                    'district_id' => 77,
                    'name' => 'Tikapur Municipality',
                    'name_np' => 'टिकापुर नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 748,
                    'district_id' => 77,
                    'name' => 'Ghodaghodi Municipality',
                    'name_np' => 'घोडाघोडी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 749,
                    'district_id' => 77,
                    'name' => 'Lamkichuha Municipality',
                    'name_np' => 'लम्कीचुहा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                    ])
                ],
                [
                    'id' => 750,
                    'district_id' => 77,
                    'name' => 'Bhajni Municipality',
                    'name_np' => 'भजनी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9,
                    ])
                ],
                [
                    'id' => 751,
                    'district_id' => 77,
                    'name' => 'Godawari Municipality',
                    'name_np' => 'गोदावरी नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,
                    ])
                ],
                [
                    'id' => 752,
                    'district_id' => 77,
                    'name' => 'Gauriganga Municipality',
                    'name_np' => 'गौरीगंगा नगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,
                    ])
                ],
                [
                    'id' => 753,
                    'district_id' => 77,
                    'name' => 'Dhangadhi Sub-Metropolitan City',
                    'name_np' => 'धनगढी उपमहानगरपालिका',
                    'wards' => json_encode([
                        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19,
                    ])
                    ]
          
        ];

        DB::table('municipalities')->insert($data);
    }
}
