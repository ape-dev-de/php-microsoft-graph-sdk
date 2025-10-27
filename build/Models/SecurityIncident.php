<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIncident
 */
class SecurityIncident
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Owner of the incident, or null if no owner is assigned. Free editable text. */
    public ?string $assignedTo = null;

    /** 
     * The specification for the incident. Possible values are: unknown, falsePositive, truePositive, informationalExpectedActivity, unknownFutureValue.
     * @var SecurityAlertClassification|\stdClass|null
     */
    public mixed $classification = null;

    /** 
     * Array of comments created by the Security Operations (SecOps) team when the incident is managed.
     * @var SecurityAlertComment[]
     */
    public array $comments = [];

    /** Time when the incident was first created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Array of custom tags associated with an incident.
     * @var string[]
     */
    public array $customTags = [];

    /** Description of the incident. */
    public ?string $description = null;

    /** 
     * Specifies the determination of the incident. Possible values are: unknown, apt, malware, securityPersonnel, securityTesting, unwantedSoftware, other, multiStagedAttack, compromisedUser, phishing, maliciousUserActivity, clean, insufficientData, confirmedUserActivity, lineOfBusinessApplication, unknownFutureValue.
     * @var SecurityAlertDetermination|\stdClass|null
     */
    public mixed $determination = null;

    /** The incident name. */
    public ?string $displayName = null;

    /** The URL for the incident page in the Microsoft 365 Defender portal. */
    public ?string $incidentWebUrl = null;

    /** The identity that last modified the incident. */
    public ?string $lastModifiedBy = null;

    /** Time when the incident was last updated. */
    public ?\DateTimeInterface $lastUpdateDateTime = null;

    /** Only populated in case an incident is grouped with another incident, as part of the logic that processes incidents. In such a case, the status property is redirected. */
    public ?string $redirectIncidentId = null;

    /** User input that explains the resolution of the incident and the classification choice. This property contains free editable text. */
    public ?string $resolvingComment = null;

    /**  */
    public ?SecurityAlertSeverity $severity = null;

    /**  */
    public ?SecurityIncidentStatus $status = null;

    /** The overview of an attack. When applicable, the summary contains details of what occurred, impacted assets, and the type of attack. */
    public ?string $summary = null;

    /** 
     * The system tags associated with the incident.
     * @var string[]
     */
    public array $systemTags = [];

    /** The Microsoft Entra tenant in which the alert was created. */
    public ?string $tenantId = null;

    /** 
     * The list of related alerts. Supports $expand.
     * @var SecurityAlert[]
     */
    public array $alerts = [];


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
        if (isset($data['assignedTo'])) {
            $this->assignedTo = $data['assignedTo'];
        }
        if (isset($data['classification'])) {
            $this->classification = is_array($data['classification']) ? new SecurityAlertClassification($data['classification']) : $data['classification'];
        }
        if (isset($data['comments'])) {
            $this->comments = $data['comments'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['customTags'])) {
            $this->customTags = $data['customTags'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['determination'])) {
            $this->determination = is_array($data['determination']) ? new SecurityAlertDetermination($data['determination']) : $data['determination'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['incidentWebUrl'])) {
            $this->incidentWebUrl = $data['incidentWebUrl'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastUpdateDateTime'])) {
            $this->lastUpdateDateTime = is_string($data['lastUpdateDateTime']) ? new \DateTimeImmutable($data['lastUpdateDateTime']) : $data['lastUpdateDateTime'];
        }
        if (isset($data['redirectIncidentId'])) {
            $this->redirectIncidentId = $data['redirectIncidentId'];
        }
        if (isset($data['resolvingComment'])) {
            $this->resolvingComment = $data['resolvingComment'];
        }
        if (isset($data['severity'])) {
            $this->severity = is_array($data['severity']) ? new SecurityAlertSeverity($data['severity']) : $data['severity'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new SecurityIncidentStatus($data['status']) : $data['status'];
        }
        if (isset($data['summary'])) {
            $this->summary = $data['summary'];
        }
        if (isset($data['systemTags'])) {
            $this->systemTags = $data['systemTags'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
        if (isset($data['alerts'])) {
            $this->alerts = $data['alerts'];
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
