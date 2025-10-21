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
    /**
     * Available select fields for AuthorizationInfo
     */
    public const FIELD_CERTIFICATE_USER_IDS = 'certificateUserIds';

    /**
     * Select specific AuthorizationInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
