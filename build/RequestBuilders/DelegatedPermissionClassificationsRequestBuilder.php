<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DelegatedPermissionClassification;
use ApeDevDe\MicrosoftGraphSdk\Models\DelegatedPermissionClassificationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DelegatedPermissionClassificationQueryOptions;

/**
 * Request builder for DelegatedPermissionClassification
 */
class DelegatedPermissionClassificationsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new DelegatedPermissionClassificationQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param DelegatedPermissionClassificationQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DelegatedPermissionClassificationCollectionResponse
     */
    public function get(?DelegatedPermissionClassificationQueryOptions $options = null, ?array $queryParameters = null): DelegatedPermissionClassificationCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DelegatedPermissionClassificationCollectionResponse::class);
    }

    /**
     * Create a new DelegatedPermissionClassification
     *
     * @param DelegatedPermissionClassification $item The item to create
     * @return DelegatedPermissionClassification
     */
    public function post(DelegatedPermissionClassification $item): DelegatedPermissionClassification
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, DelegatedPermissionClassification::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return DelegatedPermissionClassificationItemRequestBuilder
     */
    public function byId(string $id): DelegatedPermissionClassificationItemRequestBuilder
    {
        return new DelegatedPermissionClassificationItemRequestBuilder($this->client, $this->buildPath($id));
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
