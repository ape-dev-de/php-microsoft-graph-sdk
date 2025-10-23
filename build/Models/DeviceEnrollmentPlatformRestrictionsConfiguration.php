<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceEnrollmentPlatformRestrictionsConfiguration
 */
class DeviceEnrollmentPlatformRestrictionsConfiguration
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

    /** 
     * Android restrictions based on platform, platform operating system version, and device ownership
     * @var DeviceEnrollmentPlatformRestriction|\stdClass|null
     */
    public mixed $androidRestriction = null;

    /** 
     * Ios restrictions based on platform, platform operating system version, and device ownership
     * @var DeviceEnrollmentPlatformRestriction|\stdClass|null
     */
    public mixed $iosRestriction = null;

    /** 
     * Mac restrictions based on platform, platform operating system version, and device ownership
     * @var DeviceEnrollmentPlatformRestriction|\stdClass|null
     */
    public mixed $macOSRestriction = null;

    /** 
     * Windows mobile restrictions based on platform, platform operating system version, and device ownership
     * @var DeviceEnrollmentPlatformRestriction|\stdClass|null
     */
    public mixed $windowsMobileRestriction = null;

    /** 
     * Windows restrictions based on platform, platform operating system version, and device ownership
     * @var DeviceEnrollmentPlatformRestriction|\stdClass|null
     */
    public mixed $windowsRestriction = null;


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
        if (isset($data['androidRestriction'])) {
            $this->androidRestriction = $data['androidRestriction'];
        }
        if (isset($data['iosRestriction'])) {
            $this->iosRestriction = $data['iosRestriction'];
        }
        if (isset($data['macOSRestriction'])) {
            $this->macOSRestriction = $data['macOSRestriction'];
        }
        if (isset($data['windowsMobileRestriction'])) {
            $this->windowsMobileRestriction = $data['windowsMobileRestriction'];
        }
        if (isset($data['windowsRestriction'])) {
            $this->windowsRestriction = $data['windowsRestriction'];
        }
    }
}
