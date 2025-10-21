<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Group;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\GroupQueryOptions;

/**
 * Request builder for Group
 */
class GroupRequestBuilder extends BaseRequestBuilder
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
     * @param GroupQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Group
     */
    public function get(?GroupQueryOptions $options = null, ?array $queryParameters = null): Group
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Group::class);
    }
    /**
     * Get serviceProvisioningErrors request builder
     *
     * @return ServiceProvisioningErrorsRequestBuilder
     */
    public function serviceProvisioningErrors(): ServiceProvisioningErrorsRequestBuilder
    {
        return new ServiceProvisioningErrorsRequestBuilder($this->client, $this->buildPath('serviceProvisioningErrors'));
    }

}
