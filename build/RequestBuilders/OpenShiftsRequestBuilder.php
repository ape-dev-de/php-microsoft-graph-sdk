<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OpenShift;
use ApeDevDe\MicrosoftGraphSdk\Models\OpenShiftCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\OpenShiftQueryOptions;

/**
 * Request builder for OpenShift
 */
class OpenShiftsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new OpenShiftQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param OpenShiftQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return OpenShiftCollectionResponse
     */
    public function get(?OpenShiftQueryOptions $options = null, ?array $queryParameters = null): OpenShiftCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, OpenShiftCollectionResponse::class);
    }

    /**
     * Create a new OpenShift
     *
     * @param OpenShift $item The item to create
     * @return OpenShift
     */
    public function post(OpenShift $item): OpenShift
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, OpenShift::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return OpenShiftItemRequestBuilder
     */
    public function byId(string $id): OpenShiftItemRequestBuilder
    {
        return new OpenShiftItemRequestBuilder($this->client, $this->buildPath($id));
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
