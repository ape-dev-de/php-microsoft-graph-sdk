<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflowsInsightsByCategory
 */
class IdentityGovernanceWorkflowsInsightsByCategory
{
    public function __construct(
        /** Failed 'Joiner' workflows processed in a tenant. */
        public ?float $failedJoinerRuns = null,
        /** Failed 'Leaver' workflows processed in a tenant. */
        public ?float $failedLeaverRuns = null,
        /** Failed 'Mover' workflows processed in a tenant. */
        public ?float $failedMoverRuns = null,
        /** Successful 'Joiner' workflows processed in a tenant. */
        public ?float $successfulJoinerRuns = null,
        /** Successful 'Leaver' workflows processed in a tenant. */
        public ?float $successfulLeaverRuns = null,
        /** Successful 'Mover' workflows processed in a tenant. */
        public ?float $successfulMoverRuns = null,
        /** Total 'Joiner' workflows processed in a tenant. */
        public ?float $totalJoinerRuns = null,
        /** Total 'Leaver' workflows processed in a tenant. */
        public ?float $totalLeaverRuns = null,
        /** Total 'Mover' workflows processed in a tenant. */
        public ?string $totalMoverRuns = null
    ) {}
}
