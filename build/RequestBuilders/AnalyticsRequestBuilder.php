<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ItemAnalytics;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ItemAnalyticsQueryOptions;

/**
 * Request builder for ItemAnalytics
 */
class AnalyticsRequestBuilder extends BaseRequestBuilder
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
     * @param ItemAnalyticsQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ItemAnalytics
     */
    public function get(?ItemAnalyticsQueryOptions $options = null, ?array $queryParameters = null): ItemAnalytics
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ItemAnalytics::class);
    }

    /**
     * Create a new ItemAnalytics
     *
     * @param ItemAnalytics $item The item to create
     * @return ItemAnalytics
     */
    public function post(ItemAnalytics $item): ItemAnalytics
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ItemAnalytics::class);
    }
    /**
     * Get allTime request builder
     *
     * @return AllTimeRequestBuilder
     */
    public function allTime(): AllTimeRequestBuilder
    {
        return new AllTimeRequestBuilder($this->client, $this->buildPath('allTime'));
    }

    /**
     * Get itemActivityStats request builder
     *
     * @return ItemActivityStatsRequestBuilder
     */
    public function itemActivityStats(): ItemActivityStatsRequestBuilder
    {
        return new ItemActivityStatsRequestBuilder($this->client, $this->buildPath('itemActivityStats'));
    }

    /**
     * Get lastSevenDays request builder
     *
     * @return LastSevenDaysRequestBuilder
     */
    public function lastSevenDays(): LastSevenDaysRequestBuilder
    {
        return new LastSevenDaysRequestBuilder($this->client, $this->buildPath('lastSevenDays'));
    }

}
