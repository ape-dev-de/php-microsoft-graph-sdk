<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ActivityMetadata
 */
class ActivityMetadata
{
    /**  */
    public ?UserActivityType $activity = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['activity'])) {
            $this->activity = $data['activity'];
        }
    }
}
