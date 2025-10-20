<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamFunSettings resources
 *
 * Available select fields:
 * - allowCustomMemes
 * - allowGiphy
 * - allowStickersAndMemes
 * - giphyContentRating
 */
class TeamFunSettingsQueryOptions extends QueryOptions
{
    public const FIELD_ALLOW_CUSTOM_MEMES = 'allowCustomMemes';
    public const FIELD_ALLOW_GIPHY = 'allowGiphy';
    public const FIELD_ALLOW_STICKERS_AND_MEMES = 'allowStickersAndMemes';
    public const FIELD_GIPHY_CONTENT_RATING = 'giphyContentRating';

    /**
     * Select specific TeamFunSettings properties
     * 
     * @param array<string> $select Use TeamFunSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
