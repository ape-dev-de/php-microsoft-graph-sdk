<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SolutionsRoot;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SolutionsRootQueryOptions;

/**
 * Request builder for SolutionsRoot
 */
class SolutionsRequestBuilder extends BaseRequestBuilder
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
     * @param SolutionsRootQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SolutionsRoot
     */
    public function get(?SolutionsRootQueryOptions $options = null, ?array $queryParameters = null): SolutionsRoot
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SolutionsRoot::class);
    }

    /**
     * Create a new SolutionsRoot
     *
     * @param SolutionsRoot $item The item to create
     * @return SolutionsRoot
     */
    public function post(SolutionsRoot $item): SolutionsRoot
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, SolutionsRoot::class);
    }

}
