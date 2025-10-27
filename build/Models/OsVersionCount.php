<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OsVersionCount
 */
class OsVersionCount
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Count of devices with malware for the OS version */
    public ?float $deviceCount = null;

    /** The Timestamp of the last update for the device count in UTC */
    public ?\DateTimeInterface $lastUpdateDateTime = null;

    /** OS version */
    public ?string $osVersion = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['deviceCount'])) {
            $this->deviceCount = $data['deviceCount'];
        }
        if (isset($data['lastUpdateDateTime'])) {
            $this->lastUpdateDateTime = is_string($data['lastUpdateDateTime']) ? new \DateTimeImmutable($data['lastUpdateDateTime']) : $data['lastUpdateDateTime'];
        }
        if (isset($data['osVersion'])) {
            $this->osVersion = $data['osVersion'];
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
