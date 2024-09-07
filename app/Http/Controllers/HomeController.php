<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
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

    protected function getCoreValues() 
    {
        return [
            (object) [
                'icon' => 'lightbulb',
                'title' => 'Innovation',
                'body' => 'We consistently innovate to provide cutting-edge solutions for our clients.',
                'image' => asset('brainsmedia/assets/img/idea.png'),
            ],
            (object) [
                'icon' => 'people',
                'title' => 'Customer Satisfaction',
                'body' => 'Our clients are our priority, and we focus on delivering exceptional service.',
                'image' => asset('brainsmedia/assets/img/customer.jpeg'),
            ],
            (object) [
                'icon' => 'shield',
                'title' => 'Reliability',
                'body' => 'Dependable services that ensure your business’s continuity and success.',
                'image' => asset('brainsmedia/assets/img/innovation-1.jpg'),
            ],
        ];
    }

    public function index(): View
    {

        $services = $this->getServices();
        $coreValues = $this->getCoreValues();

        return view("home.index", compact('services', 'coreValues'));
    }
}