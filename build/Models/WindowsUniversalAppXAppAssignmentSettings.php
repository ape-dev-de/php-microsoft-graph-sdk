<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUniversalAppXAppAssignmentSettings
 */
class WindowsUniversalAppXAppAssignmentSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** If true, uses device execution context for Windows Universal AppX mobile app. Device-context install is not allowed when this type of app is targeted with Available intent. Defaults to false. */
    public ?bool $useDeviceContext = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['useDeviceContext'])) {
            $this->useDeviceContext = is_bool($data['useDeviceContext']) ? $data['useDeviceContext'] : (bool)$data['useDeviceContext'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
