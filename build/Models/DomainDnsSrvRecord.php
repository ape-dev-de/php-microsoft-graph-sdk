<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainDnsSrvRecord
 */
class DomainDnsSrvRecord
{
    /**
     * Value to use when configuring the Target property of the SRV record at the DNS host.
     */
    private ?string $nameTarget;

    /**
     * Value to use when configuring the port property of the SRV record at the DNS host.
     */
    private ?float $port;

    /**
     * Value to use when configuring the priority property of the SRV record at the DNS host.
     */
    private ?float $priority;

    /**
     * Value to use when configuring the protocol property of the SRV record at the DNS host.
     */
    private ?string $protocol;

    /**
     * Value to use when configuring the service property of the SRV record at the DNS host.
     */
    private ?string $service;

    /**
     * Value to use when configuring the weight property of the SRV record at the DNS host.
     */
    private ?string $weight;

    public function getNameTarget(): ?string
    {
        return $this->nameTarget;
    }

    public function setNameTarget(?string $nameTarget): self
    {
        $this->nameTarget = $nameTarget;
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

    public function getPriority(): ?float
    {
        return $this->priority;
    }

    public function setPriority(?float $priority): self
    {
        $this->priority = $priority;
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

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(?string $service): self
    {
        $this->service = $service;
        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(?string $weight): self
    {
        $this->weight = $weight;
        return $this;
    }

}
