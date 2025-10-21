<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventRegistrationPredefinedQuestion resources
 *
 * Available select fields:
 */
class VirtualEventRegistrationPredefinedQuestionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventRegistrationPredefinedQuestion
     */

    /**
     * Select specific VirtualEventRegistrationPredefinedQuestion properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
