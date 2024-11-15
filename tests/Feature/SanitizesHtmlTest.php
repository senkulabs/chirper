<?php

test('sanitize html', function (string $html, string $expected) {
    expect(trim(h($html)))->toEqual(trim($expected));
})->with([
    'remove unsafe script tags' => [
        <<<'HTML'
            <script>alert('You get hacked! Ha ha ha ha!')</script>
        HTML,
        <<<'HTML'
            
        HTML,
    ],
    'remove unsafe img attributes' => [
        <<<'HTML'
            <img src="x" onerror="alert('hello')"/> <script>alert('hello')</script> <div>Hello World</div>
        HTML,
        <<<'HTML'
            <img />  <div>Hello World</div>
        HTML,
    ]
]);
