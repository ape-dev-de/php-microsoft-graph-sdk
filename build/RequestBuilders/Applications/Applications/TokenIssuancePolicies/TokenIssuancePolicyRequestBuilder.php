<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\Applications\TokenIssuancePolicies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\Applications\TokenIssuancePolicies\RefRequestBuilder;

/**
 * Request builder for /applications/{application-id}/tokenIssuancePolicies/{tokenIssuancePolicy-id}
 */
class TokenIssuancePolicyRequestBuilder extends RootBaseRequestBuilder
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
