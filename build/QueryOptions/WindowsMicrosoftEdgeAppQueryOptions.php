<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsMicrosoftEdgeApp resources
 *
 * Available select fields:
 * - channel
 * - displayLanguageLocale
 */
class WindowsMicrosoftEdgeAppQueryOptions extends QueryOptions
{
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_DISPLAY_LANGUAGE_LOCALE = 'displayLanguageLocale';

    /**
     * Select specific WindowsMicrosoftEdgeApp properties
     * 
     * @param array<string> $select Use WindowsMicrosoftEdgeAppQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
