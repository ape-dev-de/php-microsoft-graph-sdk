<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DayNote
 */
class DayNote
{
    public function __construct(
        /** The date of the day note. */
        public ?\DateTimeInterface $dayNoteDate = null,
        /** The draft version of this day note that is viewable by managers. Only contentType text is supported. */
        public ?string $draftDayNote = null,
        /** The shared version of this day note that is viewable by both employees and managers. Only contentType text is supported. */
        public ?string $sharedDayNote = null
    ) {}
}
