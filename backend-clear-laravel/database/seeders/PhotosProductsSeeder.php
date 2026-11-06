<?php

namespace Database\Seeders;

use App\Models\PhotosProducts;
use Illuminate\Database\Seeder;

class PhotosProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PhotosProducts::truncate(); 

        PhotosProducts::insert([
        [
            'ID' => '1',
            'PRODUCTS_ID' => '1',
            'PATH' => 'computer1.webp',
        ],
        [
            'ID' => '2',
            'PRODUCTS_ID' => '2',
            'PATH' => 'computer2.webp',
        ],
        [
            'ID' => '3',
            'PRODUCTS_ID' => '3',
            'PATH' => 'computer3.webp',
        ],
        [
            'ID' => '4',
            'PRODUCTS_ID' => '4',
            'PATH' => 'computer4.webp',
        ],
        [
            'ID' => '5',
            'PRODUCTS_ID' => '5',
            'PATH' => 'computer5.webp',
        ],
        [
            'ID' => '6',
            'PRODUCTS_ID' => '6',
            'PATH' => 'computer6.webp',
        ],
        [
            'ID' => '7',
            'PRODUCTS_ID' => '7',
            'PATH' => 'computer7.webp',
        ],
        [
            'ID' => '8',
            'PRODUCTS_ID' => '8',
            'PATH' => 'computer8.webp',
        ],
        [
            'ID' => '9',
            'PRODUCTS_ID' => '9',
            'PATH' => 'computer9.webp',
        ],
        [
            'ID' => '10',
            'PRODUCTS_ID' => '10',
            'PATH' => 'laptop1v1.webp',
        ],
        [
            'ID' => '11',
            'PRODUCTS_ID' => '10',
            'PATH' => 'laptop1v2.webp',
        ],
        [
            'ID' => '12',
            'PRODUCTS_ID' => '11',
            'PATH' => 'laptop2v1.webp',
        ],
        [
            'ID' => '13',
            'PRODUCTS_ID' => '11',
            'PATH' => 'laptop2v2.webp',
        ],
        [
            'ID' => '14',
            'PRODUCTS_ID' => '11',
            'PATH' => 'laptop2v3.webp',
        ],
        [
            'ID' => '15',
            'PRODUCTS_ID' => '11',
            'PATH' => 'laptop2v4.webp',
        ],
        [
            'ID' => '16',
            'PRODUCTS_ID' => '11',
            'PATH' => 'laptop2v5.webp',
        ],
        [
            'ID' => '17',
            'PRODUCTS_ID' => '11',
            'PATH' => 'laptop2v6.webp',
        ],
        [
            'ID' => '18',
            'PRODUCTS_ID' => '11',
            'PATH' => 'laptop2v7.webp',
        ],
        [
            'ID' => '19',
            'PRODUCTS_ID' => '12',
            'PATH' => 'laptop3v1.webp',
        ],
        [
            'ID' => '20',
            'PRODUCTS_ID' => '12',
            'PATH' => 'laptop3v2.webp',
        ],
        [
            'ID' => '21',
            'PRODUCTS_ID' => '12',
            'PATH' => 'laptop3v3.webp',
        ],
        [
            'ID' => '22',
            'PRODUCTS_ID' => '12',
            'PATH' => 'laptop3v4.webp',
        ],
        [
            'ID' => '23',
            'PRODUCTS_ID' => '12',
            'PATH' => 'laptop3v5.webp',
        ],
        [
            'ID' => '24',
            'PRODUCTS_ID' => '12',
            'PATH' => 'laptop3v6.webp',
        ],
        [
            'ID' => '25',
            'PRODUCTS_ID' => '13',
            'PATH' => 'laptop4v1.webp',
        ],
        [
            'ID' => '26',
            'PRODUCTS_ID' => '13',
            'PATH' => 'laptop4v2.webp',
        ],
        [
            'ID' => '27',
            'PRODUCTS_ID' => '13',
            'PATH' => 'laptop4v3.webp',
        ],
        [
            'ID' => '28',
            'PRODUCTS_ID' => '13',
            'PATH' => 'laptop4v4.webp',
        ],
        [
            'ID' => '29',
            'PRODUCTS_ID' => '13',
            'PATH' => 'laptop4v5.webp',
        ],
        [
            'ID' => '30',
            'PRODUCTS_ID' => '13',
            'PATH' => 'laptop4v6.webp',
        ],
        [
            'ID' => '31',
            'PRODUCTS_ID' => '13',
            'PATH' => 'laptop4v7.webp',
        ],
        [
            'ID' => '32',
            'PRODUCTS_ID' => '14',
            'PATH' => 'laptop5v1.webp',
        ],
        [
            'ID' => '33',
            'PRODUCTS_ID' => '14',
            'PATH' => 'laptop5v2.jpg',
        ],
        [
            'ID' => '34',
            'PRODUCTS_ID' => '14',
            'PATH' => 'laptop5v3.webp',
        ],
        [
            'ID' => '35',
            'PRODUCTS_ID' => '14',
            'PATH' => 'laptop5v4.jpg',
        ],
        [
            'ID' => '36',
            'PRODUCTS_ID' => '14',
            'PATH' => 'laptop5v5.jpg',
        ],
        [
            'ID' => '37',
            'PRODUCTS_ID' => '14',
            'PATH' => 'laptop5v6.webp',
        ],
        [
            'ID' => '38',
            'PRODUCTS_ID' => '15',
            'PATH' => 'laptop7v1.webp',
        ],
        [
            'ID' => '39',
            'PRODUCTS_ID' => '15',
            'PATH' => 'laptop7v2.webp',
        ],
        [
            'ID' => '40',
            'PRODUCTS_ID' => '15',
            'PATH' => 'laptop7v3.webp',
        ],
        [
            'ID' => '41',
            'PRODUCTS_ID' => '15',
            'PATH' => 'laptop7v4.webp',
        ],
        [
            'ID' => '42',
            'PRODUCTS_ID' => '15',
            'PATH' => 'laptop7v5.webp',
        ],
        [
            'ID' => '43',
            'PRODUCTS_ID' => '16',
            'PATH' => 'laptop8v1.webp',
        ],
        [
            'ID' => '44',
            'PRODUCTS_ID' => '16',
            'PATH' => 'laptop8v2.webp',
        ],
        [
            'ID' => '45',
            'PRODUCTS_ID' => '16',
            'PATH' => 'laptop8v3.webp',
        ],
        [
            'ID' => '46',
            'PRODUCTS_ID' => '16',
            'PATH' => 'laptop8v4.webp',
        ],
        [
            'ID' => '47',
            'PRODUCTS_ID' => '16',
            'PATH' => 'laptop8v5.webp',
        ],
        [
            'ID' => '48',
            'PRODUCTS_ID' => '16',
            'PATH' => 'laptop8v6.webp',
        ],
        [
            'ID' => '49',
            'PRODUCTS_ID' => '17',
            'PATH' => 'laptop9v1.webp',
        ],
        [
            'ID' => '50',
            'PRODUCTS_ID' => '17',
            'PATH' => 'laptop9v2.jpg',
        ],
        [
            'ID' => '51',
            'PRODUCTS_ID' => '17',
            'PATH' => 'laptop9v3.webp',
        ],
        [
            'ID' => '52',
            'PRODUCTS_ID' => '17',
            'PATH' => 'laptop9v4.jpg',
        ],
        [
            'ID' => '53',
            'PRODUCTS_ID' => '17',
            'PATH' => 'laptop9v5.jpg',
        ],
        [
            'ID' => '54',
            'PRODUCTS_ID' => '17',
            'PATH' => 'laptop9v6.webp',
        ],
        [
            'ID' => '55',
            'PRODUCTS_ID' => '18',
            'PATH' => 'laptop10v1.webp',
        ],
        [
            'ID' => '56',
            'PRODUCTS_ID' => '18',
            'PATH' => 'laptop10v2.webp',
        ],
        [
            'ID' => '57',
            'PRODUCTS_ID' => '18',
            'PATH' => 'laptop10v3.webp',
        ],
        [
            'ID' => '58',
            'PRODUCTS_ID' => '18',
            'PATH' => 'laptop10v4.webp',
        ],
        [
            'ID' => '59',
            'PRODUCTS_ID' => '18',
            'PATH' => 'laptop10v5.webp',
        ],
        [
            'ID' => '60',
            'PRODUCTS_ID' => '18',
            'PATH' => 'laptop10v6.webp',
        ],
        [
            'ID' => '61',
            'PRODUCTS_ID' => '19',
            'PATH' => 'laptop10v1.webp',
        ],
        [
            'ID' => '62',
            'PRODUCTS_ID' => '19',
            'PATH' => 'laptop10v2.webp',
        ],
        [
            'ID' => '63',
            'PRODUCTS_ID' => '19',
            'PATH' => 'laptop10v3.webp',
        ],
        [
            'ID' => '64',
            'PRODUCTS_ID' => '19',
            'PATH' => 'laptop10v4.webp',
        ],
        [
            'ID' => '65',
            'PRODUCTS_ID' => '19',
            'PATH' => 'laptop10v5.webp',
        ],
        [
            'ID' => '66',
            'PRODUCTS_ID' => '19',
            'PATH' => 'laptop10v6.webp',
        ],
        [
            'ID' => '67',
            'PRODUCTS_ID' => '20',
            'PATH' => 'case1v1.webp',
        ],
        [
            'ID' => '68',
            'PRODUCTS_ID' => '20',
            'PATH' => 'case1v2.webp',
        ],
        [
            'ID' => '69',
            'PRODUCTS_ID' => '20',
            'PATH' => 'case1v3.webp',
        ],
        [
            'ID' => '70',
            'PRODUCTS_ID' => '20',
            'PATH' => 'case1v4.webp',
        ],
        [
            'ID' => '71',
            'PRODUCTS_ID' => '20',
            'PATH' => 'case1v5.webp',
        ],
        [
            'ID' => '72',
            'PRODUCTS_ID' => '20',
            'PATH' => 'case1v6.webp',
        ],
        [
            'ID' => '73',
            'PRODUCTS_ID' => '20',
            'PATH' => 'case1v7.webp',
        ],
        [
            'ID' => '74',
            'PRODUCTS_ID' => '20',
            'PATH' => 'case1v8.webp',
        ],
        [
            'ID' => '75',
            'PRODUCTS_ID' => '20',
            'PATH' => 'case1v9.webp',
        ],
        [
            'ID' => '76',
            'PRODUCTS_ID' => '20',
            'PATH' => 'case1v10.webp',
        ],
        [
            'ID' => '77',
            'PRODUCTS_ID' => '20',
            'PATH' => 'case1v11.webp',
        ],
        [
            'ID' => '78',
            'PRODUCTS_ID' => '21',
            'PATH' => 'case2v1.webp',
        ],
        [
            'ID' => '79',
            'PRODUCTS_ID' => '21',
            'PATH' => 'case2v2.webp',
        ],
        [
            'ID' => '80',
            'PRODUCTS_ID' => '21',
            'PATH' => 'case2v3.webp',
        ],
        [
            'ID' => '81',
            'PRODUCTS_ID' => '21',
            'PATH' => 'case2v4.webp',
        ],
        [
            'ID' => '82',
            'PRODUCTS_ID' => '21',
            'PATH' => 'case2v5.webp',
        ],
        [
            'ID' => '83',
            'PRODUCTS_ID' => '21',
            'PATH' => 'case2v6.webp',
        ],
        [
            'ID' => '84',
            'PRODUCTS_ID' => '21',
            'PATH' => 'case2v7.webp',
        ],
        [
            'ID' => '85',
            'PRODUCTS_ID' => '21',
            'PATH' => 'case2v8.webp',
        ],
        [
            'ID' => '86',
            'PRODUCTS_ID' => '21',
            'PATH' => 'case2v9.webp',
        ],
        [
            'ID' => '87',
            'PRODUCTS_ID' => '21',
            'PATH' => 'case2v10.webp',
        ],
        [
            'ID' => '88',
            'PRODUCTS_ID' => '22',
            'PATH' => 'case3v1.webp',
        ],
        [
            'ID' => '89',
            'PRODUCTS_ID' => '22',
            'PATH' => 'case3v2.webp',
        ],
        [
            'ID' => '90',
            'PRODUCTS_ID' => '22',
            'PATH' => 'case3v3.webp',
        ],
        [
            'ID' => '91',
            'PRODUCTS_ID' => '22',
            'PATH' => 'case3v4.webp',
        ],
        [
            'ID' => '92',
            'PRODUCTS_ID' => '22',
            'PATH' => 'case3v5.webp',
        ],
        [
            'ID' => '93',
            'PRODUCTS_ID' => '22',
            'PATH' => 'case3v6.webp',
        ],
        [
            'ID' => '94',
            'PRODUCTS_ID' => '22',
            'PATH' => 'case3v7.webp',
        ],
        [
            'ID' => '95',
            'PRODUCTS_ID' => '22',
            'PATH' => 'case3v8.webp',
        ],
        [
            'ID' => '96',
            'PRODUCTS_ID' => '22',
            'PATH' => 'case3v9.webp',
        ],
        [
            'ID' => '97',
            'PRODUCTS_ID' => '22',
            'PATH' => 'case3v10.webp',
        ],
        [
            'ID' => '98',
            'PRODUCTS_ID' => '22',
            'PATH' => 'case3v11.webp',
        ],
        [
            'ID' => '99',
            'PRODUCTS_ID' => '23',
            'PATH' => 'case4v1.webp',
        ],
        [
            'ID' => '100',
            'PRODUCTS_ID' => '23',
            'PATH' => 'case4v2.webp',
        ],
        [
            'ID' => '101',
            'PRODUCTS_ID' => '23',
            'PATH' => 'case4v3.webp',
        ],
        [
            'ID' => '102',
            'PRODUCTS_ID' => '23',
            'PATH' => 'case4v4.webp',
        ],
        [
            'ID' => '103',
            'PRODUCTS_ID' => '23',
            'PATH' => 'case4v5.webp',
        ],
        [
            'ID' => '104',
            'PRODUCTS_ID' => '23',
            'PATH' => 'case4v6.webp',
        ],
        [
            'ID' => '105',
            'PRODUCTS_ID' => '23',
            'PATH' => 'case4v7.webp',
        ],
        [
            'ID' => '106',
            'PRODUCTS_ID' => '23',
            'PATH' => 'case4v8.webp',
        ],
        [
            'ID' => '107',
            'PRODUCTS_ID' => '24',
            'PATH' => 'case5v1.webp',
        ],
        [
            'ID' => '108',
            'PRODUCTS_ID' => '24',
            'PATH' => 'case5v2.webp',
        ],
        [
            'ID' => '109',
            'PRODUCTS_ID' => '24',
            'PATH' => 'case5v3.webp',
        ],
        [
            'ID' => '110',
            'PRODUCTS_ID' => '24',
            'PATH' => 'case5v4.webp',
        ],
        [
            'ID' => '111',
            'PRODUCTS_ID' => '24',
            'PATH' => 'case5v5.webp',
        ],
        [
            'ID' => '112',
            'PRODUCTS_ID' => '24',
            'PATH' => 'case5v6.webp',
        ],
        [
            'ID' => '113',
            'PRODUCTS_ID' => '24',
            'PATH' => 'case5v7.webp',
        ],
        [
            'ID' => '114',
            'PRODUCTS_ID' => '24',
            'PATH' => 'case5v8.webp',
        ],
        [
            'ID' => '115',
            'PRODUCTS_ID' => '24',
            'PATH' => 'case5v9.webp',
        ],
        [
            'ID' => '116',
            'PRODUCTS_ID' => '24',
            'PATH' => 'case5v10.webp',
        ],
        [
            'ID' => '117',
            'PRODUCTS_ID' => '25',
            'PATH' => 'case6v1.webp',
        ],
        [
            'ID' => '118',
            'PRODUCTS_ID' => '25',
            'PATH' => 'case6v2.webp',
        ],
        [
            'ID' => '119',
            'PRODUCTS_ID' => '25',
            'PATH' => 'case6v3.webp',
        ],
        [
            'ID' => '120',
            'PRODUCTS_ID' => '25',
            'PATH' => 'case6v4.webp',
        ],
        [
            'ID' => '121',
            'PRODUCTS_ID' => '25',
            'PATH' => 'case6v5.webp',
        ],
        [
            'ID' => '122',
            'PRODUCTS_ID' => '25',
            'PATH' => 'case6v6.webp',
        ],
        [
            'ID' => '123',
            'PRODUCTS_ID' => '25',
            'PATH' => 'case6v7.webp',
        ],
        [
            'ID' => '124',
            'PRODUCTS_ID' => '25',
            'PATH' => 'case6v8.webp',
        ],
        [
            'ID' => '125',
            'PRODUCTS_ID' => '25',
            'PATH' => 'case6v9.webp',
        ],
        [
            'ID' => '126',
            'PRODUCTS_ID' => '26',
            'PATH' => 'case7v1.webp',
        ],
        [
            'ID' => '127',
            'PRODUCTS_ID' => '26',
            'PATH' => 'case7v2.webp',
        ],
        [
            'ID' => '128',
            'PRODUCTS_ID' => '26',
            'PATH' => 'case7v3.webp',
        ],
        [
            'ID' => '129',
            'PRODUCTS_ID' => '26',
            'PATH' => 'case7v4.webp',
        ],
        [
            'ID' => '130',
            'PRODUCTS_ID' => '26',
            'PATH' => 'case7v5.webp',
        ],
        [
            'ID' => '131',
            'PRODUCTS_ID' => '26',
            'PATH' => 'case7v6.webp',
        ],
        [
            'ID' => '132',
            'PRODUCTS_ID' => '26',
            'PATH' => 'case7v7.webp',
        ],
        [
            'ID' => '133',
            'PRODUCTS_ID' => '26',
            'PATH' => 'case7v8.webp',
        ],
        [
            'ID' => '134',
            'PRODUCTS_ID' => '26',
            'PATH' => 'case7v9.webp',
        ],
        [
            'ID' => '135',
            'PRODUCTS_ID' => '27',
            'PATH' => 'case8v1.webp',
        ],
        [
            'ID' => '136',
            'PRODUCTS_ID' => '27',
            'PATH' => 'case8v2.webp',
        ],
        [
            'ID' => '137',
            'PRODUCTS_ID' => '27',
            'PATH' => 'case8v3.webp',
        ],
        [
            'ID' => '138',
            'PRODUCTS_ID' => '27',
            'PATH' => 'case8v4.webp',
        ],
        [
            'ID' => '139',
            'PRODUCTS_ID' => '27',
            'PATH' => 'case8v5.webp',
        ],
        [
            'ID' => '140',
            'PRODUCTS_ID' => '27',
            'PATH' => 'case8v6.webp',
        ],
        [
            'ID' => '141',
            'PRODUCTS_ID' => '27',
            'PATH' => 'case8v7.webp',
        ],
        [
            'ID' => '142',
            'PRODUCTS_ID' => '27',
            'PATH' => 'case8v8.webp',
        ],
        [
            'ID' => '143',
            'PRODUCTS_ID' => '27',
            'PATH' => 'case8v9.webp',
        ],
        [
            'ID' => '144',
            'PRODUCTS_ID' => '28',
            'PATH' => 'case9v1.webp',
        ],
        [
            'ID' => '145',
            'PRODUCTS_ID' => '28',
            'PATH' => 'case9v2.webp',
        ],
        [
            'ID' => '146',
            'PRODUCTS_ID' => '28',
            'PATH' => 'case9v3.webp',
        ],
        [
            'ID' => '147',
            'PRODUCTS_ID' => '28',
            'PATH' => 'case9v4.webp',
        ],
        [
            'ID' => '148',
            'PRODUCTS_ID' => '28',
            'PATH' => 'case9v5.webp',
        ],
        [
            'ID' => '149',
            'PRODUCTS_ID' => '28',
            'PATH' => 'case9v6.webp',
        ],
        [
            'ID' => '150',
            'PRODUCTS_ID' => '28',
            'PATH' => 'case9v7.webp',
        ],
        [
            'ID' => '151',
            'PRODUCTS_ID' => '28',
            'PATH' => 'case9v8.webp',
        ],
        [
            'ID' => '152',
            'PRODUCTS_ID' => '28',
            'PATH' => 'case9v9.webp',
        ],
        [
            'ID' => '153',
            'PRODUCTS_ID' => '28',
            'PATH' => 'case9v10.webp',
        ],
        [
            'ID' => '154',
            'PRODUCTS_ID' => '29',
            'PATH' => 'aio1v1.webp',
        ],
        [
            'ID' => '155',
            'PRODUCTS_ID' => '29',
            'PATH' => 'aio1v2.webp',
        ],
        [
            'ID' => '156',
            'PRODUCTS_ID' => '29',
            'PATH' => 'aio1v3.webp',
        ],
        [
            'ID' => '157',
            'PRODUCTS_ID' => '29',
            'PATH' => 'aio1v4.webp',
        ],
        [
            'ID' => '158',
            'PRODUCTS_ID' => '29',
            'PATH' => 'aio1v5.webp',
        ],
        [
            'ID' => '159',
            'PRODUCTS_ID' => '29',
            'PATH' => 'aio1v6.webp',
        ],
        [
            'ID' => '160',
            'PRODUCTS_ID' => '29',
            'PATH' => 'aio1v7.webp',
        ],
        [
            'ID' => '161',
            'PRODUCTS_ID' => '29',
            'PATH' => 'aio1v8.webp',
        ],
        [
            'ID' => '162',
            'PRODUCTS_ID' => '30',
            'PATH' => 'aio2v1.webp',
        ],
        [
            'ID' => '163',
            'PRODUCTS_ID' => '30',
            'PATH' => 'aio2v2.webp',
        ],
        [
            'ID' => '164',
            'PRODUCTS_ID' => '30',
            'PATH' => 'aio2v3.webp',
        ],
        [
            'ID' => '165',
            'PRODUCTS_ID' => '30',
            'PATH' => 'aio2v4.webp',
        ],
        [
            'ID' => '166',
            'PRODUCTS_ID' => '30',
            'PATH' => 'aio2v5.webp',
        ],
        [
            'ID' => '167',
            'PRODUCTS_ID' => '30',
            'PATH' => 'aio2v6.webp',
        ],
        [
            'ID' => '168',
            'PRODUCTS_ID' => '31',
            'PATH' => 'aio3v1.webp',
        ],
        [
            'ID' => '169',
            'PRODUCTS_ID' => '31',
            'PATH' => 'aio3v2.webp',
        ],
        [
            'ID' => '170',
            'PRODUCTS_ID' => '31',
            'PATH' => 'aio3v3.webp',
        ],
        [
            'ID' => '171',
            'PRODUCTS_ID' => '31',
            'PATH' => 'aio3v4.webp',
        ],
        [
            'ID' => '172',
            'PRODUCTS_ID' => '31',
            'PATH' => 'aio3v5.webp',
        ],
        [
            'ID' => '173',
            'PRODUCTS_ID' => '31',
            'PATH' => 'aio3v6.webp',
        ],
        [
            'ID' => '174',
            'PRODUCTS_ID' => '32',
            'PATH' => 'aio4v1.webp',
        ],
        [
            'ID' => '175',
            'PRODUCTS_ID' => '32',
            'PATH' => 'aio4v2.webp',
        ],
        [
            'ID' => '176',
            'PRODUCTS_ID' => '32',
            'PATH' => 'aio4v3.webp',
        ],
        [
            'ID' => '177',
            'PRODUCTS_ID' => '32',
            'PATH' => 'aio4v4.webp',
        ],
        [
            'ID' => '178',
            'PRODUCTS_ID' => '32',
            'PATH' => 'aio4v5.webp',
        ],
        [
            'ID' => '179',
            'PRODUCTS_ID' => '32',
            'PATH' => 'aio4v6.webp',
        ],
        [
            'ID' => '180',
            'PRODUCTS_ID' => '32',
            'PATH' => 'aio4v7.webp',
        ],
        [
            'ID' => '181',
            'PRODUCTS_ID' => '32',
            'PATH' => 'aio4v8.webp',
        ],
        [
            'ID' => '182',
            'PRODUCTS_ID' => '33',
            'PATH' => 'aio5v1.webp',
        ],
        [
            'ID' => '183',
            'PRODUCTS_ID' => '33',
            'PATH' => 'aio5v2.webp',
        ],
        [
            'ID' => '184',
            'PRODUCTS_ID' => '33',
            'PATH' => 'aio5v3.webp',
        ],
        [
            'ID' => '185',
            'PRODUCTS_ID' => '33',
            'PATH' => 'aio5v4.webp',
        ],
        [
            'ID' => '186',
            'PRODUCTS_ID' => '33',
            'PATH' => 'aio5v5.webp',
        ],
        [
            'ID' => '187',
            'PRODUCTS_ID' => '33',
            'PATH' => 'aio5v6.webp',
        ],
        [
            'ID' => '188',
            'PRODUCTS_ID' => '33',
            'PATH' => 'aio5v7.webp',
        ],
        [
            'ID' => '189',
            'PRODUCTS_ID' => '33',
            'PATH' => 'aio5v8.webp',
        ],
        [
            'ID' => '190',
            'PRODUCTS_ID' => '34',
            'PATH' => 'air1v1.webp',
        ],
        [
            'ID' => '191',
            'PRODUCTS_ID' => '34',
            'PATH' => 'air1v2.webp',
        ],
        [
            'ID' => '192',
            'PRODUCTS_ID' => '34',
            'PATH' => 'air1v3.webp',
        ],
        [
            'ID' => '193',
            'PRODUCTS_ID' => '34',
            'PATH' => 'air1v4.webp',
        ],
        [
            'ID' => '194',
            'PRODUCTS_ID' => '34',
            'PATH' => 'air1v5.webp',
        ],
        [
            'ID' => '195',
            'PRODUCTS_ID' => '34',
            'PATH' => 'air1v6.webp',
        ],
        [
            'ID' => '196',
            'PRODUCTS_ID' => '35',
            'PATH' => 'air2v1.webp',
        ],
        [
            'ID' => '197',
            'PRODUCTS_ID' => '35',
            'PATH' => 'air2v2.webp',
        ],
        [
            'ID' => '198',
            'PRODUCTS_ID' => '35',
            'PATH' => 'air2v3.webp',
        ],
        [
            'ID' => '199',
            'PRODUCTS_ID' => '35',
            'PATH' => 'air2v4.webp',
        ],
        [
            'ID' => '200',
            'PRODUCTS_ID' => '35',
            'PATH' => 'air2v5.webp',
        ],
        [
            'ID' => '201',
            'PRODUCTS_ID' => '35',
            'PATH' => 'air2v6.webp',
        ],
        [
            'ID' => '202',
            'PRODUCTS_ID' => '35',
            'PATH' => 'air2v7.webp',
        ],
        [
            'ID' => '203',
            'PRODUCTS_ID' => '35',
            'PATH' => 'air2v8.webp',
        ],
        [
            'ID' => '204',
            'PRODUCTS_ID' => '35',
            'PATH' => 'air2v9.webp',
        ],
        [
            'ID' => '205',
            'PRODUCTS_ID' => '36',
            'PATH' => 'air3v1.webp',
        ],
        [
            'ID' => '206',
            'PRODUCTS_ID' => '36',
            'PATH' => 'air3v2.webp',
        ],
        [
            'ID' => '207',
            'PRODUCTS_ID' => '36',
            'PATH' => 'air3v3.webp',
        ],
        [
            'ID' => '208',
            'PRODUCTS_ID' => '36',
            'PATH' => 'air3v4.webp',
        ],
        [
            'ID' => '209',
            'PRODUCTS_ID' => '36',
            'PATH' => 'air3v5.webp',
        ],
        [
            'ID' => '210',
            'PRODUCTS_ID' => '36',
            'PATH' => 'air3v6.webp',
        ],
        [
            'ID' => '211',
            'PRODUCTS_ID' => '37',
            'PATH' => 'air4v1.webp',
        ],
        [
            'ID' => '212',
            'PRODUCTS_ID' => '37',
            'PATH' => 'air4v2.webp',
        ],
        [
            'ID' => '213',
            'PRODUCTS_ID' => '37',
            'PATH' => 'air4v3.webp',
        ],
        [
            'ID' => '214',
            'PRODUCTS_ID' => '37',
            'PATH' => 'air4v4.webp',
        ],
        [
            'ID' => '215',
            'PRODUCTS_ID' => '38',
            'PATH' => 'air5v1.webp',
        ],
        [
            'ID' => '216',
            'PRODUCTS_ID' => '38',
            'PATH' => 'air5v2.webp',
        ],
        [
            'ID' => '217',
            'PRODUCTS_ID' => '38',
            'PATH' => 'air5v3.webp',
        ],
        [
            'ID' => '218',
            'PRODUCTS_ID' => '38',
            'PATH' => 'air5v4.webp',
        ],
        [
            'ID' => '219',
            'PRODUCTS_ID' => '38',
            'PATH' => 'air5v5.webp',
        ],
        [
            'ID' => '220',
            'PRODUCTS_ID' => '38',
            'PATH' => 'air5v6.webp',
        ],
        [
            'ID' => '221',
            'PRODUCTS_ID' => '38',
            'PATH' => 'air5v7.webp',
        ],
        [
            'ID' => '222',
            'PRODUCTS_ID' => '38',
            'PATH' => 'air5v8.webp',
        ],
        [
            'ID' => '223',
            'PRODUCTS_ID' => '38',
            'PATH' => 'air5v9.webp',
        ],
        [
            'ID' => '224',
            'PRODUCTS_ID' => '38',
            'PATH' => 'air5v10.webp',
        ],
        [
            'ID' => '225',
            'PRODUCTS_ID' => '39',
            'PATH' => 'm2_2v1.webp',
        ],
        [
            'ID' => '226',
            'PRODUCTS_ID' => '39',
            'PATH' => 'm2_2v2.webp',
        ],
        [
            'ID' => '227',
            'PRODUCTS_ID' => '39',
            'PATH' => 'm2_2v3.webp',
        ],
        [
            'ID' => '228',
            'PRODUCTS_ID' => '39',
            'PATH' => 'm2_2v4.webp',
        ],
        [
            'ID' => '229',
            'PRODUCTS_ID' => '39',
            'PATH' => 'm2_2v5.webp',
        ],
        [
            'ID' => '230',
            'PRODUCTS_ID' => '39',
            'PATH' => 'm2_2v6.webp',
        ],
        [
            'ID' => '231',
            'PRODUCTS_ID' => '40',
            'PATH' => 'm2_3v1.webp',
        ],
        [
            'ID' => '232',
            'PRODUCTS_ID' => '40',
            'PATH' => 'm2_3v2.webp',
        ],
        [
            'ID' => '233',
            'PRODUCTS_ID' => '40',
            'PATH' => 'm2_3v3.webp',
        ],
        [
            'ID' => '234',
            'PRODUCTS_ID' => '40',
            'PATH' => 'm2_3v4.webp',
        ],
        [
            'ID' => '235',
            'PRODUCTS_ID' => '40',
            'PATH' => 'm2_3v5.webp',
        ],
        [
            'ID' => '236',
            'PRODUCTS_ID' => '40',
            'PATH' => 'm2_3v6.webp',
        ],
        [
            'ID' => '237',
            'PRODUCTS_ID' => '41',
            'PATH' => 'm2_4v1.webp',
        ],
        [
            'ID' => '238',
            'PRODUCTS_ID' => '41',
            'PATH' => 'm2_4v2.webp',
        ],
        [
            'ID' => '239',
            'PRODUCTS_ID' => '41',
            'PATH' => 'm2_4v3.webp',
        ],
        [
            'ID' => '240',
            'PRODUCTS_ID' => '41',
            'PATH' => 'm2_4v4.webp',
        ],
        [
            'ID' => '241',
            'PRODUCTS_ID' => '41',
            'PATH' => 'm2_4v5.webp',
        ],
        [
            'ID' => '242',
            'PRODUCTS_ID' => '41',
            'PATH' => 'm2_4v6.webp',
        ],
        [
            'ID' => '243',
            'PRODUCTS_ID' => '41',
            'PATH' => 'm2_4v7.webp',
        ],
        [
            'ID' => '244',
            'PRODUCTS_ID' => '42',
            'PATH' => 'm2_5v1.webp',
        ],
        [
            'ID' => '245',
            'PRODUCTS_ID' => '42',
            'PATH' => 'm2_5v2.webp',
        ],
        [
            'ID' => '246',
            'PRODUCTS_ID' => '42',
            'PATH' => 'm2_5v3.webp',
        ],
        [
            'ID' => '247',
            'PRODUCTS_ID' => '42',
            'PATH' => 'm2_5v4.webp',
        ],
        [
            'ID' => '248',
            'PRODUCTS_ID' => '42',
            'PATH' => 'm2_5v5.webp',
        ],
        [
            'ID' => '249',
            'PRODUCTS_ID' => '43',
            'PATH' => 'm2_6v1.webp',
        ],
        [
            'ID' => '250',
            'PRODUCTS_ID' => '43',
            'PATH' => 'm2_6v2.webp',
        ],
        [
            'ID' => '251',
            'PRODUCTS_ID' => '43',
            'PATH' => 'm2_6v3.webp',
        ],
        [
            'ID' => '252',
            'PRODUCTS_ID' => '43',
            'PATH' => 'm2_6v4.webp',
        ],
        [
            'ID' => '253',
            'PRODUCTS_ID' => '43',
            'PATH' => 'm2_6v5.webp',
        ],
        [
            'ID' => '254',
            'PRODUCTS_ID' => '44',
            'PATH' => 'm2v1.webp',
        ],
        [
            'ID' => '255',
            'PRODUCTS_ID' => '45',
            'PATH' => 'm2_8v1.webp',
        ],
        [
            'ID' => '256',
            'PRODUCTS_ID' => '45',
            'PATH' => 'm2_8v2.webp',
        ],
        [
            'ID' => '257',
            'PRODUCTS_ID' => '45',
            'PATH' => 'm2_8v3.webp',
        ],
        [
            'ID' => '258',
            'PRODUCTS_ID' => '46',
            'PATH' => 'm2_9v1.webp',
        ],
        [
            'ID' => '259',
            'PRODUCTS_ID' => '46',
            'PATH' => 'm2_9v2.webp',
        ],
        [
            'ID' => '260',
            'PRODUCTS_ID' => '47',
            'PATH' => 'm2_7v1.webp',
        ],
        [
            'ID' => '261',
            'PRODUCTS_ID' => '47',
            'PATH' => 'm2_7v2.webp',
        ],
        [
            'ID' => '262',
            'PRODUCTS_ID' => '47',
            'PATH' => 'm2_7v3.webp',
        ],
        [
            'ID' => '263',
            'PRODUCTS_ID' => '48',
            'PATH' => 'fan1v1.webp',
        ],
        [
            'ID' => '264',
            'PRODUCTS_ID' => '48',
            'PATH' => 'fan1v2.webp',
        ],
        [
            'ID' => '265',
            'PRODUCTS_ID' => '48',
            'PATH' => 'fan1v3.webp',
        ],
        [
            'ID' => '266',
            'PRODUCTS_ID' => '48',
            'PATH' => 'fan1v4.webp',
        ],
        [
            'ID' => '267',
            'PRODUCTS_ID' => '48',
            'PATH' => 'fan1v5.webp',
        ],
        [
            'ID' => '268',
            'PRODUCTS_ID' => '48',
            'PATH' => 'fan1v6.webp',
        ],
        [
            'ID' => '269',
            'PRODUCTS_ID' => '49',
            'PATH' => 'fan2v1.webp',
        ],
        [
            'ID' => '270',
            'PRODUCTS_ID' => '49',
            'PATH' => 'fan2v2.webp',
        ],
        [
            'ID' => '271',
            'PRODUCTS_ID' => '49',
            'PATH' => 'fan2v3.webp',
        ],
        [
            'ID' => '272',
            'PRODUCTS_ID' => '49',
            'PATH' => 'fan2v4.webp',
        ],
        [
            'ID' => '273',
            'PRODUCTS_ID' => '49',
            'PATH' => 'fan2v5.webp',
        ],
        [
            'ID' => '274',
            'PRODUCTS_ID' => '49',
            'PATH' => 'fan2v6.webp',
        ],
        [
            'ID' => '275',
            'PRODUCTS_ID' => '50',
            'PATH' => 'fan3v1.webp',
        ],
        [
            'ID' => '276',
            'PRODUCTS_ID' => '50',
            'PATH' => 'fan3v2.webp',
        ],
        [
            'ID' => '277',
            'PRODUCTS_ID' => '50',
            'PATH' => 'fan3v3.webp',
        ],
        [
            'ID' => '278',
            'PRODUCTS_ID' => '50',
            'PATH' => 'fan3v4.webp',
        ],
        [
            'ID' => '279',
            'PRODUCTS_ID' => '51',
            'PATH' => 'fan4v1.webp',
        ],
        [
            'ID' => '280',
            'PRODUCTS_ID' => '51',
            'PATH' => 'fan4v2.webp',
        ],
        [
            'ID' => '281',
            'PRODUCTS_ID' => '51',
            'PATH' => 'fan4v3.webp',
        ],
        [
            'ID' => '282',
            'PRODUCTS_ID' => '51',
            'PATH' => 'fan4v4.webp',
        ],
        [
            'ID' => '283',
            'PRODUCTS_ID' => '52',
            'PATH' => 'fan5v1.webp',
        ],
        [
            'ID' => '284',
            'PRODUCTS_ID' => '52',
            'PATH' => 'fan5v2.webp',
        ],
        [
            'ID' => '285',
            'PRODUCTS_ID' => '52',
            'PATH' => 'fan5v3.webp',
        ],
        [
            'ID' => '286',
            'PRODUCTS_ID' => '52',
            'PATH' => 'fan5v4.webp',
        ],
        [
            'ID' => '287',
            'PRODUCTS_ID' => '53',
            'PATH' => 'fan6v1.webp',
        ],
        [
            'ID' => '288',
            'PRODUCTS_ID' => '53',
            'PATH' => 'fan6v2.webp',
        ],
        [
            'ID' => '289',
            'PRODUCTS_ID' => '53',
            'PATH' => 'fan6v3.webp',
        ],
        [
            'ID' => '290',
            'PRODUCTS_ID' => '53',
            'PATH' => 'fan6v4.webp',
        ],
        [
            'ID' => '291',
            'PRODUCTS_ID' => '53',
            'PATH' => 'fan6v5.webp',
        ],
        [
            'ID' => '292',
            'PRODUCTS_ID' => '54',
            'PATH' => 'fan7v1.webp',
        ],
        [
            'ID' => '293',
            'PRODUCTS_ID' => '54',
            'PATH' => 'fan7v2.webp',
        ],
        [
            'ID' => '294',
            'PRODUCTS_ID' => '54',
            'PATH' => 'fan7v3.webp',
        ],
        [
            'ID' => '295',
            'PRODUCTS_ID' => '54',
            'PATH' => 'fan7v4.webp',
        ],
        [
            'ID' => '296',
            'PRODUCTS_ID' => '54',
            'PATH' => 'fan7v5.webp',
        ],
        [
            'ID' => '297',
            'PRODUCTS_ID' => '55',
            'PATH' => 'fan8v1.webp',
        ],
        [
            'ID' => '298',
            'PRODUCTS_ID' => '55',
            'PATH' => 'fan8v2.webp',
        ],
        [
            'ID' => '299',
            'PRODUCTS_ID' => '55',
            'PATH' => 'fan8v3.webp',
        ],
        [
            'ID' => '300',
            'PRODUCTS_ID' => '55',
            'PATH' => 'fan8v4.webp',
        ],
        [
            'ID' => '301',
            'PRODUCTS_ID' => '55',
            'PATH' => 'fan8v5.webp',
        ],
        [
            'ID' => '302',
            'PRODUCTS_ID' => '55',
            'PATH' => 'fan8v6.webp',
        ],
        [
            'ID' => '303',
            'PRODUCTS_ID' => '56',
            'PATH' => 'fan9v1.webp',
        ],
        [
            'ID' => '304',
            'PRODUCTS_ID' => '56',
            'PATH' => 'fan9v2.webp',
        ],
        [
            'ID' => '305',
            'PRODUCTS_ID' => '56',
            'PATH' => 'fan9v3.webp',
        ],
        [
            'ID' => '306',
            'PRODUCTS_ID' => '56',
            'PATH' => 'fan9v4.webp',
        ],
        [
            'ID' => '307',
            'PRODUCTS_ID' => '56',
            'PATH' => 'fan9v5.webp',
        ],
        [
            'ID' => '308',
            'PRODUCTS_ID' => '56',
            'PATH' => 'fan9v6.jpg',
        ],
        [
            'ID' => '309',
            'PRODUCTS_ID' => '56',
            'PATH' => 'fan9v7.webp',
        ],
        [
            'ID' => '310',
            'PRODUCTS_ID' => '57',
            'PATH' => 'grap1v1.webp',
        ],
        [
            'ID' => '311',
            'PRODUCTS_ID' => '57',
            'PATH' => 'grap1v2.webp',
        ],
        [
            'ID' => '312',
            'PRODUCTS_ID' => '57',
            'PATH' => 'grap1v3.webp',
        ],
        [
            'ID' => '313',
            'PRODUCTS_ID' => '57',
            'PATH' => 'grap1v4.webp',
        ],
        [
            'ID' => '314',
            'PRODUCTS_ID' => '57',
            'PATH' => 'grap1v5.webp',
        ],
        [
            'ID' => '315',
            'PRODUCTS_ID' => '57',
            'PATH' => 'grap1v6.webp',
        ],
        [
            'ID' => '316',
            'PRODUCTS_ID' => '58',
            'PATH' => 'grap2v1.webp',
        ],
        [
            'ID' => '317',
            'PRODUCTS_ID' => '58',
            'PATH' => 'grap2v2.webp',
        ],
        [
            'ID' => '318',
            'PRODUCTS_ID' => '58',
            'PATH' => 'grap2v3.webp',
        ],
        [
            'ID' => '319',
            'PRODUCTS_ID' => '58',
            'PATH' => 'grap2v4.webp',
        ],
        [
            'ID' => '320',
            'PRODUCTS_ID' => '58',
            'PATH' => 'grap2v5.webp',
        ],
        [
            'ID' => '321',
            'PRODUCTS_ID' => '58',
            'PATH' => 'grap2v6.webp',
        ],
        [
            'ID' => '322',
            'PRODUCTS_ID' => '59',
            'PATH' => 'grap3v1.webp',
        ],
        [
            'ID' => '323',
            'PRODUCTS_ID' => '59',
            'PATH' => 'grap3v2.webp',
        ],
        [
            'ID' => '324',
            'PRODUCTS_ID' => '59',
            'PATH' => 'grap3v3.webp',
        ],
        [
            'ID' => '325',
            'PRODUCTS_ID' => '59',
            'PATH' => 'grap3v4.webp',
        ],
        [
            'ID' => '326',
            'PRODUCTS_ID' => '59',
            'PATH' => 'grap3v5.webp',
        ],
        [
            'ID' => '327',
            'PRODUCTS_ID' => '59',
            'PATH' => 'grap3v6.webp',
        ],
        [
            'ID' => '328',
            'PRODUCTS_ID' => '59',
            'PATH' => 'grap3v7.webp',
        ],
        [
            'ID' => '329',
            'PRODUCTS_ID' => '60',
            'PATH' => 'grap4v1.webp',
        ],
        [
            'ID' => '330',
            'PRODUCTS_ID' => '60',
            'PATH' => 'grap4v2.webp',
        ],
        [
            'ID' => '331',
            'PRODUCTS_ID' => '60',
            'PATH' => 'grap4v3.webp',
        ],
        [
            'ID' => '332',
            'PRODUCTS_ID' => '60',
            'PATH' => 'grap4v4.webp',
        ],
        [
            'ID' => '333',
            'PRODUCTS_ID' => '60',
            'PATH' => 'grap4v5.webp',
        ],
        [
            'ID' => '334',
            'PRODUCTS_ID' => '60',
            'PATH' => 'grap4v6.webp',
        ],
        [
            'ID' => '335',
            'PRODUCTS_ID' => '61',
            'PATH' => 'grap5v1.webp',
        ],
        [
            'ID' => '336',
            'PRODUCTS_ID' => '61',
            'PATH' => 'grap5v2.webp',
        ],
        [
            'ID' => '337',
            'PRODUCTS_ID' => '61',
            'PATH' => 'grap5v3.webp',
        ],
        [
            'ID' => '338',
            'PRODUCTS_ID' => '61',
            'PATH' => 'grap5v4.webp',
        ],
        [
            'ID' => '339',
            'PRODUCTS_ID' => '61',
            'PATH' => 'grap5v5.webp',
        ],
        [
            'ID' => '340',
            'PRODUCTS_ID' => '61',
            'PATH' => 'grap5v6.webp',
        ],
        [
            'ID' => '341',
            'PRODUCTS_ID' => '62',
            'PATH' => 'grap6v1.webp',
        ],
        [
            'ID' => '342',
            'PRODUCTS_ID' => '62',
            'PATH' => 'grap6v2.webp',
        ],
        [
            'ID' => '343',
            'PRODUCTS_ID' => '62',
            'PATH' => 'grap6v3.webp',
        ],
        [
            'ID' => '344',
            'PRODUCTS_ID' => '62',
            'PATH' => 'grap6v4.webp',
        ],
        [
            'ID' => '345',
            'PRODUCTS_ID' => '62',
            'PATH' => 'grap6v5.webp',
        ],
        [
            'ID' => '346',
            'PRODUCTS_ID' => '62',
            'PATH' => 'grap6v6.webp',
        ],
        [
            'ID' => '347',
            'PRODUCTS_ID' => '63',
            'PATH' => 'grap7v1.webp',
        ],
        [
            'ID' => '348',
            'PRODUCTS_ID' => '63',
            'PATH' => 'grap7v2.webp',
        ],
        [
            'ID' => '349',
            'PRODUCTS_ID' => '63',
            'PATH' => 'grap7v3.webp',
        ],
        [
            'ID' => '350',
            'PRODUCTS_ID' => '63',
            'PATH' => 'grap7v4.webp',
        ],
        [
            'ID' => '351',
            'PRODUCTS_ID' => '64',
            'PATH' => 'grap8v1.webp',
        ],
        [
            'ID' => '352',
            'PRODUCTS_ID' => '64',
            'PATH' => 'grap8v2.webp',
        ],
        [
            'ID' => '353',
            'PRODUCTS_ID' => '64',
            'PATH' => 'grap8v3.webp',
        ],
        [
            'ID' => '354',
            'PRODUCTS_ID' => '64',
            'PATH' => 'grap8v4.webp',
        ],
        [
            'ID' => '355',
            'PRODUCTS_ID' => '64',
            'PATH' => 'grap8v5.webp',
        ],
        [
            'ID' => '356',
            'PRODUCTS_ID' => '64',
            'PATH' => 'grap8v6.webp',
        ],
        [
            'ID' => '357',
            'PRODUCTS_ID' => '65',
            'PATH' => 'grap9v1.webp',
        ],
        [
            'ID' => '358',
            'PRODUCTS_ID' => '65',
            'PATH' => 'grap9v2.webp',
        ],
        [
            'ID' => '359',
            'PRODUCTS_ID' => '65',
            'PATH' => 'grap9v3.webp',
        ],
        [
            'ID' => '360',
            'PRODUCTS_ID' => '65',
            'PATH' => 'grap9v4.webp',
        ],
        [
            'ID' => '361',
            'PRODUCTS_ID' => '65',
            'PATH' => 'grap9v5.webp',
        ],
        [
            'ID' => '362',
            'PRODUCTS_ID' => '65',
            'PATH' => 'grap9v6.webp',
        ],
        [
            'ID' => '363',
            'PRODUCTS_ID' => '66',
            'PATH' => 'grap10v1.webp',
        ],
        [
            'ID' => '364',
            'PRODUCTS_ID' => '66',
            'PATH' => 'grap10v2.webp',
        ],
        [
            'ID' => '365',
            'PRODUCTS_ID' => '66',
            'PATH' => 'grap10v3.webp',
        ],
        [
            'ID' => '366',
            'PRODUCTS_ID' => '66',
            'PATH' => 'grap10v4.webp',
        ],
        [
            'ID' => '367',
            'PRODUCTS_ID' => '66',
            'PATH' => 'grap10v5.webp',
        ],
        [
            'ID' => '368',
            'PRODUCTS_ID' => '66',
            'PATH' => 'grap10v6.webp',
        ],
        [
            'ID' => '369',
            'PRODUCTS_ID' => '67',
            'PATH' => 'ram1v1.webp',
        ],
        [
            'ID' => '370',
            'PRODUCTS_ID' => '67',
            'PATH' => 'ram1v2.webp',
        ],
        [
            'ID' => '371',
            'PRODUCTS_ID' => '68',
            'PATH' => 'ram2v1.webp',
        ],
        [
            'ID' => '372',
            'PRODUCTS_ID' => '68',
            'PATH' => 'ram2v2.webp',
        ],
        [
            'ID' => '373',
            'PRODUCTS_ID' => '68',
            'PATH' => 'ram2v3.webp',
        ],
        [
            'ID' => '374',
            'PRODUCTS_ID' => '69',
            'PATH' => 'ram3v1.webp',
        ],
        [
            'ID' => '375',
            'PRODUCTS_ID' => '69',
            'PATH' => 'ram3v2.webp',
        ],
        [
            'ID' => '376',
            'PRODUCTS_ID' => '69',
            'PATH' => 'ram3v3.webp',
        ],
        [
            'ID' => '377',
            'PRODUCTS_ID' => '70',
            'PATH' => 'ram4v1.webp',
        ],
        [
            'ID' => '378',
            'PRODUCTS_ID' => '70',
            'PATH' => 'ram4v2.webp',
        ],
        [
            'ID' => '379',
            'PRODUCTS_ID' => '71',
            'PATH' => 'ram5v1.webp',
        ],
        [
            'ID' => '380',
            'PRODUCTS_ID' => '71',
            'PATH' => 'ram5v2.webp',
        ],
        [
            'ID' => '381',
            'PRODUCTS_ID' => '71',
            'PATH' => 'ram5v3.webp',
        ],
        [
            'ID' => '382',
            'PRODUCTS_ID' => '72',
            'PATH' => 'ram6v1.webp',
        ],
        [
            'ID' => '383',
            'PRODUCTS_ID' => '72',
            'PATH' => 'ram6v2.webp',
        ],
        [
            'ID' => '384',
            'PRODUCTS_ID' => '72',
            'PATH' => 'ram6v3.webp',
        ],
        [
            'ID' => '385',
            'PRODUCTS_ID' => '72',
            'PATH' => 'ram6v4.webp',
        ],
        [
            'ID' => '386',
            'PRODUCTS_ID' => '73',
            'PATH' => 'ram7v1.webp',
        ],
        [
            'ID' => '387',
            'PRODUCTS_ID' => '73',
            'PATH' => 'ram7v2.webp',
        ],
        [
            'ID' => '388',
            'PRODUCTS_ID' => '73',
            'PATH' => 'ram7v3.webp',
        ],
        [
            'ID' => '389',
            'PRODUCTS_ID' => '74',
            'PATH' => 'ram8v1.webp',
        ],
        [
            'ID' => '390',
            'PRODUCTS_ID' => '74',
            'PATH' => 'ram8v2.webp',
        ],
        [
            'ID' => '391',
            'PRODUCTS_ID' => '74',
            'PATH' => 'ram8v3.webp',
        ],
        [
            'ID' => '392',
            'PRODUCTS_ID' => '74',
            'PATH' => 'ram8v4.webp',
        ],
        [
            'ID' => '393',
            'PRODUCTS_ID' => '74',
            'PATH' => 'ram8v5.webp',
        ],
        [
            'ID' => '394',
            'PRODUCTS_ID' => '74',
            'PATH' => 'ram8v6.webp',
        ],
        [
            'ID' => '395',
            'PRODUCTS_ID' => '75',
            'PATH' => 'ram9v1.webp',
        ],
        [
            'ID' => '396',
            'PRODUCTS_ID' => '75',
            'PATH' => 'ram9v2.webp',
        ],
        [
            'ID' => '397',
            'PRODUCTS_ID' => '75',
            'PATH' => 'ram9v3.webp',
        ],
        [
            'ID' => '398',
            'PRODUCTS_ID' => '75',
            'PATH' => 'ram9v4.webp',
        ],
        [
            'ID' => '399',
            'PRODUCTS_ID' => '76',
            'PATH' => 'ram10v1.webp',
        ],
        [
            'ID' => '400',
            'PRODUCTS_ID' => '76',
            'PATH' => 'ram10v2.webp',
        ],
        [
            'ID' => '401',
            'PRODUCTS_ID' => '76',
            'PATH' => 'ram10v3.webp',
        ],
        [
            'ID' => '402',
            'PRODUCTS_ID' => '77',
            'PATH' => 'mb1v1.webp',
        ],
        [
            'ID' => '403',
            'PRODUCTS_ID' => '77',
            'PATH' => 'mb1v2.webp',
        ],
        [
            'ID' => '404',
            'PRODUCTS_ID' => '77',
            'PATH' => 'mb1v3.jpg',
        ],
        [
            'ID' => '405',
            'PRODUCTS_ID' => '77',
            'PATH' => 'mb1v4.webp',
        ],
        [
            'ID' => '406',
            'PRODUCTS_ID' => '77',
            'PATH' => 'mb1v5.jpg',
        ],
        [
            'ID' => '407',
            'PRODUCTS_ID' => '77',
            'PATH' => 'mb1v6.webp',
        ],
        [
            'ID' => '408',
            'PRODUCTS_ID' => '78',
            'PATH' => 'mb2v1.webp',
        ],
        [
            'ID' => '409',
            'PRODUCTS_ID' => '78',
            'PATH' => 'mb2v2.webp',
        ],
        [
            'ID' => '410',
            'PRODUCTS_ID' => '78',
            'PATH' => 'mb2v3.webp',
        ],
        [
            'ID' => '411',
            'PRODUCTS_ID' => '78',
            'PATH' => 'mb2v4.webp',
        ],
        [
            'ID' => '412',
            'PRODUCTS_ID' => '78',
            'PATH' => 'mb2v5.jpg',
        ],
        [
            'ID' => '413',
            'PRODUCTS_ID' => '78',
            'PATH' => 'mb2v6.jpg',
        ],
        [
            'ID' => '414',
            'PRODUCTS_ID' => '78',
            'PATH' => 'mb2v7.webp',
        ],
        [
            'ID' => '415',
            'PRODUCTS_ID' => '79',
            'PATH' => 'mb3v1.webp',
        ],
        [
            'ID' => '416',
            'PRODUCTS_ID' => '79',
            'PATH' => 'mb3v2.webp',
        ],
        [
            'ID' => '417',
            'PRODUCTS_ID' => '79',
            'PATH' => 'mb3v3.webp',
        ],
        [
            'ID' => '418',
            'PRODUCTS_ID' => '79',
            'PATH' => 'mb3v4.jpg',
        ],
        [
            'ID' => '419',
            'PRODUCTS_ID' => '79',
            'PATH' => 'mb3v5.webp',
        ],
        [
            'ID' => '420',
            'PRODUCTS_ID' => '80',
            'PATH' => 'mb4v1.jpg',
        ],
        [
            'ID' => '421',
            'PRODUCTS_ID' => '80',
            'PATH' => 'mb4v2.webp',
        ],
        [
            'ID' => '422',
            'PRODUCTS_ID' => '80',
            'PATH' => 'mb4v3.webp',
        ],
        [
            'ID' => '423',
            'PRODUCTS_ID' => '80',
            'PATH' => 'mb4v4.webp',
        ],
        [
            'ID' => '424',
            'PRODUCTS_ID' => '80',
            'PATH' => 'mb4v5.webp',
        ],
        [
            'ID' => '425',
            'PRODUCTS_ID' => '81',
            'PATH' => 'mb5v1.webp',
        ],
        [
            'ID' => '426',
            'PRODUCTS_ID' => '81',
            'PATH' => 'mb5v2.webp',
        ],
        [
            'ID' => '427',
            'PRODUCTS_ID' => '81',
            'PATH' => 'mb5v3.webp',
        ],
        [
            'ID' => '428',
            'PRODUCTS_ID' => '81',
            'PATH' => 'mb5v4.jpg',
        ],
        [
            'ID' => '429',
            'PRODUCTS_ID' => '81',
            'PATH' => 'mb5v5.webp',
        ],
        [
            'ID' => '430',
            'PRODUCTS_ID' => '81',
            'PATH' => 'mb5v6.webp',
        ],
        [
            'ID' => '431',
            'PRODUCTS_ID' => '82',
            'PATH' => 'mb6v1.webp',
        ],
        [
            'ID' => '432',
            'PRODUCTS_ID' => '82',
            'PATH' => 'mb6v2.webp',
        ],
        [
            'ID' => '433',
            'PRODUCTS_ID' => '82',
            'PATH' => 'mb6v3.webp',
        ],
        [
            'ID' => '434',
            'PRODUCTS_ID' => '82',
            'PATH' => 'mb6v4.jpg',
        ],
        [
            'ID' => '435',
            'PRODUCTS_ID' => '82',
            'PATH' => 'mb6v5.jpg',
        ],
        [
            'ID' => '436',
            'PRODUCTS_ID' => '82',
            'PATH' => 'mb6v6.webp',
        ],
        [
            'ID' => '437',
            'PRODUCTS_ID' => '82',
            'PATH' => 'mb6v7.webp',
        ],
        [
            'ID' => '438',
            'PRODUCTS_ID' => '83',
            'PATH' => 'mb7v1.webp',
        ],
        [
            'ID' => '439',
            'PRODUCTS_ID' => '83',
            'PATH' => 'mb7v2.webp',
        ],
        [
            'ID' => '440',
            'PRODUCTS_ID' => '83',
            'PATH' => 'mb7v3.webp',
        ],
        [
            'ID' => '441',
            'PRODUCTS_ID' => '83',
            'PATH' => 'mb7v4.webp',
        ],
        [
            'ID' => '442',
            'PRODUCTS_ID' => '83',
            'PATH' => 'mb7v5.webp',
        ],
        [
            'ID' => '443',
            'PRODUCTS_ID' => '84',
            'PATH' => 'mb8v1.webp',
        ],
        [
            'ID' => '444',
            'PRODUCTS_ID' => '84',
            'PATH' => 'mb8v2.webp',
        ],
        [
            'ID' => '445',
            'PRODUCTS_ID' => '84',
            'PATH' => 'mb8v3.webp',
        ],
        [
            'ID' => '446',
            'PRODUCTS_ID' => '84',
            'PATH' => 'mb8v4.webp',
        ],
        [
            'ID' => '447',
            'PRODUCTS_ID' => '84',
            'PATH' => 'mb8v5.webp',
        ],
        [
            'ID' => '448',
            'PRODUCTS_ID' => '85',
            'PATH' => 'mb9v1.webp',
        ],
        [
            'ID' => '449',
            'PRODUCTS_ID' => '85',
            'PATH' => 'mb9v2.webp',
        ],
        [
            'ID' => '450',
            'PRODUCTS_ID' => '85',
            'PATH' => 'mb9v3.webp',
        ],
        [
            'ID' => '451',
            'PRODUCTS_ID' => '85',
            'PATH' => 'mb9v4.webp',
        ],
        [
            'ID' => '452',
            'PRODUCTS_ID' => '85',
            'PATH' => 'mb9v5.webp',
        ],
        [
            'ID' => '453',
            'PRODUCTS_ID' => '86',
            'PATH' => 'mb10v1.webp',
        ],
        [
            'ID' => '454',
            'PRODUCTS_ID' => '86',
            'PATH' => 'mb10v2.webp',
        ],
        [
            'ID' => '455',
            'PRODUCTS_ID' => '86',
            'PATH' => 'mb10v3.webp',
        ],
        [
            'ID' => '456',
            'PRODUCTS_ID' => '86',
            'PATH' => 'mb10v4.webp',
        ],
        [
            'ID' => '457',
            'PRODUCTS_ID' => '86',
            'PATH' => 'mb10v5.webp',
        ],
        [
            'ID' => '458',
            'PRODUCTS_ID' => '87',
            'PATH' => 'power1v1.webp',
        ],
        [
            'ID' => '459',
            'PRODUCTS_ID' => '87',
            'PATH' => 'power1v2.webp',
        ],
        [
            'ID' => '460',
            'PRODUCTS_ID' => '87',
            'PATH' => 'power1v3.webp',
        ],
        [
            'ID' => '461',
            'PRODUCTS_ID' => '87',
            'PATH' => 'power1v4.webp',
        ],
        [
            'ID' => '462',
            'PRODUCTS_ID' => '87',
            'PATH' => 'power1v5.webp',
        ],
        [
            'ID' => '463',
            'PRODUCTS_ID' => '88',
            'PATH' => 'power2v1.webp',
        ],
        [
            'ID' => '464',
            'PRODUCTS_ID' => '88',
            'PATH' => 'power2v2.webp',
        ],
        [
            'ID' => '465',
            'PRODUCTS_ID' => '88',
            'PATH' => 'power2v3.webp',
        ],
        [
            'ID' => '466',
            'PRODUCTS_ID' => '88',
            'PATH' => 'power2v4.webp',
        ],
        [
            'ID' => '467',
            'PRODUCTS_ID' => '88',
            'PATH' => 'power2v5.webp',
        ],
        [
            'ID' => '468',
            'PRODUCTS_ID' => '88',
            'PATH' => 'power2v6.webp',
        ],
        [
            'ID' => '469',
            'PRODUCTS_ID' => '88',
            'PATH' => 'power2v7.webp',
        ],
        [
            'ID' => '470',
            'PRODUCTS_ID' => '88',
            'PATH' => 'power2v8.webp',
        ],
        [
            'ID' => '471',
            'PRODUCTS_ID' => '88',
            'PATH' => 'power2v9.webp',
        ],
        [
            'ID' => '472',
            'PRODUCTS_ID' => '88',
            'PATH' => 'power2v11.webp',
        ],
        [
            'ID' => '473',
            'PRODUCTS_ID' => '89',
            'PATH' => 'power3v1.webp',
        ],
        [
            'ID' => '474',
            'PRODUCTS_ID' => '89',
            'PATH' => 'power3v2.webp',
        ],
        [
            'ID' => '475',
            'PRODUCTS_ID' => '89',
            'PATH' => 'power3v3.webp',
        ],
        [
            'ID' => '476',
            'PRODUCTS_ID' => '89',
            'PATH' => 'power3v4.webp',
        ],
        [
            'ID' => '477',
            'PRODUCTS_ID' => '89',
            'PATH' => 'power3v5.webp',
        ],
        [
            'ID' => '478',
            'PRODUCTS_ID' => '89',
            'PATH' => 'power3v6.webp',
        ],
        [
            'ID' => '479',
            'PRODUCTS_ID' => '90',
            'PATH' => 'power4v1.webp',
        ],
        [
            'ID' => '480',
            'PRODUCTS_ID' => '90',
            'PATH' => 'power4v2.webp',
        ],
        [
            'ID' => '481',
            'PRODUCTS_ID' => '90',
            'PATH' => 'power4v3.webp',
        ],
        [
            'ID' => '482',
            'PRODUCTS_ID' => '90',
            'PATH' => 'power4v4.webp',
        ],
        [
            'ID' => '483',
            'PRODUCTS_ID' => '90',
            'PATH' => 'power4v5.webp',
        ],
        [
            'ID' => '484',
            'PRODUCTS_ID' => '90',
            'PATH' => 'power4v6.webp',
        ],
        [
            'ID' => '485',
            'PRODUCTS_ID' => '90',
            'PATH' => 'power4v7.webp',
        ],
        [
            'ID' => '486',
            'PRODUCTS_ID' => '91',
            'PATH' => 'power5v1.webp',
        ],
        [
            'ID' => '487',
            'PRODUCTS_ID' => '91',
            'PATH' => 'power5v2.webp',
        ],
        [
            'ID' => '488',
            'PRODUCTS_ID' => '91',
            'PATH' => 'power5v3.webp',
        ],
        [
            'ID' => '489',
            'PRODUCTS_ID' => '91',
            'PATH' => 'power5v4.webp',
        ],
        [
            'ID' => '490',
            'PRODUCTS_ID' => '91',
            'PATH' => 'power5v5.webp',
        ],
        [
            'ID' => '491',
            'PRODUCTS_ID' => '92',
            'PATH' => 'power6v1.webp',
        ],
        [
            'ID' => '492',
            'PRODUCTS_ID' => '92',
            'PATH' => 'power6v2.webp',
        ],
        [
            'ID' => '493',
            'PRODUCTS_ID' => '92',
            'PATH' => 'power6v3.webp',
        ],
        [
            'ID' => '494',
            'PRODUCTS_ID' => '92',
            'PATH' => 'power6v4.webp',
        ],
        [
            'ID' => '495',
            'PRODUCTS_ID' => '92',
            'PATH' => 'power6v5.webp',
        ],
        [
            'ID' => '496',
            'PRODUCTS_ID' => '92',
            'PATH' => 'power6v6.webp',
        ],
        [
            'ID' => '497',
            'PRODUCTS_ID' => '92',
            'PATH' => 'power6v7.webp',
        ],
        [
            'ID' => '498',
            'PRODUCTS_ID' => '92',
            'PATH' => 'power6v8.webp',
        ],
        [
            'ID' => '499',
            'PRODUCTS_ID' => '92',
            'PATH' => 'power6v9.webp',
        ],
        [
            'ID' => '500',
            'PRODUCTS_ID' => '92',
            'PATH' => 'power6v10.webp',
        ],
        [
            'ID' => '501',
            'PRODUCTS_ID' => '92',
            'PATH' => 'power6v11.webp',
        ],
        [
            'ID' => '502',
            'PRODUCTS_ID' => '93',
            'PATH' => 'power7v1.webp',
        ],
        [
            'ID' => '503',
            'PRODUCTS_ID' => '93',
            'PATH' => 'power7v2.webp',
        ],
        [
            'ID' => '504',
            'PRODUCTS_ID' => '93',
            'PATH' => 'power7v3.webp',
        ],
        [
            'ID' => '505',
            'PRODUCTS_ID' => '93',
            'PATH' => 'power7v4.webp',
        ],
        [
            'ID' => '506',
            'PRODUCTS_ID' => '93',
            'PATH' => 'power7v5.webp',
        ],
        [
            'ID' => '507',
            'PRODUCTS_ID' => '93',
            'PATH' => 'power7v6.webp',
        ],
        [
            'ID' => '508',
            'PRODUCTS_ID' => '94',
            'PATH' => 'power8v1.webp',
        ],
        [
            'ID' => '509',
            'PRODUCTS_ID' => '94',
            'PATH' => 'power8v2.webp',
        ],
        [
            'ID' => '510',
            'PRODUCTS_ID' => '94',
            'PATH' => 'power8v3.webp',
        ],
        [
            'ID' => '511',
            'PRODUCTS_ID' => '94',
            'PATH' => 'power8v4.webp',
        ],
        [
            'ID' => '512',
            'PRODUCTS_ID' => '94',
            'PATH' => 'power8v5.webp',
        ],
        [
            'ID' => '513',
            'PRODUCTS_ID' => '94',
            'PATH' => 'power8v6.webp',
        ],
        [
            'ID' => '514',
            'PRODUCTS_ID' => '94',
            'PATH' => 'power8v7.webp',
        ],
        [
            'ID' => '515',
            'PRODUCTS_ID' => '94',
            'PATH' => 'power8v8.webp',
        ],
        [
            'ID' => '516',
            'PRODUCTS_ID' => '94',
            'PATH' => 'power8v9.webp',
        ],
        [
            'ID' => '517',
            'PRODUCTS_ID' => '95',
            'PATH' => 'power9v1.webp',
        ],
        [
            'ID' => '518',
            'PRODUCTS_ID' => '95',
            'PATH' => 'power9v2.webp',
        ],
        [
            'ID' => '519',
            'PRODUCTS_ID' => '95',
            'PATH' => 'power9v3.webp',
        ],
        [
            'ID' => '520',
            'PRODUCTS_ID' => '95',
            'PATH' => 'power9v4.webp',
        ],
        [
            'ID' => '521',
            'PRODUCTS_ID' => '95',
            'PATH' => 'power9v5.webp',
        ],
        [
            'ID' => '522',
            'PRODUCTS_ID' => '95',
            'PATH' => 'power9v6.webp',
        ],
        [
            'ID' => '523',
            'PRODUCTS_ID' => '95',
            'PATH' => 'power9v7.webp',
        ],
        [
            'ID' => '524',
            'PRODUCTS_ID' => '95',
            'PATH' => 'power9v8.webp',
        ],
        [
            'ID' => '525',
            'PRODUCTS_ID' => '96',
            'PATH' => 'processor1.webp',
        ],
        [
            'ID' => '526',
            'PRODUCTS_ID' => '97',
            'PATH' => 'processor2.webp',
        ],
        [
            'ID' => '527',
            'PRODUCTS_ID' => '98',
            'PATH' => 'processor3.webp',
        ],
        [
            'ID' => '528',
            'PRODUCTS_ID' => '99',
            'PATH' => 'processor4.webp',
        ],
        [
            'ID' => '529',
            'PRODUCTS_ID' => '100',
            'PATH' => 'processor5.webp',
        ],
        [
            'ID' => '530',
            'PRODUCTS_ID' => '101',
            'PATH' => 'processor6.webp',
        ],
        [
            'ID' => '531',
            'PRODUCTS_ID' => '102',
            'PATH' => 'processor7.webp',
        ],
        [
            'ID' => '532',
            'PRODUCTS_ID' => '103',
            'PATH' => 'processor8.webp',
        ],
        [
            'ID' => '533',
            'PRODUCTS_ID' => '104',
            'PATH' => 'processor9.webp',
        ],
        [
            'ID' => '534',
            'PRODUCTS_ID' => '105',
            'PATH' => 'processor10.webp',
        ],
    ]);
    $this->command->info('Records were successfully added to the database. Seeders are correct.');
}
}