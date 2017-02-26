<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BananaControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/bananas');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Lucky number:', $crawler->filter('html')->text());
    }
}
