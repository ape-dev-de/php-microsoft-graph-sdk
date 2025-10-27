<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RetentionLabelSettings
 */
class RetentionLabelSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Describes the item behavior during retention period. Possible values are: doNotRetain, retain, retainAsRecord, retainAsRegulatoryRecord, unknownFutureValue. Read-only.
     * @var SecurityBehaviorDuringRetentionPeriod|\stdClass|null
     */
    public mixed $behaviorDuringRetentionPeriod = null;

    /** Specifies whether updates to document content are allowed. Read-only. */
    public ?bool $isContentUpdateAllowed = null;

    /** Specifies whether the document deletion is allowed. Read-only. */
    public ?bool $isDeleteAllowed = null;

    /** Specifies whether you're allowed to change the retention label on the document. Read-only. */
    public ?bool $isLabelUpdateAllowed = null;

    /** Specifies whether updates to the item metadata (for example, the Title field) are blocked. Read-only. */
    public ?bool $isMetadataUpdateAllowed = null;

    /** Specifies whether the item is locked. Read-write. */
    public ?bool $isRecordLocked = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['behaviorDuringRetentionPeriod'])) {
            $this->behaviorDuringRetentionPeriod = is_array($data['behaviorDuringRetentionPeriod']) ? new SecurityBehaviorDuringRetentionPeriod($data['behaviorDuringRetentionPeriod']) : $data['behaviorDuringRetentionPeriod'];
        }
        if (isset($data['isContentUpdateAllowed'])) {
            $this->isContentUpdateAllowed = $data['isContentUpdateAllowed'];
        }
        if (isset($data['isDeleteAllowed'])) {
            $this->isDeleteAllowed = $data['isDeleteAllowed'];
        }
        if (isset($data['isLabelUpdateAllowed'])) {
            $this->isLabelUpdateAllowed = $data['isLabelUpdateAllowed'];
        }
        if (isset($data['isMetadataUpdateAllowed'])) {
            $this->isMetadataUpdateAllowed = $data['isMetadataUpdateAllowed'];
        }
        if (isset($data['isRecordLocked'])) {
            $this->isRecordLocked = $data['isRecordLocked'];
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
