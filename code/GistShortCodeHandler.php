<?php

class GistShortCodeHandler {

    public static function parse_gist( $arguments, $caption = null, $parser = null ) {
//  public static function link_shortcode_handler($arguments, $content = null, $parser = null) {

        error_log("GITHUB GIST CODE PARSER");
        // first things first, if we dont have a video ID, then we don't need to
        // go any further
        if ( empty( $arguments['id'] ) ) {
            return;
        }

        $customise = array();
        /*** SET DEFAULTS ***/
        $customise['GistID'] = $arguments['id'];
       

        //overide the defaults with the arguments supplied
        $customise = array_merge( $customise, $arguments );

        //get our YouTube template
        $template = new SSViewer( 'GithubGist' );

        //return the customised template
        return $template->process( new ArrayData( $customise ) );

    }
}
?>