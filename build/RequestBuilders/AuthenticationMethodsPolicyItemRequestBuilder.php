<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationMethodsPolicy;

/**
 * Request builder for individual AuthenticationMethodsPolicy item
 */
class AuthenticationMethodsPolicyItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get AuthenticationMethodsPolicy item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return AuthenticationMethodsPolicy
     */
    public function get(?array $queryParameters = null): AuthenticationMethodsPolicy
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, AuthenticationMethodsPolicy::class);
    }

    /**
     * Update AuthenticationMethodsPolicy item
     *
     * @param AuthenticationMethodsPolicy $item The item with updated properties
     * @return AuthenticationMethodsPolicy
     */
    public function patch(AuthenticationMethodsPolicy $item): AuthenticationMethodsPolicy
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, AuthenticationMethodsPolicy::class);
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
