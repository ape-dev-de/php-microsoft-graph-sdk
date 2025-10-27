<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EnrollmentTroubleshootingEvent
 */
class EnrollmentTroubleshootingEvent
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Id used for tracing the failure in the service. */
    public ?string $correlationId = null;

    /** Time when the event occurred . */
    public ?\DateTimeInterface $eventDateTime = null;

    /** Azure AD device identifier. */
    public ?string $deviceId = null;

    /**  */
    public ?DeviceEnrollmentType $enrollmentType = null;

    /**  */
    public ?DeviceEnrollmentFailureReason $failureCategory = null;

    /** Detailed failure reason. */
    public ?string $failureReason = null;

    /** Device identifier created or collected by Intune. */
    public ?string $managedDeviceIdentifier = null;

    /** Operating System. */
    public ?string $operatingSystem = null;

    /** OS Version. */
    public ?string $osVersion = null;

    /** Identifier for the user that tried to enroll the device. */
    public ?string $userId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['correlationId'])) {
            $this->correlationId = $data['correlationId'];
        }
        if (isset($data['eventDateTime'])) {
            $this->eventDateTime = is_string($data['eventDateTime']) ? new \DateTimeImmutable($data['eventDateTime']) : $data['eventDateTime'];
        }
        if (isset($data['deviceId'])) {
            $this->deviceId = $data['deviceId'];
        }
        if (isset($data['enrollmentType'])) {
            $this->enrollmentType = is_array($data['enrollmentType']) ? new DeviceEnrollmentType($data['enrollmentType']) : $data['enrollmentType'];
        }
        if (isset($data['failureCategory'])) {
            $this->failureCategory = is_array($data['failureCategory']) ? new DeviceEnrollmentFailureReason($data['failureCategory']) : $data['failureCategory'];
        }
        if (isset($data['failureReason'])) {
            $this->failureReason = $data['failureReason'];
        }
        if (isset($data['managedDeviceIdentifier'])) {
            $this->managedDeviceIdentifier = $data['managedDeviceIdentifier'];
        }
        if (isset($data['operatingSystem'])) {
            $this->operatingSystem = $data['operatingSystem'];
        }
        if (isset($data['osVersion'])) {
            $this->osVersion = $data['osVersion'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
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
