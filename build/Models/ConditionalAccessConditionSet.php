<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessConditionSet
 */
class ConditionalAccessConditionSet
{
    public function __construct(
        /** Applications and user actions included in and excluded from the policy. Required. */
        public ?string $applications = null,
        /** Authentication flows included in the policy scope. */
        public ?string $authenticationFlows = null,
        /** Client applications (service principals and workload identities) included in and excluded from the policy. Either users or clientApplications is required. */
        public ?string $clientApplications = null,
        /** Client application types included in the policy. Possible values are: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other. Required.  The easUnsupported enumeration member will be deprecated in favor of exchangeActiveSync, which includes EAS supported and unsupported platforms. */
        public array $clientAppTypes = [],
        /** Devices in the policy. */
        public ?string $devices = null,
        /** Insider risk levels included in the policy. The possible values are: minor, moderate, elevated, unknownFutureValue. */
        public ?string $insiderRiskLevels = null,
        /** Locations included in and excluded from the policy. */
        public ?string $locations = null,
        /** Platforms included in and excluded from the policy. */
        public ?string $platforms = null,
        /** Service principal risk levels included in the policy. Possible values are: low, medium, high, none, unknownFutureValue. */
        public array $servicePrincipalRiskLevels = [],
        /** Sign-in risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required. */
        public array $signInRiskLevels = [],
        /** User risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required. */
        public array $userRiskLevels = [],
        /** Users, groups, and roles included in and excluded from the policy. Either users or clientApplications is required. */
        public ?string $users = null
    ) {}
}
