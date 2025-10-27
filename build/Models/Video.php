<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Video
 */
class Video
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Number of audio bits per sample. */
    public ?float $audioBitsPerSample = null;

    /** Number of audio channels. */
    public ?float $audioChannels = null;

    /** Name of the audio format (AAC, MP3, etc.). */
    public ?string $audioFormat = null;

    /** Number of audio samples per second. */
    public ?float $audioSamplesPerSecond = null;

    /** Bit rate of the video in bits per second. */
    public ?float $bitrate = null;

    /** Duration of the file in milliseconds. */
    public ?float $duration = null;

    /** 'Four character code' name of the video format. */
    public ?string $fourCC = null;

    /** 
     * Frame rate of the video.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $frameRate = null;

    /** Height of the video, in pixels. */
    public ?float $height = null;

    /** Width of the video, in pixels. */
    public ?float $width = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['audioBitsPerSample'])) {
            $this->audioBitsPerSample = $data['audioBitsPerSample'];
        }
        if (isset($data['audioChannels'])) {
            $this->audioChannels = $data['audioChannels'];
        }
        if (isset($data['audioFormat'])) {
            $this->audioFormat = $data['audioFormat'];
        }
        if (isset($data['audioSamplesPerSecond'])) {
            $this->audioSamplesPerSecond = $data['audioSamplesPerSecond'];
        }
        if (isset($data['bitrate'])) {
            $this->bitrate = $data['bitrate'];
        }
        if (isset($data['duration'])) {
            $this->duration = $data['duration'];
        }
        if (isset($data['fourCC'])) {
            $this->fourCC = $data['fourCC'];
        }
        if (isset($data['frameRate'])) {
            $this->frameRate = $data['frameRate'];
        }
        if (isset($data['height'])) {
            $this->height = $data['height'];
        }
        if (isset($data['width'])) {
            $this->width = $data['width'];
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
