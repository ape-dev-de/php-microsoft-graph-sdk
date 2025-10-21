<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DataPolicyOperation;
use ApeDevDe\MicrosoftGraphSdk\Models\DataPolicyOperationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DataPolicyOperationQueryOptions;

/**
 * Request builder for DataPolicyOperation
 */
class DataPolicyOperationsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new DataPolicyOperationQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param DataPolicyOperationQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DataPolicyOperationCollectionResponse
     */
    public function get(?DataPolicyOperationQueryOptions $options = null, ?array $queryParameters = null): DataPolicyOperationCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DataPolicyOperationCollectionResponse::class);
    }

    /**
     * Create a new DataPolicyOperation
     *
     * @param DataPolicyOperation $item The item to create
     * @return DataPolicyOperation
     */
    public function post(DataPolicyOperation $item): DataPolicyOperation
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, DataPolicyOperation::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return DataPolicyOperationItemRequestBuilder
     */
    public function byId(string $id): DataPolicyOperationItemRequestBuilder
    {
        return new DataPolicyOperationItemRequestBuilder($this->client, $this->buildPath($id));
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
