<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationAutomationRun
 */
class SimulationAutomationRun
{
    public function __construct(
        /** Date and time when the run ends in an attack simulation automation. */
        public ?\DateTimeInterface $endDateTime = null,
        /** Unique identifier for the attack simulation campaign initiated in the attack simulation automation run. */
        public ?string $simulationId = null,
        /** Date and time when the run starts in an attack simulation automation. */
        public ?\DateTimeInterface $startDateTime = null,
        /** Status of the attack simulation automation run. The possible values are: unknown, running, succeeded, failed, skipped, unknownFutureValue. */
        public ?string $status = null
    ) {}
}
