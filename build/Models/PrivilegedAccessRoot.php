<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessRoot
 */
class PrivilegedAccessRoot
{
    public function __construct(
        /** A group that's governed through Privileged Identity Management (PIM). */
        public ?string $group = null
    ) {}
}
