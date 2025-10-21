<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationRoot
 */
class AttackSimulationRoot
{
    public function __construct(
        /** Represents an end user's notification for an attack simulation training. */
        public array $endUserNotifications = [],
        /** Represents an attack simulation training landing page. */
        public array $landingPages = [],
        /** Represents an attack simulation training login page. */
        public array $loginPages = [],
        /** Represents an attack simulation training operation. */
        public array $operations = [],
        /** Represents an attack simulation training campaign payload in a tenant. */
        public array $payloads = [],
        /** Represents simulation automation created to run on a tenant. */
        public array $simulationAutomations = [],
        /** Represents an attack simulation training campaign in a tenant. */
        public array $simulations = [],
        /** @var string[] Represents details about attack simulation trainings. */
        public array $trainings = []
    ) {}
}
