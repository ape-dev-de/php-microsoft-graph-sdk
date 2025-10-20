<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProfileCardProperty resources
 *
 * Available select fields:
 * - annotations
 * - directoryPropertyName
 */
class ProfileCardPropertyQueryOptions extends QueryOptions
{
    public const FIELD_ANNOTATIONS = 'annotations';
    public const FIELD_DIRECTORY_PROPERTY_NAME = 'directoryPropertyName';

    /**
     * Select specific ProfileCardProperty properties
     * 
     * @param array<string> $select Use ProfileCardPropertyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
