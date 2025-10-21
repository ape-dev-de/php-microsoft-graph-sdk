<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PlannerBucketTaskBoardTaskFormat;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PlannerBucketTaskBoardTaskFormatQueryOptions;

/**
 * Request builder for PlannerBucketTaskBoardTaskFormat
 */
class BucketTaskBoardFormatRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param PlannerBucketTaskBoardTaskFormatQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PlannerBucketTaskBoardTaskFormat
     */
    public function get(?PlannerBucketTaskBoardTaskFormatQueryOptions $options = null, ?array $queryParameters = null): PlannerBucketTaskBoardTaskFormat
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PlannerBucketTaskBoardTaskFormat::class);
    }

}
