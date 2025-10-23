<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestoreArtifactsBulkRequestBase
 */
class RestoreArtifactsBulkRequestBase
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The identity of the person who created the bulk request.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** The time when the bulk request was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Indicates the restoration destination. The possible values are: new, inPlace, unknownFutureValue.
     * @var DestinationType|\stdClass|null
     */
    public mixed $destinationType = null;

    /** Name of the addition request. */
    public ?string $displayName = null;

    /** 
     * Error details are populated for resource resolution failures.
     * @var PublicError|\stdClass|null
     */
    public mixed $error = null;

    /** 
     * Identity of the person who last modified this entity.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Timestamp when this entity was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The start and end date and time of the protection period.
     * @var TimePeriod|\stdClass|null
     */
    public mixed $protectionTimePeriod = null;

    /** 
     * Indicates which protection units to restore. This property isn't implemented yet. Future value; don't use.
     * @var string[]
     */
    public array $protectionUnitIds = [];

    /** 
     * Indicates which restore point to return. The possible values are: oldest, latest, unknownFutureValue.
     * @var RestorePointPreference|\stdClass|null
     */
    public mixed $restorePointPreference = null;

    /**  */
    public ?RestoreArtifactsBulkRequestStatus $status = null;

    /** 
     * The type of the restore point. The possible values are: none, fastRestore, unknownFutureValue.
     * @var RestorePointTags|\stdClass|null
     */
    public mixed $tags = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['destinationType'])) {
            $this->destinationType = $data['destinationType'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['error'])) {
            $this->error = $data['error'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['protectionTimePeriod'])) {
            $this->protectionTimePeriod = $data['protectionTimePeriod'];
        }
        if (isset($data['protectionUnitIds'])) {
            $this->protectionUnitIds = $data['protectionUnitIds'];
        }
        if (isset($data['restorePointPreference'])) {
            $this->restorePointPreference = $data['restorePointPreference'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['tags'])) {
            $this->tags = $data['tags'];
        }
    }
}
