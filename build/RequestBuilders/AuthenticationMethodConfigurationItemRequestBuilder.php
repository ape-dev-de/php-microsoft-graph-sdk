<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationMethodConfiguration;

/**
 * Request builder for individual AuthenticationMethodConfiguration item
 */
class AuthenticationMethodConfigurationItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get AuthenticationMethodConfiguration item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return AuthenticationMethodConfiguration
     */
    public function get(?array $queryParameters = null): AuthenticationMethodConfiguration
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, AuthenticationMethodConfiguration::class);
    }

    /**
     * Update AuthenticationMethodConfiguration item
     *
     * @param AuthenticationMethodConfiguration $item The item with updated properties
     * @return AuthenticationMethodConfiguration
     */
    public function patch(AuthenticationMethodConfiguration $item): AuthenticationMethodConfiguration
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, AuthenticationMethodConfiguration::class);
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
