<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\UserProtectionScopeContainer;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\UserProtectionScopeContainerQueryOptions;

/**
 * Request builder for UserProtectionScopeContainer
 */
class ProtectionScopesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param UserProtectionScopeContainerQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return UserProtectionScopeContainer
     */
    public function get(?UserProtectionScopeContainerQueryOptions $options = null, ?array $queryParameters = null): UserProtectionScopeContainer
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, UserProtectionScopeContainer::class);
    }

    /**
     * Create a new UserProtectionScopeContainer
     *
     * @param UserProtectionScopeContainer $item The item to create
     * @return UserProtectionScopeContainer
     */
    public function post(UserProtectionScopeContainer $item): UserProtectionScopeContainer
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, UserProtectionScopeContainer::class);
    }
    /**
     * Get compute request builder
     *
     * @return ComputeRequestBuilder
     */
    public function compute(): ComputeRequestBuilder
    {
        return new ComputeRequestBuilder($this->client, $this->buildPath('compute'));
    }

}
