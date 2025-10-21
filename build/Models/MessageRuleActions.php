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
    private array $assignCategories = [];

    /**
     * The ID of a folder that a message is to be copied to.
     */
    private ?string $copyToFolder;

    /**
     * Indicates whether a message should be moved to the Deleted Items folder.
     */
    private ?bool $delete;

    /**
     * The email addresses of the recipients to which a message should be forwarded as an attachment.
     */
    private array $forwardAsAttachmentTo = [];

    /**
     * The email addresses of the recipients to which a message should be forwarded.
     */
    private array $forwardTo = [];

    /**
     * Indicates whether a message should be marked as read.
     */
    private ?bool $markAsRead;

    /**
     * Sets the importance of the message, which can be: low, normal, high.
     */
    private ?string $markImportance;

    /**
     * The ID of the folder that a message will be moved to.
     */
    private ?string $moveToFolder;

    /**
     * Indicates whether a message should be permanently deleted and not saved to the Deleted Items folder.
     */
    private ?bool $permanentDelete;

    /**
     * The email addresses to which a message should be redirected.
     */
    private array $redirectTo = [];

    /**
     * Indicates whether subsequent rules should be evaluated.
     */
    private ?string $stopProcessingRules;


    /**
     * @return string[]
     */
    public function getAssignCategories(): array
    {
        return $this->assignCategories;
    }

    /**
     * @param string[] $assignCategories
     */
    public function setAssignCategories(array $assignCategories): self
    {
        $this->assignCategories = $assignCategories;
        return $this;
    }

    public function getCopyToFolder(): ?string
    {
        return $this->copyToFolder;
    }

    public function setCopyToFolder(?string $copyToFolder): self
    {
        $this->copyToFolder = $copyToFolder;
        return $this;
    }

    public function getDelete(): ?bool
    {
        return $this->delete;
    }

    public function setDelete(?bool $delete): self
    {
        $this->delete = $delete;
        return $this;
    }

    public function getForwardAsAttachmentTo(): array
    {
        return $this->forwardAsAttachmentTo;
    }

    public function setForwardAsAttachmentTo(array $forwardAsAttachmentTo): self
    {
        $this->forwardAsAttachmentTo = $forwardAsAttachmentTo;
        return $this;
    }

    public function getForwardTo(): array
    {
        return $this->forwardTo;
    }

    public function setForwardTo(array $forwardTo): self
    {
        $this->forwardTo = $forwardTo;
        return $this;
    }

    public function getMarkAsRead(): ?bool
    {
        return $this->markAsRead;
    }

    public function setMarkAsRead(?bool $markAsRead): self
    {
        $this->markAsRead = $markAsRead;
        return $this;
    }

    public function getMarkImportance(): ?string
    {
        return $this->markImportance;
    }

    public function setMarkImportance(?string $markImportance): self
    {
        $this->markImportance = $markImportance;
        return $this;
    }

    public function getMoveToFolder(): ?string
    {
        return $this->moveToFolder;
    }

    public function setMoveToFolder(?string $moveToFolder): self
    {
        $this->moveToFolder = $moveToFolder;
        return $this;
    }

    public function getPermanentDelete(): ?bool
    {
        return $this->permanentDelete;
    }

    public function setPermanentDelete(?bool $permanentDelete): self
    {
        $this->permanentDelete = $permanentDelete;
        return $this;
    }

    public function getRedirectTo(): array
    {
        return $this->redirectTo;
    }

    public function setRedirectTo(array $redirectTo): self
    {
        $this->redirectTo = $redirectTo;
        return $this;
    }

    public function getStopProcessingRules(): ?string
    {
        return $this->stopProcessingRules;
    }

    public function setStopProcessingRules(?string $stopProcessingRules): self
    {
        $this->stopProcessingRules = $stopProcessingRules;
        return $this;
    }

}
