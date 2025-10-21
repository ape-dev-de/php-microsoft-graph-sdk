<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsExternalItem;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsExternalItemCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ExternalConnectorsExternalItemQueryOptions;

/**
 * Request builder for ExternalConnectorsExternalItem
 */
class ItemsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ExternalConnectorsExternalItemQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ExternalConnectorsExternalItemQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ExternalConnectorsExternalItemCollectionResponse
     */
    public function get(?ExternalConnectorsExternalItemQueryOptions $options = null, ?array $queryParameters = null): ExternalConnectorsExternalItemCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ExternalConnectorsExternalItemCollectionResponse::class);
    }

    /**
     * Create a new ExternalConnectorsExternalItem
     *
     * @param ExternalConnectorsExternalItem $item The item to create
     * @return ExternalConnectorsExternalItem
     */
    public function post(ExternalConnectorsExternalItem $item): ExternalConnectorsExternalItem
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ExternalConnectorsExternalItem::class);
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
