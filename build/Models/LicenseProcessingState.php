<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LicenseProcessingState
 */
class LicenseProcessingState
{
    /**  */
    public ?string $state = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
    }
}
