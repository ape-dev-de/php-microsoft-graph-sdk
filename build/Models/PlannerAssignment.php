<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerAssignment
 */
class PlannerAssignment
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The identity of the user that performed the assignment of the task, that is, the assignor.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $assignedBy = null;

    /** The time when the task was assigned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $assignedDateTime = null;

    /** Hint used to order assignees in a task. The format is defined as outlined here. */
    public ?string $orderHint = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['assignedBy'])) {
            $this->assignedBy = is_array($data['assignedBy']) ? new IdentitySet($data['assignedBy']) : $data['assignedBy'];
        }
        if (isset($data['assignedDateTime'])) {
            $this->assignedDateTime = is_string($data['assignedDateTime']) ? new \DateTimeImmutable($data['assignedDateTime']) : $data['assignedDateTime'];
        }
        if (isset($data['orderHint'])) {
            $this->orderHint = $data['orderHint'];
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
