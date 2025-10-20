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
    public const FIELD_USER_ACTION = 'userAction';

    /**
     * Select specific UserActionContext properties
     * 
     * @param array<string> $select Use UserActionContextQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
