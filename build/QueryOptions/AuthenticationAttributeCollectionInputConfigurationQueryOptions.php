<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationAttributeCollectionInputConfiguration resources
 *
 * Available select fields:
 * - attribute
 * - defaultValue
 * - editable
 * - hidden
 * - inputType
 * - label
 * - options
 * - required
 * - validationRegEx
 * - writeToDirectory
 */
class AuthenticationAttributeCollectionInputConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationAttributeCollectionInputConfiguration
     */
    public const FIELD_ATTRIBUTE = 'attribute';
    public const FIELD_DEFAULT_VALUE = 'defaultValue';
    public const FIELD_EDITABLE = 'editable';
    public const FIELD_HIDDEN = 'hidden';
    public const FIELD_INPUT_TYPE = 'inputType';
    public const FIELD_LABEL = 'label';
    public const FIELD_OPTIONS = 'options';
    public const FIELD_REQUIRED = 'required';
    public const FIELD_VALIDATION_REG_EX = 'validationRegEx';
    public const FIELD_WRITE_TO_DIRECTORY = 'writeToDirectory';

    /**
     * Select specific AuthenticationAttributeCollectionInputConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
