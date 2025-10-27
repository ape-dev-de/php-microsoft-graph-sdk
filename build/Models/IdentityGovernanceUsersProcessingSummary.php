<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceUsersProcessingSummary
 */
class IdentityGovernanceUsersProcessingSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?float $failedTasks = null;

    /**  */
    public ?float $failedUsers = null;

    /**  */
    public ?float $successfulUsers = null;

    /**  */
    public ?float $totalTasks = null;

    /**  */
    public ?float $totalUsers = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['failedTasks'])) {
            $this->failedTasks = is_numeric($data['failedTasks']) ? (float)$data['failedTasks'] : $data['failedTasks'];
        }
        if (isset($data['failedUsers'])) {
            $this->failedUsers = is_numeric($data['failedUsers']) ? (float)$data['failedUsers'] : $data['failedUsers'];
        }
        if (isset($data['successfulUsers'])) {
            $this->successfulUsers = is_numeric($data['successfulUsers']) ? (float)$data['successfulUsers'] : $data['successfulUsers'];
        }
        if (isset($data['totalTasks'])) {
            $this->totalTasks = is_numeric($data['totalTasks']) ? (float)$data['totalTasks'] : $data['totalTasks'];
        }
        if (isset($data['totalUsers'])) {
            $this->totalUsers = is_numeric($data['totalUsers']) ? (float)$data['totalUsers'] : $data['totalUsers'];
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
