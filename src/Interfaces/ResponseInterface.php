<?php
/**
 * Response
 *
 * @author zelang [8766520@gmail.com]
 */

namespace zelang\IntelligentSpeakers\Interfaces;

interface ResponseInterface
{
	/**
	 * get response
	 *
	 * @param RequestInterface $request
	 * @param array            $params
	 *
	 * @return array
	 */
	public function getResponse(RequestInterface $request, array $params = []) : array;
}
