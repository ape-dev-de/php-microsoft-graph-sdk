<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaStream
 */
class MediaStream
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['direction'])) {
            $this->direction = is_string($data['direction']) ? MediaDirection::tryFrom($data['direction']) : $data['direction'];
        }
        if (isset($data['label'])) {
            $this->label = $data['label'];
        }
        if (isset($data['mediaType'])) {
            $this->mediaType = is_string($data['mediaType']) ? Modality::tryFrom($data['mediaType']) : $data['mediaType'];
        }
        if (isset($data['serverMuted'])) {
            $this->serverMuted = is_bool($data['serverMuted']) ? $data['serverMuted'] : (bool)$data['serverMuted'];
        }
        if (isset($data['sourceId'])) {
            $this->sourceId = $data['sourceId'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
