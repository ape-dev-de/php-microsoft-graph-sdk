<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityUnifiedGroupSource
 */
class SecurityUnifiedGroupSource
{
    public function __construct(
        /** Specifies which sources are included in this group. Possible values are: mailbox, site. */
        public ?string $includedSources = null,
        /**  */
        public ?string $group = null
    ) {}
}
