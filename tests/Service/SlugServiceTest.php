<?php

namespace App\Tests\Service;

use App\Service\SlugService;
use PHPUnit\Framework\TestCase;

class SlugServiceTest extends TestCase
{
    /**
     * @dataProvider providerTestSlugify
     */
    public function testSlugify($text, $textAfter)
    {
        $slugService = new SlugService();
        $slug = $slugService->slugify($text);

        $this->assertSame($textAfter, $slug);
    }

    public function providerTestSlugify() {
        return [
            ["Test de slug!", "test-de-slug"],
            ["Test de slug!2", "test-de-slug2"],
            ["Test de slug!3", "test-de-slug3"]
        ];
    }

    public function testSlugifyError()
    {
        $slugService = new SlugService();
        $slug = $slugService->slugify("Bonjour! c'est wam");

        $this->assertNotSame("bonjour!cestwam", $slug);
    }
}
