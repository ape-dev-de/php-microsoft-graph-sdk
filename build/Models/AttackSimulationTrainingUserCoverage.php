<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationTrainingUserCoverage
 */
class AttackSimulationTrainingUserCoverage
{
    /** 
     * User in an attack simulation and training campaign.
     * @var AttackSimulationUser|\stdClass|null
     */
    public mixed $attackSimulationUser = null;

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
        if (isset($data['attackSimulationUser'])) {
            $this->attackSimulationUser = $data['attackSimulationUser'];
        }
        if (isset($data['userTrainings'])) {
            $this->userTrainings = $data['userTrainings'];
        }
    }
}
