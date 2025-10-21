<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SocialIdentitySource resources
 *
 * Available select fields:
 * - displayName
 * - socialIdentitySourceType
 */
class SocialIdentitySourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SocialIdentitySource
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_SOCIAL_IDENTITY_SOURCE_TYPE = 'socialIdentitySourceType';

    /**
     * Select specific SocialIdentitySource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
