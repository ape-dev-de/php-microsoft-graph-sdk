<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\HomeRealmDiscoveryPolicy;

/**
 * Request builder for individual HomeRealmDiscoveryPolicy item
 */
class HomeRealmDiscoveryPolicyItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get HomeRealmDiscoveryPolicy item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return HomeRealmDiscoveryPolicy
     */
    public function get(?array $queryParameters = null): HomeRealmDiscoveryPolicy
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, HomeRealmDiscoveryPolicy::class);
    }

}
