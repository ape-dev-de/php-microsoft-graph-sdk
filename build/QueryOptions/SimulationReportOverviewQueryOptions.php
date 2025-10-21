<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationReportOverview resources
 *
 * Available select fields:
 * - recommendedActions
 * - resolvedTargetsCount
 * - simulationEventsContent
 * - trainingEventsContent
 */
class SimulationReportOverviewQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SimulationReportOverview
     */
    public const FIELD_RECOMMENDED_ACTIONS = 'recommendedActions';
    public const FIELD_RESOLVED_TARGETS_COUNT = 'resolvedTargetsCount';
    public const FIELD_SIMULATION_EVENTS_CONTENT = 'simulationEventsContent';
    public const FIELD_TRAINING_EVENTS_CONTENT = 'trainingEventsContent';

    /**
     * Select specific SimulationReportOverview properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
