<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemovedState
 */
class RemovedState
{
    /** The removal reason for the participant resource. */
    public ?string $reason = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['reason'])) {
            $this->reason = $data['reason'];
        }
    }
}
