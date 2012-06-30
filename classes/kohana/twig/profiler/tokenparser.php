<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Parses a {% profiler %} tag
 *
 * Based on Kohana_Twig_Request_TokenParser
 *
 * @package kohana-twig
 * @author MasterCJ
 */
class Kohana_Twig_Profiler_TokenParser extends Twig_TokenParser
{
	/**
	 * @param Twig_Token $token
	 * @return object
	 * @author Marcel Beck <marcel.beck@mbeck.org>
	 */
	public function parse(Twig_Token $token)
	{
		$lineno = $token->getLine();

		$this->parser->getStream()->expect(Twig_Token::BLOCK_END_TYPE);

		return new Kohana_Twig_Profiler_Node(array(),array(), $lineno, $this->getTag());
	}

	/**
	 * @return string
	 * @author Marcel Beck <marcel.beck@mbeck.org>
	 */
	public function getTag()
	{
		return 'profiler';
	}
}