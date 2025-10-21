<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventRegistrationPredefinedQuestionLabel resources
 *
 * Available select fields:
 */
class VirtualEventRegistrationPredefinedQuestionLabelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventRegistrationPredefinedQuestionLabel
     */

    /**
     * Select specific VirtualEventRegistrationPredefinedQuestionLabel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
