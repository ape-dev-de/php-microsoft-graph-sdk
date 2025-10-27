<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SoftwareUpdateStatusSummary
 */
class SoftwareUpdateStatusSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Number of compliant devices. */
    public ?float $compliantDeviceCount = null;

    /** Number of compliant users. */
    public ?float $compliantUserCount = null;

    /** Number of conflict devices. */
    public ?float $conflictDeviceCount = null;

    /** Number of conflict users. */
    public ?float $conflictUserCount = null;

    /** The name of the policy. */
    public ?string $displayName = null;

    /** Number of devices had error. */
    public ?float $errorDeviceCount = null;

    /** Number of users had error. */
    public ?float $errorUserCount = null;

    /** Number of non compliant devices. */
    public ?float $nonCompliantDeviceCount = null;

    /** Number of non compliant users. */
    public ?float $nonCompliantUserCount = null;

    /** Number of not applicable devices. */
    public ?float $notApplicableDeviceCount = null;

    /** Number of not applicable users. */
    public ?float $notApplicableUserCount = null;

    /** Number of remediated devices. */
    public ?float $remediatedDeviceCount = null;

    /** Number of remediated users. */
    public ?float $remediatedUserCount = null;

    /** Number of unknown devices. */
    public ?float $unknownDeviceCount = null;

    /** Number of unknown users. */
    public ?float $unknownUserCount = null;


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
            $this->compliantDeviceCount = $data['compliantDeviceCount'];
        }
        if (isset($data['compliantUserCount'])) {
            $this->compliantUserCount = $data['compliantUserCount'];
        }
        if (isset($data['conflictDeviceCount'])) {
            $this->conflictDeviceCount = $data['conflictDeviceCount'];
        }
        if (isset($data['conflictUserCount'])) {
            $this->conflictUserCount = $data['conflictUserCount'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['errorDeviceCount'])) {
            $this->errorDeviceCount = $data['errorDeviceCount'];
        }
        if (isset($data['errorUserCount'])) {
            $this->errorUserCount = $data['errorUserCount'];
        }
        if (isset($data['nonCompliantDeviceCount'])) {
            $this->nonCompliantDeviceCount = $data['nonCompliantDeviceCount'];
        }
        if (isset($data['nonCompliantUserCount'])) {
            $this->nonCompliantUserCount = $data['nonCompliantUserCount'];
        }
        if (isset($data['notApplicableDeviceCount'])) {
            $this->notApplicableDeviceCount = $data['notApplicableDeviceCount'];
        }
        if (isset($data['notApplicableUserCount'])) {
            $this->notApplicableUserCount = $data['notApplicableUserCount'];
        }
        if (isset($data['remediatedDeviceCount'])) {
            $this->remediatedDeviceCount = $data['remediatedDeviceCount'];
        }
        if (isset($data['remediatedUserCount'])) {
            $this->remediatedUserCount = $data['remediatedUserCount'];
        }
        if (isset($data['unknownDeviceCount'])) {
            $this->unknownDeviceCount = $data['unknownDeviceCount'];
        }
        if (isset($data['unknownUserCount'])) {
            $this->unknownUserCount = $data['unknownUserCount'];
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
