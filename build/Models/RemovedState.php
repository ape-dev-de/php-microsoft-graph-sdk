<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemovedState
 */
class RemovedState
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The removal reason for the participant resource. */
    public ?string $reason = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['reason'])) {
            $this->reason = $data['reason'];
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
