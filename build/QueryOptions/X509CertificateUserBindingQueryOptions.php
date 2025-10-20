<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for X509CertificateUserBinding resources
 *
 * Available select fields:
 * - priority
 * - trustAffinityLevel
 * - userProperty
 * - x509CertificateField
 */
class X509CertificateUserBindingQueryOptions extends QueryOptions
{
    public const FIELD_PRIORITY = 'priority';
    public const FIELD_TRUST_AFFINITY_LEVEL = 'trustAffinityLevel';
    public const FIELD_USER_PROPERTY = 'userProperty';
    public const FIELD_X509CERTIFICATE_FIELD = 'x509CertificateField';

    /**
     * Select specific X509CertificateUserBinding properties
     * 
     * @param array<string> $select Use X509CertificateUserBindingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
