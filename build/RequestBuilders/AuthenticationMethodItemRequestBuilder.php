<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationMethod;

/**
 * Request builder for individual AuthenticationMethod item
 */
class AuthenticationMethodItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get AuthenticationMethod item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return AuthenticationMethod
     */
    public function get(?array $queryParameters = null): AuthenticationMethod
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, AuthenticationMethod::class);
    }

    /**
     * Update AuthenticationMethod item
     *
     * @param AuthenticationMethod $item The item with updated properties
     * @return AuthenticationMethod
     */
    public function patch(AuthenticationMethod $item): AuthenticationMethod
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, AuthenticationMethod::class);
    }

}
