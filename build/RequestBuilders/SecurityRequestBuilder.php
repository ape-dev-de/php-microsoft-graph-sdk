<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Security;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SecurityQueryOptions;

/**
 * Request builder for Security collection
 */
class SecurityRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new SecurityQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param SecurityQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SecurityCollectionResponse
     */
    public function get(?SecurityQueryOptions $options = null, ?array $queryParameters = null): SecurityCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SecurityCollectionResponse::class);
    }

    /**
     * Create a new Security
     *
     * @param Security $item The item to create
     * @return Security
     */
    public function post(Security $item): Security
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Security::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return SecurityItemRequestBuilder
     */
    public function byId(string $id): SecurityItemRequestBuilder
    {
        return new SecurityItemRequestBuilder($this->client, $this->buildPath($id));
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
