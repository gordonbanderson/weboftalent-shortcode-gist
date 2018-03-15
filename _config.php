<?php
ShortcodeParser::get('default')->register('Gist',array('GistShortCodeHandler','pa
use SilverStripe\View\Parsers\ShortcodeParser;
ShortcodeParser::get('default')->register('Gist',array('GistShortCodeHandler','parse_gist'));
?>