<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ReportRoot;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ReportRootQueryOptions;

/**
 * Request builder for ReportRoot
 */
class ReportsRequestBuilder extends BaseRequestBuilder
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
     * @param ReportRootQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ReportRoot
     */
    public function get(?ReportRootQueryOptions $options = null, ?array $queryParameters = null): ReportRoot
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ReportRoot::class);
    }

    /**
     * Create a new ReportRoot
     *
     * @param ReportRoot $item The item to create
     * @return ReportRoot
     */
    public function post(ReportRoot $item): ReportRoot
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ReportRoot::class);
    }

}
