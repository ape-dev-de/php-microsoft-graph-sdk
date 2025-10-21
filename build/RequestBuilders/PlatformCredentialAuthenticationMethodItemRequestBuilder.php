<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PlatformCredentialAuthenticationMethod;

/**
 * Request builder for individual PlatformCredentialAuthenticationMethod item
 */
class PlatformCredentialAuthenticationMethodItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get PlatformCredentialAuthenticationMethod item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return PlatformCredentialAuthenticationMethod
     */
    public function get(?array $queryParameters = null): PlatformCredentialAuthenticationMethod
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, PlatformCredentialAuthenticationMethod::class);
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
