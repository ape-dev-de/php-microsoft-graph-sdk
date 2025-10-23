<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRetentionDurationInDays
 */
class SecurityRetentionDurationInDays
{
    /** Specifies the time period in days for which an item with the applied retention label will be retained for. */
    public ?float $days = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['days'])) {
            $this->days = $data['days'];
        }
    }
}
