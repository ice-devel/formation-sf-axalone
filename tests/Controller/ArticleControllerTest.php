<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ArticleControllerTest extends WebTestCase
{
    /*
    public function testSomething()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Hello World');
    }
    */
    /**
     * @dataProvider provideUrls
     */
    public function testSmokeCode200($url) {
        $client = static::createClient();
        $crawler = $client->request('GET', $url);

        $this->assertResponseIsSuccessful();
    }

    public function provideUrls() {
        return [
            ["/"],
            ["/article-entity/new"],
        ];
    }

    public function testSomething()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/article-entity/new');

        $btn = $crawler->filter("button")->first();
        $form = $btn->form();
        $form['article[title]'] = "Article test";
        $form['article[text]'] = "Article test description";
        $form['article[isFree]'] = true;
        $form['article[price]'] = "10";

        $client->followRedirects();
        $crawler = $client->submit($form);

        $nbDivSuccess = $crawler->filter("div.alert-success")->count();
        $this->assertGreaterThan(0, $nbDivSuccess);
    }
}
