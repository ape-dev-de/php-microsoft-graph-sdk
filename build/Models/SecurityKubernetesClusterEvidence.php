<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesClusterEvidence
 */
class SecurityKubernetesClusterEvidence
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

    /** 
     * The cloud identifier of the cluster. Can be either an amazonResourceEvidence, azureResourceEvidence, or googleCloudResourceEvidence object.
     * @var SecurityAlertEvidence|\stdClass|null
     */
    public mixed $cloudResource = null;

    /** The distribution type of the cluster. */
    public ?string $distribution = null;

    /** The cluster name. */
    public ?string $name = null;

    /** 
     * The platform the cluster runs on. Possible values are: unknown, aks, eks, gke, arc, unknownFutureValue.
     * @var SecurityKubernetesPlatform|\stdClass|null
     */
    public mixed $platform = null;

    /** The kubernetes version of the cluster. */
    public ?string $version = null;


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
            $this->remediationStatus = is_array($data['remediationStatus']) ? new SecurityEvidenceRemediationStatus($data['remediationStatus']) : $data['remediationStatus'];
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
            $this->verdict = is_array($data['verdict']) ? new SecurityEvidenceVerdict($data['verdict']) : $data['verdict'];
        }
        if (isset($data['cloudResource'])) {
            $this->cloudResource = is_array($data['cloudResource']) ? new SecurityAlertEvidence($data['cloudResource']) : $data['cloudResource'];
        }
        if (isset($data['distribution'])) {
            $this->distribution = $data['distribution'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['platform'])) {
            $this->platform = is_array($data['platform']) ? new SecurityKubernetesPlatform($data['platform']) : $data['platform'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
    }
}
