<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WindowsHelloForBusinessAuthenticationMethod;

/**
 * Request builder for individual WindowsHelloForBusinessAuthenticationMethod item
 */
class WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get WindowsHelloForBusinessAuthenticationMethod item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return WindowsHelloForBusinessAuthenticationMethod
     */
    public function get(?array $queryParameters = null): WindowsHelloForBusinessAuthenticationMethod
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, WindowsHelloForBusinessAuthenticationMethod::class);
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
