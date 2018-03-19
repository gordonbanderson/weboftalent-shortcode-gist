<?php
namespace WebOfTalent\ShortCodeGist;

use SilverStripe\View\Parsers\ShortcodeHandler;
use SilverStripe\View\SSViewer;
use SilverStripe\View\ArrayData;

class GistShortCodeHandler implements ShortcodeHandler
{
	/**
	 * Gets the list of shortcodes provided by this handler
	 *
	 * @return mixed
	 */
	public static function get_shortcodes()
	{
		return array('gist');
	}


	/**
	 *
	 * @param array $arguments
	 * @param string $content
	 * @param ShortcodeParser $parser
	 * @param string $shortcode
	 * @param array $extra
	 *
	 * @return string
	 */
	public static function handle_shortcode($arguments, $content, $parser, $shortcode, $extra = array())
	{
        // first things first, if we dont have a Gist ID, then we don't need to
        // go any further
        if (empty($arguments['url'])) {
            return;
        }

        if (!empty($caption)) {
            $arguments['Caption'] = $caption;
        }

        $customise = array();
        $customise['GistURL'] = $arguments['url'];

        //overide the defaults with the arguments supplied
        $customise = array_merge($customise, $arguments);

        //get our GIST template
        $template = new SSViewer('GithubGist');

        //return the customised template
        return $template->process(new ArrayData($customise));
    }
}
