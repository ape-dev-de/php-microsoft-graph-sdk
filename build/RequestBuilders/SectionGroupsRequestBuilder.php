<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SectionGroup;
use ApeDevDe\MicrosoftGraphSdk\Models\SectionGroupCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SectionGroupQueryOptions;

/**
 * Request builder for SectionGroup
 */
class SectionGroupsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new SectionGroupQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param SectionGroupQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SectionGroupCollectionResponse
     */
    public function get(?SectionGroupQueryOptions $options = null, ?array $queryParameters = null): SectionGroupCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SectionGroupCollectionResponse::class);
    }

    /**
     * Create a new SectionGroup
     *
     * @param SectionGroup $item The item to create
     * @return SectionGroup
     */
    public function post(SectionGroup $item): SectionGroup
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, SectionGroup::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return SectionGroupItemRequestBuilder
     */
    public function byId(string $id): SectionGroupItemRequestBuilder
    {
        return new SectionGroupItemRequestBuilder($this->client, $this->buildPath($id));
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
