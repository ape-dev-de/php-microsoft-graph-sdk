<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RequiredResourceAccess resources
 *
 * Available select fields:
 * - resourceAccess
 * - resourceAppId
 */
class RequiredResourceAccessQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RequiredResourceAccess
     */
    public const FIELD_RESOURCE_ACCESS = 'resourceAccess';
    public const FIELD_RESOURCE_APP_ID = 'resourceAppId';

    /**
     * Select specific RequiredResourceAccess properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
