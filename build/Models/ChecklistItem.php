<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChecklistItem
 */
class ChecklistItem
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date and time when the checklistItem was finished. */
        public ?\DateTimeInterface $checkedDateTime = null,
        /** The date and time when the checklistItem was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Indicates the title of the checklistItem. */
        public ?string $displayName = null,
        /** State that indicates whether the item is checked off or not. */
        public ?string $isChecked = null
    ) {}
}
