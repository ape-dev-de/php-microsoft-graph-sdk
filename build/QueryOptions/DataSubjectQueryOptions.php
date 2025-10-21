<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DataSubject resources
 *
 * Available select fields:
 * - email
 * - firstName
 * - lastName
 * - residency
 */
class DataSubjectQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DataSubject
     */
    public const FIELD_EMAIL = 'email';
    public const FIELD_FIRST_NAME = 'firstName';
    public const FIELD_LAST_NAME = 'lastName';
    public const FIELD_RESIDENCY = 'residency';

    /**
     * Select specific DataSubject properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
