<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharingInvitation
 */
class SharingInvitation
{
    public function __construct(
        /** The email address provided for the recipient of the sharing invitation. Read-only. */
        public ?string $email = null,
        /** Provides information about who sent the invitation that created this permission, if that information is available. Read-only. */
        public ?IdentitySet $invitedBy = null,
        /**  */
        public ?string $redeemedBy = null,
        /** If true the recipient of the invitation needs to sign in in order to access the shared item. Read-only. */
        public ?bool $signInRequired = null
    ) {}
}
