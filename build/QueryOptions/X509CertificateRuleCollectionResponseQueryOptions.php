<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for X509CertificateRuleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class X509CertificateRuleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific X509CertificateRuleCollectionResponse properties
     * 
     * @param array<string> $select Use X509CertificateRuleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
