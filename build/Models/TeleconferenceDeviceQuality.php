<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeleconferenceDeviceQuality
 */
class TeleconferenceDeviceQuality
{
    /**
     * A unique identifier for all  the participant calls in a conference or a unique identifier for two participant calls in P2P call. This needs to be copied over from Microsoft.Graph.Call.CallChainId.
     */
    private ?string $callChainId;

    /**
     * A geo-region where the service is deployed, such as ProdNoam.
     */
    private ?string $cloudServiceDeploymentEnvironment;

    /**
     * A unique deployment identifier assigned by Azure.
     */
    private ?string $cloudServiceDeploymentId;

    /**
     * The Azure deployed cloud service instance name, such as FrontEndIN3.
     */
    private ?string $cloudServiceInstanceName;

    /**
     * The Azure deployed cloud service name, such as contoso.cloudapp.net.
     */
    private ?string $cloudServiceName;

    /**
     * Any additional description, such as VTC Bldg 30/21.
     */
    private ?string $deviceDescription;

    /**
     * The user media agent name, such as Cisco SX80.
     */
    private ?string $deviceName;

    /**
     * A unique identifier for a specific media leg of a participant in a conference.  One participant can have multiple media leg identifiers if retargeting happens. CVI partner assigns this value.
     */
    private ?string $mediaLegId;

    /**
     * The list of media qualities in a media session (call), such as audio quality, video quality, and/or screen sharing quality.
     */
    private array $mediaQualityList = [];

    /**
     * A unique identifier for a specific participant in a conference. The CVI partner needs to copy over Call.MyParticipantId to this property.
     */
    private ?string $participantId;


    public function getCallChainId(): ?string
    {
        return $this->callChainId;
    }

    public function setCallChainId(?string $callChainId): self
    {
        $this->callChainId = $callChainId;
        return $this;
    }

    public function getCloudServiceDeploymentEnvironment(): ?string
    {
        return $this->cloudServiceDeploymentEnvironment;
    }

    public function setCloudServiceDeploymentEnvironment(?string $cloudServiceDeploymentEnvironment): self
    {
        $this->cloudServiceDeploymentEnvironment = $cloudServiceDeploymentEnvironment;
        return $this;
    }

    public function getCloudServiceDeploymentId(): ?string
    {
        return $this->cloudServiceDeploymentId;
    }

    public function setCloudServiceDeploymentId(?string $cloudServiceDeploymentId): self
    {
        $this->cloudServiceDeploymentId = $cloudServiceDeploymentId;
        return $this;
    }

    public function getCloudServiceInstanceName(): ?string
    {
        return $this->cloudServiceInstanceName;
    }

    public function setCloudServiceInstanceName(?string $cloudServiceInstanceName): self
    {
        $this->cloudServiceInstanceName = $cloudServiceInstanceName;
        return $this;
    }

    public function getCloudServiceName(): ?string
    {
        return $this->cloudServiceName;
    }

    public function setCloudServiceName(?string $cloudServiceName): self
    {
        $this->cloudServiceName = $cloudServiceName;
        return $this;
    }

    public function getDeviceDescription(): ?string
    {
        return $this->deviceDescription;
    }

    public function setDeviceDescription(?string $deviceDescription): self
    {
        $this->deviceDescription = $deviceDescription;
        return $this;
    }

    public function getDeviceName(): ?string
    {
        return $this->deviceName;
    }

    public function setDeviceName(?string $deviceName): self
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    public function getMediaLegId(): ?string
    {
        return $this->mediaLegId;
    }

    public function setMediaLegId(?string $mediaLegId): self
    {
        $this->mediaLegId = $mediaLegId;
        return $this;
    }

    public function getMediaQualityList(): array
    {
        return $this->mediaQualityList;
    }

    public function setMediaQualityList(array $mediaQualityList): self
    {
        $this->mediaQualityList = $mediaQualityList;
        return $this;
    }

    public function getParticipantId(): ?string
    {
        return $this->participantId;
    }

    public function setParticipantId(?string $participantId): self
    {
        $this->participantId = $participantId;
        return $this;
    }

}
