<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttachmentInfo
 */
class AttachmentInfo
{
    public function __construct(
        /** The type of the attachment. The possible values are: file, item, reference. Required. */
        public ?string $attachmentType = null,
        /** The nature of the data in the attachment. Optional. */
        public ?string $contentType = null,
        /** The display name of the attachment. This can be a descriptive string and doesn't have to be the actual file name. Required. */
        public ?string $name = null,
        /** The length of the attachment in bytes. Required. */
        public ?float $size = null
    ) {}
}
