<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeleconferenceDeviceMediaQuality
 */
class TeleconferenceDeviceMediaQuality
{
    /**
     * The average inbound stream network jitter.
     */
    private ?string $averageInboundJitter;

    /**
     * The average inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     */
    private ?string $averageInboundPacketLossRateInPercentage;

    /**
     * The average inbound stream network round trip delay.
     */
    private ?string $averageInboundRoundTripDelay;

    /**
     * The average outbound stream network jitter.
     */
    private ?string $averageOutboundJitter;

    /**
     * The average outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     */
    private ?string $averageOutboundPacketLossRateInPercentage;

    /**
     * The average outbound stream network round trip delay.
     */
    private ?string $averageOutboundRoundTripDelay;

    /**
     * The channel index of media. Indexing begins with 1.  If a media session contains 3 video modalities, channel indexes will be 1, 2, and 3.
     */
    private ?float $channelIndex;

    /**
     * The total number of the inbound packets.
     */
    private ?float $inboundPackets;

    /**
     * the local IP address for the media session.
     */
    private ?string $localIPAddress;

    /**
     * The local media port.
     */
    private ?float $localPort;

    /**
     * The maximum inbound stream network jitter.
     */
    private ?string $maximumInboundJitter;

    /**
     * The maximum inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     */
    private ?string $maximumInboundPacketLossRateInPercentage;

    /**
     * The maximum inbound stream network round trip delay.
     */
    private ?string $maximumInboundRoundTripDelay;

    /**
     * The maximum outbound stream network jitter.
     */
    private ?string $maximumOutboundJitter;

    /**
     * The maximum outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     */
    private ?string $maximumOutboundPacketLossRateInPercentage;

    /**
     * The maximum outbound stream network round trip delay.
     */
    private ?string $maximumOutboundRoundTripDelay;

    /**
     * The total modality duration. If the media enabled and disabled multiple times, MediaDuration will the summation of all of the durations.
     */
    private ?string $mediaDuration;

    /**
     * The network link speed in bytes
     */
    private ?float $networkLinkSpeedInBytes;

    /**
     * The total number of the outbound packets.
     */
    private ?float $outboundPackets;

    /**
     * The remote IP address for the media session.
     */
    private ?string $remoteIPAddress;

    /**
     * The remote media port.
     */
    private ?string $remotePort;

    public function getAverageInboundJitter(): ?string
    {
        return $this->averageInboundJitter;
    }

    public function setAverageInboundJitter(?string $averageInboundJitter): self
    {
        $this->averageInboundJitter = $averageInboundJitter;
        return $this;
    }

    public function getAverageInboundPacketLossRateInPercentage(): ?string
    {
        return $this->averageInboundPacketLossRateInPercentage;
    }

    public function setAverageInboundPacketLossRateInPercentage(?string $averageInboundPacketLossRateInPercentage): self
    {
        $this->averageInboundPacketLossRateInPercentage = $averageInboundPacketLossRateInPercentage;
        return $this;
    }

    public function getAverageInboundRoundTripDelay(): ?string
    {
        return $this->averageInboundRoundTripDelay;
    }

    public function setAverageInboundRoundTripDelay(?string $averageInboundRoundTripDelay): self
    {
        $this->averageInboundRoundTripDelay = $averageInboundRoundTripDelay;
        return $this;
    }

    public function getAverageOutboundJitter(): ?string
    {
        return $this->averageOutboundJitter;
    }

    public function setAverageOutboundJitter(?string $averageOutboundJitter): self
    {
        $this->averageOutboundJitter = $averageOutboundJitter;
        return $this;
    }

    public function getAverageOutboundPacketLossRateInPercentage(): ?string
    {
        return $this->averageOutboundPacketLossRateInPercentage;
    }

    public function setAverageOutboundPacketLossRateInPercentage(?string $averageOutboundPacketLossRateInPercentage): self
    {
        $this->averageOutboundPacketLossRateInPercentage = $averageOutboundPacketLossRateInPercentage;
        return $this;
    }

    public function getAverageOutboundRoundTripDelay(): ?string
    {
        return $this->averageOutboundRoundTripDelay;
    }

    public function setAverageOutboundRoundTripDelay(?string $averageOutboundRoundTripDelay): self
    {
        $this->averageOutboundRoundTripDelay = $averageOutboundRoundTripDelay;
        return $this;
    }

    public function getChannelIndex(): ?float
    {
        return $this->channelIndex;
    }

    public function setChannelIndex(?float $channelIndex): self
    {
        $this->channelIndex = $channelIndex;
        return $this;
    }

    public function getInboundPackets(): ?float
    {
        return $this->inboundPackets;
    }

    public function setInboundPackets(?float $inboundPackets): self
    {
        $this->inboundPackets = $inboundPackets;
        return $this;
    }

    public function getLocalIPAddress(): ?string
    {
        return $this->localIPAddress;
    }

    public function setLocalIPAddress(?string $localIPAddress): self
    {
        $this->localIPAddress = $localIPAddress;
        return $this;
    }

    public function getLocalPort(): ?float
    {
        return $this->localPort;
    }

    public function setLocalPort(?float $localPort): self
    {
        $this->localPort = $localPort;
        return $this;
    }

    public function getMaximumInboundJitter(): ?string
    {
        return $this->maximumInboundJitter;
    }

    public function setMaximumInboundJitter(?string $maximumInboundJitter): self
    {
        $this->maximumInboundJitter = $maximumInboundJitter;
        return $this;
    }

    public function getMaximumInboundPacketLossRateInPercentage(): ?string
    {
        return $this->maximumInboundPacketLossRateInPercentage;
    }

    public function setMaximumInboundPacketLossRateInPercentage(?string $maximumInboundPacketLossRateInPercentage): self
    {
        $this->maximumInboundPacketLossRateInPercentage = $maximumInboundPacketLossRateInPercentage;
        return $this;
    }

    public function getMaximumInboundRoundTripDelay(): ?string
    {
        return $this->maximumInboundRoundTripDelay;
    }

    public function setMaximumInboundRoundTripDelay(?string $maximumInboundRoundTripDelay): self
    {
        $this->maximumInboundRoundTripDelay = $maximumInboundRoundTripDelay;
        return $this;
    }

    public function getMaximumOutboundJitter(): ?string
    {
        return $this->maximumOutboundJitter;
    }

    public function setMaximumOutboundJitter(?string $maximumOutboundJitter): self
    {
        $this->maximumOutboundJitter = $maximumOutboundJitter;
        return $this;
    }

    public function getMaximumOutboundPacketLossRateInPercentage(): ?string
    {
        return $this->maximumOutboundPacketLossRateInPercentage;
    }

    public function setMaximumOutboundPacketLossRateInPercentage(?string $maximumOutboundPacketLossRateInPercentage): self
    {
        $this->maximumOutboundPacketLossRateInPercentage = $maximumOutboundPacketLossRateInPercentage;
        return $this;
    }

    public function getMaximumOutboundRoundTripDelay(): ?string
    {
        return $this->maximumOutboundRoundTripDelay;
    }

    public function setMaximumOutboundRoundTripDelay(?string $maximumOutboundRoundTripDelay): self
    {
        $this->maximumOutboundRoundTripDelay = $maximumOutboundRoundTripDelay;
        return $this;
    }

    public function getMediaDuration(): ?string
    {
        return $this->mediaDuration;
    }

    public function setMediaDuration(?string $mediaDuration): self
    {
        $this->mediaDuration = $mediaDuration;
        return $this;
    }

    public function getNetworkLinkSpeedInBytes(): ?float
    {
        return $this->networkLinkSpeedInBytes;
    }

    public function setNetworkLinkSpeedInBytes(?float $networkLinkSpeedInBytes): self
    {
        $this->networkLinkSpeedInBytes = $networkLinkSpeedInBytes;
        return $this;
    }

    public function getOutboundPackets(): ?float
    {
        return $this->outboundPackets;
    }

    public function setOutboundPackets(?float $outboundPackets): self
    {
        $this->outboundPackets = $outboundPackets;
        return $this;
    }

    public function getRemoteIPAddress(): ?string
    {
        return $this->remoteIPAddress;
    }

    public function setRemoteIPAddress(?string $remoteIPAddress): self
    {
        $this->remoteIPAddress = $remoteIPAddress;
        return $this;
    }

    public function getRemotePort(): ?string
    {
        return $this->remotePort;
    }

    public function setRemotePort(?string $remotePort): self
    {
        $this->remotePort = $remotePort;
        return $this;
    }

}
