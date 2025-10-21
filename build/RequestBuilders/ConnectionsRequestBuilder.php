<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsExternalConnection;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsExternalConnectionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ExternalConnectorsExternalConnectionQueryOptions;

/**
 * Request builder for ExternalConnectorsExternalConnection
 */
class ConnectionsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ExternalConnectorsExternalConnectionQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ExternalConnectorsExternalConnectionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ExternalConnectorsExternalConnectionCollectionResponse
     */
    public function get(?ExternalConnectorsExternalConnectionQueryOptions $options = null, ?array $queryParameters = null): ExternalConnectorsExternalConnectionCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ExternalConnectorsExternalConnectionCollectionResponse::class);
    }

    /**
     * Create a new ExternalConnectorsExternalConnection
     *
     * @param ExternalConnectorsExternalConnection $item The item to create
     * @return ExternalConnectorsExternalConnection
     */
    public function post(ExternalConnectorsExternalConnection $item): ExternalConnectorsExternalConnection
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ExternalConnectorsExternalConnection::class);
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
