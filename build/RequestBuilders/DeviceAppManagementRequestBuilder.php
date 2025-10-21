<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceAppManagement;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DeviceAppManagementQueryOptions;

/**
 * Request builder for DeviceAppManagement
 */
class DeviceAppManagementRequestBuilder extends BaseRequestBuilder
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
     * @param DeviceAppManagementQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DeviceAppManagement
     */
    public function get(?DeviceAppManagementQueryOptions $options = null, ?array $queryParameters = null): DeviceAppManagement
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DeviceAppManagement::class);
    }

    /**
     * Create a new DeviceAppManagement
     *
     * @param DeviceAppManagement $item The item to create
     * @return DeviceAppManagement
     */
    public function post(DeviceAppManagement $item): DeviceAppManagement
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, DeviceAppManagement::class);
    }

}
