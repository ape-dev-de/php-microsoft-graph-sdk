<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemRetentionLabel
 */
class ItemRetentionLabel
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Specifies whether the label is applied explicitly on the item. True indicates that the label is applied explicitly; otherwise, the label is inherited from its parent. Read-only. */
        public ?bool $isLabelAppliedExplicitly = null,
        /** Identity of the user who applied the label. Read-only. */
        public ?string $labelAppliedBy = null,
        /** The date and time when the label was applied on the item. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $labelAppliedDateTime = null,
        /** The retention label on the document. Read-write. */
        public ?string $name = null,
        /** The retention settings enforced on the item. Read-write. */
        public ?string $retentionSettings = null
    ) {}
}
