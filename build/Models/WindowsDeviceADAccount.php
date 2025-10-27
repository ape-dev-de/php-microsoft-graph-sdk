<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDeviceADAccount
 */
class WindowsDeviceADAccount
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Not yet documented */
    public ?string $password = null;

    /** Not yet documented */
    public ?string $domainName = null;

    /** Not yet documented */
    public ?string $userName = null;


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
        if (isset($data['domainName'])) {
            $this->domainName = $data['domainName'];
        }
        if (isset($data['userName'])) {
            $this->userName = $data['userName'];
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
