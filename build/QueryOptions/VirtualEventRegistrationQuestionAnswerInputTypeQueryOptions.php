<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventRegistrationQuestionAnswerInputType resources
 *
 * Available select fields:
 */
class VirtualEventRegistrationQuestionAnswerInputTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventRegistrationQuestionAnswerInputType
     */

    /**
     * Select specific VirtualEventRegistrationQuestionAnswerInputType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
