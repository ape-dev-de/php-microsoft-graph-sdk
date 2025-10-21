<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PlannerTaskDetails;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PlannerTaskDetailsQueryOptions;

/**
 * Request builder for PlannerTaskDetails
 */
class DetailsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param PlannerTaskDetailsQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PlannerTaskDetails
     */
    public function get(?PlannerTaskDetailsQueryOptions $options = null, ?array $queryParameters = null): PlannerTaskDetails
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PlannerTaskDetails::class);
    }

}
