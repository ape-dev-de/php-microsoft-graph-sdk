<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Contract;
use ApeDevDe\MicrosoftGraphSdk\Models\ContractCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ContractQueryOptions;

/**
 * Request builder for Contract collection
 */
class ContractsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ContractQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ContractQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ContractCollectionResponse
     */
    public function get(?ContractQueryOptions $options = null, ?array $queryParameters = null): ContractCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ContractCollectionResponse::class);
    }

    /**
     * Create a new Contract
     *
     * @param Contract $item The item to create
     * @return Contract
     */
    public function post(Contract $item): Contract
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Contract::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ContractItemRequestBuilder
     */
    public function byId(string $id): ContractItemRequestBuilder
    {
        return new ContractItemRequestBuilder($this->client, $this->buildPath($id));
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
