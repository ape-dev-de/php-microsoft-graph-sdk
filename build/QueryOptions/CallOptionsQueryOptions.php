<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallOptions resources
 *
 * Available select fields:
 * - hideBotAfterEscalation
 * - isContentSharingNotificationEnabled
 * - isDeltaRosterEnabled
 * - isInteractiveRosterEnabled
 */
class CallOptionsQueryOptions extends QueryOptions
{
    public const FIELD_HIDE_BOT_AFTER_ESCALATION = 'hideBotAfterEscalation';
    public const FIELD_IS_CONTENT_SHARING_NOTIFICATION_ENABLED = 'isContentSharingNotificationEnabled';
    public const FIELD_IS_DELTA_ROSTER_ENABLED = 'isDeltaRosterEnabled';
    public const FIELD_IS_INTERACTIVE_ROSTER_ENABLED = 'isInteractiveRosterEnabled';

    /**
     * Select specific CallOptions properties
     * 
     * @param array<string> $select Use CallOptionsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
