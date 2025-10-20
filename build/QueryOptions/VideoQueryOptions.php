<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Video resources
 *
 * Available select fields:
 * - audioBitsPerSample
 * - audioChannels
 * - audioFormat
 * - audioSamplesPerSecond
 * - bitrate
 * - duration
 * - fourCC
 * - frameRate
 * - height
 * - width
 */
class VideoQueryOptions extends QueryOptions
{
    public const FIELD_AUDIO_BITS_PER_SAMPLE = 'audioBitsPerSample';
    public const FIELD_AUDIO_CHANNELS = 'audioChannels';
    public const FIELD_AUDIO_FORMAT = 'audioFormat';
    public const FIELD_AUDIO_SAMPLES_PER_SECOND = 'audioSamplesPerSecond';
    public const FIELD_BITRATE = 'bitrate';
    public const FIELD_DURATION = 'duration';
    public const FIELD_FOUR_CC = 'fourCC';
    public const FIELD_FRAME_RATE = 'frameRate';
    public const FIELD_HEIGHT = 'height';
    public const FIELD_WIDTH = 'width';

    /**
     * Select specific Video properties
     * 
     * @param array<string> $select Use VideoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
