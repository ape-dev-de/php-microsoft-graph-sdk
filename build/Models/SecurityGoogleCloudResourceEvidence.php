<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityGoogleCloudResourceEvidence
 */
class SecurityGoogleCloudResourceEvidence
{
    /** The date and time when the evidence was created and added to the alert. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Detailed description of the entity role/s in an alert. Values are free-form.
     * @var string[]
     */
    public array $detailedRoles = [];

    /**  */
    public ?SecurityEvidenceRemediationStatus $remediationStatus = null;

    /** Details about the remediation status. */
    public ?string $remediationStatusDetails = null;

    /** 
     * The role/s that an evidence entity represents in an alert, for example, an IP address that is associated with an attacker has the evidence role Attacker.
     * @var SecurityEvidenceRole[]
     */
    public array $roles = [];

    /** 
     * Array of custom tags associated with an evidence instance, for example, to denote a group of devices, high-value assets, etc.
     * @var string[]
     */
    public array $tags = [];

    /**  */
    public ?SecurityEvidenceVerdict $verdict = null;

    /**  */
    public ?string $fullResourceName = null;

    /** The zone or region where the resource is located. */
    public ?string $location = null;

    /** 
     * The type of location. Possible values are: unknown, regional, zonal, global, unknownFutureValue.
     * @var SecurityGoogleCloudLocationType|\stdClass|null
     */
    public mixed $locationType = null;

    /** The Google project ID as defined by the user. */
    public ?string $projectId = null;

    /** The project number assigned by Google. */
    public ?float $projectNumber = null;

    /** The name of the resource. */
    public ?string $resourceName = null;

    /** The type of the resource. */
    public ?string $resourceType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['detailedRoles'])) {
            $this->detailedRoles = $data['detailedRoles'];
        }
        if (isset($data['remediationStatus'])) {
            $this->remediationStatus = $data['remediationStatus'];
        }
        if (isset($data['remediationStatusDetails'])) {
            $this->remediationStatusDetails = $data['remediationStatusDetails'];
        }
        if (isset($data['roles'])) {
            $this->roles = $data['roles'];
        }
        if (isset($data['tags'])) {
            $this->tags = $data['tags'];
        }
        if (isset($data['verdict'])) {
            $this->verdict = $data['verdict'];
        }
        if (isset($data['fullResourceName'])) {
            $this->fullResourceName = $data['fullResourceName'];
        }
        if (isset($data['location'])) {
            $this->location = $data['location'];
        }
        if (isset($data['locationType'])) {
            $this->locationType = $data['locationType'];
        }
        if (isset($data['projectId'])) {
            $this->projectId = $data['projectId'];
        }
        if (isset($data['projectNumber'])) {
            $this->projectNumber = $data['projectNumber'];
        }
        if (isset($data['resourceName'])) {
            $this->resourceName = $data['resourceName'];
        }
        if (isset($data['resourceType'])) {
            $this->resourceType = $data['resourceType'];
        }
    }
}
