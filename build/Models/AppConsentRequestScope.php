<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppConsentRequestScope
 */
class AppConsentRequestScope
{
    public function __construct(
        /** The name of the scope. */
        public ?string $displayName = null
    ) {}
}
