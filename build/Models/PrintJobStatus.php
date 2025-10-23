<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintJobStatus
 */
class PrintJobStatus
{
    /** A human-readable description of the print job's current processing state. Read-only. */
    public ?string $description = null;

    /** 
     * Additional details for print job state. Valid values are described in the following table. Read-only.
     * @var PrintJobStateDetail[]
     */
    public array $details = [];

    /** True if the job was acknowledged by a printer; false otherwise. Read-only. */
    public ?bool $isAcquiredByPrinter = null;

    /**  */
    public ?PrintJobProcessingState $state = null;


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
        if (isset($data['isAcquiredByPrinter'])) {
            $this->isAcquiredByPrinter = $data['isAcquiredByPrinter'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new PrintJobProcessingState($data['state']) : $data['state'];
        }
    }
}
