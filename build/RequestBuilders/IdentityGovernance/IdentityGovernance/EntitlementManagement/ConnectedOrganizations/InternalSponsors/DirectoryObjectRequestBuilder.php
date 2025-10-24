<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\InternalSponsors;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\InternalSponsors\RefRequestBuilder;

/**
 * Request builder for /identityGovernance/entitlementManagement/connectedOrganizations/{connectedOrganization-id}/internalSponsors/{directoryObject-id}
 */
class DirectoryObjectRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Navigate to $ref
     *
     * @return RefRequestBuilder
     */
    public function ref(): RefRequestBuilder
    {
        return new RefRequestBuilder($this->client, $this->requestUrl . '/$ref');
    }
}
