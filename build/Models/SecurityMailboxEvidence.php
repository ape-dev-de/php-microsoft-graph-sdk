<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityMailboxEvidence
 */
class SecurityMailboxEvidence
{
    public function __construct(
        /** The name associated with the mailbox. */
        public ?string $displayName = null,
        /** The primary email address of the mailbox. */
        public ?string $primaryAddress = null,
        /** The user principal name of the mailbox. */
        public ?string $upn = null,
        /** The user account of the mailbox. */
        public ?string $userAccount = null
    ) {}
}
