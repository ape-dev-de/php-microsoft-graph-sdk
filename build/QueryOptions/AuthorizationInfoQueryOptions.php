<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthorizationInfo resources
 *
 * Available select fields:
 * - certificateUserIds
 */
class AuthorizationInfoQueryOptions extends QueryOptions
{
    public const FIELD_CERTIFICATE_USER_IDS = 'certificateUserIds';

    /**
     * Select specific AuthorizationInfo properties
     * 
     * @param array<string> $select Use AuthorizationInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
