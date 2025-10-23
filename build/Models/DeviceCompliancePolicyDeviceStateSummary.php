<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceCompliancePolicyDeviceStateSummary
 */
class DeviceCompliancePolicyDeviceStateSummary
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Number of compliant devices */
    public ?float $compliantDeviceCount = null;

    /** Number of devices that have compliance managed by System Center Configuration Manager */
    public ?float $configManagerCount = null;

    /** Number of conflict devices */
    public ?float $conflictDeviceCount = null;

    /** Number of error devices */
    public ?float $errorDeviceCount = null;

    /** Number of devices that are in grace period */
    public ?float $inGracePeriodCount = null;

    /** Number of NonCompliant devices */
    public ?float $nonCompliantDeviceCount = null;

    /** Number of not applicable devices */
    public ?float $notApplicableDeviceCount = null;

    /** Number of remediated devices */
    public ?float $remediatedDeviceCount = null;

    /** Number of unknown devices */
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
        if (isset($data['configManagerCount'])) {
            $this->configManagerCount = $data['configManagerCount'];
        }
        if (isset($data['conflictDeviceCount'])) {
            $this->conflictDeviceCount = $data['conflictDeviceCount'];
        }
        if (isset($data['errorDeviceCount'])) {
            $this->errorDeviceCount = $data['errorDeviceCount'];
        }
        if (isset($data['inGracePeriodCount'])) {
            $this->inGracePeriodCount = $data['inGracePeriodCount'];
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
        if (isset($data['unknownDeviceCount'])) {
            $this->unknownDeviceCount = $data['unknownDeviceCount'];
        }
    }
}
