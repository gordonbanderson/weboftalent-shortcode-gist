<?php
use SilverStripe\View\Parsers\ShortcodeParser;
echo '**** GIST CONFIG ****';
ShortcodeParser::get('default')->register('Gist',array('WebOfTalent\ShortCodeGist\GistShortCodeHandler','parse_gist'));
