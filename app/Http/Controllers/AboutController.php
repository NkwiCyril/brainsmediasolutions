<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AboutController extends Controller
{

    protected function getServices()
    {
        return [
            (object) [
                'icon' => 'globe',
                'title' => 'Web Development',
                'summary' => 'Custom and responsive web development services that cater to businesses of all sizes.',
                'slug' => 'web-development',
            ],
            (object) [
                'icon' => 'bar-chart',
                'title' => 'Digital Marketing',
                'summary' => 'Effective digital marketing strategies to enhance your online presence and drive growth.',
                'slug' => 'digital-marketing',
            ],
            (object) [
                'icon' => 'phone',
                'title' => 'Mobile App Development',
                'summary' => 'Building seamless and scalable mobile applications to enhance user experiences.',
                'slug' => 'mobile-app-development',
            ],
        ];
    }

    public function __construct() {

        $services = $this->getServices();
        view()->share('services', $services);
    }

    public function index(): View 
    {
        return view("about.index");
    }
}
