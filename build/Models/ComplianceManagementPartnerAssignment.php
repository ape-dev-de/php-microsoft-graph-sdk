<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ComplianceManagementPartnerAssignment
 */
class ComplianceManagementPartnerAssignment
{
    public function __construct(
        /** Group assignment target. */
        public ?string $target = null
    ) {}
}
