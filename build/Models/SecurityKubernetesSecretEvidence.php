<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesSecretEvidence
 */
class SecurityKubernetesSecretEvidence
{
    public function __construct(
        /** The secret name. */
        public ?string $name = null,
        /** The secret namespace. */
        public ?string $namespace = null,
        /** The secret type can include both built-in types and custom ones. Examples of built-in types are: Opaque, kubernetes.io/service-account-token, kubernetes.io/dockercfg, kubernetes.io/dockerconfigjson, kubernetes.io/basic-auth, kubernetes.io/ssh-auth, kubernetes.io/tls, bootstrap.kubernetes.io/token. */
        public ?string $secretType = null
    ) {}
}
