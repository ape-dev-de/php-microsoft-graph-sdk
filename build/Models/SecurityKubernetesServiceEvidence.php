<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesServiceEvidence
 */
class SecurityKubernetesServiceEvidence
{
    /**
     * The service cluster IP.
     */
    private ?string $clusterIP;

    /**
     * The service external IPs.
     */
    private array $externalIPs = [];

    /**
     * The service labels.
     */
    private ?string $labels;

    /**
     * The service name.
     */
    private ?string $name;

    /**
     * The service namespace.
     */
    private ?string $namespace;

    /**
     * The service selector.
     */
    private ?string $selector;

    /**
     * The list of service ports.
     */
    private array $servicePorts = [];

    /**
     */
    private ?string $serviceType;


    public function getClusterIP(): ?string
    {
        return $this->clusterIP;
    }

    public function setClusterIP(?string $clusterIP): self
    {
        $this->clusterIP = $clusterIP;
        return $this;
    }

    public function getExternalIPs(): array
    {
        return $this->externalIPs;
    }

    public function setExternalIPs(array $externalIPs): self
    {
        $this->externalIPs = $externalIPs;
        return $this;
    }

    public function getLabels(): ?string
    {
        return $this->labels;
    }

    public function setLabels(?string $labels): self
    {
        $this->labels = $labels;
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

    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    public function setNamespace(?string $namespace): self
    {
        $this->namespace = $namespace;
        return $this;
    }

    public function getSelector(): ?string
    {
        return $this->selector;
    }

    public function setSelector(?string $selector): self
    {
        $this->selector = $selector;
        return $this;
    }

    public function getServicePorts(): array
    {
        return $this->servicePorts;
    }

    public function setServicePorts(array $servicePorts): self
    {
        $this->servicePorts = $servicePorts;
        return $this;
    }

    public function getServiceType(): ?string
    {
        return $this->serviceType;
    }

    public function setServiceType(?string $serviceType): self
    {
        $this->serviceType = $serviceType;
        return $this;
    }

}
