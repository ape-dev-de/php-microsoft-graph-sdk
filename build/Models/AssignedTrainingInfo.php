<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AssignedTrainingInfo
 */
class AssignedTrainingInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Number of users who were assigned the training in an attack simulation and training campaign. */
    public ?float $assignedUserCount = null;

    /** Number of users who completed the training in an attack simulation and training campaign. */
    public ?float $completedUserCount = null;

    /** Display name of the training in an attack simulation and training campaign. */
    public ?string $displayName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['assignedUserCount'])) {
            $this->assignedUserCount = is_numeric($data['assignedUserCount']) ? (float)$data['assignedUserCount'] : $data['assignedUserCount'];
        }
        if (isset($data['completedUserCount'])) {
            $this->completedUserCount = is_numeric($data['completedUserCount']) ? (float)$data['completedUserCount'] : $data['completedUserCount'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
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
