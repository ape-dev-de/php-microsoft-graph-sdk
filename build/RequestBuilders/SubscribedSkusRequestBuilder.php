<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SubscribedSku;
use ApeDevDe\MicrosoftGraphSdk\Models\SubscribedSkuCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SubscribedSkuQueryOptions;

/**
 * Request builder for SubscribedSku collection
 */
class SubscribedSkusRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new SubscribedSkuQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param SubscribedSkuQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SubscribedSkuCollectionResponse
     */
    public function get(?SubscribedSkuQueryOptions $options = null, ?array $queryParameters = null): SubscribedSkuCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SubscribedSkuCollectionResponse::class);
    }

    /**
     * Create a new SubscribedSku
     *
     * @param SubscribedSku $item The item to create
     * @return SubscribedSku
     */
    public function post(SubscribedSku $item): SubscribedSku
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, SubscribedSku::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return SubscribedSkuItemRequestBuilder
     */
    public function byId(string $id): SubscribedSkuItemRequestBuilder
    {
        return new SubscribedSkuItemRequestBuilder($this->client, $this->buildPath($id));
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
