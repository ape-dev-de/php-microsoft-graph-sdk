<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIncident
 */
class SecurityIncident
{
    /**
     * Owner of the incident, or null if no owner is assigned. Free editable text.
     */
    private ?string $assignedTo;

    /**
     * The specification for the incident. Possible values are: unknown, falsePositive, truePositive, informationalExpectedActivity, unknownFutureValue.
     */
    private ?string $classification;

    /**
     * Array of comments created by the Security Operations (SecOps) team when the incident is managed.
     */
    private array $comments = [];

    /**
     * Time when the incident was first created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Array of custom tags associated with an incident.
     * @var string[]
     */
    private array $customTags = [];

    /**
     * Description of the incident.
     */
    private ?string $description;

    /**
     * Specifies the determination of the incident. Possible values are: unknown, apt, malware, securityPersonnel, securityTesting, unwantedSoftware, other, multiStagedAttack, compromisedUser, phishing, maliciousUserActivity, clean, insufficientData, confirmedUserActivity, lineOfBusinessApplication, unknownFutureValue.
     */
    private ?string $determination;

    /**
     * The incident name.
     */
    private ?string $displayName;

    /**
     * The URL for the incident page in the Microsoft 365 Defender portal.
     */
    private ?string $incidentWebUrl;

    /**
     * The identity that last modified the incident.
     */
    private ?string $lastModifiedBy;

    /**
     * Time when the incident was last updated.
     */
    private ?\DateTimeInterface $lastUpdateDateTime;

    /**
     * Only populated in case an incident is grouped with another incident, as part of the logic that processes incidents. In such a case, the status property is redirected.
     */
    private ?string $redirectIncidentId;

    /**
     * User input that explains the resolution of the incident and the classification choice. This property contains free editable text.
     */
    private ?string $resolvingComment;

    /**
     */
    private ?string $severity;

    /**
     */
    private ?string $status;

    /**
     * The overview of an attack. When applicable, the summary contains details of what occurred, impacted assets, and the type of attack.
     */
    private ?string $summary;

    /**
     * The system tags associated with the incident.
     * @var string[]
     */
    private array $systemTags = [];

    /**
     * The Microsoft Entra tenant in which the alert was created.
     */
    private ?string $tenantId;

    /**
     * The list of related alerts. Supports $expand.
     * @var string[]
     */
    private array $alerts = [];


    public function getAssignedTo(): ?string
    {
        return $this->assignedTo;
    }

    public function setAssignedTo(?string $assignedTo): self
    {
        $this->assignedTo = $assignedTo;
        return $this;
    }

    public function getClassification(): ?string
    {
        return $this->classification;
    }

    public function setClassification(?string $classification): self
    {
        $this->classification = $classification;
        return $this;
    }

    public function getComments(): array
    {
        return $this->comments;
    }

    public function setComments(array $comments): self
    {
        $this->comments = $comments;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCustomTags(): array
    {
        return $this->customTags;
    }

    /**
     * @param string[] $customTags
     */
    public function setCustomTags(array $customTags): self
    {
        $this->customTags = $customTags;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDetermination(): ?string
    {
        return $this->determination;
    }

    public function setDetermination(?string $determination): self
    {
        $this->determination = $determination;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getIncidentWebUrl(): ?string
    {
        return $this->incidentWebUrl;
    }

    public function setIncidentWebUrl(?string $incidentWebUrl): self
    {
        $this->incidentWebUrl = $incidentWebUrl;
        return $this;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    public function getLastUpdateDateTime(): ?\DateTimeInterface
    {
        return $this->lastUpdateDateTime;
    }

    public function setLastUpdateDateTime(?\DateTimeInterface $lastUpdateDateTime): self
    {
        $this->lastUpdateDateTime = $lastUpdateDateTime;
        return $this;
    }

    public function getRedirectIncidentId(): ?string
    {
        return $this->redirectIncidentId;
    }

    public function setRedirectIncidentId(?string $redirectIncidentId): self
    {
        $this->redirectIncidentId = $redirectIncidentId;
        return $this;
    }

    public function getResolvingComment(): ?string
    {
        return $this->resolvingComment;
    }

    public function setResolvingComment(?string $resolvingComment): self
    {
        $this->resolvingComment = $resolvingComment;
        return $this;
    }

    public function getSeverity(): ?string
    {
        return $this->severity;
    }

    public function setSeverity(?string $severity): self
    {
        $this->severity = $severity;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSystemTags(): array
    {
        return $this->systemTags;
    }

    /**
     * @param string[] $systemTags
     */
    public function setSystemTags(array $systemTags): self
    {
        $this->systemTags = $systemTags;
        return $this;
    }

    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }

    public function setTenantId(?string $tenantId): self
    {
        $this->tenantId = $tenantId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }

    /**
     * @param string[] $alerts
     */
    public function setAlerts(array $alerts): self
    {
        $this->alerts = $alerts;
        return $this;
    }

}
