<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ManagedAppRegistration;

/**
 * Request builder for individual ManagedAppRegistration item
 */
class ManagedAppRegistrationItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ManagedAppRegistration item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ManagedAppRegistration
     */
    public function get(?array $queryParameters = null): ManagedAppRegistration
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ManagedAppRegistration::class);
    }

}
