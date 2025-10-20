<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CertificationControl resources
 *
 * Available select fields:
 * - name
 * - url
 */
class CertificationControlQueryOptions extends QueryOptions
{
    public const FIELD_NAME = 'name';
    public const FIELD_URL = 'url';

    /**
     * Select specific CertificationControl properties
     * 
     * @param array<string> $select Use CertificationControlQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
