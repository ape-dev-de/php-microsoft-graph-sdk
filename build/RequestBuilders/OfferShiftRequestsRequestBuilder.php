<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OfferShiftRequest;
use ApeDevDe\MicrosoftGraphSdk\Models\OfferShiftRequestCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\OfferShiftRequestQueryOptions;

/**
 * Request builder for OfferShiftRequest
 */
class OfferShiftRequestsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new OfferShiftRequestQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param OfferShiftRequestQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return OfferShiftRequestCollectionResponse
     */
    public function get(?OfferShiftRequestQueryOptions $options = null, ?array $queryParameters = null): OfferShiftRequestCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, OfferShiftRequestCollectionResponse::class);
    }

    /**
     * Create a new OfferShiftRequest
     *
     * @param OfferShiftRequest $item The item to create
     * @return OfferShiftRequest
     */
    public function post(OfferShiftRequest $item): OfferShiftRequest
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, OfferShiftRequest::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return OfferShiftRequestItemRequestBuilder
     */
    public function byId(string $id): OfferShiftRequestItemRequestBuilder
    {
        return new OfferShiftRequestItemRequestBuilder($this->client, $this->buildPath($id));
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
