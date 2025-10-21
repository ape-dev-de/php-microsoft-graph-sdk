<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PhoneAuthenticationMethod;
use ApeDevDe\MicrosoftGraphSdk\Models\PhoneAuthenticationMethodCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PhoneAuthenticationMethodQueryOptions;

/**
 * Request builder for PhoneAuthenticationMethod
 */
class PhoneMethodsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new PhoneAuthenticationMethodQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param PhoneAuthenticationMethodQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PhoneAuthenticationMethodCollectionResponse
     */
    public function get(?PhoneAuthenticationMethodQueryOptions $options = null, ?array $queryParameters = null): PhoneAuthenticationMethodCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PhoneAuthenticationMethodCollectionResponse::class);
    }

    /**
     * Create a new PhoneAuthenticationMethod
     *
     * @param PhoneAuthenticationMethod $item The item to create
     * @return PhoneAuthenticationMethod
     */
    public function post(PhoneAuthenticationMethod $item): PhoneAuthenticationMethod
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, PhoneAuthenticationMethod::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return PhoneAuthenticationMethodItemRequestBuilder
     */
    public function byId(string $id): PhoneAuthenticationMethodItemRequestBuilder
    {
        return new PhoneAuthenticationMethodItemRequestBuilder($this->client, $this->buildPath($id));
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
