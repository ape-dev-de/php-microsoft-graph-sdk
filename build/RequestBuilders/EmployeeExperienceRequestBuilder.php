<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\EmployeeExperience;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\EmployeeExperienceQueryOptions;

/**
 * Request builder for EmployeeExperience
 */
class EmployeeExperienceRequestBuilder extends BaseRequestBuilder
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
     * @param EmployeeExperienceQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return EmployeeExperience
     */
    public function get(?EmployeeExperienceQueryOptions $options = null, ?array $queryParameters = null): EmployeeExperience
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, EmployeeExperience::class);
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

}
