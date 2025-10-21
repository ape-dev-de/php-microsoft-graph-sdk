<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminAccessDetails
 */
class DelegatedAdminAccessDetails
{
    public function __construct(
        /** @var string[] The directory roles that the Microsoft partner is assigned in the customer tenant. */
        public array $unifiedRoles = []
    ) {}
}
