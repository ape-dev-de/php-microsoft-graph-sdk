<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PermissionGrants;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PermissionGrants\Places\PlaceRequestBuilder;

/**
 * Request builder for /places
 */
class PlacesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get request builder for specific item by ID
     *
     * @param string $placeId The item ID
     * @return PlaceRequestBuilder
     */
    public function byId(string $placeId): PlaceRequestBuilder
    {
        return new PlaceRequestBuilder($this->client, $this->requestUrl . '/' . $placeId);
    }
}
