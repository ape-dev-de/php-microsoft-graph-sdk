<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityUserSource
 */
class SecurityUserSource
{
    public function __construct(
        /** Email address of the user's mailbox. */
        public ?string $email = null,
        /** Specifies which sources are included in this group. Possible values are: mailbox, site. */
        public ?string $includedSources = null,
        /** The URL of the user's OneDrive for Business site. Read-only. */
        public ?string $siteWebUrl = null
    ) {}
}
