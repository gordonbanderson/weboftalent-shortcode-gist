<?php
use SilverStripe\View\Parsers\ShortcodeParser;
echo '**** FROM GIST MODULE ****';
ShortcodeParser::get('default')->register('Gist',array('WebOfTalent\ShortCodeGist\GistShortCodeHandler','handle_shortcode'));
echo '**** /FROM GIST MODULE ****';

