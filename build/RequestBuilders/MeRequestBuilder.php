<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\User;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\UserQueryOptions;

/**
 * Request builder for User
 */
class MeRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
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
     * @return User
     */
    public function get(?UserQueryOptions $options = null, ?array $queryParameters = null): User
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, User::class);
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

}
