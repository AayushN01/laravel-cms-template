<?php

use App\Models\Setting;

if(!function_exists('setting')){
    function setting()
    {
        $setting = Setting::find(1);
        return $setting;
    }
}
if(!function_exists('site_title')){
    function site_title()
    {
        $site_title = setting()->website_name;
        return $site_title;
    }
}

if(!function_exists('site_description')){
    function site_description()
    {
        $site_description = setting()->description;
        return $site_description;
    }
}

if(!function_exists('site_meta_title')){
    function site_meta_title()
    {
        $site_meta_title = setting()->meta_title;
        return $site_meta_title;
    }
}

if(!function_exists('site_meta_description')){
    function site_meta_description()
    {
        $site_meta_description = setting()->meta_description;
        return $site_meta_description;
    }
}

if(!function_exists('site_meta_keyword')){
    function site_meta_keyword()
    {
        $site_meta_keyword = setting()->meta_keyword;
        return $site_meta_keyword;
    }
}

if(!function_exists('contact_first')){
    function contact_first()
    {
        $contact_first = setting()->contact_1;
        return $contact_first;
    }
}

if(!function_exists('contact_second')){
    function contact_second()
    {
        $contact_second = setting()->contact_2;
        return $contact_second;
    }
}

if(!function_exists('email')){
    function email()
    {
        
        $email = setting()->email;
        return $email;
    }
}

if(!function_exists('po_box')){
    function po_box()
    {
        $setting_po = setting()->po_box;
        return $setting_po;
    }
}

if(!function_exists('setting_url')){
    function setting_url()
    {
        $url = setting()->url;
        return $setting_url;
    }
}

if(!function_exists('setting_facebook')){
    function setting_facebook()
    {
        $facebook = setting()->facebook;
        return $facebook;
    }
}

if(!function_exists('setting_instagram')){
    function setting_instagram()
    {
        $instagram = setting()->instagram;
        return $instagram;
    }
}

if(!function_exists('setting_twitter')){
    function setting_twitter()
    {
        $twitter = setting()->twitter;
        return $twitter;
    }
}

if(!function_exists('setting_linkedin')){
    function setting_linkedin()
    {
        $linkedin = setting()->linkedin;
        return $linkedin;
    }
}

if(!function_exists('setting_google')){
    function setting_google()
    {
        $google = setting()->google_plus;
        return $google;
    }
}

if(!function_exists('setting_youtube')){
    function setting_youtube()
    {
        $youtube = setting()->youtube;
        return $youtube;
    }
}

if(!function_exists('setting_tiktok')){
    function setting_tiktok()
    {
        $tiktok = setting()->tiktok;
        return $tiktok;
    }
}

if(!function_exists('setting_tiktok')){
    function setting_tiktok()
    {
        $tiktok = setting()->tiktok;
        return $tiktok;
    }
}

if(!function_exists('setting_map')){
    function setting_map()
    {
        $map = setting()->google_map;
        return $map;
    }
}

if(!function_exists('site_logo')){
    function site_logo()
    {
        $site_logo = setting()->logo;
        return $site_logo;
    }
}

if(!function_exists('site_icon')){
    function site_icon()
    {
        $site_icon = setting()->favicon;
        return $site_icon;
    }
}

?>