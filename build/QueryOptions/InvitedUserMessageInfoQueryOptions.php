<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InvitedUserMessageInfo resources
 *
 * Available select fields:
 * - ccRecipients
 * - customizedMessageBody
 * - messageLanguage
 */
class InvitedUserMessageInfoQueryOptions extends QueryOptions
{
    public const FIELD_CC_RECIPIENTS = 'ccRecipients';
    public const FIELD_CUSTOMIZED_MESSAGE_BODY = 'customizedMessageBody';
    public const FIELD_MESSAGE_LANGUAGE = 'messageLanguage';

    /**
     * Select specific InvitedUserMessageInfo properties
     * 
     * @param array<string> $select Use InvitedUserMessageInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
