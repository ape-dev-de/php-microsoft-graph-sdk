<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDeviceAccount
 */
class WindowsDeviceAccount
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Not yet documented */
    public ?string $password = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['password'])) {
            $this->password = $data['password'];
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
