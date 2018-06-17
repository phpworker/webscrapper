<?php

namespace App\Http\Controllers;

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\VarDumper\VarDumper;
use Weidner\Goutte\GoutteFacade as Goutte;

class Youtube2Mp3Controller extends Controller
{
    public function index($url)
    {
        $results = array();
        $url = 'https://slide.ly/promo/collections?mode=search&keyword=' . $url;
        $headerXpath = '/*div[contains(@class, "header show opaque")]';
        $videoXpath = '//div[contains(@class, "pr-video-preview-wrap")]/video';

        $crawler = Goutte::request('GET', $url);

        // this return an error, didn't figure it why yet.
//        var_dump($crawler->filter($headerXpath)->count());
//        die;

        // for some reason this get the header of the page instead of content
//        $crawler->filterXPath($videoXpath);
//        var_dump($crawler->html());
//        die;

//        $crawler->filter($videoXpath)->each(function($node) {
//
//        });


        return response()->json([
            'status' => 'true',
            'url' => $url,
            'video_id' => $results
        ], 200);
    }
}
