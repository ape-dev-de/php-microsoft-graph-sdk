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
    /**
     * Available select fields for X509CertificateCRLValidationConfiguration
     */
    public const FIELD_EXEMPTED_CERTIFICATE_AUTHORITIES_SUBJECT_KEY_IDENTIFIERS = 'exemptedCertificateAuthoritiesSubjectKeyIdentifiers';
    public const FIELD_STATE = 'state';

    /**
     * Select specific X509CertificateCRLValidationConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
