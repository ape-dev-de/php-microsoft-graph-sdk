<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OAuth2PermissionGrant;

/**
 * Request builder for individual OAuth2PermissionGrant item
 */
class OAuth2PermissionGrantItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get OAuth2PermissionGrant item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return OAuth2PermissionGrant
     */
    public function get(?array $queryParameters = null): OAuth2PermissionGrant
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, OAuth2PermissionGrant::class);
    }

    /**
     * Update OAuth2PermissionGrant item
     *
     * @param OAuth2PermissionGrant $item The item with updated properties
     * @return OAuth2PermissionGrant
     */
    public function patch(OAuth2PermissionGrant $item): OAuth2PermissionGrant
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, OAuth2PermissionGrant::class);
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
