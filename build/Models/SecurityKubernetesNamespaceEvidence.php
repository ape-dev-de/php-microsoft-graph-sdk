<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesNamespaceEvidence
 */
class SecurityKubernetesNamespaceEvidence
{
    /**
     * The namespace cluster.
     */
    private ?string $cluster;

    /**
     * The labels for the Kubernetes pod.
     */
    private ?string $labels;

    /**
     * The namespace name.
     */
    private ?string $name;


    public function getCluster(): ?string
    {
        return $this->cluster;
    }

    public function setCluster(?string $cluster): self
    {
        $this->cluster = $cluster;
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

}
