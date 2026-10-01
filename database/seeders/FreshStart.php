<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use App\Models\Process;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\AboutPage;
use App\Models\AboutPageManager;
use App\Models\SiteContent;
use Illuminate\Support\Str;
use App\Models\GeneralSetting;
use App\Models\HomePageManager;
use App\Models\Template;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FreshStart extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'user_name' => 'Admin',
            'slug' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        $projects = [
            [
                'project_name' => 'Road & Story',
                'slug' => Str::slug('Road & Story'),
                'description' => 'At Road & Story, we believe in value for money and that an authentic travel experience is priceless. We strive to bring you the most competitive rates so you can experience a life changing journey as you unravel your story.',
                'project_link' => '',
            ],
            [
                'project_name' => 'Student Jobs',
                'slug' => Str::slug('Student Jobs'),
                'description' => 'Studentjobs is one of Pakistan’s fastest growing and authentic jobs portal website to find latest career opportunities in Pakistan.Studentjobs.pk is Pakistani online job site which connects talent with opportunity.',
                'project_link' => null,
            ],
            [
                'project_name' => 'Knowledge States',
                'slug' => Str::slug('Knowledge States'),
                'description' => 'Real Estate by Bitlogicx is Playing role as a bridge by providing best quality services among real estate agencies, dealers, developers and investors to promote this community. Supporting all factors that are either directly or indirectly connected with real estate sector.',
                'project_link' => null,
            ],
            [
                'project_name' => 'CISAS',
                'slug' => Str::slug('CISAS.co'),
                'description' => 'We provide Point of sale system to transform your business.',
                'project_link' => null,
            ],
            [
                'project_name' => 'Knowledge States',
                'slug' => Str::slug('Knowledge States'),
                'description' => 'CISAS is a leading educational consultancy firm in around the world for all students to step up.',
                'project_link' => null,
            ],
            [
                'project_name' => 'Cottonwebs',
                'slug' => Str::slug('cottonwebs.com'),
                'description' => 'Online shopping with Cottonwebs comforts you with latest and trendy Pakistani fashion at your doorstep',
                'project_link' => null,
            ],
        ];

        foreach ($projects as $item) {
            Project::create($item);
        }

        $services = [
            [
                'service_name' => 'Web Development',
                'slug' => Str::slug('Web Development'),
                'description' => 'We develop Websites and eCommerce Webstores based on globally standards and platform. We also offer services that help our clients to reach the intended audience.',
                
            ],
            [
                'service_name' => 'App Development',
                'slug' => Str::slug('App Development'),
                'description' => 'We market your business via social networks, blogs , PPC , email marketing and many more to help you popularize your brand.',
                
            ],
            [
                'service_name' => 'Digital Marketing',
                'slug' => Str::slug('Digital Marketing'),
                'description' => 'Our professional Graphic Designers produces innovative, eye-catching designs to engage the interest of the client in your products.',
                
            ],
            [
                'service_name' => 'Graphic Designing',
                'slug' => Str::slug('Graphic Designing'),
                'description' => 'We develop Websites and eCommerce Webstores based on globally standards and platform. We also offer services that help our clients to reach the intended audience.',
                
            ],
            [
                'service_name' => 'Search Engine Optimization',
                'slug' => Str::slug('Search Engine Optimization'),
                'description' => 'We focus strongly on function and usability to manage your website.We will help you to Drive qualified traffic to your website and maximize ROI.',
                
            ],
            [
                'service_name' => 'Embedded System',
                'slug' => Str::slug('Embedded System'),
                'description' => 'we are specialized in Embedded Systems. We transform the idea into reality.',
                
            ],
        ];

        foreach ($services as $item) {
            Service::create($item);
        }

        $teams = [
            [
                'name' => 'Muhammad Ahmad',
                'slug' => Str::slug('Muhammad Ahmad'),
                'job_title' => 'CEO',
            ],
            [
                'name' => 'Muhammad Aqib',
                'slug' => Str::slug('Muhammad Aqib'),
                'job_title' => 'CTO',
            ],
            [
                'name' => 'Rana Abdul Rauf',
                'slug' => Str::slug('Rana Abdul Rauf'),
                'job_title' => 'Project Manager',
            ],
            [
                'name' => 'Monis Irfan',
                'slug' => Str::slug('Monis Irfan'),
                'job_title' => 'Laravel Developer',
            ],
        ];

        foreach ($teams as $item) {
            Team::create($item);
        }

        $processes = [
            [
                'process_name' => 'Requirement',
                'slug' => Str::slug('Requirement'),
                'description' => 'We diligently perform requirement engineering for enlisting all business requirements before actual implementation starts.',
            ],
            [
                'process_name' => 'Prototyping',
                'slug' => Str::slug('Prototyping'),
                'description' => 'We provide high-end prototypes to our clients for giving them a complete overview of the end product.',
            ],
            [
                'process_name' => 'Development',
                'slug' => Str::slug('Development'),
                'description' => 'Our skilled development teamwork on the latest technologies for giving a seamless user experience to our clients.',
            ],
            [
                'process_name' => 'Quality Assurance',
                'slug' => Str::slug('Quality Assurance'),
                'description' => 'Our ultimate goal is delivering efficient, high- quality products to the people we work with for making their life easier.',
            ],
            [
                'process_name' => 'Deployment',
                'slug' => Str::slug('Deployment'),
                'description' => 'Our professionals monitor each step of the deployment process for delivering issue-free products to our valued clients.',
            ],
        ];
        foreach ($processes as $item) {
            Process::create($item);
        }


        HomePageManager::create([
            'banner_heading' => 'Bitlogicx',
            'banner_description' => 'We Build Software To Transform Your Business',
            'banner_image' => 'images/front/hero-bg.jpg',
            'banner_button_text' => 'Contact Us',
            'banner_button_link' => route('front.contact'),
            'banner_button_enable' => true,
            'project_heading' => 'Our Work',
            'service_heading' => 'Our Services',
            'process_heading' => 'Our Proven Process Provide Results',
            'team_heading' => 'Our Team',
        ]);

        AboutPageManager::create([
            'banner_heading' => 'About Us',
            'body' => '<div class="container"><div class="row gy-4" data-aos="fade-up"><div class="col-lg-8"><div class="content ps-lg-5"><h3>We Are Creative</h3><p>Whole creativity depends on focus and determination. Practice focus, Structure your time, not your tasks. And be prepared. We work with creativity mind and innovative skills.</p></div></div><div class="col-lg-4"><img src=../../front/assets/img/about.jpg" class="img-fluid" alt=""></div></div></div>'
        ]);

        $contents = [
            [
                'key' => 'app_name',
                'value' => 'Bitlogicx',
            ],
            [
                'key' => 'app_description',
                'value' => 'Bitlogicx Build Software To Transform Your Business.',
            ],
            [
                'key' => 'app_logo',
                'value' => asset('storage/logo/bitlogicx-logo.png'),
            ],
            [
                'key' => 'app_favicon',
                'value' => asset('storage/favicon/bitlogicx-favicon.png'),
            ],
            [
                'key' => 'contact_no',
                'value' => 'Bitlogicx',
            ],
            [
                'key' => 'contact_email',
                'value' => 'contact@bitlogicx.com',
            ],
            [
                'key' => 'contact_address',
                'value' => 'A5 Commercial, Basement, Block A Architects Engineers Housing Society, Lahore, 54770, Pakistan'
            ],
            [
                'key' => 'facebook',
                'value' => 'https://bitlogicx.com/',
            ],
            [
                'key' => 'twitter',
                'value' => 'https://bitlogicx.com/',
            ],
            [
                'key' => 'instagram',
                'value' => 'https://bitlogicx.com/',
            ],
            [
                'key' => 'linkedin',
                'value' => 'https://www.linkedin.com/company/bitlogicx/',
            ],
            [
                'key' => 'footer_text',
                'value' => '. All Rights Reserved'
            ]
        ];
        foreach ($contents as $item) {
            SiteContent::create($item);
        }

        Setting::create([
            'whatsapp_link' => 'https://wa.link/zn2un4',
            'NOCAPTCHA_SITEKEY' => '6LdtwOsjAAAAADtvBMgw8Hew-9b4PmescG06UmGI',
            'NOCAPTCHA_SECRET' => '6LdtwOsjAAAAAI8katy8ucq2Q7wDPiTi2PEMQ39d',
        ]);

        $templates = [
            [
                'template_name' => 'Application Received',
                'slug' => 'application-received',
                'template_for' => 'Accept',
                'subject' => 'Application Received',
                'body' => '<span class="me-1 mb-2">Dear
        {{ $applications->first_name }}
        {{ $applications->last_name }},</span><br>
    <span class="me-1 mb-2">I am delighted to inform you that your application has been accepted. 
    Congratulations! We were impressed with your qualifications and experience, 
    and we believe you would make a valuable addition to our team.</span><br>
    <span class="me-1 mb-2">As we move forward, If you have any questions or need any assistance with this process, 
    please don t hesitate to reach out.</span><br>
    <span class="me-1 mb-2">In addition, please review the BITLOGICX to familiarize yourself with our 
    procedures and expectations. If you have any questions or concerns, please do not hesitate to ask. We want to make sure 
    you have everything you need to succeed in your new role.</span><br>
    <span class="me-1 mb-2">We are thrilled to have you join our team, and we look forward to working with you. 
    If you have any questions or concerns, please do not hesitate to contact us. Once again, congratulations on your acceptance, 
    and we wish you the best as you start this new chapter.</span><br>
    <span class="me-1 mb-2">If you did not apply for this job or if you received this email by mistake, please
        ignore this message.</span><br>
    <span class="me-1 mb-2">If you have any questions or concerns, please contact us at contact.bitlogicx.com. Our
        support team is available to assist you with any issues you may have.</span><br>
    <span class="me-1 mb-2">Best regards</span><br>
        <span class="me-1 mb-2">HR Team</span><br>
    <span class="me-1 mb-2">BITLOGICX</span><br>'
            ],
            [
                'template_name' => 'Application Rejected',
                'slug' => 'application-rejected',
                'template_for' => 'Reject',
                'subject' => 'Application Rejected',
                'body' => '<span class="me-1 mb-2">Dear
        {{ $applications->first_name }}
        {{ $applications->last_name }},</span><br>
    <span class="me-1 mb-2">Thank you for your interest in Opportunity and for submitting your application. After careful consideration of all the candidates, we regret to inform you that we have decided not to move forward with your application at this time.</span><br>
    <span class="me-1 mb-2">Please note that our decision was based solely on our current needs and the qualifications of the other candidates. We received many strong applications, and we had to make some difficult decisions in selecting the right candidate for the role.</span><br>
    <span class="me-1 mb-2">We appreciate the time and effort you put into your application and we want to encourage you to keep pursuing your goals. We encourage you to stay up-to-date with our career opportunities and we would love to hear from you again if there s another role that you think is a good match.</span><br>
    <span class="me-1 mb-2">Thank you again for your interest in [Opportunity]. We wish you the best of luck in your future endeavors.</span><br>
    <span class="me-1 mb-2">If you have any questions or concerns, please contact us at contact.bitlogicx.com. Our
        support team is available to assist you with any issues you may have.</span><br>
    <span class="me-1 mb-2">Best regards</span><br>
        <span class="me-1 mb-2">HR Team</span><br>
    <span class="me-1 mb-2">BITLOGICX</span><br>'
            ],
            [
                'template_name' => 'Call For Interivew',
                'slug' => 'call-for-interivew',
                'template_for' => 'Interview',
                'subject' => 'Call For Interivew',
                'body' => '<span class="me-1 mb-2">Dear
        {{ $applications->first_name }}
        {{ $applications->last_name }},</span><br>
    <span class="me-1 mb-2">Thank you for submitting your application for the Opportunity. We were impressed with your qualifications and experience, and we believe you could be a great fit for the role. I would like to invite you for an interview to further discuss your application.</span><br>
    <span class="me-1 mb-2">The interview will be held at our Head Office BITLOGICX. Time slot will given to you on call. Please confirm your availability for the interview, and let us know if you require any special accommodations to participate in the interview.</span><br>
    <span class="me-1 mb-2">During the interview, we will discuss your experience, skills, and qualifications, and answer any questions you may have about the role and our organization. Please be prepared, and feel free to bring any questions you may have.</span><br>
    <span class="me-1 mb-2">If you need to reschedule the interview, please let us know as soon as possible, so we can arrange another suitable time.</span><br>
    <span class="me-1 mb-2">We look forward to speaking with you and learning more about your qualifications for the role. Please confirm your availability by responding to this email with a confirmation of attendance.</span><br>
    <span class="me-1 mb-2">Best regards</span><br>
        <span class="me-1 mb-2">HR Team</span><br>
         <span class="me-1 mb-2">BITLOGICX</span><br>'
            ],
        ];
        foreach ($templates as $item) {
            Template::create($item);
        }
    }
}
