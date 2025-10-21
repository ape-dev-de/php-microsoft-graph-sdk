<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\UserInsightsSettings;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\UserInsightsSettingsQueryOptions;

/**
 * Request builder for UserInsightsSettings
 */
class ItemInsightsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param UserInsightsSettingsQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return UserInsightsSettings
     */
    public function get(?UserInsightsSettingsQueryOptions $options = null, ?array $queryParameters = null): UserInsightsSettings
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, UserInsightsSettings::class);
    }

}
