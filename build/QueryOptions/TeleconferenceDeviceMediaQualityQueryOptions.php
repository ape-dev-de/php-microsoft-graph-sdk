<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeleconferenceDeviceMediaQuality resources
 *
 * Available select fields:
 * - averageInboundJitter
 * - averageInboundPacketLossRateInPercentage
 * - averageInboundRoundTripDelay
 * - averageOutboundJitter
 * - averageOutboundPacketLossRateInPercentage
 * - averageOutboundRoundTripDelay
 * - channelIndex
 * - inboundPackets
 * - localIPAddress
 * - localPort
 * - maximumInboundJitter
 * - maximumInboundPacketLossRateInPercentage
 * - maximumInboundRoundTripDelay
 * - maximumOutboundJitter
 * - maximumOutboundPacketLossRateInPercentage
 * - maximumOutboundRoundTripDelay
 * - mediaDuration
 * - networkLinkSpeedInBytes
 * - outboundPackets
 * - remoteIPAddress
 * - remotePort
 */
class TeleconferenceDeviceMediaQualityQueryOptions extends QueryOptions
{
    public const FIELD_AVERAGE_INBOUND_JITTER = 'averageInboundJitter';
    public const FIELD_AVERAGE_INBOUND_PACKET_LOSS_RATE_IN_PERCENTAGE = 'averageInboundPacketLossRateInPercentage';
    public const FIELD_AVERAGE_INBOUND_ROUND_TRIP_DELAY = 'averageInboundRoundTripDelay';
    public const FIELD_AVERAGE_OUTBOUND_JITTER = 'averageOutboundJitter';
    public const FIELD_AVERAGE_OUTBOUND_PACKET_LOSS_RATE_IN_PERCENTAGE = 'averageOutboundPacketLossRateInPercentage';
    public const FIELD_AVERAGE_OUTBOUND_ROUND_TRIP_DELAY = 'averageOutboundRoundTripDelay';
    public const FIELD_CHANNEL_INDEX = 'channelIndex';
    public const FIELD_INBOUND_PACKETS = 'inboundPackets';
    public const FIELD_LOCAL_IPADDRESS = 'localIPAddress';
    public const FIELD_LOCAL_PORT = 'localPort';
    public const FIELD_MAXIMUM_INBOUND_JITTER = 'maximumInboundJitter';
    public const FIELD_MAXIMUM_INBOUND_PACKET_LOSS_RATE_IN_PERCENTAGE = 'maximumInboundPacketLossRateInPercentage';
    public const FIELD_MAXIMUM_INBOUND_ROUND_TRIP_DELAY = 'maximumInboundRoundTripDelay';
    public const FIELD_MAXIMUM_OUTBOUND_JITTER = 'maximumOutboundJitter';
    public const FIELD_MAXIMUM_OUTBOUND_PACKET_LOSS_RATE_IN_PERCENTAGE = 'maximumOutboundPacketLossRateInPercentage';
    public const FIELD_MAXIMUM_OUTBOUND_ROUND_TRIP_DELAY = 'maximumOutboundRoundTripDelay';
    public const FIELD_MEDIA_DURATION = 'mediaDuration';
    public const FIELD_NETWORK_LINK_SPEED_IN_BYTES = 'networkLinkSpeedInBytes';
    public const FIELD_OUTBOUND_PACKETS = 'outboundPackets';
    public const FIELD_REMOTE_IPADDRESS = 'remoteIPAddress';
    public const FIELD_REMOTE_PORT = 'remotePort';

    /**
     * Select specific TeleconferenceDeviceMediaQuality properties
     * 
     * @param array<string> $select Use TeleconferenceDeviceMediaQualityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
