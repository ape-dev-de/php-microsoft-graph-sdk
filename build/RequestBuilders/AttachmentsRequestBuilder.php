<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Attachment;
use ApeDevDe\MicrosoftGraphSdk\Models\AttachmentCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AttachmentQueryOptions;

/**
 * Request builder for Attachment
 */
class AttachmentsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new AttachmentQueryOptions())->top(10)->select(['displayName', 'mail']))
     * 2. Array parameters: get(queryParameters: ['$top' => 10, '$select' => 'displayName,mail'])
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $filter: Filter results
     * - $orderby: Order results
     * - $top: Limit number of results
     * - $skip: Skip number of results
     * - $expand: Expand related resources
     * - $search: Search query
     * - $count: Include count of items
     *
     * @param AttachmentQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return AttachmentCollectionResponse
     */
    public function get(?AttachmentQueryOptions $options = null, ?array $queryParameters = null): AttachmentCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AttachmentCollectionResponse::class);
    }

    /**
     * Create a new Attachment
     *
     * @param Attachment $item The item to create
     * @return Attachment
     */
    public function post(Attachment $item): Attachment
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Attachment::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return AttachmentItemRequestBuilder
     */
    public function byId(string $id): AttachmentItemRequestBuilder
    {
        return new AttachmentItemRequestBuilder($this->client, $this->buildPath($id));
    }

    /**
     * Get count of items in collection
     *
     * @return int
     */
    public function count(): int
    {
        $response = $this->client->get($this->getFullPath() . '/$count');
        return (int) $response->getBody()->getContents();
    }
    /**
     * Get createUploadSession request builder
     *
     * @return CreateUploadSessionRequestBuilder
     */
    public function createUploadSession(): CreateUploadSessionRequestBuilder
    {
        return new CreateUploadSessionRequestBuilder($this->client, $this->buildPath('createUploadSession'));
    }

}
