<?php
/**
 * Request
 *
 * @author zelang [8766520@gmail.com]
 */

namespace zelang\IntelligentSpeakers\Interfaces;

interface RequestInterface
{
	/**
	 * request handle
	 *
	 * @param array $input
	 *
	 * @return mixed
	 */
	public function handle(array $input);
}
