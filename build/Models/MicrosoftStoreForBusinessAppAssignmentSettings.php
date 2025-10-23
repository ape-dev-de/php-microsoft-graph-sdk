<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftStoreForBusinessAppAssignmentSettings
 */
class MicrosoftStoreForBusinessAppAssignmentSettings
{
    /** Whether or not to use device execution context for Microsoft Store for Business mobile app. */
    public ?bool $useDeviceContext = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['useDeviceContext'])) {
            $this->useDeviceContext = $data['useDeviceContext'];
        }
    }
}
