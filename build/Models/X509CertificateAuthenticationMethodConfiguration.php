<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateAuthenticationMethodConfiguration
 */
class X509CertificateAuthenticationMethodConfiguration
{
    public function __construct(
        /** Defines strong authentication configurations. This configuration includes the default authentication mode and the different rules for strong authentication bindings. */
        public ?string $authenticationModeConfiguration = null,
        /** Defines fields in the X.509 certificate that map to attributes of the Microsoft Entra user object in order to bind the certificate to the user. The priority of the object determines the order in which the binding is carried out. The first binding that matches will be used and the rest ignored. */
        public array $certificateUserBindings = [],
        /**  */
        public ?string $crlValidationConfiguration = null,
        /** @var string[] A collection of groups that are enabled to use the authentication method. */
        public array $includeTargets = []
    ) {}
}
