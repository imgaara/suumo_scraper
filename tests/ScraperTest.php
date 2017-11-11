<?php

namespace Scuumo;

class ScraperTest extends \PHPUnit\Framework\TestCase
{
    public function testInstanceOfScraper()
    {
        $this->assertInstanceOf(Scraper::class, new Scraper);
    }
}
