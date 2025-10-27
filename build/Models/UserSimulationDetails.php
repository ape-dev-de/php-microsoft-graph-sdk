<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSimulationDetails
 */
class UserSimulationDetails
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Number of trainings assigned to a user in an attack simulation and training campaign. */
    public ?float $assignedTrainingsCount = null;

    /** Number of trainings completed by a user in an attack simulation and training campaign. */
    public ?float $completedTrainingsCount = null;

    /** Date and time of the compromising online action by a user in an attack simulation and training campaign. */
    public ?\DateTimeInterface $compromisedDateTime = null;

    /** Number of trainings in progress by a user in an attack simulation and training campaign. */
    public ?float $inProgressTrainingsCount = null;

    /** Indicates whether a user was compromised in an attack simulation and training campaign. */
    public ?bool $isCompromised = null;

    /** Date and time when a user reported the delivered payload as phishing in the attack simulation and training campaign. */
    public ?\DateTimeInterface $reportedPhishDateTime = null;

    /** 
     * List of simulation events of a user in the attack simulation and training campaign.
     * @var UserSimulationEventInfo[]
     */
    public array $simulationEvents = [];

    /** 
     * User in an attack simulation and training campaign.
     * @var AttackSimulationUser|\stdClass|null
     */
    public AttackSimulationUser|\stdClass|null $simulationUser = null;

    /** 
     * List of training events of a user in the attack simulation and training campaign.
     * @var UserTrainingEventInfo[]
     */
    public array $trainingEvents = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['assignedTrainingsCount'])) {
            $this->assignedTrainingsCount = is_numeric($data['assignedTrainingsCount']) ? (float)$data['assignedTrainingsCount'] : $data['assignedTrainingsCount'];
        }
        if (isset($data['completedTrainingsCount'])) {
            $this->completedTrainingsCount = is_numeric($data['completedTrainingsCount']) ? (float)$data['completedTrainingsCount'] : $data['completedTrainingsCount'];
        }
        if (isset($data['compromisedDateTime'])) {
            $this->compromisedDateTime = is_string($data['compromisedDateTime']) ? new \DateTimeImmutable($data['compromisedDateTime']) : $data['compromisedDateTime'];
        }
        if (isset($data['inProgressTrainingsCount'])) {
            $this->inProgressTrainingsCount = is_numeric($data['inProgressTrainingsCount']) ? (float)$data['inProgressTrainingsCount'] : $data['inProgressTrainingsCount'];
        }
        if (isset($data['isCompromised'])) {
            $this->isCompromised = is_bool($data['isCompromised']) ? $data['isCompromised'] : (bool)$data['isCompromised'];
        }
        if (isset($data['reportedPhishDateTime'])) {
            $this->reportedPhishDateTime = is_string($data['reportedPhishDateTime']) ? new \DateTimeImmutable($data['reportedPhishDateTime']) : $data['reportedPhishDateTime'];
        }
        if (isset($data['simulationEvents'])) {
            $this->simulationEvents = $data['simulationEvents'];
        }
        if (isset($data['simulationUser'])) {
            $this->simulationUser = is_array($data['simulationUser']) ? new AttackSimulationUser($data['simulationUser']) : $data['simulationUser'];
        }
        if (isset($data['trainingEvents'])) {
            $this->trainingEvents = $data['trainingEvents'];
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
