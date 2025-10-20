<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\EmployeeExperience;
use ApeDevDe\MicrosoftGraphSdk\Models\EmployeeExperienceCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\EmployeeExperienceQueryOptions;

/**
 * Request builder for EmployeeExperience collection
 */
class EmployeeExperienceRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new EmployeeExperienceQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param EmployeeExperienceQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return EmployeeExperienceCollectionResponse
     */
    public function get(?EmployeeExperienceQueryOptions $options = null, ?array $queryParameters = null): EmployeeExperienceCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, EmployeeExperienceCollectionResponse::class);
    }

    /**
     * Create a new EmployeeExperience
     *
     * @param EmployeeExperience $item The item to create
     * @return EmployeeExperience
     */
    public function post(EmployeeExperience $item): EmployeeExperience
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, EmployeeExperience::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return EmployeeExperienceItemRequestBuilder
     */
    public function byId(string $id): EmployeeExperienceItemRequestBuilder
    {
        return new EmployeeExperienceItemRequestBuilder($this->client, $this->buildPath($id));
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
