<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Oauth2PermissionGrant;

/**
 * Request builder for individual Oauth2PermissionGrant item
 */
class Oauth2PermissionGrantItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Oauth2PermissionGrant item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Oauth2PermissionGrant
     */
    public function get(?array $queryParameters = null): Oauth2PermissionGrant
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Oauth2PermissionGrant::class);
    }

    /**
     * Update Oauth2PermissionGrant item
     *
     * @param Oauth2PermissionGrant $item The item with updated properties
     * @return Oauth2PermissionGrant
     */
    public function patch(Oauth2PermissionGrant $item): Oauth2PermissionGrant
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Oauth2PermissionGrant::class);
    }

    /**
     * Delete item
     *
     * @return void
     */
    public function delete(): void
    {
        $this->client->delete($this->getFullPath());
    }

}
