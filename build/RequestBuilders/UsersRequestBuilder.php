<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\User;
use ApeDevDe\MicrosoftGraphSdk\Models\UserCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\UserQueryOptions;

/**
 * Request builder for User
 */
class UsersRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new UserQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param UserQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return UserCollectionResponse
     */
    public function get(?UserQueryOptions $options = null, ?array $queryParameters = null): UserCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, UserCollectionResponse::class);
    }

    /**
     * Create a new User
     *
     * @param User $item The item to create
     * @return User
     */
    public function post(User $item): User
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, User::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return UserItemRequestBuilder
     */
    public function byId(string $id): UserItemRequestBuilder
    {
        return new UserItemRequestBuilder($this->client, $this->buildPath($id));
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
