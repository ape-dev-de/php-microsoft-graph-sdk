<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceUserSummary
 */
class IdentityGovernanceUserSummary
{
    /** The number of failed tasks for users in a user summary. */
    public ?float $failedTasks = null;

    /** The number of failed users in a user summary. */
    public ?float $failedUsers = null;

    /** The number of successful users in a user summary. */
    public ?float $successfulUsers = null;

    /** The total tasks of users in a user summary. */
    public ?float $totalTasks = null;

    /** The total number of users in a user summary */
    public ?float $totalUsers = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['failedTasks'])) {
            $this->failedTasks = $data['failedTasks'];
        }
        if (isset($data['failedUsers'])) {
            $this->failedUsers = $data['failedUsers'];
        }
        if (isset($data['successfulUsers'])) {
            $this->successfulUsers = $data['successfulUsers'];
        }
        if (isset($data['totalTasks'])) {
            $this->totalTasks = $data['totalTasks'];
        }
        if (isset($data['totalUsers'])) {
            $this->totalUsers = $data['totalUsers'];
        }
    }
}
