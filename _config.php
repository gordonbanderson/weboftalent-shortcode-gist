<?php
use SilverStripe\View\Parsers\ShortcodeParser;
ShortcodeParser::get('default')->register('Gist',array('WebOfTalent\ShortCodeGist\GistShortCodeHandler','handle_shortcode'));
