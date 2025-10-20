<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Education;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\EducationQueryOptions;

/**
 * Request builder for Education collection
 */
class EducationRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new EducationQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param EducationQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return EducationCollectionResponse
     */
    public function get(?EducationQueryOptions $options = null, ?array $queryParameters = null): EducationCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, EducationCollectionResponse::class);
    }

    /**
     * Create a new Education
     *
     * @param Education $item The item to create
     * @return Education
     */
    public function post(Education $item): Education
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Education::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return EducationItemRequestBuilder
     */
    public function byId(string $id): EducationItemRequestBuilder
    {
        return new EducationItemRequestBuilder($this->client, $this->buildPath($id));
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
