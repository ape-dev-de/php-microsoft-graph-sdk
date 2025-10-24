<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\ConditionalAccess\AuthenticationContextClassReferencesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\ConditionalAccess\AuthenticationStrengthRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\ConditionalAccess\EvaluateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\ConditionalAccess\NamedLocationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\ConditionalAccess\PoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\ConditionalAccess\TemplatesRequestBuilder;

/**
 * Request builder for /identity/conditionalAccess
 */
class ConditionalAccessRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Navigate to authenticationContextClassReferences
     *
     * @return AuthenticationContextClassReferencesRequestBuilder
     */
    public function authenticationContextClassReferences(): AuthenticationContextClassReferencesRequestBuilder
    {
        return new AuthenticationContextClassReferencesRequestBuilder($this->client, $this->requestUrl . '/authenticationContextClassReferences');
    }
    /**
     * Navigate to authenticationStrength
     *
     * @return AuthenticationStrengthRequestBuilder
     */
    public function authenticationStrength(): AuthenticationStrengthRequestBuilder
    {
        return new AuthenticationStrengthRequestBuilder($this->client, $this->requestUrl . '/authenticationStrength');
    }
    /**
     * Navigate to evaluate
     *
     * @return EvaluateRequestBuilder
     */
    public function evaluate(): EvaluateRequestBuilder
    {
        return new EvaluateRequestBuilder($this->client, $this->requestUrl . '/evaluate');
    }
    /**
     * Navigate to namedLocations
     *
     * @return NamedLocationsRequestBuilder
     */
    public function namedLocations(): NamedLocationsRequestBuilder
    {
        return new NamedLocationsRequestBuilder($this->client, $this->requestUrl . '/namedLocations');
    }
    /**
     * Navigate to policies
     *
     * @return PoliciesRequestBuilder
     */
    public function policies(): PoliciesRequestBuilder
    {
        return new PoliciesRequestBuilder($this->client, $this->requestUrl . '/policies');
    }
    /**
     * Navigate to templates
     *
     * @return TemplatesRequestBuilder
     */
    public function templates(): TemplatesRequestBuilder
    {
        return new TemplatesRequestBuilder($this->client, $this->requestUrl . '/templates');
    }
}
