<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WindowsHelloForBusinessAuthenticationMethod;
use ApeDevDe\MicrosoftGraphSdk\Models\WindowsHelloForBusinessAuthenticationMethodCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WindowsHelloForBusinessAuthenticationMethodQueryOptions;

/**
 * Request builder for WindowsHelloForBusinessAuthenticationMethod
 */
class WindowsHelloForBusinessMethodsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new WindowsHelloForBusinessAuthenticationMethodQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param WindowsHelloForBusinessAuthenticationMethodQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WindowsHelloForBusinessAuthenticationMethodCollectionResponse
     */
    public function get(?WindowsHelloForBusinessAuthenticationMethodQueryOptions $options = null, ?array $queryParameters = null): WindowsHelloForBusinessAuthenticationMethodCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WindowsHelloForBusinessAuthenticationMethodCollectionResponse::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder
     */
    public function byId(string $id): WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder
    {
        return new WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder($this->client, $this->buildPath($id));
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
