<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for X509CertificateUserBindingCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class X509CertificateUserBindingCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific X509CertificateUserBindingCollectionResponse properties
     * 
     * @param array<string> $select Use X509CertificateUserBindingCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
