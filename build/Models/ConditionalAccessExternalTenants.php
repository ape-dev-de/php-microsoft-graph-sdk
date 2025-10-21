<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessExternalTenants
 */
class ConditionalAccessExternalTenants
{
    public function __construct(
        /** The membership kind. Possible values are: all, enumerated, unknownFutureValue. The enumerated member references an conditionalAccessEnumeratedExternalTenants object. */
        public ?ConditionalAccessExternalTenantsMembershipKind $membershipKind = null
    ) {}
}
