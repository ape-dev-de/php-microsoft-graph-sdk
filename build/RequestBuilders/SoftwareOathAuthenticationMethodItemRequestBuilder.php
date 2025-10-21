<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SoftwareOathAuthenticationMethod;

/**
 * Request builder for individual SoftwareOathAuthenticationMethod item
 */
class SoftwareOathAuthenticationMethodItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get SoftwareOathAuthenticationMethod item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return SoftwareOathAuthenticationMethod
     */
    public function get(?array $queryParameters = null): SoftwareOathAuthenticationMethod
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, SoftwareOathAuthenticationMethod::class);
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
