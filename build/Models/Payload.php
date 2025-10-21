<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Payload
 */
class Payload
{
    /**
     * The branch of a payload. Possible values are: unknown, other, americanExpress, capitalOne, dhl, docuSign, dropbox, facebook, firstAmerican, microsoft, netflix, scotiabank, sendGrid, stewartTitle, tesco, wellsFargo, syrinxCloud, adobe, teams, zoom, unknownFutureValue.
     */
    private ?string $brand;

    /**
     * The complexity of a payload. Possible values are: unknown, low, medium, high, unknownFutureValue.
     */
    private ?string $complexity;

    /**
     * Identity of the user who created the attack simulation and training campaign payload.
     */
    private ?string $createdBy;

    /**
     * Date and time when the attack simulation and training campaign payload. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Description of the attack simulation and training campaign payload.
     */
    private ?string $description;

    /**
     * Additional details about the payload.
     */
    private ?string $detail;

    /**
     * Display name of the attack simulation and training campaign payload. Supports $filter and $orderby.
     */
    private ?string $displayName;

    /**
     * Industry of a payload. Possible values are: unknown, other, banking, businessServices, consumerServices, education, energy, construction, consulting, financialServices, government, hospitality, insurance, legal, courierServices, IT, healthcare, manufacturing, retail, telecom, realEstate, unknownFutureValue.
     */
    private ?string $industry;

    /**
     * Indicates whether the attack simulation and training campaign payload was created from an automation flow. Supports $filter and $orderby.
     */
    private ?bool $isAutomated;

    /**
     * Indicates whether the payload is controversial.
     */
    private ?bool $isControversial;

    /**
     * Indicates whether the payload is from any recent event.
     */
    private ?bool $isCurrentEvent;

    /**
     * Payload language.
     */
    private ?string $language;

    /**
     * Identity of the user who most recently modified the attack simulation and training campaign payload.
     */
    private ?string $lastModifiedBy;

    /**
     * Date and time when the attack simulation and training campaign payload was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Free text tags for a payload.
     * @var string[]
     */
    private array $payloadTags = [];

    /**
     * The payload delivery platform for a simulation. Possible values are: unknown, sms, email, teams, unknownFutureValue.
     */
    private ?string $platform;

    /**
     * Predicted probability for a payload to phish a targeted user.
     */
    private ?string $predictedCompromiseRate;

    /**
     * Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue.
     */
    private ?string $simulationAttackType;

    /**
     */
    private ?string $source;

    /**
     * Simulation content status. Supports $filter and $orderby. Possible values are: unknown, draft, ready, archive, delete, unknownFutureValue.
     */
    private ?string $status;

    /**
     * The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue, oAuthConsentGrant. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: oAuthConsentGrant. For more information on the types of social engineering attack techniques, see simulations.
     */
    private ?string $technique;

    /**
     * The theme of a payload. Possible values are: unknown, other, accountActivation, accountVerification, billing, cleanUpMail, controversial, documentReceived, expense, fax, financeReport, incomingMessages, invoice, itemReceived, loginAlert, mailReceived, password, payment, payroll, personalizedOffer, quarantine, remoteWork, reviewMessage, securityUpdate, serviceSuspended, signatureRequired, upgradeMailboxStorage, verifyMailbox, voicemail, advertisement, employeeEngagement, unknownFutureValue.
     */
    private ?string $theme;


    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;
        return $this;
    }

    public function getComplexity(): ?string
    {
        return $this->complexity;
    }

    public function setComplexity(?string $complexity): self
    {
        $this->complexity = $complexity;
        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
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

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(?string $detail): self
    {
        $this->detail = $detail;
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

    public function getIndustry(): ?string
    {
        return $this->industry;
    }

    public function setIndustry(?string $industry): self
    {
        $this->industry = $industry;
        return $this;
    }

    public function getIsAutomated(): ?bool
    {
        return $this->isAutomated;
    }

    public function setIsAutomated(?bool $isAutomated): self
    {
        $this->isAutomated = $isAutomated;
        return $this;
    }

    public function getIsControversial(): ?bool
    {
        return $this->isControversial;
    }

    public function setIsControversial(?bool $isControversial): self
    {
        $this->isControversial = $isControversial;
        return $this;
    }

    public function getIsCurrentEvent(): ?bool
    {
        return $this->isCurrentEvent;
    }

    public function setIsCurrentEvent(?bool $isCurrentEvent): self
    {
        $this->isCurrentEvent = $isCurrentEvent;
        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;
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
    public function getPayloadTags(): array
    {
        return $this->payloadTags;
    }

    /**
     * @param string[] $payloadTags
     */
    public function setPayloadTags(array $payloadTags): self
    {
        $this->payloadTags = $payloadTags;
        return $this;
    }

    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    public function getPredictedCompromiseRate(): ?string
    {
        return $this->predictedCompromiseRate;
    }

    public function setPredictedCompromiseRate(?string $predictedCompromiseRate): self
    {
        $this->predictedCompromiseRate = $predictedCompromiseRate;
        return $this;
    }

    public function getSimulationAttackType(): ?string
    {
        return $this->simulationAttackType;
    }

    public function setSimulationAttackType(?string $simulationAttackType): self
    {
        $this->simulationAttackType = $simulationAttackType;
        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;
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

    public function getTechnique(): ?string
    {
        return $this->technique;
    }

    public function setTechnique(?string $technique): self
    {
        $this->technique = $technique;
        return $this;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(?string $theme): self
    {
        $this->theme = $theme;
        return $this;
    }

}
