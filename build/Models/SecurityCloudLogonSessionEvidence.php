<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCloudLogonSessionEvidence
 */
class SecurityCloudLogonSessionEvidence
{
    public function __construct(
        /** The date and time when the evidence was created and added to the alert. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** @var string[] Detailed description of the entity role/s in an alert. Values are free-form. */
        public array $detailedRoles = [],
        /**  */
        public ?SecurityEvidenceRemediationStatus $remediationStatus = null,
        /** Details about the remediation status. */
        public ?string $remediationStatusDetails = null,
        /** The role/s that an evidence entity represents in an alert, for example, an IP address that is associated with an attacker has the evidence role Attacker. */
        public array $roles = [],
        /** @var string[] Array of custom tags associated with an evidence instance, for example, to denote a group of devices, high-value assets, etc. */
        public array $tags = [],
        /**  */
        public ?SecurityEvidenceVerdict $verdict = null,
        /** The account associated with the sign-in session. */
        public ?SecurityUserEvidence $account = null,
        /** The browser that is used for the sign-in, if known. */
        public ?string $browser = null,
        /** The friendly name of the device, if known. */
        public ?string $deviceName = null,
        /** The operating system that the device is running, if known. */
        public ?string $operatingSystem = null,
        /** The previous sign-in time for this account, if known. */
        public ?\DateTimeInterface $previousLogonDateTime = null,
        /** The authentication protocol that is used in this session, if known. */
        public ?string $protocol = null,
        /** The session ID for the account reported in the alert. */
        public ?string $sessionId = null,
        /** The session start time, if known. */
        public ?\DateTimeInterface $startUtcDateTime = null,
        /** The user agent that is used for the sign-in, if known. */
        public ?string $userAgent = null
    ) {}
}
