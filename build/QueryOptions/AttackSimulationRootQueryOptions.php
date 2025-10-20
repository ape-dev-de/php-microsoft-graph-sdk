<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttackSimulationRoot resources
 *
 * Available select fields:
 * - endUserNotifications
 * - landingPages
 * - loginPages
 * - operations
 * - payloads
 * - simulationAutomations
 * - simulations
 * - trainings
 */
class AttackSimulationRootQueryOptions extends QueryOptions
{
    public const FIELD_END_USER_NOTIFICATIONS = 'endUserNotifications';
    public const FIELD_LANDING_PAGES = 'landingPages';
    public const FIELD_LOGIN_PAGES = 'loginPages';
    public const FIELD_OPERATIONS = 'operations';
    public const FIELD_PAYLOADS = 'payloads';
    public const FIELD_SIMULATION_AUTOMATIONS = 'simulationAutomations';
    public const FIELD_SIMULATIONS = 'simulations';
    public const FIELD_TRAININGS = 'trainings';

    /**
     * Select specific AttackSimulationRoot properties
     * 
     * @param array<string> $select Use AttackSimulationRootQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
