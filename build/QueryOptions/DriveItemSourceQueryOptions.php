<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveItemSource resources
 *
 * Available select fields:
 * - application
 * - externalId
 */
class DriveItemSourceQueryOptions extends QueryOptions
{
    public const FIELD_APPLICATION = 'application';
    public const FIELD_EXTERNAL_ID = 'externalId';

    /**
     * Select specific DriveItemSource properties
     * 
     * @param array<string> $select Use DriveItemSourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
