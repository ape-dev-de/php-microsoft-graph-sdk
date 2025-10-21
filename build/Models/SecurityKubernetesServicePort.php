<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesServicePort
 */
class SecurityKubernetesServicePort
{
    /**
     * The application protocol for this port.
     */
    private ?string $appProtocol;

    /**
     * The name of this port within the service.
     */
    private ?string $name;

    /**
     * The port on each node on which this service is exposed when the type is either NodePort or LoadBalancer.
     */
    private ?float $nodePort;

    /**
     * The port that this service exposes.
     */
    private ?float $port;

    /**
     * The protocol name. Possible values are: udp, tcp, sctp, unknownFutureValue.
     */
    private ?string $protocol;

    /**
     * The name or number of the port to access on the pods targeted by the service. The port number must be in the range 1 to 65535. The name must be an IANASVCNAME.
     */
    private ?string $targetPort;


    public function getAppProtocol(): ?string
    {
        return $this->appProtocol;
    }

    public function setAppProtocol(?string $appProtocol): self
    {
        $this->appProtocol = $appProtocol;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getNodePort(): ?float
    {
        return $this->nodePort;
    }

    public function setNodePort(?float $nodePort): self
    {
        $this->nodePort = $nodePort;
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

    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    public function setProtocol(?string $protocol): self
    {
        $this->protocol = $protocol;
        return $this;
    }

    public function getTargetPort(): ?string
    {
        return $this->targetPort;
    }

    public function setTargetPort(?string $targetPort): self
    {
        $this->targetPort = $targetPort;
        return $this;
    }

}
