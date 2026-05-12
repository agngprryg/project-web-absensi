<?php
function generate_breadcrumb_admin()
{
    $ci = &get_instance();
    $segments = $ci->uri->segment_array();

    $breadcrumb = '<nav class="mt-2 text-xs text-gray-600" aria-label="Breadcrumb">';
    $breadcrumb .= '<ol class="list-reset flex space-x-2">';

    $path = '';
    $label_map = [
        'admin' => 'Dashboard',
        'kelola-data-paket' => 'Kelola Data Paket',
    ];

    $custom_links = [
        'admin' => 'admin/dashboard',
    ];

    foreach ($segments as $index => $segment) {
        $path .= $segment . '/';
        $label = $label_map[$segment] ?? ucwords(str_replace('-', ' ', $segment));
        $link = isset($custom_links[$segment]) ? base_url($custom_links[$segment]) : base_url($path);
        $is_last = $index === array_key_last($segments);

        if ($is_last) {
            $breadcrumb .= '<li><span class="text-gray-800 font-medium">' . $label . '</span></li>';
        } else {
            $breadcrumb .= '<li><a href="' . $link . '" class="text-blue-500 hover:underline">' . $label . '</a></li>';
            $breadcrumb .= '<li class="mx-2 text-gray-400">/</li>';
        }
    }

    $breadcrumb .= '</ol></nav>';
    return $breadcrumb;
}

function generate_breadcrumb_owner()
{
    $ci = &get_instance();
    $segments = $ci->uri->segment_array();

    $breadcrumb = '<nav class="mt-2 text-sm text-gray-600" aria-label="Breadcrumb">';
    $breadcrumb .= '<ol class="list-reset flex space-x-2">';

    $path = '';
    $label_map = [
        'owner' => 'Dashboard',
        'kelola-data-paket' => 'Kelola Data Paket',
    ];

    $custom_links = [
        'owner' => 'owner/dashboard',
    ];

    foreach ($segments as $index => $segment) {
        $path .= $segment . '/';
        $label = $label_map[$segment] ?? ucwords(str_replace('-', ' ', $segment));
        $link = isset($custom_links[$segment]) ? base_url($custom_links[$segment]) : base_url($path);
        $is_last = $index === array_key_last($segments);

        if ($is_last) {
            $breadcrumb .= '<li><span class="text-gray-800 font-medium">' . $label . '</span></li>';
        } else {
            $breadcrumb .= '<li><a href="' . $link . '" class="text-blue-500 hover:underline">' . $label . '</a></li>';
            $breadcrumb .= '<li class="mx-2 text-gray-400">/</li>';
        }
    }

    $breadcrumb .= '</ol></nav>';
    return $breadcrumb;
}
