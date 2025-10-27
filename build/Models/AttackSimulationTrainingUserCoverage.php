<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationTrainingUserCoverage
 */
class AttackSimulationTrainingUserCoverage
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * User in an attack simulation and training campaign.
     * @var AttackSimulationUser|\stdClass|null
     */
    public AttackSimulationUser|\stdClass|null $attackSimulationUser = null;

    /** 
     * List of assigned trainings and their statuses for the user.
     * @var UserTrainingStatusInfo[]
     */
    public array $userTrainings = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['attackSimulationUser'])) {
            $this->attackSimulationUser = is_array($data['attackSimulationUser']) ? new AttackSimulationUser($data['attackSimulationUser']) : $data['attackSimulationUser'];
        }
        if (isset($data['userTrainings'])) {
            $this->userTrainings = $data['userTrainings'];
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
