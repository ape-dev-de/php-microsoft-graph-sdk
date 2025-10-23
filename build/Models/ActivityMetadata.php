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
            $this->activity = is_array($data['activity']) ? new UserActivityType($data['activity']) : $data['activity'];
        }
    }
}
