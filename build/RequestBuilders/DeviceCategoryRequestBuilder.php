<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceCategory;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DeviceCategoryQueryOptions;

/**
 * Request builder for DeviceCategory
 */
class DeviceCategoryRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param DeviceCategoryQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DeviceCategory
     */
    public function get(?DeviceCategoryQueryOptions $options = null, ?array $queryParameters = null): DeviceCategory
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DeviceCategory::class);
    }

}
