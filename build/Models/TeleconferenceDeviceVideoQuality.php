<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeleconferenceDeviceVideoQuality
 */
class TeleconferenceDeviceVideoQuality
{
    public function __construct(
        /** The average inbound stream network jitter. */
        public ?string $averageInboundJitter = null,
        /** The average inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%. */
        public ?string $averageInboundPacketLossRateInPercentage = null,
        /** The average inbound stream network round trip delay. */
        public ?string $averageInboundRoundTripDelay = null,
        /** The average outbound stream network jitter. */
        public ?string $averageOutboundJitter = null,
        /** The average outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%. */
        public ?string $averageOutboundPacketLossRateInPercentage = null,
        /** The average outbound stream network round trip delay. */
        public ?string $averageOutboundRoundTripDelay = null,
        /** The channel index of media. Indexing begins with 1.  If a media session contains 3 video modalities, channel indexes will be 1, 2, and 3. */
        public ?float $channelIndex = null,
        /** The total number of the inbound packets. */
        public ?float $inboundPackets = null,
        /** the local IP address for the media session. */
        public ?string $localIPAddress = null,
        /** The local media port. */
        public ?float $localPort = null,
        /** The maximum inbound stream network jitter. */
        public ?string $maximumInboundJitter = null,
        /** The maximum inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%. */
        public ?string $maximumInboundPacketLossRateInPercentage = null,
        /** The maximum inbound stream network round trip delay. */
        public ?string $maximumInboundRoundTripDelay = null,
        /** The maximum outbound stream network jitter. */
        public ?string $maximumOutboundJitter = null,
        /** The maximum outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%. */
        public ?string $maximumOutboundPacketLossRateInPercentage = null,
        /** The maximum outbound stream network round trip delay. */
        public ?string $maximumOutboundRoundTripDelay = null,
        /** The total modality duration. If the media enabled and disabled multiple times, MediaDuration will the summation of all of the durations. */
        public ?string $mediaDuration = null,
        /** The network link speed in bytes */
        public ?float $networkLinkSpeedInBytes = null,
        /** The total number of the outbound packets. */
        public ?float $outboundPackets = null,
        /** The remote IP address for the media session. */
        public ?string $remoteIPAddress = null,
        /** The remote media port. */
        public ?string $remotePort = null,
        /** The average inbound stream video bit rate per second. */
        public ?string $averageInboundBitRate = null,
        /** The average inbound stream video frame rate per second. */
        public ?string $averageInboundFrameRate = null,
        /** The average outbound stream video bit rate per second. */
        public ?string $averageOutboundBitRate = null,
        /** The average outbound stream video frame rate per second. */
        public ?string $averageOutboundFrameRate = null
    ) {}
}
