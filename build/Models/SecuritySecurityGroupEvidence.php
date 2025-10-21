<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySecurityGroupEvidence
 */
class SecuritySecurityGroupEvidence
{
    public function __construct(
        /** The unique group identifier assigned by the on-premises Active Directory. */
        public ?string $activeDirectoryObjectGuid = null,
        /** The name of the security group. */
        public ?string $displayName = null,
        /** The distinguished name of the security group. */
        public ?string $distinguishedName = null,
        /** The friendly name of the security group. */
        public ?string $friendlyName = null,
        /** Unique identifier of the security group. */
        public ?string $securityGroupId = null,
        /** The security identifier of the group. */
        public ?string $sid = null
    ) {}
}
