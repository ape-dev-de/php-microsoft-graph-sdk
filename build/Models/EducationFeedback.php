<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationFeedback
 */
class EducationFeedback
{
    public function __construct(
        /** User who created the feedback. */
        public ?IdentitySet $feedbackBy = null,
        /** Moment in time when the feedback was given. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $feedbackDateTime = null,
        /** Feedback. */
        public ?EducationItemBody $text = null
    ) {}
}
