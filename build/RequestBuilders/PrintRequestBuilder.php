<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Print;
use ApeDevDe\MicrosoftGraphSdk\Models\PrintCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PrintQueryOptions;

/**
 * Request builder for Print collection
 */
class PrintRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new PrintQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param PrintQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PrintCollectionResponse
     */
    public function get(?PrintQueryOptions $options = null, ?array $queryParameters = null): PrintCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PrintCollectionResponse::class);
    }

    /**
     * Create a new Print
     *
     * @param Print $item The item to create
     * @return Print
     */
    public function post(Print $item): Print
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Print::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return PrintItemRequestBuilder
     */
    public function byId(string $id): PrintItemRequestBuilder
    {
        return new PrintItemRequestBuilder($this->client, $this->buildPath($id));
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
