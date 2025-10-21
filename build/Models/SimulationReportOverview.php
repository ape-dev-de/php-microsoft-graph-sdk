<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationReportOverview
 */
class SimulationReportOverview
{
    public function __construct(
        /** List of recommended actions for a tenant to improve its security posture based on the attack simulation and training campaign attack type. */
        public array $recommendedActions = [],
        /** Number of valid users in the attack simulation and training campaign. */
        public ?float $resolvedTargetsCount = null,
        /** Summary of simulation events in the attack simulation and training campaign. */
        public ?string $simulationEventsContent = null,
        /** Summary of assigned trainings in the attack simulation and training campaign. */
        public ?string $trainingEventsContent = null
    ) {}
}
