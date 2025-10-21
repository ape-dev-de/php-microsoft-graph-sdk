<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ItemInsights;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ItemInsightsQueryOptions;

/**
 * Request builder for ItemInsights
 */
class InsightsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
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
     * @param ItemInsightsQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ItemInsights
     */
    public function get(?ItemInsightsQueryOptions $options = null, ?array $queryParameters = null): ItemInsights
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ItemInsights::class);
    }

    /**
     * Create a new ItemInsights
     *
     * @param ItemInsights $item The item to create
     * @return ItemInsights
     */
    public function post(ItemInsights $item): ItemInsights
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ItemInsights::class);
    }
    /**
     * Get shared request builder
     *
     * @return SharedRequestBuilder
     */
    public function shared(): SharedRequestBuilder
    {
        return new SharedRequestBuilder($this->client, $this->buildPath('shared'));
    }

    /**
     * Get trending request builder
     *
     * @return TrendingRequestBuilder
     */
    public function trending(): TrendingRequestBuilder
    {
        return new TrendingRequestBuilder($this->client, $this->buildPath('trending'));
    }

    /**
     * Get used request builder
     *
     * @return UsedRequestBuilder
     */
    public function used(): UsedRequestBuilder
    {
        return new UsedRequestBuilder($this->client, $this->buildPath('used'));
    }

}
