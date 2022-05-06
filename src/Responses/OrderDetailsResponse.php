<?php

namespace Zorb\Onway\Responses;

use Illuminate\Http\Client\Response;

class OrderDetailsResponse extends Response
{
	/**
	 * @param Response $response
	 */
	public function __construct(Response $response)
	{
		parent::__construct($response->toPsrResponse());
	}
}
