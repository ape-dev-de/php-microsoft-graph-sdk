<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintUsageByUser
 */
class PrintUsageByUser
{
    public function __construct(
        /** The UPN of the user represented by these statistics. */
        public ?string $userPrincipalName = null
    ) {}
}
