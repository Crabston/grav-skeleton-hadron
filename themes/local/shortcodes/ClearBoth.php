<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

// TODO: add to hadron theme, document
class ClearBoth extends Shortcode {
    public function init()     {
        $this->shortcode->getHandlers()->add('clearboth', function(ShortcodeInterface $sc) {
			return "<div style='clear: both;'></div>";
        });
    }
}
