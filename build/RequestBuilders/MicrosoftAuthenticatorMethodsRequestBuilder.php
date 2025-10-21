<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\MicrosoftAuthenticatorAuthenticationMethod;
use ApeDevDe\MicrosoftGraphSdk\Models\MicrosoftAuthenticatorAuthenticationMethodCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\MicrosoftAuthenticatorAuthenticationMethodQueryOptions;

/**
 * Request builder for MicrosoftAuthenticatorAuthenticationMethod
 */
class MicrosoftAuthenticatorMethodsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new MicrosoftAuthenticatorAuthenticationMethodQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param MicrosoftAuthenticatorAuthenticationMethodQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return MicrosoftAuthenticatorAuthenticationMethodCollectionResponse
     */
    public function get(?MicrosoftAuthenticatorAuthenticationMethodQueryOptions $options = null, ?array $queryParameters = null): MicrosoftAuthenticatorAuthenticationMethodCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, MicrosoftAuthenticatorAuthenticationMethodCollectionResponse::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder
     */
    public function byId(string $id): MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder
    {
        return new MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder($this->client, $this->buildPath($id));
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
