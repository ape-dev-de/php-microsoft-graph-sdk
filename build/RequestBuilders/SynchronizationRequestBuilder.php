<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Synchronization;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SynchronizationQueryOptions;

/**
 * Request builder for Synchronization
 */
class SynchronizationRequestBuilder extends BaseRequestBuilder
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
     * @param SynchronizationQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Synchronization
     */
    public function get(?SynchronizationQueryOptions $options = null, ?array $queryParameters = null): Synchronization
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Synchronization::class);
    }

    /**
     * Create a new Synchronization
     *
     * @param Synchronization $item The item to create
     * @return Synchronization
     */
    public function post(Synchronization $item): Synchronization
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Synchronization::class);
    }
    /**
     * Get jobs request builder
     *
     * @return JobsRequestBuilder
     */
    public function jobs(): JobsRequestBuilder
    {
        return new JobsRequestBuilder($this->client, $this->buildPath('jobs'));
    }

    /**
     * Get acquireAccessToken request builder
     *
     * @return AcquireAccessTokenRequestBuilder
     */
    public function acquireAccessToken(): AcquireAccessTokenRequestBuilder
    {
        return new AcquireAccessTokenRequestBuilder($this->client, $this->buildPath('acquireAccessToken'));
    }

    /**
     * Get secrets request builder
     *
     * @return SecretsRequestBuilder
     */
    public function secrets(): SecretsRequestBuilder
    {
        return new SecretsRequestBuilder($this->client, $this->buildPath('secrets'));
    }

    /**
     * Get templates request builder
     *
     * @return TemplatesRequestBuilder
     */
    public function templates(): TemplatesRequestBuilder
    {
        return new TemplatesRequestBuilder($this->client, $this->buildPath('templates'));
    }

}
