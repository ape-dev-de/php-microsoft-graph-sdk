<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DisplayNameLocalization resources
 *
 * Available select fields:
 * - displayName
 * - languageTag
 */
class DisplayNameLocalizationQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LANGUAGE_TAG = 'languageTag';

    /**
     * Select specific DisplayNameLocalization properties
     * 
     * @param array<string> $select Use DisplayNameLocalizationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
