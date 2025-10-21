<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PlannerProgressTaskBoardTaskFormat;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PlannerProgressTaskBoardTaskFormatQueryOptions;

/**
 * Request builder for PlannerProgressTaskBoardTaskFormat
 */
class ProgressTaskBoardFormatRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param PlannerProgressTaskBoardTaskFormatQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PlannerProgressTaskBoardTaskFormat
     */
    public function get(?PlannerProgressTaskBoardTaskFormatQueryOptions $options = null, ?array $queryParameters = null): PlannerProgressTaskBoardTaskFormat
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PlannerProgressTaskBoardTaskFormat::class);
    }

}
