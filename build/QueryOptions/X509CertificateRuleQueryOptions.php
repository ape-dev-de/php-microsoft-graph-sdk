<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for X509CertificateRule resources
 *
 * Available select fields:
 * - identifier
 * - issuerSubjectIdentifier
 * - policyOidIdentifier
 * - x509CertificateAuthenticationMode
 * - x509CertificateRequiredAffinityLevel
 * - x509CertificateRuleType
 */
class X509CertificateRuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for X509CertificateRule
     */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_ISSUER_SUBJECT_IDENTIFIER = 'issuerSubjectIdentifier';
    public const FIELD_POLICY_OID_IDENTIFIER = 'policyOidIdentifier';
    public const FIELD_X509CERTIFICATE_AUTHENTICATION_MODE = 'x509CertificateAuthenticationMode';
    public const FIELD_X509CERTIFICATE_REQUIRED_AFFINITY_LEVEL = 'x509CertificateRequiredAffinityLevel';
    public const FIELD_X509CERTIFICATE_RULE_TYPE = 'x509CertificateRuleType';

    /**
     * Select specific X509CertificateRule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
