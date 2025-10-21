<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaStream
 */
class MediaStream
{
    public function __construct(
        /**  */
        public ?MediaDirection $direction = null,
        /** The media stream label. */
        public ?string $label = null,
        /**  */
        public ?Modality $mediaType = null,
        /** If the media is muted by the server. */
        public ?bool $serverMuted = null,
        /** The source ID. */
        public ?string $sourceId = null
    ) {}
}
