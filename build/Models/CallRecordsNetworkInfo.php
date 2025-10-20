<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsNetworkInfo
 */
class CallRecordsNetworkInfo
{
    /**
     * Fraction of the call that the media endpoint detected the available bandwidth or bandwidth policy was low enough to cause poor quality of the audio sent.
     */
    private ?string $bandwidthLowEventRatio;

    /**
     * The wireless LAN basic service set identifier of the media endpoint used to connect to the network. This property isn't available if the user disables precise location sharing in their operating system or Microsoft Teams app settings.
     */
    private ?string $basicServiceSetIdentifier;

    /**
     */
    private ?string $connectionType;

    /**
     * Fraction of the call that the media endpoint detected the network delay was significant enough to impact the ability to have real-time two-way communication.
     */
    private ?string $delayEventRatio;

    /**
     * DNS suffix associated with the network adapter of the media endpoint.
     */
    private ?string $dnsSuffix;

    /**
     * IP address of the media endpoint.
     */
    private ?string $ipAddress;

    /**
     * Link speed in bits per second reported by the network adapter used by the media endpoint.
     */
    private ?float $linkSpeed;

    /**
     * The media access control (MAC) address of the media endpoint's network device. This value may be missing or shown as 02:00:00:00:00:00 due to operating system privacy policies.
     */
    private ?string $macAddress;

    /**
     */
    private ?string $networkTransportProtocol;

    /**
     * Network port number used by media endpoint.
     */
    private ?float $port;

    /**
     * Fraction of the call that the media endpoint detected the network was causing poor quality of the audio received.
     */
    private ?string $receivedQualityEventRatio;

    /**
     * IP address of the media endpoint as seen by the media relay server. This is typically the public internet IP address associated to the endpoint.
     */
    private ?string $reflexiveIPAddress;

    /**
     * IP address of the media relay server allocated by the media endpoint.
     */
    private ?string $relayIPAddress;

    /**
     * Network port number allocated on the media relay server by the media endpoint.
     */
    private ?float $relayPort;

    /**
     * Fraction of the call that the media endpoint detected the network was causing poor quality of the audio sent.
     */
    private ?string $sentQualityEventRatio;

    /**
     * Subnet used for media stream by the media endpoint.
     */
    private ?string $subnet;

    /**
     * List of network trace route hops collected for this media stream.*
     */
    private array $traceRouteHops = [];

    /**
     */
    private ?string $wifiBand;

    /**
     * Estimated remaining battery charge in percentage reported by the media endpoint.
     */
    private ?float $wifiBatteryCharge;

    /**
     * WiFi channel used by the media endpoint.
     */
    private ?float $wifiChannel;

    /**
     * Name of the Microsoft WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint.
     */
    private ?string $wifiMicrosoftDriver;

    /**
     * Version of the Microsoft WiFi driver used by the media endpoint.
     */
    private ?string $wifiMicrosoftDriverVersion;

    /**
     */
    private ?string $wifiRadioType;

    /**
     * WiFi signal strength in percentage reported by the media endpoint.
     */
    private ?float $wifiSignalStrength;

    /**
     * Name of the WiFi driver used by the media endpoint. Value may be localized based on the language used by endpoint.
     */
    private ?string $wifiVendorDriver;

    /**
     * Version of the WiFi driver used by the media endpoint.
     */
    private ?string $wifiVendorDriverVersion;

    public function getBandwidthLowEventRatio(): ?string
    {
        return $this->bandwidthLowEventRatio;
    }

    public function setBandwidthLowEventRatio(?string $bandwidthLowEventRatio): self
    {
        $this->bandwidthLowEventRatio = $bandwidthLowEventRatio;
        return $this;
    }

    public function getBasicServiceSetIdentifier(): ?string
    {
        return $this->basicServiceSetIdentifier;
    }

    public function setBasicServiceSetIdentifier(?string $basicServiceSetIdentifier): self
    {
        $this->basicServiceSetIdentifier = $basicServiceSetIdentifier;
        return $this;
    }

    public function getConnectionType(): ?string
    {
        return $this->connectionType;
    }

    public function setConnectionType(?string $connectionType): self
    {
        $this->connectionType = $connectionType;
        return $this;
    }

    public function getDelayEventRatio(): ?string
    {
        return $this->delayEventRatio;
    }

    public function setDelayEventRatio(?string $delayEventRatio): self
    {
        $this->delayEventRatio = $delayEventRatio;
        return $this;
    }

    public function getDnsSuffix(): ?string
    {
        return $this->dnsSuffix;
    }

    public function setDnsSuffix(?string $dnsSuffix): self
    {
        $this->dnsSuffix = $dnsSuffix;
        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function getLinkSpeed(): ?float
    {
        return $this->linkSpeed;
    }

    public function setLinkSpeed(?float $linkSpeed): self
    {
        $this->linkSpeed = $linkSpeed;
        return $this;
    }

    public function getMacAddress(): ?string
    {
        return $this->macAddress;
    }

    public function setMacAddress(?string $macAddress): self
    {
        $this->macAddress = $macAddress;
        return $this;
    }

    public function getNetworkTransportProtocol(): ?string
    {
        return $this->networkTransportProtocol;
    }

    public function setNetworkTransportProtocol(?string $networkTransportProtocol): self
    {
        $this->networkTransportProtocol = $networkTransportProtocol;
        return $this;
    }

    public function getPort(): ?float
    {
        return $this->port;
    }

    public function setPort(?float $port): self
    {
        $this->port = $port;
        return $this;
    }

    public function getReceivedQualityEventRatio(): ?string
    {
        return $this->receivedQualityEventRatio;
    }

    public function setReceivedQualityEventRatio(?string $receivedQualityEventRatio): self
    {
        $this->receivedQualityEventRatio = $receivedQualityEventRatio;
        return $this;
    }

    public function getReflexiveIPAddress(): ?string
    {
        return $this->reflexiveIPAddress;
    }

    public function setReflexiveIPAddress(?string $reflexiveIPAddress): self
    {
        $this->reflexiveIPAddress = $reflexiveIPAddress;
        return $this;
    }

    public function getRelayIPAddress(): ?string
    {
        return $this->relayIPAddress;
    }

    public function setRelayIPAddress(?string $relayIPAddress): self
    {
        $this->relayIPAddress = $relayIPAddress;
        return $this;
    }

    public function getRelayPort(): ?float
    {
        return $this->relayPort;
    }

    public function setRelayPort(?float $relayPort): self
    {
        $this->relayPort = $relayPort;
        return $this;
    }

    public function getSentQualityEventRatio(): ?string
    {
        return $this->sentQualityEventRatio;
    }

    public function setSentQualityEventRatio(?string $sentQualityEventRatio): self
    {
        $this->sentQualityEventRatio = $sentQualityEventRatio;
        return $this;
    }

    public function getSubnet(): ?string
    {
        return $this->subnet;
    }

    public function setSubnet(?string $subnet): self
    {
        $this->subnet = $subnet;
        return $this;
    }

    public function getTraceRouteHops(): array
    {
        return $this->traceRouteHops;
    }

    public function setTraceRouteHops(array $traceRouteHops): self
    {
        $this->traceRouteHops = $traceRouteHops;
        return $this;
    }

    public function getWifiBand(): ?string
    {
        return $this->wifiBand;
    }

    public function setWifiBand(?string $wifiBand): self
    {
        $this->wifiBand = $wifiBand;
        return $this;
    }

    public function getWifiBatteryCharge(): ?float
    {
        return $this->wifiBatteryCharge;
    }

    public function setWifiBatteryCharge(?float $wifiBatteryCharge): self
    {
        $this->wifiBatteryCharge = $wifiBatteryCharge;
        return $this;
    }

    public function getWifiChannel(): ?float
    {
        return $this->wifiChannel;
    }

    public function setWifiChannel(?float $wifiChannel): self
    {
        $this->wifiChannel = $wifiChannel;
        return $this;
    }

    public function getWifiMicrosoftDriver(): ?string
    {
        return $this->wifiMicrosoftDriver;
    }

    public function setWifiMicrosoftDriver(?string $wifiMicrosoftDriver): self
    {
        $this->wifiMicrosoftDriver = $wifiMicrosoftDriver;
        return $this;
    }

    public function getWifiMicrosoftDriverVersion(): ?string
    {
        return $this->wifiMicrosoftDriverVersion;
    }

    public function setWifiMicrosoftDriverVersion(?string $wifiMicrosoftDriverVersion): self
    {
        $this->wifiMicrosoftDriverVersion = $wifiMicrosoftDriverVersion;
        return $this;
    }

    public function getWifiRadioType(): ?string
    {
        return $this->wifiRadioType;
    }

    public function setWifiRadioType(?string $wifiRadioType): self
    {
        $this->wifiRadioType = $wifiRadioType;
        return $this;
    }

    public function getWifiSignalStrength(): ?float
    {
        return $this->wifiSignalStrength;
    }

    public function setWifiSignalStrength(?float $wifiSignalStrength): self
    {
        $this->wifiSignalStrength = $wifiSignalStrength;
        return $this;
    }

    public function getWifiVendorDriver(): ?string
    {
        return $this->wifiVendorDriver;
    }

    public function setWifiVendorDriver(?string $wifiVendorDriver): self
    {
        $this->wifiVendorDriver = $wifiVendorDriver;
        return $this;
    }

    public function getWifiVendorDriverVersion(): ?string
    {
        return $this->wifiVendorDriverVersion;
    }

    public function setWifiVendorDriverVersion(?string $wifiVendorDriverVersion): self
    {
        $this->wifiVendorDriverVersion = $wifiVendorDriverVersion;
        return $this;
    }

}
