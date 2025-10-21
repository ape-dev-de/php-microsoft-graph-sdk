<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExtensionProperty resources
 *
 * Available select fields:
 * - appDisplayName
 * - dataType
 * - isMultiValued
 * - isSyncedFromOnPremises
 * - name
 * - targetObjects
 */
class ExtensionPropertyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExtensionProperty
     */
    public const FIELD_APP_DISPLAY_NAME = 'appDisplayName';
    public const FIELD_DATA_TYPE = 'dataType';
    public const FIELD_IS_MULTI_VALUED = 'isMultiValued';
    public const FIELD_IS_SYNCED_FROM_ON_PREMISES = 'isSyncedFromOnPremises';
    public const FIELD_NAME = 'name';
    public const FIELD_TARGET_OBJECTS = 'targetObjects';

    /**
     * Select specific ExtensionProperty properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
