<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageAttachment
 */
class ChatMessageAttachment
{
    public function __construct(
        /** Read-only. The unique ID of the attachment. */
        public ?string $id = null,
        /** The content of the attachment. If the attachment is a rich card, set the property to the rich card object. This property and contentUrl are mutually exclusive. */
        public ?string $content = null,
        /** The media type of the content attachment. The possible values are: reference: The attachment is a link to another file. Populate the contentURL with the link to the object.forwardedMessageReference: The attachment is a reference to a forwarded message. Populate the content with the original message context.Any contentType that is supported by the Bot Framework''s Attachment object.application/vnd.microsoft.card.codesnippet: A code snippet. application/vnd.microsoft.card.announcement: An announcement header. */
        public ?string $contentType = null,
        /** The URL for the content of the attachment. */
        public ?string $contentUrl = null,
        /** The name of the attachment. */
        public ?string $name = null,
        /** The ID of the Teams app that is associated with the attachment. The property is used to attribute a Teams message card to the specified app. */
        public ?string $teamsAppId = null,
        /** The URL to a thumbnail image that the channel can use if it supports using an alternative, smaller form of content or contentUrl. For example, if you set contentType to application/word and set contentUrl to the location of the Word document, you might include a thumbnail image that represents the document. The channel could display the thumbnail image instead of the document. When the user selects the image, the channel would open the document. */
        public ?string $thumbnailUrl = null
    ) {}
}
