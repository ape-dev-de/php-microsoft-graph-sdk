<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Video
 */
class Video
{
    /**
     * Number of audio bits per sample.
     */
    private ?float $audioBitsPerSample;

    /**
     * Number of audio channels.
     */
    private ?float $audioChannels;

    /**
     * Name of the audio format (AAC, MP3, etc.).
     */
    private ?string $audioFormat;

    /**
     * Number of audio samples per second.
     */
    private ?float $audioSamplesPerSecond;

    /**
     * Bit rate of the video in bits per second.
     */
    private ?float $bitrate;

    /**
     * Duration of the file in milliseconds.
     */
    private ?float $duration;

    /**
     * Four character code'' name of the video format.
     */
    private ?string $fourCC;

    /**
     * Frame rate of the video.
     */
    private ?string $frameRate;

    /**
     * Height of the video, in pixels.
     */
    private ?float $height;

    /**
     * Width of the video, in pixels.
     */
    private ?string $width;


    public function getAudioBitsPerSample(): ?float
    {
        return $this->audioBitsPerSample;
    }

    public function setAudioBitsPerSample(?float $audioBitsPerSample): self
    {
        $this->audioBitsPerSample = $audioBitsPerSample;
        return $this;
    }

    public function getAudioChannels(): ?float
    {
        return $this->audioChannels;
    }

    public function setAudioChannels(?float $audioChannels): self
    {
        $this->audioChannels = $audioChannels;
        return $this;
    }

    public function getAudioFormat(): ?string
    {
        return $this->audioFormat;
    }

    public function setAudioFormat(?string $audioFormat): self
    {
        $this->audioFormat = $audioFormat;
        return $this;
    }

    public function getAudioSamplesPerSecond(): ?float
    {
        return $this->audioSamplesPerSecond;
    }

    public function setAudioSamplesPerSecond(?float $audioSamplesPerSecond): self
    {
        $this->audioSamplesPerSecond = $audioSamplesPerSecond;
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

    public function getDuration(): ?float
    {
        return $this->duration;
    }

    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    public function getFourCC(): ?string
    {
        return $this->fourCC;
    }

    public function setFourCC(?string $fourCC): self
    {
        $this->fourCC = $fourCC;
        return $this;
    }

    public function getFrameRate(): ?string
    {
        return $this->frameRate;
    }

    public function setFrameRate(?string $frameRate): self
    {
        $this->frameRate = $frameRate;
        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(?float $height): self
    {
        $this->height = $height;
        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

    public function setWidth(?string $width): self
    {
        $this->width = $width;
        return $this;
    }

}
