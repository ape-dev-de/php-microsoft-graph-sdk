<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventRegistrationPredefinedQuestion resources
 *
 * Available select fields:
 * - label
 */
class VirtualEventRegistrationPredefinedQuestionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventRegistrationPredefinedQuestion
     */
    public const FIELD_LABEL = 'label';

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
