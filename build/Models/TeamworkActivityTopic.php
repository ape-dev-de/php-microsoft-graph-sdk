<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkActivityTopic
 */
class TeamworkActivityTopic
{
    /** 
     * Type of source. Possible values are: entityUrl, text. For supported Microsoft Graph URLs, use entityUrl. For custom text, use text.
     * @var TeamworkActivityTopicSource|\stdClass|null
     */
    public mixed $source = null;

    /** The topic value. If the value of the source property is entityUrl, this must be a Microsoft Graph URL. If the value is text, this must be a plain text value. */
    public ?string $value = null;

    /** The link the user clicks when they select the notification. Optional when source is entityUrl; required when source is text. */
    public ?string $webUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['source'])) {
            $this->source = $data['source'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
        }
    }
}
