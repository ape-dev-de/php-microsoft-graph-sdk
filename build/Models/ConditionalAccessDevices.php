<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessDevices
 */
class ConditionalAccessDevices
{
    /** 
     * Filter that defines the dynamic-device-syntax rule to include/exclude devices. A filter can use device properties (such as extension attributes) to include/exclude them.
     * @var ConditionalAccessFilter|\stdClass|null
     */
    public mixed $deviceFilter = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['deviceFilter'])) {
            $this->deviceFilter = $data['deviceFilter'];
        }
    }
}
