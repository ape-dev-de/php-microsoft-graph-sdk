<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteRestoreArtifactsBulkAdditionRequest
 */
class SiteRestoreArtifactsBulkAdditionRequest
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The identity of the person who created the bulk request.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $createdBy = null;

    /** The time when the bulk request was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Indicates the restoration destination. The possible values are: new, inPlace, unknownFutureValue.
     * @var DestinationType|\stdClass|null
     */
    public DestinationType|\stdClass|null $destinationType = null;

    /** Name of the addition request. */
    public ?string $displayName = null;

    /** 
     * Error details are populated for resource resolution failures.
     * @var PublicError|\stdClass|null
     */
    public PublicError|\stdClass|null $error = null;

    /** 
     * Identity of the person who last modified this entity.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $lastModifiedBy = null;

    /** Timestamp when this entity was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The start and end date and time of the protection period.
     * @var TimePeriod|\stdClass|null
     */
    public TimePeriod|\stdClass|null $protectionTimePeriod = null;

    /** 
     * Indicates which protection units to restore. This property isn't implemented yet. Future value; don't use.
     * @var string[]
     */
    public array $protectionUnitIds = [];

    /** 
     * Indicates which restore point to return. The possible values are: oldest, latest, unknownFutureValue.
     * @var RestorePointPreference|\stdClass|null
     */
    public RestorePointPreference|\stdClass|null $restorePointPreference = null;

    /**  */
    public ?RestoreArtifactsBulkRequestStatus $status = null;

    /** 
     * The type of the restore point. The possible values are: none, fastRestore, unknownFutureValue.
     * @var RestorePointTags|\stdClass|null
     */
    public RestorePointTags|\stdClass|null $tags = null;

    /** 
     * The list of SharePoint site IDs that are added to the corresponding SharePoint restore session in a bulk operation.
     * @var string[]
     */
    public array $siteIds = [];

    /** 
     * The list of SharePoint site URLs that are added to the corresponding SharePoint restore session in a bulk operation.
     * @var string[]
     */
    public array $siteWebUrls = [];


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
        if (isset($data['destinationType'])) {
            $this->destinationType = is_string($data['destinationType']) ? DestinationType::tryFrom($data['destinationType']) : $data['destinationType'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new PublicError($data['error']) : $data['error'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['protectionTimePeriod'])) {
            $this->protectionTimePeriod = is_array($data['protectionTimePeriod']) ? new TimePeriod($data['protectionTimePeriod']) : $data['protectionTimePeriod'];
        }
        if (isset($data['protectionUnitIds'])) {
            $this->protectionUnitIds = $data['protectionUnitIds'];
        }
        if (isset($data['restorePointPreference'])) {
            $this->restorePointPreference = is_string($data['restorePointPreference']) ? RestorePointPreference::tryFrom($data['restorePointPreference']) : $data['restorePointPreference'];
        }
        if (isset($data['status'])) {
            $this->status = is_string($data['status']) ? RestoreArtifactsBulkRequestStatus::tryFrom($data['status']) : $data['status'];
        }
        if (isset($data['tags'])) {
            $this->tags = is_string($data['tags']) ? RestorePointTags::tryFrom($data['tags']) : $data['tags'];
        }
        if (isset($data['siteIds'])) {
            $this->siteIds = $data['siteIds'];
        }
        if (isset($data['siteWebUrls'])) {
            $this->siteWebUrls = $data['siteWebUrls'];
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
