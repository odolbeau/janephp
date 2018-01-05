<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\Tests\Expected\Resource;

use Jane\OpenApiRuntime\Client\QueryParam;

trait DefaultResourceTrait
{
    /**
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function testHost(array $parameters = [], string $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam($this->streamFactory);
        $url = '/test-exception';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = $queryParam->buildHeaders($parameters);
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $response = $this->httpClient->sendRequest($request);

        return $response;
    }
}