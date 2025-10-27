<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UpdateWindowsDeviceAccountActionParameter
 */
class UpdateWindowsDeviceAccountActionParameter
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Not yet documented */
    public ?bool $calendarSyncEnabled = null;

    /** 
     * Not yet documented
     * @var WindowsDeviceAccount|\stdClass|null
     */
    public mixed $deviceAccount = null;

    /** Not yet documented */
    public ?string $deviceAccountEmail = null;

    /** Not yet documented */
    public ?string $exchangeServer = null;

    /** Not yet documented */
    public ?bool $passwordRotationEnabled = null;

    /** Not yet documented */
    public ?string $sessionInitiationProtocalAddress = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['calendarSyncEnabled'])) {
            $this->calendarSyncEnabled = $data['calendarSyncEnabled'];
        }
        if (isset($data['deviceAccount'])) {
            $this->deviceAccount = is_array($data['deviceAccount']) ? new WindowsDeviceAccount($data['deviceAccount']) : $data['deviceAccount'];
        }
        if (isset($data['deviceAccountEmail'])) {
            $this->deviceAccountEmail = $data['deviceAccountEmail'];
        }
        if (isset($data['exchangeServer'])) {
            $this->exchangeServer = $data['exchangeServer'];
        }
        if (isset($data['passwordRotationEnabled'])) {
            $this->passwordRotationEnabled = $data['passwordRotationEnabled'];
        }
        if (isset($data['sessionInitiationProtocalAddress'])) {
            $this->sessionInitiationProtocalAddress = $data['sessionInitiationProtocalAddress'];
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
