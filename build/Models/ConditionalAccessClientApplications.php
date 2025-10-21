<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessClientApplications
 */
class ConditionalAccessClientApplications
{
    public function __construct(
        /** @var string[] Service principal IDs excluded from the policy scope. */
        public array $excludeServicePrincipals = [],
        /** @var string[] Service principal IDs included in the policy scope, or ServicePrincipalsInMyTenant. */
        public array $includeServicePrincipals = [],
        /** Filter that defines the dynamic-servicePrincipal-syntax rule to include/exclude service principals. A filter can use custom security attributes to include/exclude service principals. */
        public ?ConditionalAccessFilter $servicePrincipalFilter = null
    ) {}
}
