<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Audio
 */
class Audio
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The title of the album for this audio file. */
    public ?string $album = null;

    /** The artist named on the album for the audio file. */
    public ?string $albumArtist = null;

    /** The performing artist for the audio file. */
    public ?string $artist = null;

    /** Bitrate expressed in kbps. */
    public ?float $bitrate = null;

    /** The name of the composer of the audio file. */
    public ?string $composers = null;

    /** Copyright information for the audio file. */
    public ?string $copyright = null;

    /** The number of the disc this audio file came from. */
    public ?float $disc = null;

    /** The total number of discs in this album. */
    public ?float $discCount = null;

    /** Duration of the audio file, expressed in milliseconds */
    public ?float $duration = null;

    /** The genre of this audio file. */
    public ?string $genre = null;

    /** Indicates if the file is protected with digital rights management. */
    public ?bool $hasDrm = null;

    /** Indicates if the file is encoded with a variable bitrate. */
    public ?bool $isVariableBitrate = null;

    /** The title of the audio file. */
    public ?string $title = null;

    /** The number of the track on the original disc for this audio file. */
    public ?float $track = null;

    /** The total number of tracks on the original disc for this audio file. */
    public ?float $trackCount = null;

    /** The year the audio file was recorded. */
    public ?float $year = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['album'])) {
            $this->album = $data['album'];
        }
        if (isset($data['albumArtist'])) {
            $this->albumArtist = $data['albumArtist'];
        }
        if (isset($data['artist'])) {
            $this->artist = $data['artist'];
        }
        if (isset($data['bitrate'])) {
            $this->bitrate = $data['bitrate'];
        }
        if (isset($data['composers'])) {
            $this->composers = $data['composers'];
        }
        if (isset($data['copyright'])) {
            $this->copyright = $data['copyright'];
        }
        if (isset($data['disc'])) {
            $this->disc = $data['disc'];
        }
        if (isset($data['discCount'])) {
            $this->discCount = $data['discCount'];
        }
        if (isset($data['duration'])) {
            $this->duration = $data['duration'];
        }
        if (isset($data['genre'])) {
            $this->genre = $data['genre'];
        }
        if (isset($data['hasDrm'])) {
            $this->hasDrm = $data['hasDrm'];
        }
        if (isset($data['isVariableBitrate'])) {
            $this->isVariableBitrate = $data['isVariableBitrate'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
        if (isset($data['track'])) {
            $this->track = $data['track'];
        }
        if (isset($data['trackCount'])) {
            $this->trackCount = $data['trackCount'];
        }
        if (isset($data['year'])) {
            $this->year = $data['year'];
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
