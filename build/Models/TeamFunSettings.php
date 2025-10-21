<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamFunSettings
 */
class TeamFunSettings
{
    public function __construct(
        /** If set to true, enables users to include custom memes. */
        public ?bool $allowCustomMemes = null,
        /** If set to true, enables Giphy use. */
        public ?bool $allowGiphy = null,
        /** If set to true, enables users to include stickers and memes. */
        public ?bool $allowStickersAndMemes = null,
        /** Giphy content rating. Possible values are: moderate, strict. */
        public ?string $giphyContentRating = null
    ) {}
}
