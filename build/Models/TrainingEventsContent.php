<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingEventsContent
 */
class TrainingEventsContent
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * List of assigned trainings and their information in an attack simulation and training campaign.
     * @var AssignedTrainingInfo[]
     */
    public array $assignedTrainingsInfos = [];

    /** Number of users who were assigned trainings in an attack simulation and training campaign. */
    public ?float $trainingsAssignedUserCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['assignedTrainingsInfos'])) {
            $this->assignedTrainingsInfos = $data['assignedTrainingsInfos'];
        }
        if (isset($data['trainingsAssignedUserCount'])) {
            $this->trainingsAssignedUserCount = is_numeric($data['trainingsAssignedUserCount']) ? (float)$data['trainingsAssignedUserCount'] : $data['trainingsAssignedUserCount'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
