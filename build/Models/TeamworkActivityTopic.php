<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkActivityTopic
 */
class TeamworkActivityTopic
{
    public function __construct(
        /** Type of source. Possible values are: entityUrl, text. For supported Microsoft Graph URLs, use entityUrl. For custom text, use text. */
        public ?TeamworkActivityTopicSource $source = null,
        /** The topic value. If the value of the source property is entityUrl, this must be a Microsoft Graph URL. If the value is text, this must be a plain text value. */
        public ?string $value = null,
        /** The link the user clicks when they select the notification. Optional when source is entityUrl; required when source is text. */
        public ?string $webUrl = null
    ) {}
}
