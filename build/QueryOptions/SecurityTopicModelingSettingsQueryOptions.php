<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityTopicModelingSettings resources
 *
 * Available select fields:
 * - dynamicallyAdjustTopicCount
 * - ignoreNumbers
 * - isEnabled
 * - topicCount
 */
class SecurityTopicModelingSettingsQueryOptions extends QueryOptions
{
    public const FIELD_DYNAMICALLY_ADJUST_TOPIC_COUNT = 'dynamicallyAdjustTopicCount';
    public const FIELD_IGNORE_NUMBERS = 'ignoreNumbers';
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_TOPIC_COUNT = 'topicCount';

    /**
     * Select specific SecurityTopicModelingSettings properties
     * 
     * @param array<string> $select Use SecurityTopicModelingSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
