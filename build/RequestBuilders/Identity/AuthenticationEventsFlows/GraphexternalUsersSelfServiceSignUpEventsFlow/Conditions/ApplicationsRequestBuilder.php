<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\AuthenticationEventsFlows\GraphexternalUsersSelfServiceSignUpEventsFlow\Conditions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\AuthenticationEventsFlows\GraphexternalUsersSelfServiceSignUpEventsFlow\Conditions\Applications\IncludeApplicationsRequestBuilder;

/**
 * Request builder for /identity/authenticationEventsFlows/{authenticationEventsFlow-id}/graph.externalUsersSelfServiceSignUpEventsFlow/conditions/applications
 */
class ApplicationsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Navigate to includeApplications
     *
     * @return IncludeApplicationsRequestBuilder
     */
    public function includeApplications(): IncludeApplicationsRequestBuilder
    {
        return new IncludeApplicationsRequestBuilder($this->client, $this->requestUrl . '/includeApplications');
    }
}
