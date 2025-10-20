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
    public const FIELD_RESOURCE_ACCESS = 'resourceAccess';
    public const FIELD_RESOURCE_APP_ID = 'resourceAppId';

    /**
     * Select specific RequiredResourceAccess properties
     * 
     * @param array<string> $select Use RequiredResourceAccessQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
