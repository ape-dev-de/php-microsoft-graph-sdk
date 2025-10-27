<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsAppXAppAssignmentSettings
 */
class WindowsAppXAppAssignmentSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** When TRUE, indicates that device execution context will be used for the AppX mobile app. When FALSE, indicates that user context will be used for the AppX mobile app. By default, this property is set to FALSE. Once this property has been set to TRUE it cannot be changed. */
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
