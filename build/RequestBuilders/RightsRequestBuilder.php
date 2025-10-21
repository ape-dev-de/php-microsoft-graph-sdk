<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\UsageRightsIncluded;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\UsageRightsIncludedQueryOptions;

/**
 * Request builder for UsageRightsIncluded
 */
class RightsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param UsageRightsIncludedQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return UsageRightsIncluded
     */
    public function get(?UsageRightsIncludedQueryOptions $options = null, ?array $queryParameters = null): UsageRightsIncluded
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, UsageRightsIncluded::class);
    }

}
