<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ShiftPreferences;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ShiftPreferencesQueryOptions;

/**
 * Request builder for ShiftPreferences
 */
class ShiftPreferencesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param ShiftPreferencesQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ShiftPreferences
     */
    public function get(?ShiftPreferencesQueryOptions $options = null, ?array $queryParameters = null): ShiftPreferences
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ShiftPreferences::class);
    }

}
