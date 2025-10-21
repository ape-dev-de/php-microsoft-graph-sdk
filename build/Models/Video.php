<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Video
 */
class Video
{
    public function __construct(
        /** Number of audio bits per sample. */
        public ?float $audioBitsPerSample = null,
        /** Number of audio channels. */
        public ?float $audioChannels = null,
        /** Name of the audio format (AAC, MP3, etc.). */
        public ?string $audioFormat = null,
        /** Number of audio samples per second. */
        public ?float $audioSamplesPerSecond = null,
        /** Bit rate of the video in bits per second. */
        public ?float $bitrate = null,
        /** Duration of the file in milliseconds. */
        public ?float $duration = null,
        /** Four character code'' name of the video format. */
        public ?string $fourCC = null,
        /** Frame rate of the video. */
        public ?string $frameRate = null,
        /** Height of the video, in pixels. */
        public ?float $height = null,
        /** Width of the video, in pixels. */
        public ?string $width = null
    ) {}
}
