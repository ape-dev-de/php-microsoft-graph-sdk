<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\Policies\FeatureRolloutPolicies\AppliesTo;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\Policies\FeatureRolloutPolicies\AppliesTo\RefRequestBuilder;

/**
 * Request builder for /policies/featureRolloutPolicies/{featureRolloutPolicy-id}/appliesTo/{directoryObject-id}
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
