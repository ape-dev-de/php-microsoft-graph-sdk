<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\UserDataSecurityAndGovernance;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\UserDataSecurityAndGovernanceQueryOptions;

/**
 * Request builder for UserDataSecurityAndGovernance
 */
class DataSecurityAndGovernanceRequestBuilder extends BaseRequestBuilder
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
     * @param UserDataSecurityAndGovernanceQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return UserDataSecurityAndGovernance
     */
    public function get(?UserDataSecurityAndGovernanceQueryOptions $options = null, ?array $queryParameters = null): UserDataSecurityAndGovernance
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, UserDataSecurityAndGovernance::class);
    }

    /**
     * Create a new UserDataSecurityAndGovernance
     *
     * @param UserDataSecurityAndGovernance $item The item to create
     * @return UserDataSecurityAndGovernance
     */
    public function post(UserDataSecurityAndGovernance $item): UserDataSecurityAndGovernance
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, UserDataSecurityAndGovernance::class);
    }
    /**
     * Get activities request builder
     *
     * @return ActivitiesRequestBuilder
     */
    public function activities(): ActivitiesRequestBuilder
    {
        return new ActivitiesRequestBuilder($this->client, $this->buildPath('activities'));
    }

    /**
     * Get processContent request builder
     *
     * @return ProcessContentRequestBuilder
     */
    public function processContent(): ProcessContentRequestBuilder
    {
        return new ProcessContentRequestBuilder($this->client, $this->buildPath('processContent'));
    }

    /**
     * Get protectionScopes request builder
     *
     * @return ProtectionScopesRequestBuilder
     */
    public function protectionScopes(): ProtectionScopesRequestBuilder
    {
        return new ProtectionScopesRequestBuilder($this->client, $this->buildPath('protectionScopes'));
    }

    /**
     * Get sensitivityLabels request builder
     *
     * @return SensitivityLabelsRequestBuilder
     */
    public function sensitivityLabels(): SensitivityLabelsRequestBuilder
    {
        return new SensitivityLabelsRequestBuilder($this->client, $this->buildPath('sensitivityLabels'));
    }

}
