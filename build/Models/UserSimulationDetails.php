<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSimulationDetails
 */
class UserSimulationDetails
{
    public function __construct(
        /** Number of trainings assigned to a user in an attack simulation and training campaign. */
        public ?float $assignedTrainingsCount = null,
        /** Number of trainings completed by a user in an attack simulation and training campaign. */
        public ?float $completedTrainingsCount = null,
        /** Date and time of the compromising online action by a user in an attack simulation and training campaign. */
        public ?\DateTimeInterface $compromisedDateTime = null,
        /** Number of trainings in progress by a user in an attack simulation and training campaign. */
        public ?float $inProgressTrainingsCount = null,
        /** Indicates whether a user was compromised in an attack simulation and training campaign. */
        public ?bool $isCompromised = null,
        /** Date and time when a user reported the delivered payload as phishing in the attack simulation and training campaign. */
        public ?\DateTimeInterface $reportedPhishDateTime = null,
        /** List of simulation events of a user in the attack simulation and training campaign. */
        public array $simulationEvents = [],
        /** User in an attack simulation and training campaign. */
        public ?string $simulationUser = null,
        /** List of training events of a user in the attack simulation and training campaign. */
        public array $trainingEvents = []
    ) {}
}
