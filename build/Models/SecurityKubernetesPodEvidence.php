<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesPodEvidence
 */
class SecurityKubernetesPodEvidence
{
    /**
     * The list of pod containers which are not init or ephemeral containers.
     */
    private array $containers = [];

    /**
     * The pod controller.
     */
    private ?string $controller;

    /**
     * The list of pod ephemeral containers.
     */
    private array $ephemeralContainers = [];

    /**
     * The list of pod init containers.
     */
    private array $initContainers = [];

    /**
     * The pod labels.
     */
    private ?string $labels;

    /**
     * The pod name.
     */
    private ?string $name;

    /**
     * The pod namespace.
     */
    private ?string $namespace;

    /**
     * The pod IP.
     */
    private ?string $podIp;

    /**
     * The pod service account.
     */
    private ?string $serviceAccount;

    public function getContainers(): array
    {
        return $this->containers;
    }

    public function setContainers(array $containers): self
    {
        $this->containers = $containers;
        return $this;
    }

    public function getController(): ?string
    {
        return $this->controller;
    }

    public function setController(?string $controller): self
    {
        $this->controller = $controller;
        return $this;
    }

    public function getEphemeralContainers(): array
    {
        return $this->ephemeralContainers;
    }

    public function setEphemeralContainers(array $ephemeralContainers): self
    {
        $this->ephemeralContainers = $ephemeralContainers;
        return $this;
    }

    public function getInitContainers(): array
    {
        return $this->initContainers;
    }

    public function setInitContainers(array $initContainers): self
    {
        $this->initContainers = $initContainers;
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

    public function getPodIp(): ?string
    {
        return $this->podIp;
    }

    public function setPodIp(?string $podIp): self
    {
        $this->podIp = $podIp;
        return $this;
    }

    public function getServiceAccount(): ?string
    {
        return $this->serviceAccount;
    }

    public function setServiceAccount(?string $serviceAccount): self
    {
        $this->serviceAccount = $serviceAccount;
        return $this;
    }

}
