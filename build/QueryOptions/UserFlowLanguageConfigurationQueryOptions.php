<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserFlowLanguageConfiguration resources
 *
 * Available select fields:
 * - displayName
 * - isEnabled
 * - defaultPages
 * - overridesPages
 */
class UserFlowLanguageConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_DEFAULT_PAGES = 'defaultPages';
    public const FIELD_OVERRIDES_PAGES = 'overridesPages';

    /**
     * Select specific UserFlowLanguageConfiguration properties
     * 
     * @param array<string> $select Use UserFlowLanguageConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
