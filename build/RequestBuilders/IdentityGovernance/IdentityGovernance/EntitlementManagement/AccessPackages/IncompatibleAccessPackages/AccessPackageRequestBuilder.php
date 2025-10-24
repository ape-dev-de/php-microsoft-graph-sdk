<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\EntitlementManagement\AccessPackages\IncompatibleAccessPackages;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\EntitlementManagement\AccessPackages\IncompatibleAccessPackages\RefRequestBuilder;

/**
 * Request builder for /identityGovernance/entitlementManagement/accessPackages/{accessPackage-id}/incompatibleAccessPackages/{accessPackage-id1}
 */
class AccessPackageRequestBuilder extends RootBaseRequestBuilder
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
