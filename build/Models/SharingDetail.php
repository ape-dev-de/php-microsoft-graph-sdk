<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharingDetail
 */
class SharingDetail
{
    public function __construct(
        /** The user who shared the document. */
        public ?InsightIdentity $sharedBy = null,
        /** The date and time the file was last shared. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $sharedDateTime = null,
        /** Reference properties of the document, such as the URL and type of the document. Read-only */
        public ?ResourceReference $sharingReference = null,
        /** The subject with which the document was shared. */
        public ?string $sharingSubject = null,
        /** Determines the way the document was shared. Can be by a 1Link1, 1Attachment1, 1Group1, 1Site1. */
        public ?string $sharingType = null
    ) {}
}
