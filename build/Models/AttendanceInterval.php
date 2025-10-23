<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttendanceInterval
 */
class AttendanceInterval
{
    /** Duration of the meeting interval in seconds; that is, the difference between joinDateTime and leaveDateTime. */
    public ?float $durationInSeconds = null;

    /** The time the attendee joined in UTC. */
    public ?\DateTimeInterface $joinDateTime = null;

    /** The time the attendee left in UTC. */
    public ?\DateTimeInterface $leaveDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['durationInSeconds'])) {
            $this->durationInSeconds = $data['durationInSeconds'];
        }
        if (isset($data['joinDateTime'])) {
            $this->joinDateTime = is_string($data['joinDateTime']) ? new \DateTimeImmutable($data['joinDateTime']) : $data['joinDateTime'];
        }
        if (isset($data['leaveDateTime'])) {
            $this->leaveDateTime = is_string($data['leaveDateTime']) ? new \DateTimeImmutable($data['leaveDateTime']) : $data['leaveDateTime'];
        }
    }
}
