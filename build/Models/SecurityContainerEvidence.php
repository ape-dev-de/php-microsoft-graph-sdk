<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityContainerEvidence
 */
class SecurityContainerEvidence
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
     * The list of arguments.
     * @var string[]
     */
    public array $args = [];

    /** 
     * The list of commands.
     * @var string[]
     */
    public array $command = [];

    /** The container ID. */
    public ?string $containerId = null;

    /** 
     * The image used to run the container.
     * @var SecurityContainerImageEvidence|\stdClass|null
     */
    public mixed $image = null;

    /** The privileged status. */
    public ?bool $isPrivileged = null;

    /** The container name. */
    public ?string $name = null;

    /** 
     * The pod this container belongs to.
     * @var SecurityKubernetesPodEvidence|\stdClass|null
     */
    public mixed $pod = null;


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
        if (isset($data['args'])) {
            $this->args = $data['args'];
        }
        if (isset($data['command'])) {
            $this->command = $data['command'];
        }
        if (isset($data['containerId'])) {
            $this->containerId = $data['containerId'];
        }
        if (isset($data['image'])) {
            $this->image = is_array($data['image']) ? new SecurityContainerImageEvidence($data['image']) : $data['image'];
        }
        if (isset($data['isPrivileged'])) {
            $this->isPrivileged = $data['isPrivileged'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['pod'])) {
            $this->pod = is_array($data['pod']) ? new SecurityKubernetesPodEvidence($data['pod']) : $data['pod'];
        }
    }
}
