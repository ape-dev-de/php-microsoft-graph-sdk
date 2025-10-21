<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateRule
 */
class X509CertificateRule
{
    public function __construct(
        /** The identifier of the X.509 certificate. Required. */
        public ?string $identifier = null,
        /**  */
        public ?string $issuerSubjectIdentifier = null,
        /**  */
        public ?string $policyOidIdentifier = null,
        /** The type of strong authentication mode. The possible values are: x509CertificateSingleFactor, x509CertificateMultiFactor, unknownFutureValue. Required. */
        public ?string $x509CertificateAuthenticationMode = null,
        /**  */
        public ?string $x509CertificateRequiredAffinityLevel = null,
        /** The type of the X.509 certificate mode configuration rule. The possible values are: issuerSubject, policyOID, unknownFutureValue. Required. */
        public ?string $x509CertificateRuleType = null
    ) {}
}
