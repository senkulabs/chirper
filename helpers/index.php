<?php

use Illuminate\Support\HtmlString;
use Symfony\Component\HtmlSanitizer\HtmlSanitizer;
use Symfony\Component\HtmlSanitizer\HtmlSanitizerConfig;

if (! function_exists('h')) {
    function h(string $html) : HtmlString {
        $htmlSanitizer = new HtmlSanitizer(
            (new HtmlSanitizerConfig())->allowSafeElements()
        );

        return new HtmlString($htmlSanitizer->sanitize($html));
    }
}