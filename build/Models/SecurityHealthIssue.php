<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHealthIssue
 */
class SecurityHealthIssue
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** @var string[] Contains additional information about the issue, such as a list of items to fix. */
        public array $additionalInformation = [],
        /** The date and time when the health issue was generated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Contains more detailed information about the health issue. */
        public ?string $description = null,
        /** The display name of the health issue. */
        public ?string $displayName = null,
        /** @var string[] A list of the fully qualified domain names of the domains or the sensors the health issue is related to. */
        public array $domainNames = [],
        /** The type of the health issue. The possible values are: sensor, global, unknownFutureValue. For a list of all health issues and their identifiers, see Microsoft Defender for Identity health issues. */
        public ?SecurityHealthIssueType $healthIssueType = null,
        /** The type identifier of the health issue. For a list of all health issues and their identifiers, see Microsoft Defender for Identity health issues. */
        public ?string $issueTypeId = null,
        /** The date and time when the health issue was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** @var string[] A list of recommended actions that can be taken to resolve the issue effectively and efficiently. These actions might include instructions for further investigation and aren't limited to prewritten responses. */
        public array $recommendations = [],
        /** @var string[] A list of commands from the PowerShell module for the product that can be used to resolve the issue, if available. If no commands can be used to solve the issue, this property is empty. The commands, if present, provide a quick and efficient way to address the issue. These commands run in sequence for the single recommended fix. */
        public array $recommendedActionCommands = [],
        /** @var string[] A list of the DNS names of the sensors the health issue is related to. */
        public array $sensorDNSNames = [],
        /** The severity of the health issue. The possible values are: low, medium, high, unknownFutureValue. */
        public ?SecurityHealthIssueSeverity $severity = null,
        /** The status of the health issue. The possible values are: open, closed, suppressed, unknownFutureValue. */
        public ?SecurityHealthIssueStatus $status = null
    ) {}
}
