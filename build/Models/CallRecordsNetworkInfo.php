<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsNetworkInfo
 */
class CallRecordsNetworkInfo
{
    public function __construct(
        /** Fraction of the call that the media endpoint detected the available bandwidth or bandwidth policy was low enough to cause poor quality of the audio sent. */
        public ?string $bandwidthLowEventRatio = null,
        /** The wireless LAN basic service set identifier of the media endpoint used to connect to the network. This property isn't available if the user disables precise location sharing in their operating system or Microsoft Teams app settings. */
        public ?string $basicServiceSetIdentifier = null,
        /**  */
        public ?CallRecordsNetworkConnectionType $connectionType = null,
        /** Fraction of the call that the media endpoint detected the network delay was significant enough to impact the ability to have real-time two-way communication. */
        public ?string $delayEventRatio = null,
        /** DNS suffix associated with the network adapter of the media endpoint. */
        public ?string $dnsSuffix = null,
        /** IP address of the media endpoint. */
        public ?string $ipAddress = null,
        /** Link speed in bits per second reported by the network adapter used by the media endpoint. */
        public ?float $linkSpeed = null,
        /** The media access control (MAC) address of the media endpoint's network device. This value may be missing or shown as 02:00:00:00:00:00 due to operating system privacy policies. */
        public ?string $macAddress = null,
        /**  */
        public ?CallRecordsNetworkTransportProtocol $networkTransportProtocol = null,
        /** Network port number used by media endpoint. */
        public ?float $port = null,
        /** Fraction of the call that the media endpoint detected the network was causing poor quality of the audio received. */
        public ?string $receivedQualityEventRatio = null,
        /** IP address of the media endpoint as seen by the media relay server. This is typically the public internet IP address associated to the endpoint. */
        public ?string $reflexiveIPAddress = null,
        /** IP address of the media relay server allocated by the media endpoint. */
        public ?string $relayIPAddress = null,
        /** Network port number allocated on the media relay server by the media endpoint. */
        public ?float $relayPort = null,
        /** Fraction of the call that the media endpoint detected the network was causing poor quality of the audio sent. */
        public ?string $sentQualityEventRatio = null,
        /** Subnet used for media stream by the media endpoint. */
        public ?string $subnet = null,
        /** List of network trace route hops collected for this media stream.* */
        public array $traceRouteHops = [],
        /**  */
        public ?CallRecordsWifiBand $wifiBand = null,
        /** Estimated remaining battery charge in percentage reported by the media endpoint. */
        public ?float $wifiBatteryCharge = null,
        /** WiFi channel used by the media endpoint. */
        public ?float $wifiChannel = null,
        /** Name of the Microsoft WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint. */
        public ?string $wifiMicrosoftDriver = null,
        /** Version of the Microsoft WiFi driver used by the media endpoint. */
        public ?string $wifiMicrosoftDriverVersion = null,
        /**  */
        public ?CallRecordsWifiRadioType $wifiRadioType = null,
        /** WiFi signal strength in percentage reported by the media endpoint. */
        public ?float $wifiSignalStrength = null,
        /** Name of the WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint. */
        public ?string $wifiVendorDriver = null,
        /** Version of the WiFi driver used by the media endpoint. */
        public ?string $wifiVendorDriverVersion = null
    ) {}
}
