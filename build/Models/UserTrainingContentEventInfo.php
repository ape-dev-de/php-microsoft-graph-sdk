<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserTrainingContentEventInfo
 */
class UserTrainingContentEventInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Browser of the user from where the training event was generated. */
    public ?string $browser = null;

    /** Date and time of the training content playback by the user. */
    public ?\DateTimeInterface $contentDateTime = null;

    /** IP address of the user for the training event. */
    public ?string $ipAddress = null;

    /** The operating system, platform, and device details of the user for the training event. */
    public ?string $osPlatformDeviceDetails = null;

    /** 
     * Potential improvement in the tenant security posture after completion of the training by the user.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $potentialScoreImpact = null;


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
        if (isset($data['contentDateTime'])) {
            $this->contentDateTime = is_string($data['contentDateTime']) ? new \DateTimeImmutable($data['contentDateTime']) : $data['contentDateTime'];
        }
        if (isset($data['ipAddress'])) {
            $this->ipAddress = $data['ipAddress'];
        }
        if (isset($data['osPlatformDeviceDetails'])) {
            $this->osPlatformDeviceDetails = $data['osPlatformDeviceDetails'];
        }
        if (isset($data['potentialScoreImpact'])) {
            $this->potentialScoreImpact = $data['potentialScoreImpact'];
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
