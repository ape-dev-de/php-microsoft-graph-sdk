<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SynchronizationJob;
use ApeDevDe\MicrosoftGraphSdk\Models\SynchronizationJobCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SynchronizationJobQueryOptions;

/**
 * Request builder for SynchronizationJob
 */
class JobsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new SynchronizationJobQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param SynchronizationJobQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SynchronizationJobCollectionResponse
     */
    public function get(?SynchronizationJobQueryOptions $options = null, ?array $queryParameters = null): SynchronizationJobCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SynchronizationJobCollectionResponse::class);
    }

    /**
     * Create a new SynchronizationJob
     *
     * @param SynchronizationJob $item The item to create
     * @return SynchronizationJob
     */
    public function post(SynchronizationJob $item): SynchronizationJob
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, SynchronizationJob::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return SynchronizationJobItemRequestBuilder
     */
    public function byId(string $id): SynchronizationJobItemRequestBuilder
    {
        return new SynchronizationJobItemRequestBuilder($this->client, $this->buildPath($id));
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
    /**
     * Get validateCredentials request builder
     *
     * @return ValidateCredentialsRequestBuilder
     */
    public function validateCredentials(): ValidateCredentialsRequestBuilder
    {
        return new ValidateCredentialsRequestBuilder($this->client, $this->buildPath('validateCredentials'));
    }

}
