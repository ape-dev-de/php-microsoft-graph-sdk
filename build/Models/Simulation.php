<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Simulation
 */
class Simulation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The social engineering technique used in the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, credentialHarvesting, attachmentMalware, driveByUrl, linkInAttachment, linkToMalwareFile, unknownFutureValue, oAuthConsentGrant. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: oAuthConsentGrant. For more information on the types of social engineering attack techniques, see simulations.
     * @var SimulationAttackTechnique|\stdClass|null
     */
    public mixed $attackTechnique = null;

    /** 
     * Attack type of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, social, cloud, endpoint, unknownFutureValue.
     * @var SimulationAttackType|\stdClass|null
     */
    public mixed $attackType = null;

    /** Unique identifier for the attack simulation automation. */
    public ?string $automationId = null;

    /** Date and time of completion of the attack simulation and training campaign. Supports $filter and $orderby. */
    public ?\DateTimeInterface $completionDateTime = null;

    /** 
     * Identity of the user who created the attack simulation and training campaign.
     * @var EmailIdentity|\stdClass|null
     */
    public mixed $createdBy = null;

    /** Date and time of creation of the attack simulation and training campaign. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Description of the attack simulation and training campaign. */
    public ?string $description = null;

    /** Display name of the attack simulation and training campaign. Supports $filter and $orderby. */
    public ?string $displayName = null;

    /** Simulation duration in days. */
    public ?float $durationInDays = null;

    /** 
     * Details about the end user notification setting.
     * @var EndUserNotificationSetting|\stdClass|null
     */
    public mixed $endUserNotificationSetting = null;

    /** 
     * Users excluded from the simulation.
     * @var AccountTargetContent|\stdClass|null
     */
    public mixed $excludedAccountTarget = null;

    /** 
     * Users targeted in the simulation.
     * @var AccountTargetContent|\stdClass|null
     */
    public mixed $includedAccountTarget = null;

    /** Flag that represents if the attack simulation and training campaign was created from a simulation automation flow. Supports $filter and $orderby. */
    public ?bool $isAutomated = null;

    /** 
     * Identity of the user who most recently modified the attack simulation and training campaign.
     * @var EmailIdentity|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Date and time of the most recent modification of the attack simulation and training campaign. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Date and time of the launch/start of the attack simulation and training campaign. Supports $filter and $orderby. */
    public ?\DateTimeInterface $launchDateTime = null;

    /** 
     * OAuth app details for the OAuth technique.
     * @var OAuthConsentAppDetail|\stdClass|null
     */
    public mixed $oAuthConsentAppDetail = null;

    /** 
     * Method of delivery of the phishing payload used in the attack simulation and training campaign. Possible values are: unknown, sms, email, teams, unknownFutureValue.
     * @var PayloadDeliveryPlatform|\stdClass|null
     */
    public mixed $payloadDeliveryPlatform = null;

    /** 
     * Report of the attack simulation and training campaign.
     * @var SimulationReport|\stdClass|null
     */
    public mixed $report = null;

    /** 
     * Status of the attack simulation and training campaign. Supports $filter and $orderby. Possible values are: unknown, draft, running, scheduled, succeeded, failed, cancelled, excluded, unknownFutureValue.
     * @var SimulationStatus|\stdClass|null
     */
    public mixed $status = null;

    /** 
     * Details about the training settings for a simulation.
     * @var TrainingSetting|\stdClass|null
     */
    public mixed $trainingSetting = null;

    /** 
     * The landing page associated with a simulation during its creation.
     * @var LandingPage|\stdClass|null
     */
    public mixed $landingPage = null;

    /** 
     * The login page associated with a simulation during its creation.
     * @var LoginPage|\stdClass|null
     */
    public mixed $loginPage = null;

    /** 
     * The payload associated with a simulation during its creation.
     * @var Payload|\stdClass|null
     */
    public mixed $payload = null;


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
        if (isset($data['attackTechnique'])) {
            $this->attackTechnique = is_array($data['attackTechnique']) ? new SimulationAttackTechnique($data['attackTechnique']) : $data['attackTechnique'];
        }
        if (isset($data['attackType'])) {
            $this->attackType = is_array($data['attackType']) ? new SimulationAttackType($data['attackType']) : $data['attackType'];
        }
        if (isset($data['automationId'])) {
            $this->automationId = $data['automationId'];
        }
        if (isset($data['completionDateTime'])) {
            $this->completionDateTime = is_string($data['completionDateTime']) ? new \DateTimeImmutable($data['completionDateTime']) : $data['completionDateTime'];
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
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['durationInDays'])) {
            $this->durationInDays = $data['durationInDays'];
        }
        if (isset($data['endUserNotificationSetting'])) {
            $this->endUserNotificationSetting = is_array($data['endUserNotificationSetting']) ? new EndUserNotificationSetting($data['endUserNotificationSetting']) : $data['endUserNotificationSetting'];
        }
        if (isset($data['excludedAccountTarget'])) {
            $this->excludedAccountTarget = is_array($data['excludedAccountTarget']) ? new AccountTargetContent($data['excludedAccountTarget']) : $data['excludedAccountTarget'];
        }
        if (isset($data['includedAccountTarget'])) {
            $this->includedAccountTarget = is_array($data['includedAccountTarget']) ? new AccountTargetContent($data['includedAccountTarget']) : $data['includedAccountTarget'];
        }
        if (isset($data['isAutomated'])) {
            $this->isAutomated = $data['isAutomated'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new EmailIdentity($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['launchDateTime'])) {
            $this->launchDateTime = is_string($data['launchDateTime']) ? new \DateTimeImmutable($data['launchDateTime']) : $data['launchDateTime'];
        }
        if (isset($data['oAuthConsentAppDetail'])) {
            $this->oAuthConsentAppDetail = is_array($data['oAuthConsentAppDetail']) ? new OAuthConsentAppDetail($data['oAuthConsentAppDetail']) : $data['oAuthConsentAppDetail'];
        }
        if (isset($data['payloadDeliveryPlatform'])) {
            $this->payloadDeliveryPlatform = is_array($data['payloadDeliveryPlatform']) ? new PayloadDeliveryPlatform($data['payloadDeliveryPlatform']) : $data['payloadDeliveryPlatform'];
        }
        if (isset($data['report'])) {
            $this->report = is_array($data['report']) ? new SimulationReport($data['report']) : $data['report'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new SimulationStatus($data['status']) : $data['status'];
        }
        if (isset($data['trainingSetting'])) {
            $this->trainingSetting = is_array($data['trainingSetting']) ? new TrainingSetting($data['trainingSetting']) : $data['trainingSetting'];
        }
        if (isset($data['landingPage'])) {
            $this->landingPage = is_array($data['landingPage']) ? new LandingPage($data['landingPage']) : $data['landingPage'];
        }
        if (isset($data['loginPage'])) {
            $this->loginPage = is_array($data['loginPage']) ? new LoginPage($data['loginPage']) : $data['loginPage'];
        }
        if (isset($data['payload'])) {
            $this->payload = is_array($data['payload']) ? new Payload($data['payload']) : $data['payload'];
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
