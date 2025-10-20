<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeleconferenceDeviceVideoQuality
 */
class TeleconferenceDeviceVideoQuality
{
    /**
     * The average inbound stream video bit rate per second.
     */
    private ?string $averageInboundBitRate;

    /**
     * The average inbound stream video frame rate per second.
     */
    private ?string $averageInboundFrameRate;

    /**
     * The average outbound stream video bit rate per second.
     */
    private ?string $averageOutboundBitRate;

    /**
     * The average outbound stream video frame rate per second.
     */
    private ?string $averageOutboundFrameRate;

    public function getAverageInboundBitRate(): ?string
    {
        return $this->averageInboundBitRate;
    }

    public function setAverageInboundBitRate(?string $averageInboundBitRate): self
    {
        $this->averageInboundBitRate = $averageInboundBitRate;
        return $this;
    }

    public function getAverageInboundFrameRate(): ?string
    {
        return $this->averageInboundFrameRate;
    }

    public function setAverageInboundFrameRate(?string $averageInboundFrameRate): self
    {
        $this->averageInboundFrameRate = $averageInboundFrameRate;
        return $this;
    }

    public function getAverageOutboundBitRate(): ?string
    {
        return $this->averageOutboundBitRate;
    }

    public function setAverageOutboundBitRate(?string $averageOutboundBitRate): self
    {
        $this->averageOutboundBitRate = $averageOutboundBitRate;
        return $this;
    }

    public function getAverageOutboundFrameRate(): ?string
    {
        return $this->averageOutboundFrameRate;
    }

    public function setAverageOutboundFrameRate(?string $averageOutboundFrameRate): self
    {
        $this->averageOutboundFrameRate = $averageOutboundFrameRate;
        return $this;
    }

}
