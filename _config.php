<?php
use SilverStripe\View\Parsers\ShortcodeParser;
ShortcodeParser::get('default')->register('gist',array('WebOfTalent\ShortCodeGist\GistShortCodeHandler','handle_shortcode'));
