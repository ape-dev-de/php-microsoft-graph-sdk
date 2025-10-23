<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceInfo
 */
class DeviceInfo
{
    /** Unique identifier set by Azure Device Registration Service at the time of registration. */
    public ?string $deviceId = null;

    /** The display name for the device. */
    public ?string $displayName = null;

    /** Enrollment profile applied to the device. */
    public ?string $enrollmentProfileName = null;

    /** Extension attribute. */
    public ?string $extensionAttribute1 = null;

    /** Extension attribute. */
    public ?string $extensionAttribute10 = null;

    /** Extension attribute. */
    public ?string $extensionAttribute11 = null;

    /** Extension attribute. */
    public ?string $extensionAttribute12 = null;

    /** Extension attribute. */
    public ?string $extensionAttribute13 = null;

    /** Extension attribute. */
    public ?string $extensionAttribute14 = null;

    /** Extension attribute. */
    public ?string $extensionAttribute15 = null;

    /** Extension attribute. */
    public ?string $extensionAttribute2 = null;

    /** Extension attribute. */
    public ?string $extensionAttribute3 = null;

    /** Extension attribute. */
    public ?string $extensionAttribute4 = null;

    /** Extension attribute. */
    public ?string $extensionAttribute5 = null;

    /** Extension attribute. */
    public ?string $extensionAttribute6 = null;

    /** Extension attribute. */
    public ?string $extensionAttribute7 = null;

    /** Extension attribute. */
    public ?string $extensionAttribute8 = null;

    /** Extension attribute. */
    public ?string $extensionAttribute9 = null;

    /** Indicates the device compliance status with Mobile Management Device (MDM) policies. Default is false. */
    public ?bool $isCompliant = null;

    /** Manufacturer of the device. */
    public ?string $manufacturer = null;

    /** Application identifier used to register device into MDM. */
    public ?string $mdmAppId = null;

    /** Model of the device. */
    public ?string $model = null;

    /** The type of operating system on the device. */
    public ?string $operatingSystem = null;

    /** The version of the operating system on the device. */
    public ?string $operatingSystemVersion = null;

    /** Ownership of the device. This property is set by Intune. */
    public ?string $ownership = null;

    /** 
     * A collection of physical identifiers for the device.
     * @var string[]
     */
    public array $physicalIds = [];

    /** The profile type of the device. */
    public ?string $profileType = null;

    /** 
     * List of labels applied to the device by the system.
     * @var string[]
     */
    public array $systemLabels = [];

    /** Type of trust for the joined device. */
    public ?string $trustType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['deviceId'])) {
            $this->deviceId = $data['deviceId'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['enrollmentProfileName'])) {
            $this->enrollmentProfileName = $data['enrollmentProfileName'];
        }
        if (isset($data['extensionAttribute1'])) {
            $this->extensionAttribute1 = $data['extensionAttribute1'];
        }
        if (isset($data['extensionAttribute10'])) {
            $this->extensionAttribute10 = $data['extensionAttribute10'];
        }
        if (isset($data['extensionAttribute11'])) {
            $this->extensionAttribute11 = $data['extensionAttribute11'];
        }
        if (isset($data['extensionAttribute12'])) {
            $this->extensionAttribute12 = $data['extensionAttribute12'];
        }
        if (isset($data['extensionAttribute13'])) {
            $this->extensionAttribute13 = $data['extensionAttribute13'];
        }
        if (isset($data['extensionAttribute14'])) {
            $this->extensionAttribute14 = $data['extensionAttribute14'];
        }
        if (isset($data['extensionAttribute15'])) {
            $this->extensionAttribute15 = $data['extensionAttribute15'];
        }
        if (isset($data['extensionAttribute2'])) {
            $this->extensionAttribute2 = $data['extensionAttribute2'];
        }
        if (isset($data['extensionAttribute3'])) {
            $this->extensionAttribute3 = $data['extensionAttribute3'];
        }
        if (isset($data['extensionAttribute4'])) {
            $this->extensionAttribute4 = $data['extensionAttribute4'];
        }
        if (isset($data['extensionAttribute5'])) {
            $this->extensionAttribute5 = $data['extensionAttribute5'];
        }
        if (isset($data['extensionAttribute6'])) {
            $this->extensionAttribute6 = $data['extensionAttribute6'];
        }
        if (isset($data['extensionAttribute7'])) {
            $this->extensionAttribute7 = $data['extensionAttribute7'];
        }
        if (isset($data['extensionAttribute8'])) {
            $this->extensionAttribute8 = $data['extensionAttribute8'];
        }
        if (isset($data['extensionAttribute9'])) {
            $this->extensionAttribute9 = $data['extensionAttribute9'];
        }
        if (isset($data['isCompliant'])) {
            $this->isCompliant = $data['isCompliant'];
        }
        if (isset($data['manufacturer'])) {
            $this->manufacturer = $data['manufacturer'];
        }
        if (isset($data['mdmAppId'])) {
            $this->mdmAppId = $data['mdmAppId'];
        }
        if (isset($data['model'])) {
            $this->model = $data['model'];
        }
        if (isset($data['operatingSystem'])) {
            $this->operatingSystem = $data['operatingSystem'];
        }
        if (isset($data['operatingSystemVersion'])) {
            $this->operatingSystemVersion = $data['operatingSystemVersion'];
        }
        if (isset($data['ownership'])) {
            $this->ownership = $data['ownership'];
        }
        if (isset($data['physicalIds'])) {
            $this->physicalIds = $data['physicalIds'];
        }
        if (isset($data['profileType'])) {
            $this->profileType = $data['profileType'];
        }
        if (isset($data['systemLabels'])) {
            $this->systemLabels = $data['systemLabels'];
        }
        if (isset($data['trustType'])) {
            $this->trustType = $data['trustType'];
        }
    }
}
