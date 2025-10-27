<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceConfigurationDeviceStateSummary
 */
class DeviceConfigurationDeviceStateSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Number of compliant devices */
    public ?float $compliantDeviceCount = null;

    /** Number of conflict devices */
    public ?float $conflictDeviceCount = null;

    /** Number of error devices */
    public ?float $errorDeviceCount = null;

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
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['compliantDeviceCount'])) {
            $this->compliantDeviceCount = is_numeric($data['compliantDeviceCount']) ? (float)$data['compliantDeviceCount'] : $data['compliantDeviceCount'];
        }
        if (isset($data['conflictDeviceCount'])) {
            $this->conflictDeviceCount = is_numeric($data['conflictDeviceCount']) ? (float)$data['conflictDeviceCount'] : $data['conflictDeviceCount'];
        }
        if (isset($data['errorDeviceCount'])) {
            $this->errorDeviceCount = is_numeric($data['errorDeviceCount']) ? (float)$data['errorDeviceCount'] : $data['errorDeviceCount'];
        }
        if (isset($data['nonCompliantDeviceCount'])) {
            $this->nonCompliantDeviceCount = is_numeric($data['nonCompliantDeviceCount']) ? (float)$data['nonCompliantDeviceCount'] : $data['nonCompliantDeviceCount'];
        }
        if (isset($data['notApplicableDeviceCount'])) {
            $this->notApplicableDeviceCount = is_numeric($data['notApplicableDeviceCount']) ? (float)$data['notApplicableDeviceCount'] : $data['notApplicableDeviceCount'];
        }
        if (isset($data['remediatedDeviceCount'])) {
            $this->remediatedDeviceCount = is_numeric($data['remediatedDeviceCount']) ? (float)$data['remediatedDeviceCount'] : $data['remediatedDeviceCount'];
        }
        if (isset($data['unknownDeviceCount'])) {
            $this->unknownDeviceCount = is_numeric($data['unknownDeviceCount']) ? (float)$data['unknownDeviceCount'] : $data['unknownDeviceCount'];
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
