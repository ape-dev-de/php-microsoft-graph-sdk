<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Audio
 */
class Audio
{
    /**
     * The title of the album for this audio file.
     */
    private ?string $album;

    /**
     * The artist named on the album for the audio file.
     */
    private ?string $albumArtist;

    /**
     * The performing artist for the audio file.
     */
    private ?string $artist;

    /**
     * Bitrate expressed in kbps.
     */
    private ?float $bitrate;

    /**
     * The name of the composer of the audio file.
     */
    private ?string $composers;

    /**
     * Copyright information for the audio file.
     */
    private ?string $copyright;

    /**
     * The number of the disc this audio file came from.
     */
    private ?float $disc;

    /**
     * The total number of discs in this album.
     */
    private ?float $discCount;

    /**
     * Duration of the audio file, expressed in milliseconds
     */
    private ?float $duration;

    /**
     * The genre of this audio file.
     */
    private ?string $genre;

    /**
     * Indicates if the file is protected with digital rights management.
     */
    private ?bool $hasDrm;

    /**
     * Indicates if the file is encoded with a variable bitrate.
     */
    private ?bool $isVariableBitrate;

    /**
     * The title of the audio file.
     */
    private ?string $title;

    /**
     * The number of the track on the original disc for this audio file.
     */
    private ?float $track;

    /**
     * The total number of tracks on the original disc for this audio file.
     */
    private ?float $trackCount;

    /**
     * The year the audio file was recorded.
     */
    private ?string $year;


    public function getAlbum(): ?string
    {
        return $this->album;
    }

    public function setAlbum(?string $album): self
    {
        $this->album = $album;
        return $this;
    }

    public function getAlbumArtist(): ?string
    {
        return $this->albumArtist;
    }

    public function setAlbumArtist(?string $albumArtist): self
    {
        $this->albumArtist = $albumArtist;
        return $this;
    }

    public function getArtist(): ?string
    {
        return $this->artist;
    }

    public function setArtist(?string $artist): self
    {
        $this->artist = $artist;
        return $this;
    }

    public function getBitrate(): ?float
    {
        return $this->bitrate;
    }

    public function setBitrate(?float $bitrate): self
    {
        $this->bitrate = $bitrate;
        return $this;
    }

    public function getComposers(): ?string
    {
        return $this->composers;
    }

    public function setComposers(?string $composers): self
    {
        $this->composers = $composers;
        return $this;
    }

    public function getCopyright(): ?string
    {
        return $this->copyright;
    }

    public function setCopyright(?string $copyright): self
    {
        $this->copyright = $copyright;
        return $this;
    }

    public function getDisc(): ?float
    {
        return $this->disc;
    }

    public function setDisc(?float $disc): self
    {
        $this->disc = $disc;
        return $this;
    }

    public function getDiscCount(): ?float
    {
        return $this->discCount;
    }

    public function setDiscCount(?float $discCount): self
    {
        $this->discCount = $discCount;
        return $this;
    }

    public function getDuration(): ?float
    {
        return $this->duration;
    }

    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(?string $genre): self
    {
        $this->genre = $genre;
        return $this;
    }

    public function getHasDrm(): ?bool
    {
        return $this->hasDrm;
    }

    public function setHasDrm(?bool $hasDrm): self
    {
        $this->hasDrm = $hasDrm;
        return $this;
    }

    public function getIsVariableBitrate(): ?bool
    {
        return $this->isVariableBitrate;
    }

    public function setIsVariableBitrate(?bool $isVariableBitrate): self
    {
        $this->isVariableBitrate = $isVariableBitrate;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getTrack(): ?float
    {
        return $this->track;
    }

    public function setTrack(?float $track): self
    {
        $this->track = $track;
        return $this;
    }

    public function getTrackCount(): ?float
    {
        return $this->trackCount;
    }

    public function setTrackCount(?float $trackCount): self
    {
        $this->trackCount = $trackCount;
        return $this;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(?string $year): self
    {
        $this->year = $year;
        return $this;
    }

}
