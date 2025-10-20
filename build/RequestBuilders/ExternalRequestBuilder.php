<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\External;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ExternalQueryOptions;

/**
 * Request builder for External collection
 */
class ExternalRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ExternalQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ExternalQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ExternalCollectionResponse
     */
    public function get(?ExternalQueryOptions $options = null, ?array $queryParameters = null): ExternalCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ExternalCollectionResponse::class);
    }

    /**
     * Create a new External
     *
     * @param External $item The item to create
     * @return External
     */
    public function post(External $item): External
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, External::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ExternalItemRequestBuilder
     */
    public function byId(string $id): ExternalItemRequestBuilder
    {
        return new ExternalItemRequestBuilder($this->client, $this->buildPath($id));
    }

    /**
     * Get count of items in collection
     *
     * @return int
     */
    public function count(): int
    {
        $response = $this->client->get($this->buildPath('$count'));
        return (int) $response->getBody()->getContents();
    }

}
