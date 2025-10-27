<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSimulationEventInfo
 */
class UserSimulationEventInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Browser information from where the simulation event was initiated by a user in an attack simulation and training campaign. */
    public ?string $browser = null;

    /** 
     * 
     * @var ClickSource|\stdClass|null
     */
    public ClickSource|\stdClass|null $clickSource = null;

    /** Date and time of the simulation event by a user in an attack simulation and training campaign. */
    public ?\DateTimeInterface $eventDateTime = null;

    /** Name of the simulation event by a user in an attack simulation and training campaign. */
    public ?string $eventName = null;

    /** IP address from where the simulation event was initiated by a user in an attack simulation and training campaign. */
    public ?string $ipAddress = null;

    /** The operating system, platform, and device details from where the simulation event was initiated by a user in an attack simulation and training campaign. */
    public ?string $osPlatformDeviceDetails = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['browser'])) {
            $this->browser = $data['browser'];
        }
        if (isset($data['clickSource'])) {
            $this->clickSource = is_array($data['clickSource']) ? new ClickSource($data['clickSource']) : $data['clickSource'];
        }
        if (isset($data['eventDateTime'])) {
            $this->eventDateTime = is_string($data['eventDateTime']) ? new \DateTimeImmutable($data['eventDateTime']) : $data['eventDateTime'];
        }
        if (isset($data['eventName'])) {
            $this->eventName = $data['eventName'];
        }
        if (isset($data['ipAddress'])) {
            $this->ipAddress = $data['ipAddress'];
        }
        if (isset($data['osPlatformDeviceDetails'])) {
            $this->osPlatformDeviceDetails = $data['osPlatformDeviceDetails'];
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
