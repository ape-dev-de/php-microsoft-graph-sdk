<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Subscription;
use ApeDevDe\MicrosoftGraphSdk\Models\SubscriptionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SubscriptionQueryOptions;

/**
 * Request builder for Subscription collection
 */
class SubscriptionsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new SubscriptionQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param SubscriptionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SubscriptionCollectionResponse
     */
    public function get(?SubscriptionQueryOptions $options = null, ?array $queryParameters = null): SubscriptionCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SubscriptionCollectionResponse::class);
    }

    /**
     * Create a new Subscription
     *
     * @param Subscription $item The item to create
     * @return Subscription
     */
    public function post(Subscription $item): Subscription
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Subscription::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return SubscriptionItemRequestBuilder
     */
    public function byId(string $id): SubscriptionItemRequestBuilder
    {
        return new SubscriptionItemRequestBuilder($this->client, $this->buildPath($id));
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
