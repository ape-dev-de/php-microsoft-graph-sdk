<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernance;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\IdentityGovernanceQueryOptions;

/**
 * Request builder for IdentityGovernance
 */
class IdentityGovernanceRequestBuilder extends BaseRequestBuilder
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
     * @param IdentityGovernanceQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return IdentityGovernance
     */
    public function get(?IdentityGovernanceQueryOptions $options = null, ?array $queryParameters = null): IdentityGovernance
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, IdentityGovernance::class);
    }

    /**
     * Create a new IdentityGovernance
     *
     * @param IdentityGovernance $item The item to create
     * @return IdentityGovernance
     */
    public function post(IdentityGovernance $item): IdentityGovernance
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, IdentityGovernance::class);
    }

}
