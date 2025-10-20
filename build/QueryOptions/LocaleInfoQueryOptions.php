<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LocaleInfo resources
 *
 * Available select fields:
 * - displayName
 * - locale
 */
class LocaleInfoQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LOCALE = 'locale';

    /**
     * Select specific LocaleInfo properties
     * 
     * @param array<string> $select Use LocaleInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
