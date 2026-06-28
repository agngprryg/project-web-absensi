<?php

function is_active($segment, $value)
{
    return $segment == $value
        ? 'border border-b-2 border-l-4 border-[#6c30a1]'
        : 'hover:text-[#4a4a6a] transition-colors';
}

function is_active_navbar($segment, $value)
{
    return $segment == $value
        ? 'text-blue-500 font-semibold border-b-2 border-blue-500 pb-1'
        : 'text-gray-700 hover:text-blue-600 transition-colors';
}
