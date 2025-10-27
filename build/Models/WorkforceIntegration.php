<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkforceIntegration
 */
class WorkforceIntegration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Identity of the creator of the entity.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $createdBy = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Identity of the person who last modified the entity.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $lastModifiedBy = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** API version for the callback URL. Start with 1. */
    public ?float $apiVersion = null;

    /** Name of the workforce integration. */
    public ?string $displayName = null;

    /** 
     * Support to view eligibility-filtered results. Possible values are: none, swapRequest, offerShiftRequest, unknownFutureValue, timeOffReason. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: timeOffReason.
     * @var EligibilityFilteringEnabledEntities|\stdClass|null
     */
    public EligibilityFilteringEnabledEntities|\stdClass|null $eligibilityFilteringEnabledEntities = null;

    /** 
     * The workforce integration encryption resource.
     * @var WorkforceIntegrationEncryption|\stdClass|null
     */
    public WorkforceIntegrationEncryption|\stdClass|null $encryption = null;

    /** Indicates whether this workforce integration is currently active and available. */
    public ?bool $isActive = null;

    /** 
     * The Shifts entities supported for synchronous change notifications. Shifts call back to the provided URL when client changes occur to the entities specified in this property. By default, no entities are supported for change notifications. Possible values are: none, shift, swapRequest, userShiftPreferences, openShift, openShiftRequest, offerShiftRequest, unknownFutureValue, timeCard, timeOffReason, timeOff, timeOffRequest. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: timeCard , timeOffReason , timeOff , timeOffRequest.
     * @var WorkforceIntegrationSupportedEntities|\stdClass|null
     */
    public WorkforceIntegrationSupportedEntities|\stdClass|null $supportedEntities = null;

    /** Workforce Integration URL for callbacks from the Shifts service. */
    public ?string $url = null;


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
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['apiVersion'])) {
            $this->apiVersion = is_numeric($data['apiVersion']) ? (float)$data['apiVersion'] : $data['apiVersion'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['eligibilityFilteringEnabledEntities'])) {
            $this->eligibilityFilteringEnabledEntities = is_array($data['eligibilityFilteringEnabledEntities']) ? new EligibilityFilteringEnabledEntities($data['eligibilityFilteringEnabledEntities']) : $data['eligibilityFilteringEnabledEntities'];
        }
        if (isset($data['encryption'])) {
            $this->encryption = is_array($data['encryption']) ? new WorkforceIntegrationEncryption($data['encryption']) : $data['encryption'];
        }
        if (isset($data['isActive'])) {
            $this->isActive = is_bool($data['isActive']) ? $data['isActive'] : (bool)$data['isActive'];
        }
        if (isset($data['supportedEntities'])) {
            $this->supportedEntities = is_array($data['supportedEntities']) ? new WorkforceIntegrationSupportedEntities($data['supportedEntities']) : $data['supportedEntities'];
        }
        if (isset($data['url'])) {
            $this->url = $data['url'];
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
