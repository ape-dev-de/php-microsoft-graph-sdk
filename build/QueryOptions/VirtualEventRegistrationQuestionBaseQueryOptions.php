<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventRegistrationQuestionBase resources
 *
 * Available select fields:
 * - displayName
 * - isRequired
 */
class VirtualEventRegistrationQuestionBaseQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_REQUIRED = 'isRequired';

    /**
     * Select specific VirtualEventRegistrationQuestionBase properties
     * 
     * @param array<string> $select Use VirtualEventRegistrationQuestionBaseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
