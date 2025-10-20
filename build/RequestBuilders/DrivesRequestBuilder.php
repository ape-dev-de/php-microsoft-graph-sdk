<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Drive;
use ApeDevDe\MicrosoftGraphSdk\Models\DriveCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DriveQueryOptions;

/**
 * Request builder for Drive collection
 */
class DrivesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new DriveQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param DriveQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DriveCollectionResponse
     */
    public function get(?DriveQueryOptions $options = null, ?array $queryParameters = null): DriveCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DriveCollectionResponse::class);
    }

    /**
     * Create a new Drive
     *
     * @param Drive $item The item to create
     * @return Drive
     */
    public function post(Drive $item): Drive
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Drive::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return DriveItemRequestBuilder
     */
    public function byId(string $id): DriveItemRequestBuilder
    {
        return new DriveItemRequestBuilder($this->client, $this->buildPath($id));
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
