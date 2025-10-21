<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\MicrosoftAuthenticatorAuthenticationMethod;

/**
 * Request builder for individual MicrosoftAuthenticatorAuthenticationMethod item
 */
class MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get MicrosoftAuthenticatorAuthenticationMethod item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return MicrosoftAuthenticatorAuthenticationMethod
     */
    public function get(?array $queryParameters = null): MicrosoftAuthenticatorAuthenticationMethod
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, MicrosoftAuthenticatorAuthenticationMethod::class);
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
