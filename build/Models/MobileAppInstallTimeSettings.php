<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppInstallTimeSettings
 */
class MobileAppInstallTimeSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The time at which the app should be installed. */
    public ?\DateTimeInterface $deadlineDateTime = null;

    /** The time at which the app should be available for installation. */
    public ?\DateTimeInterface $startDateTime = null;

    /** Whether the local device time or UTC time should be used when determining the available and deadline times. */
    public ?bool $useLocalTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['deadlineDateTime'])) {
            $this->deadlineDateTime = is_string($data['deadlineDateTime']) ? new \DateTimeImmutable($data['deadlineDateTime']) : $data['deadlineDateTime'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['useLocalTime'])) {
            $this->useLocalTime = is_bool($data['useLocalTime']) ? $data['useLocalTime'] : (bool)$data['useLocalTime'];
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
