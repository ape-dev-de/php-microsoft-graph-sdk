<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\UserActivity;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\UserActivityQueryOptions;

/**
 * Request builder for UserActivity
 */
class ActivityRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param UserActivityQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return UserActivity
     */
    public function get(?UserActivityQueryOptions $options = null, ?array $queryParameters = null): UserActivity
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, UserActivity::class);
    }

}
