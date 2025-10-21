<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CertificateAuthority
 */
class CertificateAuthority
{
    public function __construct(
        /** Required. The base64 encoded string representing the public certificate. */
        public ?string $certificate = null,
        /** The URL of the certificate revocation list. */
        public ?string $certificateRevocationListUrl = null,
        /** The URL contains the list of all revoked certificates since the last time a full certificate revocaton list was created. */
        public ?string $deltaCertificateRevocationListUrl = null,
        /** Required. true if the trusted certificate is a root authority, false if the trusted certificate is an intermediate authority. */
        public ?bool $isRootAuthority = null,
        /** The issuer of the certificate, calculated from the certificate value. Read-only. */
        public ?string $issuer = null,
        /** The subject key identifier of the certificate, calculated from the certificate value. Read-only. */
        public ?string $issuerSki = null
    ) {}
}
