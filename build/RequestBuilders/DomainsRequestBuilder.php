<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Domain;
use ApeDevDe\MicrosoftGraphSdk\Models\DomainCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DomainQueryOptions;

/**
 * Request builder for Domain
 */
class DomainsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new DomainQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param DomainQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DomainCollectionResponse
     */
    public function get(?DomainQueryOptions $options = null, ?array $queryParameters = null): DomainCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DomainCollectionResponse::class);
    }

    /**
     * Create a new Domain
     *
     * @param Domain $item The item to create
     * @return Domain
     */
    public function post(Domain $item): Domain
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Domain::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return DomainItemRequestBuilder
     */
    public function byId(string $id): DomainItemRequestBuilder
    {
        return new DomainItemRequestBuilder($this->client, $this->buildPath($id));
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
