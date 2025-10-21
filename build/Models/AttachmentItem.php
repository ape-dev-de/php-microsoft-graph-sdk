<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttachmentItem
 */
class AttachmentItem
{
    public function __construct(
        /** The type of attachment. Possible values are: file, item, reference. Required. */
        public ?AttachmentType $attachmentType = null,
        /** The CID or Content-Id of the attachment for referencing for the in-line attachments using the <img src='cid:contentId'> tag in HTML messages. Optional. */
        public ?string $contentId = null,
        /** The nature of the data in the attachment. Optional. */
        public ?string $contentType = null,
        /** true if the attachment is an inline attachment; otherwise, false. Optional. */
        public ?bool $isInline = null,
        /** The display name of the attachment. This can be a descriptive string and doesn't have to be the actual file name. Required. */
        public ?string $name = null,
        /** The length of the attachment in bytes. Required. */
        public ?float $size = null
    ) {}
}
