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
    public const FIELD_LABEL = 'label';

    /**
     * Select specific VirtualEventRegistrationPredefinedQuestion properties
     * 
     * @param array<string> $select Use VirtualEventRegistrationPredefinedQuestionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
