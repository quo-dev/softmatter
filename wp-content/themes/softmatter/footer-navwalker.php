<?php
class Footer_Walker_Nav_Menu extends Walker_Nav_Menu {

    /**
     * Unique id for dropdowns
     */

    /**
     * Starts the list before the elements are added.
     * @see Walker::start_lvl()
     */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= "<div class=\"footer__col\">";
        $output .= "<ul class=\"nav flex-column align-items-center align-items-sm-start\">";
    }

    /**
     * Ends the list of after the elements are added.
     * @see Walker::end_lvl()
     */
    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= "</ul>";
        $output .= "</div>";
    }

    /**
     * @see Walker::start_el()
     */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $title = $item->title;
        $permalink = $item->url;
        $output .= "<li class=\"nav-item\">";
        $output .= '<a href="' . $permalink . '" class="nav-link">'. $title .'</a>';
    }

    /**
     * Ends the element output, if needed.
     *
     */
    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>";
    }

} //
?>