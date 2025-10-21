<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessApplications
 */
class ConditionalAccessApplications
{
    public function __construct(
        /** Filter that defines the dynamic-application-syntax rule to include/exclude cloud applications. A filter can use custom security attributes to include/exclude applications. */
        public ?ConditionalAccessFilter $applicationFilter = null,
        /** @var string[] Can be one of the following:  The list of client IDs (appId) explicitly excluded from the policy. Office365 - For the list of apps included in Office365, see Apps included in Conditional Access Office 365 app suite  MicrosoftAdminPortals - For more information, see Conditional Access Target resources: Microsoft Admin Portals */
        public array $excludeApplications = [],
        /** @var string[] Can be one of the following:  The list of client IDs (appId) the policy applies to, unless explicitly excluded (in excludeApplications)  All  Office365 - For the list of apps included in Office365, see Apps included in Conditional Access Office 365 app suite  MicrosoftAdminPortals - For more information, see Conditional Access Target resources: Microsoft Admin Portals */
        public array $includeApplications = [],
        /** @var string[]  */
        public array $includeAuthenticationContextClassReferences = [],
        /** @var string[] User actions to include. Supported values are urn:user:registersecurityinfo and urn:user:registerdevice */
        public array $includeUserActions = []
    ) {}
}
