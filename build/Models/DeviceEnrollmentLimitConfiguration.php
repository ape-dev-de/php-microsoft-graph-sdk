<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceEnrollmentLimitConfiguration
 */
class DeviceEnrollmentLimitConfiguration
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Created date time in UTC of the device enrollment configuration */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The description of the device enrollment configuration */
    public ?string $description = null;

    /** The display name of the device enrollment configuration */
    public ?string $displayName = null;

    /** Last modified date time in UTC of the device enrollment configuration */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Priority is used when a user exists in multiple groups that are assigned enrollment configuration. Users are subject only to the configuration with the lowest priority value. */
    public ?float $priority = null;

    /** The version of the device enrollment configuration */
    public ?float $version = null;

    /** 
     * The list of group assignments for the device configuration profile
     * @var EnrollmentConfigurationAssignment[]
     */
    public array $assignments = [];

    /** The maximum number of devices that a user can enroll */
    public ?float $limit = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['priority'])) {
            $this->priority = $data['priority'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
        }
        if (isset($data['limit'])) {
            $this->limit = $data['limit'];
        }
    }
}
