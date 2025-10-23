<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationReportOverview
 */
class SimulationReportOverview
{
    /** 
     * List of recommended actions for a tenant to improve its security posture based on the attack simulation and training campaign attack type.
     * @var RecommendedAction[]
     */
    public array $recommendedActions = [];

    /** Number of valid users in the attack simulation and training campaign. */
    public ?float $resolvedTargetsCount = null;

    /** 
     * Summary of simulation events in the attack simulation and training campaign.
     * @var SimulationEventsContent|\stdClass|null
     */
    public mixed $simulationEventsContent = null;

    /** 
     * Summary of assigned trainings in the attack simulation and training campaign.
     * @var TrainingEventsContent|\stdClass|null
     */
    public mixed $trainingEventsContent = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['recommendedActions'])) {
            $this->recommendedActions = $data['recommendedActions'];
        }
        if (isset($data['resolvedTargetsCount'])) {
            $this->resolvedTargetsCount = $data['resolvedTargetsCount'];
        }
        if (isset($data['simulationEventsContent'])) {
            $this->simulationEventsContent = is_array($data['simulationEventsContent']) ? new SimulationEventsContent($data['simulationEventsContent']) : $data['simulationEventsContent'];
        }
        if (isset($data['trainingEventsContent'])) {
            $this->trainingEventsContent = is_array($data['trainingEventsContent']) ? new TrainingEventsContent($data['trainingEventsContent']) : $data['trainingEventsContent'];
        }
    }
}
