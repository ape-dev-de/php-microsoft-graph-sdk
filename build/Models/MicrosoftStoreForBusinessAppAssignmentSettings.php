<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftStoreForBusinessAppAssignmentSettings
 */
class MicrosoftStoreForBusinessAppAssignmentSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Whether or not to use device execution context for Microsoft Store for Business mobile app. */
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
