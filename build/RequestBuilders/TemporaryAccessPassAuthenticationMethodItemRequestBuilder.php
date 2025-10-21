<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TemporaryAccessPassAuthenticationMethod;

/**
 * Request builder for individual TemporaryAccessPassAuthenticationMethod item
 */
class TemporaryAccessPassAuthenticationMethodItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get TemporaryAccessPassAuthenticationMethod item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return TemporaryAccessPassAuthenticationMethod
     */
    public function get(?array $queryParameters = null): TemporaryAccessPassAuthenticationMethod
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, TemporaryAccessPassAuthenticationMethod::class);
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
