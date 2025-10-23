<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsAppXAppAssignmentSettings
 */
class WindowsAppXAppAssignmentSettings
{
    /** When TRUE, indicates that device execution context will be used for the AppX mobile app. When FALSE, indicates that user context will be used for the AppX mobile app. By default, this property is set to FALSE. Once this property has been set to TRUE it cannot be changed. */
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
