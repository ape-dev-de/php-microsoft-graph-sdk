<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalEmailOtpState resources
 *
 * Available select fields:
 */
class ExternalEmailOtpStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalEmailOtpState
     */

    /**
     * Select specific ExternalEmailOtpState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
