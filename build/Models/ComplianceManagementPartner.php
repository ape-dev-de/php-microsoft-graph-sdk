<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ComplianceManagementPartner
 */
class ComplianceManagementPartner
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * User groups which enroll Android devices through partner.
     * @var ComplianceManagementPartnerAssignment[]
     */
    public array $androidEnrollmentAssignments = [];

    /** Partner onboarded for Android devices. */
    public ?bool $androidOnboarded = null;

    /** Partner display name */
    public ?string $displayName = null;

    /** 
     * User groups which enroll ios devices through partner.
     * @var ComplianceManagementPartnerAssignment[]
     */
    public array $iosEnrollmentAssignments = [];

    /** Partner onboarded for ios devices. */
    public ?bool $iosOnboarded = null;

    /** Timestamp of last heartbeat after admin onboarded to the compliance management partner */
    public ?\DateTimeInterface $lastHeartbeatDateTime = null;

    /** 
     * User groups which enroll Mac devices through partner.
     * @var ComplianceManagementPartnerAssignment[]
     */
    public array $macOsEnrollmentAssignments = [];

    /** Partner onboarded for Mac devices. */
    public ?bool $macOsOnboarded = null;

    /**  */
    public ?DeviceManagementPartnerTenantState $partnerState = null;


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
        if (isset($data['androidEnrollmentAssignments'])) {
            $this->androidEnrollmentAssignments = $data['androidEnrollmentAssignments'];
        }
        if (isset($data['androidOnboarded'])) {
            $this->androidOnboarded = is_bool($data['androidOnboarded']) ? $data['androidOnboarded'] : (bool)$data['androidOnboarded'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['iosEnrollmentAssignments'])) {
            $this->iosEnrollmentAssignments = $data['iosEnrollmentAssignments'];
        }
        if (isset($data['iosOnboarded'])) {
            $this->iosOnboarded = is_bool($data['iosOnboarded']) ? $data['iosOnboarded'] : (bool)$data['iosOnboarded'];
        }
        if (isset($data['lastHeartbeatDateTime'])) {
            $this->lastHeartbeatDateTime = is_string($data['lastHeartbeatDateTime']) ? new \DateTimeImmutable($data['lastHeartbeatDateTime']) : $data['lastHeartbeatDateTime'];
        }
        if (isset($data['macOsEnrollmentAssignments'])) {
            $this->macOsEnrollmentAssignments = $data['macOsEnrollmentAssignments'];
        }
        if (isset($data['macOsOnboarded'])) {
            $this->macOsOnboarded = is_bool($data['macOsOnboarded']) ? $data['macOsOnboarded'] : (bool)$data['macOsOnboarded'];
        }
        if (isset($data['partnerState'])) {
            $this->partnerState = is_array($data['partnerState']) ? new DeviceManagementPartnerTenantState($data['partnerState']) : $data['partnerState'];
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
