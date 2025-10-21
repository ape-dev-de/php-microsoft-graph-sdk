<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UploadSession
 */
class UploadSession
{
    public function __construct(
        /** The date and time in UTC that the upload session expires. The complete file must be uploaded before this expiration time is reached. Each fragment uploaded during the session extends the expiration time. */
        public ?\DateTimeInterface $expirationDateTime = null,
        /** @var string[] A collection of byte ranges that the server is missing for the file. These ranges are zero indexed and of the format 'start-end' (for example '0-26' to indicate the first 27 bytes of the file). When uploading files as Outlook attachments, instead of a collection of ranges, this property always indicates a single value '{start}', the location in the file where the next upload should begin. */
        public array $nextExpectedRanges = [],
        /** The URL endpoint that accepts PUT requests for byte ranges of the file. */
        public ?string $uploadUrl = null
    ) {}
}
