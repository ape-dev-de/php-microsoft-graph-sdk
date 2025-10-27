<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintOperationStatus
 */
class PrintOperationStatus
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** A human-readable description of the printOperation's current processing state. Read-only. */
    public ?string $description = null;

    /**  */
    public ?PrintOperationProcessingState $state = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['state'])) {
            $this->state = is_string($data['state']) ? PrintOperationProcessingState::tryFrom($data['state']) : $data['state'];
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
