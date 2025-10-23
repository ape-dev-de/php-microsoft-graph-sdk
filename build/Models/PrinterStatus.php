<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterStatus
 */
class PrinterStatus
{
    /** A human-readable description of the printer's current processing state. Read-only. */
    public ?string $description = null;

    /** 
     * The list of details describing why the printer is in the current state. Valid values are described in the following table. Read-only.
     * @var PrinterProcessingStateDetail[]
     */
    public array $details = [];

    /**  */
    public ?PrinterProcessingState $state = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['details'])) {
            $this->details = $data['details'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new PrinterProcessingState($data['state']) : $data['state'];
        }
    }
}
