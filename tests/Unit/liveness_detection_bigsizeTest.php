<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

//imagefile_8.61MB

class liveness_detection_bigsizeTest extends TestCase
{
    use WithoutMiddleware;

    public function test_livenessdetectionbigsize_2gesture_size2koma1mb_false_1()
    {
        $data = [
            'file' => [
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-9-20220714202326.jpg'), 'public/bigsize/liveness_liveness-2280-5-9-20220714202326.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-10-20220714202327.jpg'), 'public/bigsize/liveness_liveness-2280-5-10-20220714202327.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-11-20220714202328.jpg'), 'public/bigsize/liveness_liveness-2280-5-11-20220714202328.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-12-20220714202329.jpg'), 'public/bigsize/liveness_liveness-2280-5-12-20220714202329.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-13-20220714202330.jpg'), 'public/bigsize/liveness_liveness-2280-5-13-20220714202330.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-14-20220714202331.jpg'), 'public/bigsize/liveness_liveness-2280-5-14-20220714202331.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-15-20220714202332.jpg'), 'public/bigsize/liveness_liveness-2280-5-15-20220714202332.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-16-20220714202333.jpg'), 'public/bigsize/liveness_liveness-2280-5-16-20220714202333.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-0-20220714202314.jpg'), 'public/bigsize/liveness_liveness-2280-7-0-20220714202314.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-1-20220714202315.jpg'), 'public/bigsize/liveness_liveness-2280-7-1-20220714202315.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-2-20220714202316.jpg'), 'public/bigsize/liveness_liveness-2280-7-2-20220714202316.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-3-20220714202317.jpg'), 'public/bigsize/liveness_liveness-2280-7-3-20220714202317.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-4-20220714202318.jpg'), 'public/bigsize/liveness_liveness-2280-7-4-20220714202318.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-5-20220714202319.jpg'), 'public/bigsize/liveness_liveness-2280-7-5-20220714202319.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-6-20220714202320.jpg'), 'public/bigsize/liveness_liveness-2280-7-6-20220714202320.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-7-20220714202321.jpg'), 'public/bigsize/liveness_liveness-2280-7-7-20220714202321.jpg', null, null, true),
                    ],
            'gestures_set' => '5','7'
        ];

        $respons = $this->post(route('livenes.test'), $data);
        $respons->assertJson(
                                [
                                    //'_passed' => true
                                    'response' => ['_passed' => false]
                                ]
                            );
    }

    public function test_livenessdetectionbigsize_2gesture_size2koma1mb_false_2()
    {
        $data = [
            'file' => [
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-9-20220714202326.jpg'), 'public/bigsize/liveness_liveness-2280-5-9-20220714202326.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-10-20220714202327.jpg'), 'public/bigsize/liveness_liveness-2280-5-10-20220714202327.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-11-20220714202328.jpg'), 'public/bigsize/liveness_liveness-2280-5-11-20220714202328.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-12-20220714202329.jpg'), 'public/bigsize/liveness_liveness-2280-5-12-20220714202329.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-13-20220714202330.jpg'), 'public/bigsize/liveness_liveness-2280-5-13-20220714202330.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-14-20220714202331.jpg'), 'public/bigsize/liveness_liveness-2280-5-14-20220714202331.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-15-20220714202332.jpg'), 'public/bigsize/liveness_liveness-2280-5-15-20220714202332.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-16-20220714202333.jpg'), 'public/bigsize/liveness_liveness-2280-5-16-20220714202333.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-0-20220714202314.jpg'), 'public/bigsize/liveness_liveness-2280-7-0-20220714202314.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-1-20220714202315.jpg'), 'public/bigsize/liveness_liveness-2280-7-1-20220714202315.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-2-20220714202316.jpg'), 'public/bigsize/liveness_liveness-2280-7-2-20220714202316.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-3-20220714202317.jpg'), 'public/bigsize/liveness_liveness-2280-7-3-20220714202317.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-4-20220714202318.jpg'), 'public/bigsize/liveness_liveness-2280-7-4-20220714202318.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-5-20220714202319.jpg'), 'public/bigsize/liveness_liveness-2280-7-5-20220714202319.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-6-20220714202320.jpg'), 'public/bigsize/liveness_liveness-2280-7-6-20220714202320.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-7-20220714202321.jpg'), 'public/bigsize/liveness_liveness-2280-7-7-20220714202321.jpg', null, null, true),
                    ],
            'gestures_set' => '5','7'
        ];

        $respons = $this->post(route('livenes.test'), $data);
        $respons->assertJson(
                                [
                                    //'_passed' => true
                                    'response' => ['_passed' => false]
                                ]
                            );
    }

    public function test_livenessdetectionbigsize_2gesture_size2koma1mb_false_3()
    {
        $data = [
            'file' => [
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-9-20220714202326.jpg'), 'public/bigsize/liveness_liveness-2280-5-9-20220714202326.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-10-20220714202327.jpg'), 'public/bigsize/liveness_liveness-2280-5-10-20220714202327.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-11-20220714202328.jpg'), 'public/bigsize/liveness_liveness-2280-5-11-20220714202328.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-12-20220714202329.jpg'), 'public/bigsize/liveness_liveness-2280-5-12-20220714202329.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-13-20220714202330.jpg'), 'public/bigsize/liveness_liveness-2280-5-13-20220714202330.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-14-20220714202331.jpg'), 'public/bigsize/liveness_liveness-2280-5-14-20220714202331.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-15-20220714202332.jpg'), 'public/bigsize/liveness_liveness-2280-5-15-20220714202332.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-16-20220714202333.jpg'), 'public/bigsize/liveness_liveness-2280-5-16-20220714202333.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-0-20220714202314.jpg'), 'public/bigsize/liveness_liveness-2280-7-0-20220714202314.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-1-20220714202315.jpg'), 'public/bigsize/liveness_liveness-2280-7-1-20220714202315.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-2-20220714202316.jpg'), 'public/bigsize/liveness_liveness-2280-7-2-20220714202316.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-3-20220714202317.jpg'), 'public/bigsize/liveness_liveness-2280-7-3-20220714202317.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-4-20220714202318.jpg'), 'public/bigsize/liveness_liveness-2280-7-4-20220714202318.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-5-20220714202319.jpg'), 'public/bigsize/liveness_liveness-2280-7-5-20220714202319.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-6-20220714202320.jpg'), 'public/bigsize/liveness_liveness-2280-7-6-20220714202320.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-7-20220714202321.jpg'), 'public/bigsize/liveness_liveness-2280-7-7-20220714202321.jpg', null, null, true),
                    ],
            'gestures_set' => '5','7'
        ];

        $respons = $this->post(route('livenes.test'), $data);
        $respons->assertJson(
                                [
                                    //'_passed' => true
                                    'response' => ['_passed' => false]
                                ]
                            );
    }


    public function test_livenessdetectionbigsize_2gesture_size2koma1mb_false_4()
    {
        $data = [
            'file' => [
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-9-20220714202326.jpg'), 'public/bigsize/liveness_liveness-2280-5-9-20220714202326.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-10-20220714202327.jpg'), 'public/bigsize/liveness_liveness-2280-5-10-20220714202327.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-11-20220714202328.jpg'), 'public/bigsize/liveness_liveness-2280-5-11-20220714202328.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-12-20220714202329.jpg'), 'public/bigsize/liveness_liveness-2280-5-12-20220714202329.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-13-20220714202330.jpg'), 'public/bigsize/liveness_liveness-2280-5-13-20220714202330.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-14-20220714202331.jpg'), 'public/bigsize/liveness_liveness-2280-5-14-20220714202331.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-15-20220714202332.jpg'), 'public/bigsize/liveness_liveness-2280-5-15-20220714202332.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-16-20220714202333.jpg'), 'public/bigsize/liveness_liveness-2280-5-16-20220714202333.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-0-20220714202314.jpg'), 'public/bigsize/liveness_liveness-2280-7-0-20220714202314.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-1-20220714202315.jpg'), 'public/bigsize/liveness_liveness-2280-7-1-20220714202315.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-2-20220714202316.jpg'), 'public/bigsize/liveness_liveness-2280-7-2-20220714202316.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-3-20220714202317.jpg'), 'public/bigsize/liveness_liveness-2280-7-3-20220714202317.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-4-20220714202318.jpg'), 'public/bigsize/liveness_liveness-2280-7-4-20220714202318.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-5-20220714202319.jpg'), 'public/bigsize/liveness_liveness-2280-7-5-20220714202319.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-6-20220714202320.jpg'), 'public/bigsize/liveness_liveness-2280-7-6-20220714202320.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-7-20220714202321.jpg'), 'public/bigsize/liveness_liveness-2280-7-7-20220714202321.jpg', null, null, true),
                    ],
            'gestures_set' => '5','7'
        ];

        $respons = $this->post(route('livenes.test'), $data);
        $respons->assertJson(
                                [
                                    //'_passed' => true
                                    'response' => ['_passed' => false]
                                ]
                            );
    }

    public function test_livenessdetectionbigsize_2gesture_size2koma1mb_false_5()
    {
        $data = [
            'file' => [
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-9-20220714202326.jpg'), 'public/bigsize/liveness_liveness-2280-5-9-20220714202326.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-10-20220714202327.jpg'), 'public/bigsize/liveness_liveness-2280-5-10-20220714202327.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-11-20220714202328.jpg'), 'public/bigsize/liveness_liveness-2280-5-11-20220714202328.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-12-20220714202329.jpg'), 'public/bigsize/liveness_liveness-2280-5-12-20220714202329.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-13-20220714202330.jpg'), 'public/bigsize/liveness_liveness-2280-5-13-20220714202330.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-14-20220714202331.jpg'), 'public/bigsize/liveness_liveness-2280-5-14-20220714202331.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-15-20220714202332.jpg'), 'public/bigsize/liveness_liveness-2280-5-15-20220714202332.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-5-16-20220714202333.jpg'), 'public/bigsize/liveness_liveness-2280-5-16-20220714202333.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-0-20220714202314.jpg'), 'public/bigsize/liveness_liveness-2280-7-0-20220714202314.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-1-20220714202315.jpg'), 'public/bigsize/liveness_liveness-2280-7-1-20220714202315.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-2-20220714202316.jpg'), 'public/bigsize/liveness_liveness-2280-7-2-20220714202316.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-3-20220714202317.jpg'), 'public/bigsize/liveness_liveness-2280-7-3-20220714202317.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-4-20220714202318.jpg'), 'public/bigsize/liveness_liveness-2280-7-4-20220714202318.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-5-20220714202319.jpg'), 'public/bigsize/liveness_liveness-2280-7-5-20220714202319.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-6-20220714202320.jpg'), 'public/bigsize/liveness_liveness-2280-7-6-20220714202320.jpg', null, null, true),
                        new \Illuminate\Http\UploadedFile(resource_path('..\public\bigsize\liveness_liveness-2280-7-7-20220714202321.jpg'), 'public/bigsize/liveness_liveness-2280-7-7-20220714202321.jpg', null, null, true),
                    ],
            'gestures_set' => '5','7'
        ];

        $respons = $this->post(route('livenes.test'), $data);
        $respons->assertJson(
                                [
                                    //'_passed' => true
                                    'response' => ['_passed' => false]
                                ]
                            );
    }
}






