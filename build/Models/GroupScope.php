<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupScope
 */
class GroupScope
{
    public function __construct(
        /** The identifier for the scope. This could be a user ID, group ID, or a keyword like ''All'' for tenant scope. */
        public ?string $identity = null
    ) {}
}
