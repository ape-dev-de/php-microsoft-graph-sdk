<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OpenShiftChangeRequest;
use ApeDevDe\MicrosoftGraphSdk\Models\OpenShiftChangeRequestCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\OpenShiftChangeRequestQueryOptions;

/**
 * Request builder for OpenShiftChangeRequest
 */
class OpenShiftChangeRequestsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new OpenShiftChangeRequestQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param OpenShiftChangeRequestQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return OpenShiftChangeRequestCollectionResponse
     */
    public function get(?OpenShiftChangeRequestQueryOptions $options = null, ?array $queryParameters = null): OpenShiftChangeRequestCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, OpenShiftChangeRequestCollectionResponse::class);
    }

    /**
     * Create a new OpenShiftChangeRequest
     *
     * @param OpenShiftChangeRequest $item The item to create
     * @return OpenShiftChangeRequest
     */
    public function post(OpenShiftChangeRequest $item): OpenShiftChangeRequest
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, OpenShiftChangeRequest::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return OpenShiftChangeRequestItemRequestBuilder
     */
    public function byId(string $id): OpenShiftChangeRequestItemRequestBuilder
    {
        return new OpenShiftChangeRequestItemRequestBuilder($this->client, $this->buildPath($id));
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

}
