<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AiInteractionLink resources
 *
 * Available select fields:
 * - displayName
 * - linkType
 * - linkUrl
 */
class AiInteractionLinkQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LINK_TYPE = 'linkType';
    public const FIELD_LINK_URL = 'linkUrl';

    /**
     * Select specific AiInteractionLink properties
     * 
     * @param array<string> $select Use AiInteractionLinkQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
