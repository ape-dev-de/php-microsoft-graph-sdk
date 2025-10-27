<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppsInstallationOptionsForMac
 */
class AppsInstallationOptionsForMac
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Specifies whether users can install Microsoft 365 apps on their MAC devices. The default value is true. */
    public ?bool $isMicrosoft365AppsEnabled = null;

    /** Specifies whether users can install Skype for Business on their MAC devices running OS X El Capitan 10.11 or later. The default value is true. */
    public ?bool $isSkypeForBusinessEnabled = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isMicrosoft365AppsEnabled'])) {
            $this->isMicrosoft365AppsEnabled = $data['isMicrosoft365AppsEnabled'];
        }
        if (isset($data['isSkypeForBusinessEnabled'])) {
            $this->isSkypeForBusinessEnabled = $data['isSkypeForBusinessEnabled'];
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
