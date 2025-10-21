<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PlannerAssignedToTaskBoardTaskFormat;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PlannerAssignedToTaskBoardTaskFormatQueryOptions;

/**
 * Request builder for PlannerAssignedToTaskBoardTaskFormat
 */
class AssignedToTaskBoardFormatRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param PlannerAssignedToTaskBoardTaskFormatQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PlannerAssignedToTaskBoardTaskFormat
     */
    public function get(?PlannerAssignedToTaskBoardTaskFormatQueryOptions $options = null, ?array $queryParameters = null): PlannerAssignedToTaskBoardTaskFormat
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PlannerAssignedToTaskBoardTaskFormat::class);
    }

}
