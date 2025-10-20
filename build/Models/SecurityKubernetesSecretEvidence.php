<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesSecretEvidence
 */
class SecurityKubernetesSecretEvidence
{
    /**
     * The secret name.
     */
    private ?string $name;

    /**
     * The secret namespace.
     */
    private ?string $namespace;

    /**
     * The secret type can include both built-in types and custom ones. Examples of built-in types are: Opaque, kubernetes.io/service-account-token, kubernetes.io/dockercfg, kubernetes.io/dockerconfigjson, kubernetes.io/basic-auth, kubernetes.io/ssh-auth, kubernetes.io/tls, bootstrap.kubernetes.io/token.
     */
    private ?string $secretType;

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

    public function getSecretType(): ?string
    {
        return $this->secretType;
    }

    public function setSecretType(?string $secretType): self
    {
        $this->secretType = $secretType;
        return $this;
    }

}
