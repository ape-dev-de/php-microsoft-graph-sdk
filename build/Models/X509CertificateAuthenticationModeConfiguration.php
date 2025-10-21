<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateAuthenticationModeConfiguration
 */
class X509CertificateAuthenticationModeConfiguration
{
    public function __construct(
        /** Rules are configured in addition to the authentication mode to bind a specific x509CertificateRuleType to an x509CertificateAuthenticationMode. For example, bind the policyOID with identifier 1.32.132.343 to x509CertificateMultiFactor authentication mode. */
        public array $rules = [],
        /** The type of strong authentication mode. The possible values are: x509CertificateSingleFactor, x509CertificateMultiFactor, unknownFutureValue. */
        public ?string $x509CertificateAuthenticationDefaultMode = null,
        /**  */
        public ?string $x509CertificateDefaultRequiredAffinityLevel = null
    ) {}
}
