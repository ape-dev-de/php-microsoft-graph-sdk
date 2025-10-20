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
     */
    private ?string $additionalInformation;

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
     */
    private ?string $domainNames;

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
     */
    private ?string $recommendations;

    /**
     * A list of commands from the PowerShell module for the product that can be used to resolve the issue, if available. If no commands can be used to solve the issue, this property is empty. The commands, if present, provide a quick and efficient way to address the issue. These commands run in sequence for the single recommended fix.
     */
    private ?string $recommendedActionCommands;

    /**
     * A list of the DNS names of the sensors the health issue is related to.
     */
    private ?string $sensorDNSNames;

    /**
     * The severity of the health issue. The possible values are: low, medium, high, unknownFutureValue.
     */
    private ?string $severity;

    /**
     * The status of the health issue. The possible values are: open, closed, suppressed, unknownFutureValue.
     */
    private ?string $status;

    public function getAdditionalInformation(): ?string
    {
        return $this->additionalInformation;
    }

    public function setAdditionalInformation(?string $additionalInformation): self
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

    public function getDomainNames(): ?string
    {
        return $this->domainNames;
    }

    public function setDomainNames(?string $domainNames): self
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

    public function getRecommendations(): ?string
    {
        return $this->recommendations;
    }

    public function setRecommendations(?string $recommendations): self
    {
        $this->recommendations = $recommendations;
        return $this;
    }

    public function getRecommendedActionCommands(): ?string
    {
        return $this->recommendedActionCommands;
    }

    public function setRecommendedActionCommands(?string $recommendedActionCommands): self
    {
        $this->recommendedActionCommands = $recommendedActionCommands;
        return $this;
    }

    public function getSensorDNSNames(): ?string
    {
        return $this->sensorDNSNames;
    }

    public function setSensorDNSNames(?string $sensorDNSNames): self
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
