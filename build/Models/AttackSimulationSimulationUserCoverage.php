<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationSimulationUserCoverage
 */
class AttackSimulationSimulationUserCoverage
{
    public function __construct(
        /** User in an attack simulation and training campaign. */
        public ?string $attackSimulationUser = null,
        /** Number of link clicks in the received payloads by the user in attack simulation and training campaigns. */
        public ?float $clickCount = null,
        /** Number of compromising actions by the user in attack simulation and training campaigns. */
        public ?float $compromisedCount = null,
        /** Date and time of the latest attack simulation and training campaign that the user was included in. */
        public ?\DateTimeInterface $latestSimulationDateTime = null,
        /** Number of attack simulation and training campaigns that the user was included in. */
        public ?string $simulationCount = null
    ) {}
}
