<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHealthIssue
 */
class SecurityHealthIssue
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Contains additional information about the issue, such as a list of items to fix.
     * @var string[]
     */
    public array $additionalInformation = [];

    /** The date and time when the health issue was generated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Contains more detailed information about the health issue. */
    public ?string $description = null;

    /** The display name of the health issue. */
    public ?string $displayName = null;

    /** 
     * A list of the fully qualified domain names of the domains or the sensors the health issue is related to.
     * @var string[]
     */
    public array $domainNames = [];

    /** 
     * The type of the health issue. The possible values are: sensor, global, unknownFutureValue. For a list of all health issues and their identifiers, see Microsoft Defender for Identity health issues.
     * @var SecurityHealthIssueType|\stdClass|null
     */
    public mixed $healthIssueType = null;

    /** The type identifier of the health issue. For a list of all health issues and their identifiers, see Microsoft Defender for Identity health issues. */
    public ?string $issueTypeId = null;

    /** The date and time when the health issue was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * A list of recommended actions that can be taken to resolve the issue effectively and efficiently. These actions might include instructions for further investigation and aren't limited to prewritten responses.
     * @var string[]
     */
    public array $recommendations = [];

    /** 
     * A list of commands from the PowerShell module for the product that can be used to resolve the issue, if available. If no commands can be used to solve the issue, this property is empty. The commands, if present, provide a quick and efficient way to address the issue. These commands run in sequence for the single recommended fix.
     * @var string[]
     */
    public array $recommendedActionCommands = [];

    /** 
     * A list of the DNS names of the sensors the health issue is related to.
     * @var string[]
     */
    public array $sensorDNSNames = [];

    /** 
     * The severity of the health issue. The possible values are: low, medium, high, unknownFutureValue.
     * @var SecurityHealthIssueSeverity|\stdClass|null
     */
    public mixed $severity = null;

    /** 
     * The status of the health issue. The possible values are: open, closed, suppressed, unknownFutureValue.
     * @var SecurityHealthIssueStatus|\stdClass|null
     */
    public mixed $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['additionalInformation'])) {
            $this->additionalInformation = $data['additionalInformation'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['domainNames'])) {
            $this->domainNames = $data['domainNames'];
        }
        if (isset($data['healthIssueType'])) {
            $this->healthIssueType = $data['healthIssueType'];
        }
        if (isset($data['issueTypeId'])) {
            $this->issueTypeId = $data['issueTypeId'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['recommendations'])) {
            $this->recommendations = $data['recommendations'];
        }
        if (isset($data['recommendedActionCommands'])) {
            $this->recommendedActionCommands = $data['recommendedActionCommands'];
        }
        if (isset($data['sensorDNSNames'])) {
            $this->sensorDNSNames = $data['sensorDNSNames'];
        }
        if (isset($data['severity'])) {
            $this->severity = $data['severity'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}
