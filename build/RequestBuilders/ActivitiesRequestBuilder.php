<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsExternalActivity;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsExternalActivityCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ExternalConnectorsExternalActivityQueryOptions;

/**
 * Request builder for ExternalConnectorsExternalActivity
 */
class ActivitiesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ExternalConnectorsExternalActivityQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ExternalConnectorsExternalActivityQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ExternalConnectorsExternalActivityCollectionResponse
     */
    public function get(?ExternalConnectorsExternalActivityQueryOptions $options = null, ?array $queryParameters = null): ExternalConnectorsExternalActivityCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ExternalConnectorsExternalActivityCollectionResponse::class);
    }

    /**
     * Create a new ExternalConnectorsExternalActivity
     *
     * @param ExternalConnectorsExternalActivity $item The item to create
     * @return ExternalConnectorsExternalActivity
     */
    public function post(ExternalConnectorsExternalActivity $item): ExternalConnectorsExternalActivity
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ExternalConnectorsExternalActivity::class);
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
