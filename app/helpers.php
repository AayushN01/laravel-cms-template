<?php

use App\Models\Setting;

function setting($query)
{
    $setting = Setting::find(1);
    return $setting ? $setting : null;
}

?>