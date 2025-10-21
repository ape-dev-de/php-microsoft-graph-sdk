<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutlookCategory
 */
class OutlookCategory
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** A pre-set color constant that characterizes a category, and that is mapped to one of 25 predefined colors. For more details, see the following note. */
        public ?CategoryColor $color = null,
        /** A unique name that identifies a category in the user's mailbox. After a category is created, the name cannot be changed. Read-only. */
        public ?string $displayName = null
    ) {}
}
