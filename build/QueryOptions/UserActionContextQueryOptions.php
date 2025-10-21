<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserActionContext resources
 *
 * Available select fields:
 * - userAction
 */
class UserActionContextQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserActionContext
     */
    public const FIELD_USER_ACTION = 'userAction';

    /**
     * Select specific UserActionContext properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
