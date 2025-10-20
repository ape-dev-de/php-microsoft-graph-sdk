<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageAttachment
 */
class ChatMessageAttachment
{
    /**
     * The content of the attachment. If the attachment is a rich card, set the property to the rich card object. This property and contentUrl are mutually exclusive.
     */
    private ?string $content;

    /**
     * The media type of the content attachment. The possible values are: reference: The attachment is a link to another file. Populate the contentURL with the link to the object.forwardedMessageReference: The attachment is a reference to a forwarded message. Populate the content with the original message context.Any contentType that is supported by the Bot Framework''s Attachment object.application/vnd.microsoft.card.codesnippet: A code snippet. application/vnd.microsoft.card.announcement: An announcement header.
     */
    private ?string $contentType;

    /**
     * The URL for the content of the attachment.
     */
    private ?string $contentUrl;

    /**
     * Read-only. The unique ID of the attachment.
     */
    private ?string $id;

    /**
     * The name of the attachment.
     */
    private ?string $name;

    /**
     * The ID of the Teams app that is associated with the attachment. The property is used to attribute a Teams message card to the specified app.
     */
    private ?string $teamsAppId;

    /**
     * The URL to a thumbnail image that the channel can use if it supports using an alternative, smaller form of content or contentUrl. For example, if you set contentType to application/word and set contentUrl to the location of the Word document, you might include a thumbnail image that represents the document. The channel could display the thumbnail image instead of the document. When the user selects the image, the channel would open the document.
     */
    private ?string $thumbnailUrl;

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function setContentType(?string $contentType): self
    {
        $this->contentType = $contentType;
        return $this;
    }

    public function getContentUrl(): ?string
    {
        return $this->contentUrl;
    }

    public function setContentUrl(?string $contentUrl): self
    {
        $this->contentUrl = $contentUrl;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getTeamsAppId(): ?string
    {
        return $this->teamsAppId;
    }

    public function setTeamsAppId(?string $teamsAppId): self
    {
        $this->teamsAppId = $teamsAppId;
        return $this;
    }

    public function getThumbnailUrl(): ?string
    {
        return $this->thumbnailUrl;
    }

    public function setThumbnailUrl(?string $thumbnailUrl): self
    {
        $this->thumbnailUrl = $thumbnailUrl;
        return $this;
    }

}
