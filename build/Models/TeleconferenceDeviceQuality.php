<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeleconferenceDeviceQuality
 */
class TeleconferenceDeviceQuality
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** A unique identifier for all  the participant calls in a conference or a unique identifier for two participant calls in P2P call. This needs to be copied over from Microsoft.Graph.Call.CallChainId. */
    public ?string $callChainId = null;

    /** A geo-region where the service is deployed, such as ProdNoam. */
    public ?string $cloudServiceDeploymentEnvironment = null;

    /** A unique deployment identifier assigned by Azure. */
    public ?string $cloudServiceDeploymentId = null;

    /** The Azure deployed cloud service instance name, such as FrontEndIN3. */
    public ?string $cloudServiceInstanceName = null;

    /** The Azure deployed cloud service name, such as contoso.cloudapp.net. */
    public ?string $cloudServiceName = null;

    /** Any additional description, such as VTC Bldg 30/21. */
    public ?string $deviceDescription = null;

    /** The user media agent name, such as Cisco SX80. */
    public ?string $deviceName = null;

    /** A unique identifier for a specific media leg of a participant in a conference.  One participant can have multiple media leg identifiers if retargeting happens. CVI partner assigns this value. */
    public ?string $mediaLegId = null;

    /** 
     * The list of media qualities in a media session (call), such as audio quality, video quality, and/or screen sharing quality.
     * @var TeleconferenceDeviceMediaQuality[]
     */
    public array $mediaQualityList = [];

    /** A unique identifier for a specific participant in a conference. The CVI partner needs to copy over Call.MyParticipantId to this property. */
    public ?string $participantId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['callChainId'])) {
            $this->callChainId = $data['callChainId'];
        }
        if (isset($data['cloudServiceDeploymentEnvironment'])) {
            $this->cloudServiceDeploymentEnvironment = $data['cloudServiceDeploymentEnvironment'];
        }
        if (isset($data['cloudServiceDeploymentId'])) {
            $this->cloudServiceDeploymentId = $data['cloudServiceDeploymentId'];
        }
        if (isset($data['cloudServiceInstanceName'])) {
            $this->cloudServiceInstanceName = $data['cloudServiceInstanceName'];
        }
        if (isset($data['cloudServiceName'])) {
            $this->cloudServiceName = $data['cloudServiceName'];
        }
        if (isset($data['deviceDescription'])) {
            $this->deviceDescription = $data['deviceDescription'];
        }
        if (isset($data['deviceName'])) {
            $this->deviceName = $data['deviceName'];
        }
        if (isset($data['mediaLegId'])) {
            $this->mediaLegId = $data['mediaLegId'];
        }
        if (isset($data['mediaQualityList'])) {
            $this->mediaQualityList = $data['mediaQualityList'];
        }
        if (isset($data['participantId'])) {
            $this->participantId = $data['participantId'];
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
