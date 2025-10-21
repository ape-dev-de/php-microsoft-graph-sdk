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
    /**
     * Available select fields for CertificationControl
     */
    public const FIELD_NAME = 'name';
    public const FIELD_URL = 'url';

    /**
     * Select specific CertificationControl properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
