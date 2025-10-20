<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsNetworkInfo resources
 *
 * Available select fields:
 * - bandwidthLowEventRatio
 * - basicServiceSetIdentifier
 * - connectionType
 * - delayEventRatio
 * - dnsSuffix
 * - ipAddress
 * - linkSpeed
 * - macAddress
 * - networkTransportProtocol
 * - port
 * - receivedQualityEventRatio
 * - reflexiveIPAddress
 * - relayIPAddress
 * - relayPort
 * - sentQualityEventRatio
 * - subnet
 * - traceRouteHops
 * - wifiBand
 * - wifiBatteryCharge
 * - wifiChannel
 * - wifiMicrosoftDriver
 * - wifiMicrosoftDriverVersion
 * - wifiRadioType
 * - wifiSignalStrength
 * - wifiVendorDriver
 * - wifiVendorDriverVersion
 */
class CallRecordsNetworkInfoQueryOptions extends QueryOptions
{
    public const FIELD_BANDWIDTH_LOW_EVENT_RATIO = 'bandwidthLowEventRatio';
    public const FIELD_BASIC_SERVICE_SET_IDENTIFIER = 'basicServiceSetIdentifier';
    public const FIELD_CONNECTION_TYPE = 'connectionType';
    public const FIELD_DELAY_EVENT_RATIO = 'delayEventRatio';
    public const FIELD_DNS_SUFFIX = 'dnsSuffix';
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_LINK_SPEED = 'linkSpeed';
    public const FIELD_MAC_ADDRESS = 'macAddress';
    public const FIELD_NETWORK_TRANSPORT_PROTOCOL = 'networkTransportProtocol';
    public const FIELD_PORT = 'port';
    public const FIELD_RECEIVED_QUALITY_EVENT_RATIO = 'receivedQualityEventRatio';
    public const FIELD_REFLEXIVE_IPADDRESS = 'reflexiveIPAddress';
    public const FIELD_RELAY_IPADDRESS = 'relayIPAddress';
    public const FIELD_RELAY_PORT = 'relayPort';
    public const FIELD_SENT_QUALITY_EVENT_RATIO = 'sentQualityEventRatio';
    public const FIELD_SUBNET = 'subnet';
    public const FIELD_TRACE_ROUTE_HOPS = 'traceRouteHops';
    public const FIELD_WIFI_BAND = 'wifiBand';
    public const FIELD_WIFI_BATTERY_CHARGE = 'wifiBatteryCharge';
    public const FIELD_WIFI_CHANNEL = 'wifiChannel';
    public const FIELD_WIFI_MICROSOFT_DRIVER = 'wifiMicrosoftDriver';
    public const FIELD_WIFI_MICROSOFT_DRIVER_VERSION = 'wifiMicrosoftDriverVersion';
    public const FIELD_WIFI_RADIO_TYPE = 'wifiRadioType';
    public const FIELD_WIFI_SIGNAL_STRENGTH = 'wifiSignalStrength';
    public const FIELD_WIFI_VENDOR_DRIVER = 'wifiVendorDriver';
    public const FIELD_WIFI_VENDOR_DRIVER_VERSION = 'wifiVendorDriverVersion';

    /**
     * Select specific CallRecordsNetworkInfo properties
     * 
     * @param array<string> $select Use CallRecordsNetworkInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
