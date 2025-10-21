<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AnswerInputType resources
 *
 * Available select fields:
 */
class AnswerInputTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AnswerInputType
     */

    /**
     * Select specific AnswerInputType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
