<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHealthIssue
 */
class SecurityHealthIssue
{
    /**
     * Contains additional information about the issue, such as a list of items to fix.
     * @var string[]
     */
    private array $additionalInformation = [];

    /**
     * The date and time when the health issue was generated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Contains more detailed information about the health issue.
     */
    private ?string $description;

    /**
     * The display name of the health issue.
     */
    private ?string $displayName;

    /**
     * A list of the fully qualified domain names of the domains or the sensors the health issue is related to.
     * @var string[]
     */
    private array $domainNames = [];

    /**
     * The type of the health issue. The possible values are: sensor, global, unknownFutureValue. For a list of all health issues and their identifiers, see Microsoft Defender for Identity health issues.
     */
    private ?string $healthIssueType;

    /**
     * The type identifier of the health issue. For a list of all health issues and their identifiers, see Microsoft Defender for Identity health issues.
     */
    private ?string $issueTypeId;

    /**
     * The date and time when the health issue was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * A list of recommended actions that can be taken to resolve the issue effectively and efficiently. These actions might include instructions for further investigation and aren't limited to prewritten responses.
     * @var string[]
     */
    private array $recommendations = [];

    /**
     * A list of commands from the PowerShell module for the product that can be used to resolve the issue, if available. If no commands can be used to solve the issue, this property is empty. The commands, if present, provide a quick and efficient way to address the issue. These commands run in sequence for the single recommended fix.
     * @var string[]
     */
    private array $recommendedActionCommands = [];

    /**
     * A list of the DNS names of the sensors the health issue is related to.
     * @var string[]
     */
    private array $sensorDNSNames = [];

    /**
     * The severity of the health issue. The possible values are: low, medium, high, unknownFutureValue.
     */
    private ?string $severity;

    /**
     * The status of the health issue. The possible values are: open, closed, suppressed, unknownFutureValue.
     */
    private ?string $status;


    /**
     * @return string[]
     */
    public function getAdditionalInformation(): array
    {
        return $this->additionalInformation;
    }

    /**
     * @param string[] $additionalInformation
     */
    public function setAdditionalInformation(array $additionalInformation): self
    {
        $this->additionalInformation = $additionalInformation;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    /**
     * @return string[]
     */
    public function getDomainNames(): array
    {
        return $this->domainNames;
    }

    /**
     * @param string[] $domainNames
     */
    public function setDomainNames(array $domainNames): self
    {
        $this->domainNames = $domainNames;
        return $this;
    }

    public function getHealthIssueType(): ?string
    {
        return $this->healthIssueType;
    }

    public function setHealthIssueType(?string $healthIssueType): self
    {
        $this->healthIssueType = $healthIssueType;
        return $this;
    }

    public function getIssueTypeId(): ?string
    {
        return $this->issueTypeId;
    }

    public function setIssueTypeId(?string $issueTypeId): self
    {
        $this->issueTypeId = $issueTypeId;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRecommendations(): array
    {
        return $this->recommendations;
    }

    /**
     * @param string[] $recommendations
     */
    public function setRecommendations(array $recommendations): self
    {
        $this->recommendations = $recommendations;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRecommendedActionCommands(): array
    {
        return $this->recommendedActionCommands;
    }

    /**
     * @param string[] $recommendedActionCommands
     */
    public function setRecommendedActionCommands(array $recommendedActionCommands): self
    {
        $this->recommendedActionCommands = $recommendedActionCommands;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSensorDNSNames(): array
    {
        return $this->sensorDNSNames;
    }

    /**
     * @param string[] $sensorDNSNames
     */
    public function setSensorDNSNames(array $sensorDNSNames): self
    {
        $this->sensorDNSNames = $sensorDNSNames;
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

}
