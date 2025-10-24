<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\ServicePrincipals\ClaimsMappingPolicies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\ServicePrincipals\ClaimsMappingPolicies\RefRequestBuilder;

/**
 * Request builder for /servicePrincipals/{servicePrincipal-id}/claimsMappingPolicies/{claimsMappingPolicy-id}
 */
class ClaimsMappingPolicyRequestBuilder extends RootBaseRequestBuilder
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
