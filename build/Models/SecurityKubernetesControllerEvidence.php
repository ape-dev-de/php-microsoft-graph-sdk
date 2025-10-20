<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesControllerEvidence
 */
class SecurityKubernetesControllerEvidence
{
    /**
     * The labels for the Kubernetes pod.
     */
    private ?string $labels;

    /**
     * The controller name.
     */
    private ?string $name;

    /**
     * The service account namespace.
     */
    private ?string $namespace;

    /**
     * The controller type.
     */
    private ?string $type;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
