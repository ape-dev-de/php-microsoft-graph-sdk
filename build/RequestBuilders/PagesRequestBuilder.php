<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OnenotePage;
use ApeDevDe\MicrosoftGraphSdk\Models\OnenotePageCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\OnenotePageQueryOptions;

/**
 * Request builder for OnenotePage
 */
class PagesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new OnenotePageQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param OnenotePageQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return OnenotePageCollectionResponse
     */
    public function get(?OnenotePageQueryOptions $options = null, ?array $queryParameters = null): OnenotePageCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, OnenotePageCollectionResponse::class);
    }

    /**
     * Create a new OnenotePage
     *
     * @param OnenotePage $item The item to create
     * @return OnenotePage
     */
    public function post(OnenotePage $item): OnenotePage
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, OnenotePage::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return OnenotePageItemRequestBuilder
     */
    public function byId(string $id): OnenotePageItemRequestBuilder
    {
        return new OnenotePageItemRequestBuilder($this->client, $this->buildPath($id));
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
