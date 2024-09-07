<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ContactUsController extends Controller
{

    protected function getServices()
    {
        return [
            (object) [
                'icon' => 'globe',
                'title' => 'Web Development',
                'summary' => 'Custom and responsive web development services that cater to businesses of all sizes.',
                'slug' => 'web-development',
                'body' => 'We provide top-notch web development services, creating websites that are not only visually appealing but also optimized for performance. Our solutions are responsive, ensuring seamless user experiences across all devices. Whether you need a simple website or a complex e-commerce platform, we can deliver tailored solutions that help you achieve your business goals.'
            ],
            (object) [
                'icon' => 'bar-chart',
                'title' => 'Digital Marketing',
                'summary' => 'Effective digital marketing strategies to enhance your online presence and drive growth.',
                'slug' => 'digital-marketing',
                'body' => 'Our digital marketing services are designed to help businesses increase their online visibility and engage with their target audience. From search engine optimization (SEO) and social media marketing to pay-per-click advertising and content marketing, we use data-driven strategies to drive traffic and generate leads, ultimately boosting your revenue.'
            ],
            (object) [
                'icon' => 'phone',
                'title' => 'Mobile App Development',
                'summary' => 'Building seamless and scalable mobile applications to enhance user experiences.',
                'slug' => 'mobile-app-development',
                'body' => 'We specialize in developing mobile applications that provide exceptional user experiences. Our team can build custom apps for both iOS and Android platforms, ensuring that your app is scalable, secure, and meets your specific business needs. Whether you’re looking to create a new app from scratch or optimize an existing one, we have the expertise to help you succeed in the mobile market.'
            ],
        ];
    }

    public function __construct() {
        view()->share('services', $this->getServices());
    }
    
    public function index(): View 
    {
        return view("contact-us.index");
    }
}
