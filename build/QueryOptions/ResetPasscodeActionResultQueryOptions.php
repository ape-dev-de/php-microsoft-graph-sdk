<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResetPasscodeActionResult resources
 *
 * Available select fields:
 */
class ResetPasscodeActionResultQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ResetPasscodeActionResult
     */

    /**
     * Select specific ResetPasscodeActionResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
