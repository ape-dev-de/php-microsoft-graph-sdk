<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for X509CertificateCRLValidationConfiguration resources
 *
 * Available select fields:
 * - exemptedCertificateAuthoritiesSubjectKeyIdentifiers
 * - state
 */
class X509CertificateCRLValidationConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_EXEMPTED_CERTIFICATE_AUTHORITIES_SUBJECT_KEY_IDENTIFIERS = 'exemptedCertificateAuthoritiesSubjectKeyIdentifiers';
    public const FIELD_STATE = 'state';

    /**
     * Select specific X509CertificateCRLValidationConfiguration properties
     * 
     * @param array<string> $select Use X509CertificateCRLValidationConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
