<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VerifiedPublisher
 */
class VerifiedPublisher
{
    public function __construct(
        /** The timestamp when the verified publisher was first added or most recently updated. */
        public ?\DateTimeInterface $addedDateTime = null,
        /** The verified publisher name from the app publisher's Partner Center account. */
        public ?string $displayName = null,
        /** The ID of the verified publisher from the app publisher's Partner Center account. */
        public ?string $verifiedPublisherId = null
    ) {}
}
