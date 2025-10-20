<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesClusterEvidence
 */
class SecurityKubernetesClusterEvidence
{
    /**
     * The cloud identifier of the cluster. Can be either an amazonResourceEvidence, azureResourceEvidence, or googleCloudResourceEvidence object.
     */
    private ?string $cloudResource;

    /**
     * The distribution type of the cluster.
     */
    private ?string $distribution;

    /**
     * The cluster name.
     */
    private ?string $name;

    /**
     * The platform the cluster runs on. Possible values are: unknown, aks, eks, gke, arc, unknownFutureValue.
     */
    private ?string $platform;

    /**
     * The kubernetes version of the cluster.
     */
    private ?string $version;

    public function getCloudResource(): ?string
    {
        return $this->cloudResource;
    }

    public function setCloudResource(?string $cloudResource): self
    {
        $this->cloudResource = $cloudResource;
        return $this;
    }

    public function getDistribution(): ?string
    {
        return $this->distribution;
    }

    public function setDistribution(?string $distribution): self
    {
        $this->distribution = $distribution;
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

    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

}
