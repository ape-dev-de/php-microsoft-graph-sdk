<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUniversalAppXAppAssignmentSettings
 */
class WindowsUniversalAppXAppAssignmentSettings
{
    /** If true, uses device execution context for Windows Universal AppX mobile app. Device-context install is not allowed when this type of app is targeted with Available intent. Defaults to false. */
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
