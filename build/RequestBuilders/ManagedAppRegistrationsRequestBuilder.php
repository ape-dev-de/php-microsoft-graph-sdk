<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ManagedAppRegistration;
use ApeDevDe\MicrosoftGraphSdk\Models\ManagedAppRegistrationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ManagedAppRegistrationQueryOptions;

/**
 * Request builder for ManagedAppRegistration
 */
class ManagedAppRegistrationsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ManagedAppRegistrationQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ManagedAppRegistrationQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ManagedAppRegistrationCollectionResponse
     */
    public function get(?ManagedAppRegistrationQueryOptions $options = null, ?array $queryParameters = null): ManagedAppRegistrationCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ManagedAppRegistrationCollectionResponse::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ManagedAppRegistrationItemRequestBuilder
     */
    public function byId(string $id): ManagedAppRegistrationItemRequestBuilder
    {
        return new ManagedAppRegistrationItemRequestBuilder($this->client, $this->buildPath($id));
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
