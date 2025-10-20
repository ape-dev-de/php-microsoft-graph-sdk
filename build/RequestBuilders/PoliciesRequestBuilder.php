<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Policie;
use ApeDevDe\MicrosoftGraphSdk\Models\PolicieCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PolicieQueryOptions;

/**
 * Request builder for Policie collection
 */
class PoliciesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new PolicieQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param PolicieQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PolicieCollectionResponse
     */
    public function get(?PolicieQueryOptions $options = null, ?array $queryParameters = null): PolicieCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PolicieCollectionResponse::class);
    }

    /**
     * Create a new Policie
     *
     * @param Policie $item The item to create
     * @return Policie
     */
    public function post(Policie $item): Policie
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Policie::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return PolicieItemRequestBuilder
     */
    public function byId(string $id): PolicieItemRequestBuilder
    {
        return new PolicieItemRequestBuilder($this->client, $this->buildPath($id));
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
