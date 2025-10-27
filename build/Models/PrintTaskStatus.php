<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintTaskStatus
 */
class PrintTaskStatus
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** A human-readable description of the current processing state of the printTask. */
    public ?string $description = null;

    /**  */
    public ?PrintTaskProcessingState $state = null;


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
            $this->state = is_string($data['state']) ? PrintTaskProcessingState::tryFrom($data['state']) : $data['state'];
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
