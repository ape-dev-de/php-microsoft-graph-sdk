<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Site;
use ApeDevDe\MicrosoftGraphSdk\Models\SiteCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SiteQueryOptions;

/**
 * Request builder for Site
 */
class FollowedSitesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new SiteQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param SiteQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SiteCollectionResponse
     */
    public function get(?SiteQueryOptions $options = null, ?array $queryParameters = null): SiteCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SiteCollectionResponse::class);
    }

    /**
     * Create a new Site
     *
     * @param Site $item The item to create
     * @return Site
     */
    public function post(Site $item): Site
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Site::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return SiteItemRequestBuilder
     */
    public function byId(string $id): SiteItemRequestBuilder
    {
        return new SiteItemRequestBuilder($this->client, $this->buildPath($id));
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
    /**
     * Get add request builder
     *
     * @return AddRequestBuilder
     */
    public function add(): AddRequestBuilder
    {
        return new AddRequestBuilder($this->client, $this->buildPath('add'));
    }

    /**
     * Get remove request builder
     *
     * @return RemoveRequestBuilder
     */
    public function remove(): RemoveRequestBuilder
    {
        return new RemoveRequestBuilder($this->client, $this->buildPath('remove'));
    }

}
