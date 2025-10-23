<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Admin
 */
class Admin
{
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
        if (isset($data['edge'])) {
            $this->edge = $data['edge'];
        }
        if (isset($data['microsoft365Apps'])) {
            $this->microsoft365Apps = $data['microsoft365Apps'];
        }
        if (isset($data['people'])) {
            $this->people = $data['people'];
        }
        if (isset($data['reportSettings'])) {
            $this->reportSettings = $data['reportSettings'];
        }
        if (isset($data['serviceAnnouncement'])) {
            $this->serviceAnnouncement = $data['serviceAnnouncement'];
        }
        if (isset($data['sharepoint'])) {
            $this->sharepoint = $data['sharepoint'];
        }
    }
}
