<?php
namespace WebOfTalent\ShortCodeGist\Tests;

use SilverStripe\View\Parsers\ShortcodeParser;
use SilverStripe\Dev\SapphireTest;

class GistShortCodeHandlerTest extends SapphireTest
{

    protected static $fixture_file = 'GistShortCodeHandlerTest.yml';

    public function testGistIdOnly()
    {
        $page = $this->objFromFixture('Page', 'GistIdOnly');
        $html = ShortcodeParser::get_active()->parse($page->Content);
        $expected = 'There should be a gist here <script src="https://gist.github.com/gordonbanderson/7fadc8280da9e2694960.js"></script><noscript>Please enable javascript to see this Gist inline.  It can be viewed externally here:
<a href="https://gist.github.com/gordonbanderson/7fadc8280da9e2694960">Gist</a></noscript>
';
        $this->assertEquals($expected, $html);
    }

    public function testGistWithCaption()
    {
        $page = $this->objFromFixture('Page', 'GistWithCaption');
        $html = ShortcodeParser::get_active()->parse($page->Content);
        $expected = 'There should be a gist here with a caption <script src="https://gist.github.com/gordonbanderson/7fadc8280da9e2694960.js"></script><noscript>Please enable javascript to see this Gist inline.  It can be viewed externally here:
<a href="https://gist.github.com/gordonbanderson/7fadc8280da9e2694960">Gist</a></noscript><p class="caption">This is a caption</p>
';
        $this->assertEquals($expected, $html);
    }

    public function testGistWithMissingID()
    {
        $page = $this->objFromFixture('Page', 'GistWithMissingID');
        $html = ShortcodeParser::get_active()->parse($page->Content);
        $this->assertEquals('This will be blank ', $html);
    }
}
