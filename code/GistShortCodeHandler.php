<?php

class GistShortCodeHandler {

	public static function parse_gist( $arguments, $caption = null, $parser = null ) {
		// first things first, if we dont have a video ID, then we don't need to
		// go any further
		if ( empty( $arguments['id'] ) ) {
			return;
		}

		$customise = array();
		$customise['GistID'] = $arguments['id'];

		//overide the defaults with the arguments supplied
		$customise = array_merge( $customise, $arguments );

		//get our GIST template
		$template = new SSViewer( 'GithubGist' );

		//return the customised template
		return $template->process( new ArrayData( $customise ) );
	}
}
