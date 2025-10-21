<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\EmailAuthenticationMethod;
use ApeDevDe\MicrosoftGraphSdk\Models\EmailAuthenticationMethodCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\EmailAuthenticationMethodQueryOptions;

/**
 * Request builder for EmailAuthenticationMethod
 */
class EmailMethodsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new EmailAuthenticationMethodQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param EmailAuthenticationMethodQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return EmailAuthenticationMethodCollectionResponse
     */
    public function get(?EmailAuthenticationMethodQueryOptions $options = null, ?array $queryParameters = null): EmailAuthenticationMethodCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, EmailAuthenticationMethodCollectionResponse::class);
    }

    /**
     * Create a new EmailAuthenticationMethod
     *
     * @param EmailAuthenticationMethod $item The item to create
     * @return EmailAuthenticationMethod
     */
    public function post(EmailAuthenticationMethod $item): EmailAuthenticationMethod
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, EmailAuthenticationMethod::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return EmailAuthenticationMethodItemRequestBuilder
     */
    public function byId(string $id): EmailAuthenticationMethodItemRequestBuilder
    {
        return new EmailAuthenticationMethodItemRequestBuilder($this->client, $this->buildPath($id));
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
