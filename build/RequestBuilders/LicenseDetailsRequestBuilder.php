<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\LicenseDetails;
use ApeDevDe\MicrosoftGraphSdk\Models\LicenseDetailsCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\LicenseDetailsQueryOptions;

/**
 * Request builder for LicenseDetails
 */
class LicenseDetailsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new LicenseDetailsQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param LicenseDetailsQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return LicenseDetailsCollectionResponse
     */
    public function get(?LicenseDetailsQueryOptions $options = null, ?array $queryParameters = null): LicenseDetailsCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, LicenseDetailsCollectionResponse::class);
    }

    /**
     * Create a new LicenseDetails
     *
     * @param LicenseDetails $item The item to create
     * @return LicenseDetails
     */
    public function post(LicenseDetails $item): LicenseDetails
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, LicenseDetails::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return LicenseDetailsItemRequestBuilder
     */
    public function byId(string $id): LicenseDetailsItemRequestBuilder
    {
        return new LicenseDetailsItemRequestBuilder($this->client, $this->buildPath($id));
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
