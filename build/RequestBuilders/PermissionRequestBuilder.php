<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Permission;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PermissionQueryOptions;

/**
 * Request builder for Permission
 */
class PermissionRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param PermissionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Permission
     */
    public function get(?PermissionQueryOptions $options = null, ?array $queryParameters = null): Permission
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Permission::class);
    }

    /**
     * Create a new Permission
     *
     * @param Permission $item The item to create
     * @return Permission
     */
    public function post(Permission $item): Permission
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Permission::class);
    }
    /**
     * Get grant request builder
     *
     * @return GrantRequestBuilder
     */
    public function grant(): GrantRequestBuilder
    {
        return new GrantRequestBuilder($this->client, $this->buildPath('grant'));
    }

}
