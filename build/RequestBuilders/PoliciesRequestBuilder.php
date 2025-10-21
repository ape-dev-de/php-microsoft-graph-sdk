<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PolicyRoot;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PolicyRootQueryOptions;

/**
 * Request builder for PolicyRoot
 */
class PoliciesRequestBuilder extends BaseRequestBuilder
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
     * @param PolicyRootQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PolicyRoot
     */
    public function get(?PolicyRootQueryOptions $options = null, ?array $queryParameters = null): PolicyRoot
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PolicyRoot::class);
    }

    /**
     * Create a new PolicyRoot
     *
     * @param PolicyRoot $item The item to create
     * @return PolicyRoot
     */
    public function post(PolicyRoot $item): PolicyRoot
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, PolicyRoot::class);
    }

}
