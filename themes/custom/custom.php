<?php
	namespace Grav\Theme;

	use Grav\Common\Grav;
	use Grav\Common\Theme;

	class Custom extends Hadron {
		public static function getSubscribedEvents() {
			return [
				'onTwigLoader' => ['onTwigLoader', 0],
				'onShortcodeHandlers' => ['onShortcodeHandlers', 0],
			];
		}

		public function onTwigLoader() {
			parent::onTwigLoader();

			// add parent theme as namespace to twig
			$parentThemeName = 'hadron';
			$parentThemePath = Grav::instance()['locator']->findResource('themes://' . $parentThemeName);
			$this->grav['twig']->addPath($parentThemePath . DIRECTORY_SEPARATOR . 'templates', $parentThemeName);
		}

		public function onShortcodeHandlers() {
			$this->grav['shortcode']->registerAllShortcodes('user://themes/hadron/shortcodes');
		}
	}
