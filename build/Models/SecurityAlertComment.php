<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAlertComment
 */
class SecurityAlertComment
{
    public function __construct(
        /** The comment text. */
        public ?string $comment = null,
        /** The person or app name that submitted the comment. */
        public ?string $createdByDisplayName = null,
        /** The time when the comment was submitted. */
        public ?\DateTimeInterface $createdDateTime = null
    ) {}
}
