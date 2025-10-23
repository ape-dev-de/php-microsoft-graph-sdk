<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteRestoreArtifact
 */
class SiteRestoreArtifact
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The time when restoration of restore artifact is completed. */
    public ?\DateTimeInterface $completionDateTime = null;

    /** 
     * Indicates the restoration destination. The possible values are: new, inPlace, unknownFutureValue.
     * @var DestinationType|\stdClass|null
     */
    public mixed $destinationType = null;

    /** 
     * Contains error details if the restore session fails or completes with an error.
     * @var PublicError|\stdClass|null
     */
    public mixed $error = null;

    /** The time when restoration of restore artifact is started. */
    public ?\DateTimeInterface $startDateTime = null;

    /** 
     * The individual restoration status of the restore artifact. The possible values are: added, scheduling, scheduled, inProgress, succeeded, failed, unknownFutureValue.
     * @var ArtifactRestoreStatus|\stdClass|null
     */
    public mixed $status = null;

    /** 
     * Represents the date and time when an artifact is protected by a protectionPolicy and can be restored.
     * @var RestorePoint|\stdClass|null
     */
    public mixed $restorePoint = null;

    /** The new site identifier if the value of the destinationType property is new, and the existing site ID if the value is inPlace. */
    public ?string $restoredSiteId = null;

    /** The name of the restored site. */
    public ?string $restoredSiteName = null;

    /** The web URL of the restored site. */
    public ?string $restoredSiteWebUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['completionDateTime'])) {
            $this->completionDateTime = $data['completionDateTime'];
        }
        if (isset($data['destinationType'])) {
            $this->destinationType = $data['destinationType'];
        }
        if (isset($data['error'])) {
            $this->error = $data['error'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = $data['startDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['restorePoint'])) {
            $this->restorePoint = $data['restorePoint'];
        }
        if (isset($data['restoredSiteId'])) {
            $this->restoredSiteId = $data['restoredSiteId'];
        }
        if (isset($data['restoredSiteName'])) {
            $this->restoredSiteName = $data['restoredSiteName'];
        }
        if (isset($data['restoredSiteWebUrl'])) {
            $this->restoredSiteWebUrl = $data['restoredSiteWebUrl'];
        }
    }
}
