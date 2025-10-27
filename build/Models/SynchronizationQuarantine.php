<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationQuarantine
 */
class SynchronizationQuarantine
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Date and time when the quarantine was last evaluated and imposed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $currentBegan = null;

    /** 
     * Describes the error(s) that occurred when putting the synchronization job into quarantine.
     * @var SynchronizationError|\stdClass|null
     */
    public SynchronizationError|\stdClass|null $error = null;

    /** Date and time when the next attempt to re-evaluate the quarantine will be made. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $nextAttempt = null;

    /**  */
    public ?QuarantineReason $reason = null;

    /** Date and time when the quarantine was first imposed in this series (a series starts when a quarantine is first imposed, and is reset as soon as the quarantine is lifted). The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $seriesBegan = null;

    /** Number of times in this series the quarantine was re-evaluated and left in effect (a series starts when quarantine is first imposed, and is reset as soon as quarantine is lifted). */
    public ?float $seriesCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['currentBegan'])) {
            $this->currentBegan = is_string($data['currentBegan']) ? new \DateTimeImmutable($data['currentBegan']) : $data['currentBegan'];
        }
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new SynchronizationError($data['error']) : $data['error'];
        }
        if (isset($data['nextAttempt'])) {
            $this->nextAttempt = is_string($data['nextAttempt']) ? new \DateTimeImmutable($data['nextAttempt']) : $data['nextAttempt'];
        }
        if (isset($data['reason'])) {
            $this->reason = is_array($data['reason']) ? new QuarantineReason($data['reason']) : $data['reason'];
        }
        if (isset($data['seriesBegan'])) {
            $this->seriesBegan = is_string($data['seriesBegan']) ? new \DateTimeImmutable($data['seriesBegan']) : $data['seriesBegan'];
        }
        if (isset($data['seriesCount'])) {
            $this->seriesCount = is_numeric($data['seriesCount']) ? (float)$data['seriesCount'] : $data['seriesCount'];
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
