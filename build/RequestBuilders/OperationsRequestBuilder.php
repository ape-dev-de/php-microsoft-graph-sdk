<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsConnectionOperation;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsConnectionOperationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ExternalConnectorsConnectionOperationQueryOptions;

/**
 * Request builder for ExternalConnectorsConnectionOperation
 */
class OperationsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ExternalConnectorsConnectionOperationQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ExternalConnectorsConnectionOperationQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ExternalConnectorsConnectionOperationCollectionResponse
     */
    public function get(?ExternalConnectorsConnectionOperationQueryOptions $options = null, ?array $queryParameters = null): ExternalConnectorsConnectionOperationCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ExternalConnectorsConnectionOperationCollectionResponse::class);
    }

    /**
     * Create a new ExternalConnectorsConnectionOperation
     *
     * @param ExternalConnectorsConnectionOperation $item The item to create
     * @return ExternalConnectorsConnectionOperation
     */
    public function post(ExternalConnectorsConnectionOperation $item): ExternalConnectorsConnectionOperation
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ExternalConnectorsConnectionOperation::class);
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
