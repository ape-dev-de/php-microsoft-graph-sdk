<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PhoneAuthenticationMethod;

/**
 * Request builder for individual PhoneAuthenticationMethod item
 */
class PhoneAuthenticationMethodItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get PhoneAuthenticationMethod item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return PhoneAuthenticationMethod
     */
    public function get(?array $queryParameters = null): PhoneAuthenticationMethod
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, PhoneAuthenticationMethod::class);
    }

    /**
     * Update PhoneAuthenticationMethod item
     *
     * @param PhoneAuthenticationMethod $item The item with updated properties
     * @return PhoneAuthenticationMethod
     */
    public function patch(PhoneAuthenticationMethod $item): PhoneAuthenticationMethod
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, PhoneAuthenticationMethod::class);
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
