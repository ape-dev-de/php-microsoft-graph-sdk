<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Extension;
use ApeDevDe\MicrosoftGraphSdk\Models\ExtensionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ExtensionQueryOptions;

/**
 * Request builder for Extension
 */
class ExtensionsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ExtensionQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ExtensionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ExtensionCollectionResponse
     */
    public function get(?ExtensionQueryOptions $options = null, ?array $queryParameters = null): ExtensionCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ExtensionCollectionResponse::class);
    }

    /**
     * Create a new Extension
     *
     * @param Extension $item The item to create
     * @return Extension
     */
    public function post(Extension $item): Extension
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Extension::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ExtensionItemRequestBuilder
     */
    public function byId(string $id): ExtensionItemRequestBuilder
    {
        return new ExtensionItemRequestBuilder($this->client, $this->buildPath($id));
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
