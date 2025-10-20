<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkActivityTopic resources
 *
 * Available select fields:
 * - source
 * - value
 * - webUrl
 */
class TeamworkActivityTopicQueryOptions extends QueryOptions
{
    public const FIELD_SOURCE = 'source';
    public const FIELD_VALUE = 'value';
    public const FIELD_WEB_URL = 'webUrl';

    /**
     * Select specific TeamworkActivityTopic properties
     * 
     * @param array<string> $select Use TeamworkActivityTopicQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
