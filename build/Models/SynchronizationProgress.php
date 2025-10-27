<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationProgress
 */
class SynchronizationProgress
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The numerator of a progress ratio; the number of units of changes already processed. */
    public ?float $completedUnits = null;

    /** The time of a progress observation as an offset in minutes from UTC. */
    public ?\DateTimeInterface $progressObservationDateTime = null;

    /** The denominator of a progress ratio; a number of units of changes to be processed to accomplish synchronization. */
    public ?float $totalUnits = null;

    /** An optional description of the units. */
    public ?string $units = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['completedUnits'])) {
            $this->completedUnits = $data['completedUnits'];
        }
        if (isset($data['progressObservationDateTime'])) {
            $this->progressObservationDateTime = is_string($data['progressObservationDateTime']) ? new \DateTimeImmutable($data['progressObservationDateTime']) : $data['progressObservationDateTime'];
        }
        if (isset($data['totalUnits'])) {
            $this->totalUnits = $data['totalUnits'];
        }
        if (isset($data['units'])) {
            $this->units = $data['units'];
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
