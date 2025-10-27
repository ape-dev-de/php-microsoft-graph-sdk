<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEndpoint
 */
class VirtualEndpoint
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * A collection of Cloud PC audit events.
     * @var CloudPcAuditEvent[]
     */
    public array $auditEvents = [];

    /** 
     * A collection of cloud-managed virtual desktops.
     * @var CloudPC[]
     */
    public array $cloudPCs = [];

    /** 
     * A collection of device image resources on Cloud PC.
     * @var CloudPcDeviceImage[]
     */
    public array $deviceImages = [];

    /** 
     * A collection of gallery image resources on Cloud PC.
     * @var CloudPcGalleryImage[]
     */
    public array $galleryImages = [];

    /** 
     * A defined collection of Azure resource information that can be used to establish Azure network connections for Cloud PCs.
     * @var CloudPcOnPremisesConnection[]
     */
    public array $onPremisesConnections = [];

    /** 
     * A collection of Cloud PC provisioning policies.
     * @var CloudPcProvisioningPolicy[]
     */
    public array $provisioningPolicies = [];

    /** 
     * A collection of Cloud PC user settings.
     * @var CloudPcUserSetting[]
     */
    public array $userSettings = [];


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
        if (isset($data['auditEvents'])) {
            $this->auditEvents = $data['auditEvents'];
        }
        if (isset($data['cloudPCs'])) {
            $this->cloudPCs = $data['cloudPCs'];
        }
        if (isset($data['deviceImages'])) {
            $this->deviceImages = $data['deviceImages'];
        }
        if (isset($data['galleryImages'])) {
            $this->galleryImages = $data['galleryImages'];
        }
        if (isset($data['onPremisesConnections'])) {
            $this->onPremisesConnections = $data['onPremisesConnections'];
        }
        if (isset($data['provisioningPolicies'])) {
            $this->provisioningPolicies = $data['provisioningPolicies'];
        }
        if (isset($data['userSettings'])) {
            $this->userSettings = $data['userSettings'];
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
