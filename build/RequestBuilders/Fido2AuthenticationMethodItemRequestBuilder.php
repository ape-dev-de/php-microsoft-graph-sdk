<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Fido2AuthenticationMethod;

/**
 * Request builder for individual Fido2AuthenticationMethod item
 */
class Fido2AuthenticationMethodItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Fido2AuthenticationMethod item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Fido2AuthenticationMethod
     */
    public function get(?array $queryParameters = null): Fido2AuthenticationMethod
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Fido2AuthenticationMethod::class);
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
