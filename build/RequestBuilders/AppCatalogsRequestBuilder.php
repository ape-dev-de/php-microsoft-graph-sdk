<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AppCatalog;
use ApeDevDe\MicrosoftGraphSdk\Models\AppCatalogCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AppCatalogQueryOptions;

/**
 * Request builder for AppCatalog collection
 */
class AppCatalogsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new AppCatalogQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param AppCatalogQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return AppCatalogCollectionResponse
     */
    public function get(?AppCatalogQueryOptions $options = null, ?array $queryParameters = null): AppCatalogCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AppCatalogCollectionResponse::class);
    }

    /**
     * Create a new AppCatalog
     *
     * @param AppCatalog $item The item to create
     * @return AppCatalog
     */
    public function post(AppCatalog $item): AppCatalog
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, AppCatalog::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return AppCatalogItemRequestBuilder
     */
    public function byId(string $id): AppCatalogItemRequestBuilder
    {
        return new AppCatalogItemRequestBuilder($this->client, $this->buildPath($id));
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
