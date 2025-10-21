<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingCustomQuestion resources
 *
 * Available select fields:
 */
class BookingCustomQuestionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingCustomQuestion
     */

    /**
     * Select specific BookingCustomQuestion properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
