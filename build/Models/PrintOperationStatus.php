<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintOperationStatus
 */
class PrintOperationStatus
{
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
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new PrintOperationProcessingState($data['state']) : $data['state'];
        }
    }
}
