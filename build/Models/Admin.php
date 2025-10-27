<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Admin
 */
class Admin
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * A container for Microsoft Edge resources. Read-only.
     * @var Edge|\stdClass|null
     */
    public mixed $edge = null;

    /** 
     * A container for the Microsoft 365 apps admin functionality.
     * @var AdminMicrosoft365Apps|\stdClass|null
     */
    public mixed $microsoft365Apps = null;

    /** 
     * Represents a setting to control people-related admin settings in the tenant.
     * @var PeopleAdminSettings|\stdClass|null
     */
    public mixed $people = null;

    /** 
     * A container for administrative resources to manage reports.
     * @var AdminReportSettings|\stdClass|null
     */
    public mixed $reportSettings = null;

    /** 
     * A container for service communications resources. Read-only.
     * @var ServiceAnnouncement|\stdClass|null
     */
    public mixed $serviceAnnouncement = null;

    /** 
     * 
     * @var Sharepoint|\stdClass|null
     */
    public mixed $sharepoint = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['edge'])) {
            $this->edge = is_array($data['edge']) ? new Edge($data['edge']) : $data['edge'];
        }
        if (isset($data['microsoft365Apps'])) {
            $this->microsoft365Apps = is_array($data['microsoft365Apps']) ? new AdminMicrosoft365Apps($data['microsoft365Apps']) : $data['microsoft365Apps'];
        }
        if (isset($data['people'])) {
            $this->people = is_array($data['people']) ? new PeopleAdminSettings($data['people']) : $data['people'];
        }
        if (isset($data['reportSettings'])) {
            $this->reportSettings = is_array($data['reportSettings']) ? new AdminReportSettings($data['reportSettings']) : $data['reportSettings'];
        }
        if (isset($data['serviceAnnouncement'])) {
            $this->serviceAnnouncement = is_array($data['serviceAnnouncement']) ? new ServiceAnnouncement($data['serviceAnnouncement']) : $data['serviceAnnouncement'];
        }
        if (isset($data['sharepoint'])) {
            $this->sharepoint = is_array($data['sharepoint']) ? new Sharepoint($data['sharepoint']) : $data['sharepoint'];
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
