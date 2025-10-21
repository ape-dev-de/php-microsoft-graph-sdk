<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationOperation
 */
class AttackSimulationOperation
{
    public function __construct(
        /** Percentage of completion of the respective operation. */
        public ?float $percentageCompleted = null,
        /** Tenant identifier. */
        public ?string $tenantId = null,
        /** The status of a long-running operation. */
        public ?string $type = null
    ) {}
}
