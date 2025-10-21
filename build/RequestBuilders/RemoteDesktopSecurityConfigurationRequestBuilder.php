<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\RemoteDesktopSecurityConfiguration;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\RemoteDesktopSecurityConfigurationQueryOptions;

/**
 * Request builder for RemoteDesktopSecurityConfiguration
 */
class RemoteDesktopSecurityConfigurationRequestBuilder extends BaseRequestBuilder
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
     * @param RemoteDesktopSecurityConfigurationQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return RemoteDesktopSecurityConfiguration
     */
    public function get(?RemoteDesktopSecurityConfigurationQueryOptions $options = null, ?array $queryParameters = null): RemoteDesktopSecurityConfiguration
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, RemoteDesktopSecurityConfiguration::class);
    }

    /**
     * Create a new RemoteDesktopSecurityConfiguration
     *
     * @param RemoteDesktopSecurityConfiguration $item The item to create
     * @return RemoteDesktopSecurityConfiguration
     */
    public function post(RemoteDesktopSecurityConfiguration $item): RemoteDesktopSecurityConfiguration
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, RemoteDesktopSecurityConfiguration::class);
    }
    /**
     * Get targetDeviceGroups request builder
     *
     * @return TargetDeviceGroupsRequestBuilder
     */
    public function targetDeviceGroups(): TargetDeviceGroupsRequestBuilder
    {
        return new TargetDeviceGroupsRequestBuilder($this->client, $this->buildPath('targetDeviceGroups'));
    }

}
