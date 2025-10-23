<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Post;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AttachmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ExtensionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\InReplyToRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ForwardRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ReplyRequestBuilder;

/**
 * Request builder for {post-id}
 */
class PostRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get posts from groups
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Post
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Post
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to Post
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Post($data);
    }
    /**
     * Navigate to attachments
     *
     * @return AttachmentsRequestBuilder
     */
    public function attachments(): AttachmentsRequestBuilder
    {
        return new AttachmentsRequestBuilder($this->client, $this->requestUrl . '/attachments');
    }
    /**
     * Navigate to extensions
     *
     * @return ExtensionsRequestBuilder
     */
    public function extensions(): ExtensionsRequestBuilder
    {
        return new ExtensionsRequestBuilder($this->client, $this->requestUrl . '/extensions');
    }
    /**
     * Navigate to inReplyTo
     *
     * @return InReplyToRequestBuilder
     */
    public function inReplyTo(): InReplyToRequestBuilder
    {
        return new InReplyToRequestBuilder($this->client, $this->requestUrl . '/inReplyTo');
    }
    /**
     * Navigate to forward
     *
     * @return ForwardRequestBuilder
     */
    public function forward(): ForwardRequestBuilder
    {
        return new ForwardRequestBuilder($this->client, $this->requestUrl . '/forward');
    }
    /**
     * Navigate to reply
     *
     * @return ReplyRequestBuilder
     */
    public function reply(): ReplyRequestBuilder
    {
        return new ReplyRequestBuilder($this->client, $this->requestUrl . '/reply');
    }
}
