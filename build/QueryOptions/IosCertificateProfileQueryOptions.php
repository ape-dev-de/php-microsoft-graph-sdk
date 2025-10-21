<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosCertificateProfile resources
 *
 * Available select fields:
 */
class IosCertificateProfileQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosCertificateProfile
     */

    /**
     * Select specific IosCertificateProfile properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
