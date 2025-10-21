<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ComplianceManagementPartnerAssignment
 */
class ComplianceManagementPartnerAssignment
{
    public function __construct(
        /** User group targeting for Compliance Management Partner */
        public ?string $target = null
    ) {}
}
