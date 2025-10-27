<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsNetworkInfo
 */
class CallRecordsNetworkInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Fraction of the call that the media endpoint detected the available bandwidth or bandwidth policy was low enough to cause poor quality of the audio sent.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $bandwidthLowEventRatio = null;

    /** The wireless LAN basic service set identifier of the media endpoint used to connect to the network. This property isn't available if the user disables precise location sharing in their operating system or Microsoft Teams app settings. */
    public ?string $basicServiceSetIdentifier = null;

    /**  */
    public ?CallRecordsNetworkConnectionType $connectionType = null;

    /** 
     * Fraction of the call that the media endpoint detected the network delay was significant enough to impact the ability to have real-time two-way communication.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $delayEventRatio = null;

    /** DNS suffix associated with the network adapter of the media endpoint. */
    public ?string $dnsSuffix = null;

    /** IP address of the media endpoint. */
    public ?string $ipAddress = null;

    /** Link speed in bits per second reported by the network adapter used by the media endpoint. */
    public ?float $linkSpeed = null;

    /** The media access control (MAC) address of the media endpoint's network device. This value may be missing or shown as 02:00:00:00:00:00 due to operating system privacy policies. */
    public ?string $macAddress = null;

    /**  */
    public ?CallRecordsNetworkTransportProtocol $networkTransportProtocol = null;

    /** Network port number used by media endpoint. */
    public ?float $port = null;

    /** 
     * Fraction of the call that the media endpoint detected the network was causing poor quality of the audio received.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $receivedQualityEventRatio = null;

    /** IP address of the media endpoint as seen by the media relay server. This is typically the public internet IP address associated to the endpoint. */
    public ?string $reflexiveIPAddress = null;

    /** IP address of the media relay server allocated by the media endpoint. */
    public ?string $relayIPAddress = null;

    /** Network port number allocated on the media relay server by the media endpoint. */
    public ?float $relayPort = null;

    /** 
     * Fraction of the call that the media endpoint detected the network was causing poor quality of the audio sent.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $sentQualityEventRatio = null;

    /** Subnet used for media stream by the media endpoint. */
    public ?string $subnet = null;

    /** 
     * List of network trace route hops collected for this media stream.*
     * @var CallRecordsTraceRouteHop[]
     */
    public array $traceRouteHops = [];

    /**  */
    public ?CallRecordsWifiBand $wifiBand = null;

    /** Estimated remaining battery charge in percentage reported by the media endpoint. */
    public ?float $wifiBatteryCharge = null;

    /** WiFi channel used by the media endpoint. */
    public ?float $wifiChannel = null;

    /** Name of the Microsoft WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint. */
    public ?string $wifiMicrosoftDriver = null;

    /** Version of the Microsoft WiFi driver used by the media endpoint. */
    public ?string $wifiMicrosoftDriverVersion = null;

    /**  */
    public ?CallRecordsWifiRadioType $wifiRadioType = null;

    /** WiFi signal strength in percentage reported by the media endpoint. */
    public ?float $wifiSignalStrength = null;

    /** Name of the WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint. */
    public ?string $wifiVendorDriver = null;

    /** Version of the WiFi driver used by the media endpoint. */
    public ?string $wifiVendorDriverVersion = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['bandwidthLowEventRatio'])) {
            $this->bandwidthLowEventRatio = is_numeric($data['bandwidthLowEventRatio']) ? (float)$data['bandwidthLowEventRatio'] : $data['bandwidthLowEventRatio'];
        }
        if (isset($data['basicServiceSetIdentifier'])) {
            $this->basicServiceSetIdentifier = $data['basicServiceSetIdentifier'];
        }
        if (isset($data['connectionType'])) {
            $this->connectionType = is_string($data['connectionType']) ? CallRecordsNetworkConnectionType::tryFrom($data['connectionType']) : $data['connectionType'];
        }
        if (isset($data['delayEventRatio'])) {
            $this->delayEventRatio = is_numeric($data['delayEventRatio']) ? (float)$data['delayEventRatio'] : $data['delayEventRatio'];
        }
        if (isset($data['dnsSuffix'])) {
            $this->dnsSuffix = $data['dnsSuffix'];
        }
        if (isset($data['ipAddress'])) {
            $this->ipAddress = $data['ipAddress'];
        }
        if (isset($data['linkSpeed'])) {
            $this->linkSpeed = is_numeric($data['linkSpeed']) ? (float)$data['linkSpeed'] : $data['linkSpeed'];
        }
        if (isset($data['macAddress'])) {
            $this->macAddress = $data['macAddress'];
        }
        if (isset($data['networkTransportProtocol'])) {
            $this->networkTransportProtocol = is_string($data['networkTransportProtocol']) ? CallRecordsNetworkTransportProtocol::tryFrom($data['networkTransportProtocol']) : $data['networkTransportProtocol'];
        }
        if (isset($data['port'])) {
            $this->port = is_numeric($data['port']) ? (float)$data['port'] : $data['port'];
        }
        if (isset($data['receivedQualityEventRatio'])) {
            $this->receivedQualityEventRatio = is_numeric($data['receivedQualityEventRatio']) ? (float)$data['receivedQualityEventRatio'] : $data['receivedQualityEventRatio'];
        }
        if (isset($data['reflexiveIPAddress'])) {
            $this->reflexiveIPAddress = $data['reflexiveIPAddress'];
        }
        if (isset($data['relayIPAddress'])) {
            $this->relayIPAddress = $data['relayIPAddress'];
        }
        if (isset($data['relayPort'])) {
            $this->relayPort = is_numeric($data['relayPort']) ? (float)$data['relayPort'] : $data['relayPort'];
        }
        if (isset($data['sentQualityEventRatio'])) {
            $this->sentQualityEventRatio = is_numeric($data['sentQualityEventRatio']) ? (float)$data['sentQualityEventRatio'] : $data['sentQualityEventRatio'];
        }
        if (isset($data['subnet'])) {
            $this->subnet = $data['subnet'];
        }
        if (isset($data['traceRouteHops'])) {
            $this->traceRouteHops = $data['traceRouteHops'];
        }
        if (isset($data['wifiBand'])) {
            $this->wifiBand = is_string($data['wifiBand']) ? CallRecordsWifiBand::tryFrom($data['wifiBand']) : $data['wifiBand'];
        }
        if (isset($data['wifiBatteryCharge'])) {
            $this->wifiBatteryCharge = is_numeric($data['wifiBatteryCharge']) ? (float)$data['wifiBatteryCharge'] : $data['wifiBatteryCharge'];
        }
        if (isset($data['wifiChannel'])) {
            $this->wifiChannel = is_numeric($data['wifiChannel']) ? (float)$data['wifiChannel'] : $data['wifiChannel'];
        }
        if (isset($data['wifiMicrosoftDriver'])) {
            $this->wifiMicrosoftDriver = $data['wifiMicrosoftDriver'];
        }
        if (isset($data['wifiMicrosoftDriverVersion'])) {
            $this->wifiMicrosoftDriverVersion = $data['wifiMicrosoftDriverVersion'];
        }
        if (isset($data['wifiRadioType'])) {
            $this->wifiRadioType = is_string($data['wifiRadioType']) ? CallRecordsWifiRadioType::tryFrom($data['wifiRadioType']) : $data['wifiRadioType'];
        }
        if (isset($data['wifiSignalStrength'])) {
            $this->wifiSignalStrength = is_numeric($data['wifiSignalStrength']) ? (float)$data['wifiSignalStrength'] : $data['wifiSignalStrength'];
        }
        if (isset($data['wifiVendorDriver'])) {
            $this->wifiVendorDriver = $data['wifiVendorDriver'];
        }
        if (isset($data['wifiVendorDriverVersion'])) {
            $this->wifiVendorDriverVersion = $data['wifiVendorDriverVersion'];
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
