<?php

namespace Jane\OpenApi2\Tests\Expected\Endpoint;

class Test extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    /**
     * 
     *
     * @param \Jane\OpenApi2\Tests\Expected\Model\TestPostBody $body 
     */
    public function __construct(\Jane\OpenApi2\Tests\Expected\Model\TestPostBody $body)
    {
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/test';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}