<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LicenseAssignmentState
 */
class LicenseAssignmentState
{
    public function __construct(
        /**  */
        public ?string $assignedByGroup = null,
        /** @var string[]  */
        public array $disabledPlans = [],
        /**  */
        public ?string $error = null,
        /**  */
        public ?\DateTimeInterface $lastUpdatedDateTime = null,
        /**  */
        public ?string $skuId = null,
        /**  */
        public ?string $state = null
    ) {}
}
