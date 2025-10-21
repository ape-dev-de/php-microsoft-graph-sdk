<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessEnumeratedExternalTenants
 */
class ConditionalAccessEnumeratedExternalTenants
{
    public function __construct(
        /** The membership kind. Possible values are: all, enumerated, unknownFutureValue. The enumerated member references an conditionalAccessEnumeratedExternalTenants object. */
        public ?ConditionalAccessExternalTenantsMembershipKind $membershipKind = null,
        /** @var string[] A collection of tenant IDs that define the scope of a policy targeting conditional access for guests and external users. */
        public array $members = []
    ) {}
}
