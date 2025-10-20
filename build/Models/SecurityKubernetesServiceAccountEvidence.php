<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesServiceAccountEvidence
 */
class SecurityKubernetesServiceAccountEvidence
{
    /**
     * The service account name.
     */
    private ?string $name;

    /**
     * The service account namespace.
     */
    private ?string $namespace;

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

}
