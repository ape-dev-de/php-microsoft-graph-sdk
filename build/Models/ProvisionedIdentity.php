<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisionedIdentity
 */
class ProvisionedIdentity
{
    public function __construct(
        /** Details of the identity. */
        public ?string $details = null,
        /** Type of identity that has been provisioned, such as ''user'' or ''group''. Supports $filter (eq, contains). */
        public ?string $identityType = null
    ) {}
}
