<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationMethodsPolicy;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AuthenticationMethodsPolicyQueryOptions;

/**
 * Request builder for AuthenticationMethodsPolicy
 */
class AuthenticationMethodsPolicyRequestBuilder extends BaseRequestBuilder
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
     * @param AuthenticationMethodsPolicyQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return AuthenticationMethodsPolicy
     */
    public function get(?AuthenticationMethodsPolicyQueryOptions $options = null, ?array $queryParameters = null): AuthenticationMethodsPolicy
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AuthenticationMethodsPolicy::class);
    }

    /**
     * Create a new AuthenticationMethodsPolicy
     *
     * @param AuthenticationMethodsPolicy $item The item to create
     * @return AuthenticationMethodsPolicy
     */
    public function post(AuthenticationMethodsPolicy $item): AuthenticationMethodsPolicy
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, AuthenticationMethodsPolicy::class);
    }

}
