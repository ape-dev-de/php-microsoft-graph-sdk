<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Report;
use ApeDevDe\MicrosoftGraphSdk\Models\ReportCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ReportQueryOptions;

/**
 * Request builder for Report collection
 */
class ReportsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ReportQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ReportQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ReportCollectionResponse
     */
    public function get(?ReportQueryOptions $options = null, ?array $queryParameters = null): ReportCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ReportCollectionResponse::class);
    }

    /**
     * Create a new Report
     *
     * @param Report $item The item to create
     * @return Report
     */
    public function post(Report $item): Report
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Report::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ReportItemRequestBuilder
     */
    public function byId(string $id): ReportItemRequestBuilder
    {
        return new ReportItemRequestBuilder($this->client, $this->buildPath($id));
    }

    /**
     * Get count of items in collection
     *
     * @return int
     */
    public function count(): int
    {
        $response = $this->client->get($this->buildPath('$count'));
        return (int) $response->getBody()->getContents();
    }

}
