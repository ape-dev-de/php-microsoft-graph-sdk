<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PasswordAuthenticationMethod;

/**
 * Request builder for individual PasswordAuthenticationMethod item
 */
class PasswordAuthenticationMethodItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get PasswordAuthenticationMethod item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return PasswordAuthenticationMethod
     */
    public function get(?array $queryParameters = null): PasswordAuthenticationMethod
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, PasswordAuthenticationMethod::class);
    }

}
