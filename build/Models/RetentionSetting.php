<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RetentionSetting
 */
class RetentionSetting
{
    /** The frequency of the backup. */
    public ?string $interval = null;

    /** The period of time to retain the protected data for a single Microsoft 365 service. */
    public ?string $period = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['interval'])) {
            $this->interval = $data['interval'];
        }
        if (isset($data['period'])) {
            $this->period = $data['period'];
        }
    }
}
