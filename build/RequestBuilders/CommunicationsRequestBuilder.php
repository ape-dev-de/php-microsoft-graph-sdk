<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Communication;
use ApeDevDe\MicrosoftGraphSdk\Models\CommunicationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\CommunicationQueryOptions;

/**
 * Request builder for Communication collection
 */
class CommunicationsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new CommunicationQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param CommunicationQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return CommunicationCollectionResponse
     */
    public function get(?CommunicationQueryOptions $options = null, ?array $queryParameters = null): CommunicationCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, CommunicationCollectionResponse::class);
    }

    /**
     * Create a new Communication
     *
     * @param Communication $item The item to create
     * @return Communication
     */
    public function post(Communication $item): Communication
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Communication::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return CommunicationItemRequestBuilder
     */
    public function byId(string $id): CommunicationItemRequestBuilder
    {
        return new CommunicationItemRequestBuilder($this->client, $this->buildPath($id));
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
