<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityContainerImageEvidence
 */
class SecurityContainerImageEvidence
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
     * The digest image entity, in case this is a tag image.
     * @var SecurityContainerImageEvidence|\stdClass|null
     */
    public mixed $digestImage = null;

    /** The unique identifier for the container image entity. */
    public ?string $imageId = null;

    /** 
     * The container registry for this image.
     * @var SecurityContainerRegistryEvidence|\stdClass|null
     */
    public mixed $registry = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
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
        if (isset($data['digestImage'])) {
            $this->digestImage = $data['digestImage'];
        }
        if (isset($data['imageId'])) {
            $this->imageId = $data['imageId'];
        }
        if (isset($data['registry'])) {
            $this->registry = $data['registry'];
        }
    }
}
