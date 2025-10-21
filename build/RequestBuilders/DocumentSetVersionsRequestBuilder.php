<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DocumentSetVersion;
use ApeDevDe\MicrosoftGraphSdk\Models\DocumentSetVersionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DocumentSetVersionQueryOptions;

/**
 * Request builder for DocumentSetVersion
 */
class DocumentSetVersionsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new DocumentSetVersionQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param DocumentSetVersionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DocumentSetVersionCollectionResponse
     */
    public function get(?DocumentSetVersionQueryOptions $options = null, ?array $queryParameters = null): DocumentSetVersionCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DocumentSetVersionCollectionResponse::class);
    }

    /**
     * Create a new DocumentSetVersion
     *
     * @param DocumentSetVersion $item The item to create
     * @return DocumentSetVersion
     */
    public function post(DocumentSetVersion $item): DocumentSetVersion
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, DocumentSetVersion::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return DocumentSetVersionItemRequestBuilder
     */
    public function byId(string $id): DocumentSetVersionItemRequestBuilder
    {
        return new DocumentSetVersionItemRequestBuilder($this->client, $this->buildPath($id));
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

}
