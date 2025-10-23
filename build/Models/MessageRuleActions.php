<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MessageRuleActions
 */
class MessageRuleActions
{
    /** 
     * A list of categories to be assigned to a message.
     * @var string[]
     */
    public array $assignCategories = [];

    /** The ID of a folder that a message is to be copied to. */
    public ?string $copyToFolder = null;

    /** Indicates whether a message should be moved to the Deleted Items folder. */
    public ?bool $delete = null;

    /** 
     * The email addresses of the recipients to which a message should be forwarded as an attachment.
     * @var Recipient[]
     */
    public array $forwardAsAttachmentTo = [];

    /** 
     * The email addresses of the recipients to which a message should be forwarded.
     * @var Recipient[]
     */
    public array $forwardTo = [];

    /** Indicates whether a message should be marked as read. */
    public ?bool $markAsRead = null;

    /** 
     * Sets the importance of the message, which can be: low, normal, high.
     * @var Importance|\stdClass|null
     */
    public mixed $markImportance = null;

    /** The ID of the folder that a message will be moved to. */
    public ?string $moveToFolder = null;

    /** Indicates whether a message should be permanently deleted and not saved to the Deleted Items folder. */
    public ?bool $permanentDelete = null;

    /** 
     * The email addresses to which a message should be redirected.
     * @var Recipient[]
     */
    public array $redirectTo = [];

    /** Indicates whether subsequent rules should be evaluated. */
    public ?bool $stopProcessingRules = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['assignCategories'])) {
            $this->assignCategories = $data['assignCategories'];
        }
        if (isset($data['copyToFolder'])) {
            $this->copyToFolder = $data['copyToFolder'];
        }
        if (isset($data['delete'])) {
            $this->delete = $data['delete'];
        }
        if (isset($data['forwardAsAttachmentTo'])) {
            $this->forwardAsAttachmentTo = $data['forwardAsAttachmentTo'];
        }
        if (isset($data['forwardTo'])) {
            $this->forwardTo = $data['forwardTo'];
        }
        if (isset($data['markAsRead'])) {
            $this->markAsRead = $data['markAsRead'];
        }
        if (isset($data['markImportance'])) {
            $this->markImportance = is_array($data['markImportance']) ? new Importance($data['markImportance']) : $data['markImportance'];
        }
        if (isset($data['moveToFolder'])) {
            $this->moveToFolder = $data['moveToFolder'];
        }
        if (isset($data['permanentDelete'])) {
            $this->permanentDelete = $data['permanentDelete'];
        }
        if (isset($data['redirectTo'])) {
            $this->redirectTo = $data['redirectTo'];
        }
        if (isset($data['stopProcessingRules'])) {
            $this->stopProcessingRules = $data['stopProcessingRules'];
        }
    }
}
