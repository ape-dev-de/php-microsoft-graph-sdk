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
    public SecurityBehaviorDuringRetentionPeriod|\stdClass|null $behaviorDuringRetentionPeriod = null;

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
            $this->behaviorDuringRetentionPeriod = is_string($data['behaviorDuringRetentionPeriod']) ? SecurityBehaviorDuringRetentionPeriod::tryFrom($data['behaviorDuringRetentionPeriod']) : $data['behaviorDuringRetentionPeriod'];
        }
        if (isset($data['isContentUpdateAllowed'])) {
            $this->isContentUpdateAllowed = is_bool($data['isContentUpdateAllowed']) ? $data['isContentUpdateAllowed'] : (bool)$data['isContentUpdateAllowed'];
        }
        if (isset($data['isDeleteAllowed'])) {
            $this->isDeleteAllowed = is_bool($data['isDeleteAllowed']) ? $data['isDeleteAllowed'] : (bool)$data['isDeleteAllowed'];
        }
        if (isset($data['isLabelUpdateAllowed'])) {
            $this->isLabelUpdateAllowed = is_bool($data['isLabelUpdateAllowed']) ? $data['isLabelUpdateAllowed'] : (bool)$data['isLabelUpdateAllowed'];
        }
        if (isset($data['isMetadataUpdateAllowed'])) {
            $this->isMetadataUpdateAllowed = is_bool($data['isMetadataUpdateAllowed']) ? $data['isMetadataUpdateAllowed'] : (bool)$data['isMetadataUpdateAllowed'];
        }
        if (isset($data['isRecordLocked'])) {
            $this->isRecordLocked = is_bool($data['isRecordLocked']) ? $data['isRecordLocked'] : (bool)$data['isRecordLocked'];
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
