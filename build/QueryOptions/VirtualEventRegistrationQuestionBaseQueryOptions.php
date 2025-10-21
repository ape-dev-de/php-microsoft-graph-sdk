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
    /**
     * Available select fields for VirtualEventRegistrationQuestionBase
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_REQUIRED = 'isRequired';

    /**
     * Select specific VirtualEventRegistrationQuestionBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
