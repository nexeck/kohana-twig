<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Token Parser for {% form.method %}
 *
 * @package Kohana/Twig/HTML
 * @author  Jonathan Geiger
 */
class Kohana_Twig_HTML_TokenParser extends Kohana_Twig_Helper_TokenParser {

	/**
	 * @return string
	 * @author Jonathan Geiger
	 */
	public function getTag()
	{
		return 'html';
	}

}
