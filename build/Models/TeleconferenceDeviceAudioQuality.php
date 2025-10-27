<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeleconferenceDeviceAudioQuality
 */
class TeleconferenceDeviceAudioQuality
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The average inbound stream network jitter. */
    public ?string $averageInboundJitter = null;

    /** 
     * The average inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $averageInboundPacketLossRateInPercentage = null;

    /** The average inbound stream network round trip delay. */
    public ?string $averageInboundRoundTripDelay = null;

    /** The average outbound stream network jitter. */
    public ?string $averageOutboundJitter = null;

    /** 
     * The average outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $averageOutboundPacketLossRateInPercentage = null;

    /** The average outbound stream network round trip delay. */
    public ?string $averageOutboundRoundTripDelay = null;

    /** The channel index of media. Indexing begins with 1.  If a media session contains 3 video modalities, channel indexes will be 1, 2, and 3. */
    public ?float $channelIndex = null;

    /** The total number of the inbound packets. */
    public ?float $inboundPackets = null;

    /** the local IP address for the media session. */
    public ?string $localIPAddress = null;

    /** The local media port. */
    public ?float $localPort = null;

    /** The maximum inbound stream network jitter. */
    public ?string $maximumInboundJitter = null;

    /** 
     * The maximum inbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $maximumInboundPacketLossRateInPercentage = null;

    /** The maximum inbound stream network round trip delay. */
    public ?string $maximumInboundRoundTripDelay = null;

    /** The maximum outbound stream network jitter. */
    public ?string $maximumOutboundJitter = null;

    /** 
     * The maximum outbound stream packet loss rate in percentage (0-100). For example, 0.01 means 0.01%.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $maximumOutboundPacketLossRateInPercentage = null;

    /** The maximum outbound stream network round trip delay. */
    public ?string $maximumOutboundRoundTripDelay = null;

    /** The total modality duration. If the media enabled and disabled multiple times, MediaDuration will the summation of all of the durations. */
    public ?string $mediaDuration = null;

    /** The network link speed in bytes */
    public ?float $networkLinkSpeedInBytes = null;

    /** The total number of the outbound packets. */
    public ?float $outboundPackets = null;

    /** The remote IP address for the media session. */
    public ?string $remoteIPAddress = null;

    /** The remote media port. */
    public ?float $remotePort = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['averageInboundJitter'])) {
            $this->averageInboundJitter = $data['averageInboundJitter'];
        }
        if (isset($data['averageInboundPacketLossRateInPercentage'])) {
            $this->averageInboundPacketLossRateInPercentage = $data['averageInboundPacketLossRateInPercentage'];
        }
        if (isset($data['averageInboundRoundTripDelay'])) {
            $this->averageInboundRoundTripDelay = $data['averageInboundRoundTripDelay'];
        }
        if (isset($data['averageOutboundJitter'])) {
            $this->averageOutboundJitter = $data['averageOutboundJitter'];
        }
        if (isset($data['averageOutboundPacketLossRateInPercentage'])) {
            $this->averageOutboundPacketLossRateInPercentage = $data['averageOutboundPacketLossRateInPercentage'];
        }
        if (isset($data['averageOutboundRoundTripDelay'])) {
            $this->averageOutboundRoundTripDelay = $data['averageOutboundRoundTripDelay'];
        }
        if (isset($data['channelIndex'])) {
            $this->channelIndex = $data['channelIndex'];
        }
        if (isset($data['inboundPackets'])) {
            $this->inboundPackets = $data['inboundPackets'];
        }
        if (isset($data['localIPAddress'])) {
            $this->localIPAddress = $data['localIPAddress'];
        }
        if (isset($data['localPort'])) {
            $this->localPort = $data['localPort'];
        }
        if (isset($data['maximumInboundJitter'])) {
            $this->maximumInboundJitter = $data['maximumInboundJitter'];
        }
        if (isset($data['maximumInboundPacketLossRateInPercentage'])) {
            $this->maximumInboundPacketLossRateInPercentage = $data['maximumInboundPacketLossRateInPercentage'];
        }
        if (isset($data['maximumInboundRoundTripDelay'])) {
            $this->maximumInboundRoundTripDelay = $data['maximumInboundRoundTripDelay'];
        }
        if (isset($data['maximumOutboundJitter'])) {
            $this->maximumOutboundJitter = $data['maximumOutboundJitter'];
        }
        if (isset($data['maximumOutboundPacketLossRateInPercentage'])) {
            $this->maximumOutboundPacketLossRateInPercentage = $data['maximumOutboundPacketLossRateInPercentage'];
        }
        if (isset($data['maximumOutboundRoundTripDelay'])) {
            $this->maximumOutboundRoundTripDelay = $data['maximumOutboundRoundTripDelay'];
        }
        if (isset($data['mediaDuration'])) {
            $this->mediaDuration = $data['mediaDuration'];
        }
        if (isset($data['networkLinkSpeedInBytes'])) {
            $this->networkLinkSpeedInBytes = $data['networkLinkSpeedInBytes'];
        }
        if (isset($data['outboundPackets'])) {
            $this->outboundPackets = $data['outboundPackets'];
        }
        if (isset($data['remoteIPAddress'])) {
            $this->remoteIPAddress = $data['remoteIPAddress'];
        }
        if (isset($data['remotePort'])) {
            $this->remotePort = $data['remotePort'];
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
