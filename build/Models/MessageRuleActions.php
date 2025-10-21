<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MessageRuleActions
 */
class MessageRuleActions
{
    public function __construct(
        /** @var string[] A list of categories to be assigned to a message. */
        public array $assignCategories = [],
        /** The ID of a folder that a message is to be copied to. */
        public ?string $copyToFolder = null,
        /** Indicates whether a message should be moved to the Deleted Items folder. */
        public ?bool $delete = null,
        /** The email addresses of the recipients to which a message should be forwarded as an attachment. */
        public array $forwardAsAttachmentTo = [],
        /** The email addresses of the recipients to which a message should be forwarded. */
        public array $forwardTo = [],
        /** Indicates whether a message should be marked as read. */
        public ?bool $markAsRead = null,
        /** Sets the importance of the message, which can be: low, normal, high. */
        public ?Importance $markImportance = null,
        /** The ID of the folder that a message will be moved to. */
        public ?string $moveToFolder = null,
        /** Indicates whether a message should be permanently deleted and not saved to the Deleted Items folder. */
        public ?bool $permanentDelete = null,
        /** The email addresses to which a message should be redirected. */
        public array $redirectTo = [],
        /** Indicates whether subsequent rules should be evaluated. */
        public ?bool $stopProcessingRules = null
    ) {}
}
