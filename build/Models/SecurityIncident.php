<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIncident
 */
class SecurityIncident
{
    public function __construct(
        /** Owner of the incident, or null if no owner is assigned. Free editable text. */
        public ?string $assignedTo = null,
        /** The specification for the incident. Possible values are: unknown, falsePositive, truePositive, informationalExpectedActivity, unknownFutureValue. */
        public ?string $classification = null,
        /** Array of comments created by the Security Operations (SecOps) team when the incident is managed. */
        public array $comments = [],
        /** Time when the incident was first created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** @var string[] Array of custom tags associated with an incident. */
        public array $customTags = [],
        /** Description of the incident. */
        public ?string $description = null,
        /** Specifies the determination of the incident. Possible values are: unknown, apt, malware, securityPersonnel, securityTesting, unwantedSoftware, other, multiStagedAttack, compromisedUser, phishing, maliciousUserActivity, clean, insufficientData, confirmedUserActivity, lineOfBusinessApplication, unknownFutureValue. */
        public ?string $determination = null,
        /** The incident name. */
        public ?string $displayName = null,
        /** The URL for the incident page in the Microsoft 365 Defender portal. */
        public ?string $incidentWebUrl = null,
        /** The identity that last modified the incident. */
        public ?string $lastModifiedBy = null,
        /** Time when the incident was last updated. */
        public ?\DateTimeInterface $lastUpdateDateTime = null,
        /** Only populated in case an incident is grouped with another incident, as part of the logic that processes incidents. In such a case, the status property is redirected. */
        public ?string $redirectIncidentId = null,
        /** User input that explains the resolution of the incident and the classification choice. This property contains free editable text. */
        public ?string $resolvingComment = null,
        /**  */
        public ?string $severity = null,
        /**  */
        public ?string $status = null,
        /** The overview of an attack. When applicable, the summary contains details of what occurred, impacted assets, and the type of attack. */
        public ?string $summary = null,
        /** @var string[] The system tags associated with the incident. */
        public array $systemTags = [],
        /** The Microsoft Entra tenant in which the alert was created. */
        public ?string $tenantId = null,
        /** @var string[] The list of related alerts. Supports $expand. */
        public array $alerts = []
    ) {}
}
