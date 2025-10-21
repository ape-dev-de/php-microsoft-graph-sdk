<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateCRLValidationConfiguration
 */
class X509CertificateCRLValidationConfiguration
{
    public function __construct(
        /** @var string[] Represents the SKIs of CAs that should be excluded from the valid CRL distribution point check. SKI is represented as a hexadecimal string. */
        public array $exemptedCertificateAuthoritiesSubjectKeyIdentifiers = [],
        /**  */
        public ?string $state = null
    ) {}
}
