<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Payload
 */
class Payload
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The branch of a payload. Possible values are: unknown, other, americanExpress, capitalOne, dhl, docuSign, dropbox, facebook, firstAmerican, microsoft, netflix, scotiabank, sendGrid, stewartTitle, tesco, wellsFargo, syrinxCloud, adobe, teams, zoom, unknownFutureValue.
     * @var PayloadBrand|\stdClass|null
     */
    public PayloadBrand|\stdClass|null $brand = null;

    /** 
     * The complexity of a payload. Possible values are: unknown, low, medium, high, unknownFutureValue.
     * @var PayloadComplexity|\stdClass|null
     */
    public PayloadComplexity|\stdClass|null $complexity = null;

    /** 
     * Identity of the user who created the attack simulation and training campaign payload.
     * @var EmailIdentity|\stdClass|null
     */
    public EmailIdentity|\stdClass|null $createdBy = null;

    /** Date and time when the attack simulation and training campaign payload. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Description of the attack simulation and training campaign payload. */
    public ?string $description = null;

    /** 
     * Additional details about the payload.
     * @var PayloadDetail|\stdClass|null
     */
    public PayloadDetail|\stdClass|null $detail = null;

    /** Display name of the attack simulation and training campaign payload. Supports $filter and $orderby. */
    public ?string $displayName = null;

    /** 
     * Industry of a payload. Possible values are: unknown, other, banking, businessServices, consumerServices, education, energy, construction, consulting, financialServices, government, hospitality, insurance, legal, courierServices, IT, healthcare, manufacturing, retail, telecom, realEstate, unknownFutureValue.
     * @var PayloadIndustry|\stdClass|null
     */
    public PayloadIndustry|\stdClass|null $industry = null;

    /** Indicates whether the attack simulation and training campaign payload was created from an automation flow. Supports $filter and $orderby. */
    public ?bool $isAutomated = null;

    /** Indicates whether the payload is controversial. */
    public ?bool $isControversial = null;

    /** Indicates whether the payload is from any recent event. */
    public ?bool $isCurrentEvent = null;

    /** Payload language. */
    public ?string $language = null;

    /** 
     * Identity of the user who most recently modified the attack simulation and training campaign payload.
     * @var EmailIdentity|\stdClass|null
     */
    public EmailIdentity|\stdClass|null $lastModifiedBy = null;

    /** Date and time when the attack simulation and training campaign payload was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * Free text tags for a payload.
     * @var string[]
     */
    public array $payloadTags = [];

    /** 
     * The payload delivery platform for a simulation. Possible values are: unknown, sms, email, teams, unknownFutureValue.
     * @var PayloadDeliveryPlatform|\stdClass|null
     */
    public PayloadDeliveryPlatform|\stdClass|null $platform = null;

    /** 
     * Predicted probability for a payload to phish a targeted user.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $predictedCompromiseRate = null;

    /** 
     * Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue.
     * @var SimulationAttackType|\stdClass|null
     */
    public SimulationAttackType|\stdClass|null $simulationAttackType = null;

    /**  */
    public ?SimulationContentSource $source = null;

    /** 
     * Simulation content status. Supports $filter and $orderby. Possible values are: unknown, draft, ready, archive, delete, unknownFutureValue.
     * @var SimulationContentStatus|\stdClass|null
     */
    public SimulationContentStatus|\stdClass|null $status = null;

    /** 
     * The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue, oAuthConsentGrant. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: oAuthConsentGrant. For more information on the types of social engineering attack techniques, see simulations.
     * @var SimulationAttackTechnique|\stdClass|null
     */
    public SimulationAttackTechnique|\stdClass|null $technique = null;

    /** 
     * The theme of a payload. Possible values are: unknown, other, accountActivation, accountVerification, billing, cleanUpMail, controversial, documentReceived, expense, fax, financeReport, incomingMessages, invoice, itemReceived, loginAlert, mailReceived, password, payment, payroll, personalizedOffer, quarantine, remoteWork, reviewMessage, securityUpdate, serviceSuspended, signatureRequired, upgradeMailboxStorage, verifyMailbox, voicemail, advertisement, employeeEngagement, unknownFutureValue.
     * @var PayloadTheme|\stdClass|null
     */
    public PayloadTheme|\stdClass|null $theme = null;


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
        if (isset($data['brand'])) {
            $this->brand = is_array($data['brand']) ? new PayloadBrand($data['brand']) : $data['brand'];
        }
        if (isset($data['complexity'])) {
            $this->complexity = is_array($data['complexity']) ? new PayloadComplexity($data['complexity']) : $data['complexity'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new EmailIdentity($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['detail'])) {
            $this->detail = is_array($data['detail']) ? new PayloadDetail($data['detail']) : $data['detail'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['industry'])) {
            $this->industry = is_array($data['industry']) ? new PayloadIndustry($data['industry']) : $data['industry'];
        }
        if (isset($data['isAutomated'])) {
            $this->isAutomated = $data['isAutomated'];
        }
        if (isset($data['isControversial'])) {
            $this->isControversial = $data['isControversial'];
        }
        if (isset($data['isCurrentEvent'])) {
            $this->isCurrentEvent = $data['isCurrentEvent'];
        }
        if (isset($data['language'])) {
            $this->language = $data['language'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new EmailIdentity($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['payloadTags'])) {
            $this->payloadTags = $data['payloadTags'];
        }
        if (isset($data['platform'])) {
            $this->platform = is_array($data['platform']) ? new PayloadDeliveryPlatform($data['platform']) : $data['platform'];
        }
        if (isset($data['predictedCompromiseRate'])) {
            $this->predictedCompromiseRate = $data['predictedCompromiseRate'];
        }
        if (isset($data['simulationAttackType'])) {
            $this->simulationAttackType = is_array($data['simulationAttackType']) ? new SimulationAttackType($data['simulationAttackType']) : $data['simulationAttackType'];
        }
        if (isset($data['source'])) {
            $this->source = is_array($data['source']) ? new SimulationContentSource($data['source']) : $data['source'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new SimulationContentStatus($data['status']) : $data['status'];
        }
        if (isset($data['technique'])) {
            $this->technique = is_array($data['technique']) ? new SimulationAttackTechnique($data['technique']) : $data['technique'];
        }
        if (isset($data['theme'])) {
            $this->theme = is_array($data['theme']) ? new PayloadTheme($data['theme']) : $data['theme'];
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
