<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RetentionLabelSettings
 */
class RetentionLabelSettings
{
    public function __construct(
        /** Describes the item behavior during retention period. Possible values are: doNotRetain, retain, retainAsRecord, retainAsRegulatoryRecord, unknownFutureValue. Read-only. */
        public ?string $behaviorDuringRetentionPeriod = null,
        /** Specifies whether updates to document content are allowed. Read-only. */
        public ?bool $isContentUpdateAllowed = null,
        /** Specifies whether the document deletion is allowed. Read-only. */
        public ?bool $isDeleteAllowed = null,
        /** Specifies whether you're allowed to change the retention label on the document. Read-only. */
        public ?bool $isLabelUpdateAllowed = null,
        /** Specifies whether updates to the item metadata (for example, the Title field) are blocked. Read-only. */
        public ?bool $isMetadataUpdateAllowed = null,
        /** Specifies whether the item is locked. Read-write. */
        public ?bool $isRecordLocked = null
    ) {}
}
