<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceManagement;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DeviceManagementQueryOptions;

/**
 * Request builder for DeviceManagement
 */
class DeviceManagementRequestBuilder extends BaseRequestBuilder
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
     * @param DeviceManagementQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DeviceManagement
     */
    public function get(?DeviceManagementQueryOptions $options = null, ?array $queryParameters = null): DeviceManagement
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DeviceManagement::class);
    }

    /**
     * Create a new DeviceManagement
     *
     * @param DeviceManagement $item The item to create
     * @return DeviceManagement
     */
    public function post(DeviceManagement $item): DeviceManagement
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, DeviceManagement::class);
    }

}
