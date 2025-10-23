<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SettingStateDeviceSummary
 */
class SettingStateDeviceSummary
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Device Compliant count for the setting */
    public ?float $compliantDeviceCount = null;

    /** Device conflict error count for the setting */
    public ?float $conflictDeviceCount = null;

    /** Device error count for the setting */
    public ?float $errorDeviceCount = null;

    /** Name of the InstancePath for the setting */
    public ?string $instancePath = null;

    /** Device NonCompliant count for the setting */
    public ?float $nonCompliantDeviceCount = null;

    /** Device Not Applicable count for the setting */
    public ?float $notApplicableDeviceCount = null;

    /** Device Compliant count for the setting */
    public ?float $remediatedDeviceCount = null;

    /** Name of the setting */
    public ?string $settingName = null;

    /** Device Unkown count for the setting */
    public ?float $unknownDeviceCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['compliantDeviceCount'])) {
            $this->compliantDeviceCount = $data['compliantDeviceCount'];
        }
        if (isset($data['conflictDeviceCount'])) {
            $this->conflictDeviceCount = $data['conflictDeviceCount'];
        }
        if (isset($data['errorDeviceCount'])) {
            $this->errorDeviceCount = $data['errorDeviceCount'];
        }
        if (isset($data['instancePath'])) {
            $this->instancePath = $data['instancePath'];
        }
        if (isset($data['nonCompliantDeviceCount'])) {
            $this->nonCompliantDeviceCount = $data['nonCompliantDeviceCount'];
        }
        if (isset($data['notApplicableDeviceCount'])) {
            $this->notApplicableDeviceCount = $data['notApplicableDeviceCount'];
        }
        if (isset($data['remediatedDeviceCount'])) {
            $this->remediatedDeviceCount = $data['remediatedDeviceCount'];
        }
        if (isset($data['settingName'])) {
            $this->settingName = $data['settingName'];
        }
        if (isset($data['unknownDeviceCount'])) {
            $this->unknownDeviceCount = $data['unknownDeviceCount'];
        }
    }
}
