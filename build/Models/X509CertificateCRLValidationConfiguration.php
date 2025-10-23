<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateCRLValidationConfiguration
 */
class X509CertificateCRLValidationConfiguration
{
    /** 
     * Represents the SKIs of CAs that should be excluded from the valid CRL distribution point check. SKI is represented as a hexadecimal string.
     * @var string[]
     */
    public array $exemptedCertificateAuthoritiesSubjectKeyIdentifiers = [];

    /**  */
    public ?X509CertificateCRLValidationConfigurationState $state = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['exemptedCertificateAuthoritiesSubjectKeyIdentifiers'])) {
            $this->exemptedCertificateAuthoritiesSubjectKeyIdentifiers = $data['exemptedCertificateAuthoritiesSubjectKeyIdentifiers'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
    }
}
