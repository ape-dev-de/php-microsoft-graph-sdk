<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\EmailAuthenticationMethod;

/**
 * Request builder for individual EmailAuthenticationMethod item
 */
class EmailAuthenticationMethodItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get EmailAuthenticationMethod item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return EmailAuthenticationMethod
     */
    public function get(?array $queryParameters = null): EmailAuthenticationMethod
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, EmailAuthenticationMethod::class);
    }

    /**
     * Update EmailAuthenticationMethod item
     *
     * @param EmailAuthenticationMethod $item The item with updated properties
     * @return EmailAuthenticationMethod
     */
    public function patch(EmailAuthenticationMethod $item): EmailAuthenticationMethod
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, EmailAuthenticationMethod::class);
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
