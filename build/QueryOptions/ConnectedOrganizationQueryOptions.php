<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConnectedOrganization resources
 *
 * Available select fields:
 * - createdDateTime
 * - description
 * - displayName
 * - identitySources
 * - modifiedDateTime
 * - state
 * - externalSponsors
 * - internalSponsors
 */
class ConnectedOrganizationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConnectedOrganization
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IDENTITY_SOURCES = 'identitySources';
    public const FIELD_MODIFIED_DATE_TIME = 'modifiedDateTime';
    public const FIELD_STATE = 'state';
    public const FIELD_EXTERNAL_SPONSORS = 'externalSponsors';
    public const FIELD_INTERNAL_SPONSORS = 'internalSponsors';

    /**
     * Select specific ConnectedOrganization properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
