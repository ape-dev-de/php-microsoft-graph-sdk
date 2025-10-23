<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintTaskStatus
 */
class PrintTaskStatus
{
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
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new PrintTaskProcessingState($data['state']) : $data['state'];
        }
    }
}
