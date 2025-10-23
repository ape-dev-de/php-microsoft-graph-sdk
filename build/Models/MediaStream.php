<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaStream
 */
class MediaStream
{
    /**  */
    public ?MediaDirection $direction = null;

    /** The media stream label. */
    public ?string $label = null;

    /**  */
    public ?Modality $mediaType = null;

    /** If the media is muted by the server. */
    public ?bool $serverMuted = null;

    /** The source ID. */
    public ?string $sourceId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['direction'])) {
            $this->direction = is_array($data['direction']) ? new MediaDirection($data['direction']) : $data['direction'];
        }
        if (isset($data['label'])) {
            $this->label = $data['label'];
        }
        if (isset($data['mediaType'])) {
            $this->mediaType = is_array($data['mediaType']) ? new Modality($data['mediaType']) : $data['mediaType'];
        }
        if (isset($data['serverMuted'])) {
            $this->serverMuted = $data['serverMuted'];
        }
        if (isset($data['sourceId'])) {
            $this->sourceId = $data['sourceId'];
        }
    }
}
